<?php
defined('TYPO3') or die('Access denied.');


// deaktiveren des Record Types :: backend_layout
$GLOBALS['TCA']['backend_layout']['ctrl']['hideTable'] = true;