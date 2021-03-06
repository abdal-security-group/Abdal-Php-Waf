<?php
/**
 * Created by Abdal Security Group.
 * Programmer: Ebrahim Shafiei
 * Programmer WebSite: https://hackers.zone/
 * Programmer Email: Prof.Shafiei@Gmail.com
 * License : AGCL
 */


namespace ABDALPHPWAF;

require_once __DIR__ . '/includes/class-request-method-protector.php';
require_once __DIR__ . '/includes/class-anti-xss.php';
require_once __DIR__ . '/includes/class-anti-sql-injection.php';
require_once __DIR__ . '/includes/class-dos-protector.php';
require_once __DIR__ . '/includes/class-central-utility.php';
require_once __DIR__ . '/includes/class-anti-crlf.php';
require_once __DIR__ . '/includes/class-file-download-controller.php';
require_once __DIR__ . '/includes/class-anti-rfi.php';
require_once __DIR__ . '/includes/class-proxy-protection.php';
require_once __DIR__ . '/includes/class-header-security.php';

