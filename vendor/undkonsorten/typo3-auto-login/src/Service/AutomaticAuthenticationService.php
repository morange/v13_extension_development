<?php

declare(strict_types=1);

namespace Undkonsorten\TYPO3AutoLogin\Service;

use TYPO3\CMS\Core\Authentication\AbstractAuthenticationService;

/**
 * This file is part of the composer package "undkonsorten/typo3-auto-login" for use with TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * Class AutomaticAuthenticationService
 *
 * @see https://daniel-siepmann.de/Posts/2018/2018-07-25-auto-login-typo3-backend.html
 * @author Daniel Siepmann <coding@daniel-siepmann.de>
 * @author Felix Althaus <felix.althaus@undkonsorten.com>
 */
class AutomaticAuthenticationService extends AbstractAuthenticationService
{
    /**
     * Name of the environment variable that defines the BE user name
     */
    public const TYPO3_AUTOLOGIN_USERNAME_ENVVAR = 'TYPO3_AUTOLOGIN_USERNAME';

    /**
     * @return array<string, mixed>|false
     */
    public function getUser(): array|false
    {
        if ($this->isSwitchUserActive() || getenv(self::TYPO3_AUTOLOGIN_USERNAME_ENVVAR) === false) {
            return false;
        }

        $user = $this->fetchUserRecord(getenv(self::TYPO3_AUTOLOGIN_USERNAME_ENVVAR));

        // Early return if user record is invalid
        if (!is_array($user)) {
            return false;
        }

        // Bypass MFA for current user
        $this->pObj->getSession()->set('mfa', true);
        $user['mfa'] = null;

        return $user;
    }

    public function authUser(): int
    {
        return 200;
    }

    private function isSwitchUserActive(): bool
    {
        return (bool)$this->pObj->getSession()->get('backuserid');
    }
}
