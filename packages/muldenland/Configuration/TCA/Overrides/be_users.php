<?php
defined('TYPO3') or die('Access denied.');


$GLOBALS['TCA']['be_users']['columns']['email']['config']['eval'] = 'nospace,trim,lower,unique';