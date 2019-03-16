<?php

  if (substr($_SERVER['SERVER_NAME'], -4) == '.loc') {
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
  } else {
    ini_set('display_errors', 0);
  }

  define('_ROOT_DIR_', dirname(__FILE__));

  foreach (scandir(_ROOT_DIR_.'/include') as $file) {
    if (substr($file, -4) == '.php') {
      require_once _ROOT_DIR_.'/include/'.$file;
    }
  }

  session_start();
?>