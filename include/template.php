<?php

  function render($tpl) {
    $content = false;
    if (is_file(_ROOT_DIR_.'/template/'.$tpl.'.php')) {
      ob_start();
      (function($tpl) {
        $__vars = tplGet();
        extract($__vars);
        unset($__vars);
        include _ROOT_DIR_.'/template/'.$tpl.'.php';
      })($tpl);
      $content = ob_get_clean();
    }
    require _ROOT_DIR_.'/template/_template.php';
  }

  function _tplData($key = null, $value = null) {
    static $data = array();
    if ($key === null) {
      return $data;
    }
    if ($value === null) {
      return array_key_exists($key, $data) ? $data[$key] : null;
    }
    $data[$key] = $value;
  }

  function tplSet($key, $value) {
    _tplData($key, $value);
  }

  function tplGet($key = null, $default = null) {
    if ($key === null) {
      return _tplData();
    }
    $data = _tplData($key);
    return $data === null ? $default : $data;
  }

?>