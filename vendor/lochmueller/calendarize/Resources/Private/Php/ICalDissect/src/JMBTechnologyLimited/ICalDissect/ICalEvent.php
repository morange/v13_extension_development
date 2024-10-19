<?php
namespace JMBTechnologyLimited\ICalDissect;

/**
 *
 * @link https://github.com/JMB-Technology-Limited/ICalDissect
 * @license https://raw.github.com/JMB-Technology-Limited/ICalDissect/master/LICENSE.txt 3-clause BSD
 * @copyright (c) 2014, JMB Technology Limited, http://jmbtechnology.co.uk/
 * @author James Baster <james@jarofgreen.co.uk>
 */
class ICalEvent
{
    protected $timeZone;
    protected $timeZoneUTC;

    /**
     * Start, in UTC.
     * @var \DateTime **/
    protected $start;

    /**
     * End, in UTC.
     * @var \DateTime **/
    protected $end;


    protected $summary;

    protected $location;

    protected $description;

    protected $uid;

    protected $deleted = false;

    protected $url;

    protected $ical_rrule;

    protected $exdates = [];

    protected $geoLat;

    protected $geoLng;

    protected $raw = [];

    public function __construct(\DateTimeZone $timeZone = null)
    {
        $this->timeZoneUTC =  new \DateTimeZone('UTC');
        $this->timeZone = $timeZone ? $timeZone : $this->timeZoneUTC;
    }

    public function processLine($keyword, $value, $keywordProperties = '')
    {
        if ($keyword == 'UID') {
            $this->uid = $value;
        } elseif ($keyword == 'LOCATION') {
            $this->location = $value;
        } elseif ($keyword == 'SUMMARY') {
            $this->summary = $value;
        } elseif ($keyword == 'DESCRIPTION') {
            $this->description = $value;
        } elseif ($keyword == 'URL') {
            $this->url = $value;
        } elseif ($keyword == 'DTSTART') {
            $this->start = $this->parseDateTime($value, true, $keywordProperties);
        } elseif ($keyword == 'DTEND') {
            $this->end = $this->parseDateTime($value, false, $keywordProperties);
        } elseif ($keyword == 'METHOD' && $value == 'CANCEL') {
            $this->deleted = true;
        } elseif ($keyword == 'STATUS' && $value == 'CANCELLED') {
            $this->deleted = true;
        } elseif ($keyword == 'RRULE') {
            $rrule = [];
            foreach (explode(';', $value) as $rruleBit) {
                list($k, $v) = explode('=', $rruleBit, 2);
                $rrule[strtoupper($k)] = $v;
            }
            $this->ical_rrule = $rrule;
        } elseif ($keyword == 'EXDATE') {
            $this->exdates[] = new ICalExDate($value, $keywordProperties);
        } elseif ($keyword == 'GEO') {
            $bits = explode(';', $value);
            if (count($bits) == 2) {
                $this->geoLat = $bits[0];
                $this->geoLng = $bits[1];
            }
        }

        if (!isset($this->raw[strtoupper($keyword)])) {
            $this->raw[strtoupper($keyword)] = [];
        }
        $this->raw[strtoupper($keyword)][] = $value;
    }


    /*
     * Based on http://code.google.com/p/ics-parser/, MIT License
     * Changed for Timezones.
    **/
    protected function parseDateTime($value, $isStart, $keywordProperties)
    {
        // We should be doing something like this - if it's not UTC it's a floating time and we should look at pre-set timezone or parameter timezone.
        // https://tools.ietf.org/html/rfc5545#section-3.3.5
        $isUTC = substr($value, -1) == 'Z';

        $value = str_replace('Z', '', $value);
        $pattern  = '/([0-9]{4})';   // 1: YYYY
        $pattern .= '([0-9]{2})';    // 2: MM
        $pattern .= '([0-9]{2})';    // 3: DD

        $hasTimePart = false;
        if (strpos($value, 'T') > 1) {
            $value = str_replace('T', '', $value);
            $pattern .= '([0-9]{0,2})';  // 4: HH
            $pattern .= '([0-9]{0,2})';  // 5: MM
            $pattern .= '([0-9]{0,2})/'; // 6: SS
            $hasTimePart = true;
        } else {
            $pattern .= '/';
        }
        preg_match($pattern, $value, $date);

        // Unix timestamp can't represent dates before 1970
        if ($date[1] <= 1970) {
            return null;
        }
        // Unix timestamps after 03:14:07 UTC 2038-01-19 might cause an overflow
        // if 32 bit integers are used.

        $out = new \DateTime('', $this->timeZoneUTC);
        if (!$isUTC) {
            // Is Timezone in Keyword Properties?
            if (substr($keywordProperties, 0, 5) == 'TZID=') {
                try {
                    $timeZone = new \DateTimeZone(strtok(substr($keywordProperties, 5), ';'));
                    $out->setTimezone($timeZone);
                } catch (\Exception $exception) {}
            }
        }
        $out->setDate((int)$date[1], (int)$date[2], (int)$date[3]);
        if ($hasTimePart) {
            $out->setTime((int)$date[4], (int)$date[5], (int)$date[6]);
        } elseif ($isStart) {
            $out->setTime(0, 0, 0);
        } elseif (!$isStart) {
            $out->setTime(23, 59, 59);
        }
        if (!$isUTC) {
            $out->setTimezone($this->timeZoneUTC);
        }
        return $out;
    }


    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * In UTC
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * In UTC
     * @return \DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }

    public function getSummary()
    {
        return $this->summary;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function isDeleted()
    {
        return $this->deleted;
    }

    /**
     * @return array
     */
    public function getRRule()
    {
        return $this->ical_rrule;
    }

    /**
     * @return array
     */
    public function getExDates()
    {
        return $this->exdates;
    }

    /**
     * @return ICalExDate
     */
    public function getExDate($position)
    {
        return $this->exdates[$position];
    }


    /**
     * @return int
     */
    public function getExDatesCount()
    {
        return count($this->exdates);
    }

    /**
     *
     * Returns raw line data for this event.
     *
     * @parameter $keyword pass keyword you want, or null to get all data as an array
     *
     * If $keyword parameter is passed, values for that only will be returned.
     * This will always be in array form, even if there was no data. (ie an empty array)
     * This is to make it easy to loop over
     *
     * If $keyword parameter is null, all values will be returned in an array of arrays.
     *
     * Note all keywords are always in upper case.
     *
     * @return array
     */
    public function getRaw($keyword = null)
    {
        if ($keyword) {
            return isset($this->raw[strtoupper($keyword)]) ? $this->raw[strtoupper($keyword)] : [];
        } else {
            return $this->raw;
        }
    }

    public function hasGeo()
    {
        return (boolean)($this->geoLat && $this->geoLng);
    }

    public function getGeoLat()
    {
        return $this->geoLat;
    }

    public function getGeoLng()
    {
        return $this->geoLng;
    }
}
