<?php
header("content-type:text/html;charset=utf-8");
date_default_timezone_set('PRC');
session_start();
define("ROOT",dirname(__FILE__));
set_include_path(".".PATH_SEPARATOR.ROOT."/lib".PATH_SEPARATOR.ROOT."/core".PATH_SEPARATOR.ROOT."/config".PATH_SEPARATOR.get_include_path());
require_once 'config.php';
require_once 'mysql.func.php';
require_once 'page.func.php';
require_once 'uploadimg.func.php';
require_once 'admin.ini.php';
require_once 'article.ini.php';
require_once 'project.ini.php';