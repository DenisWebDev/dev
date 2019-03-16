<?php

  function _esc($v) {
    return htmlentities($v, ENT_COMPAT, 'utf-8');
  }

  function _d($var) {
    echo '<pre>';
    if (is_bool($var) or is_null($var)) {
      var_dump($var);
    } else {
      print_r($var);
    }
    echo '</pre>';
  }

  function message($message, $type) {
    if (!isset($_SESSION['messages'])) {
      $_SESSION['messages'] = [
        'error' => [],
        'success' => [],
      ];
    }
    $_SESSION['messages'][$type][] = $message;
  }

  function getMessagesToPrint() {
    if (isset($_SESSION['messages'])) {
      $messages = $_SESSION['messages'];
      unset($_SESSION['messages']);
      return $messages;
    }
    return [];
  }


?>