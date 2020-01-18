<?php
if (!defined('test')){
  echo "Forbidden Request";
  exit;
}
session_start();
date_default_timezone_set('Asia/Tehran');

global $config;
require_once("config.php");
require_once("system/core.php");
require_once("system/common.php");
require_once("system/db.php");
require_once("system/view.php");
require_once("system/access.php");
require_once("local/".$config['lang'].".php");
?>