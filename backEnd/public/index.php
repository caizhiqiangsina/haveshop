<?php
/**
 * 统一访问入口
 */
phpinfo();die;
ini_set("display_errors", "On");
error_reporting(E_ALL | E_STRICT);
require_once dirname(__FILE__) . '/init.php';

$pai = new \PhalApi\PhalApi();
$pai->response()->output();

