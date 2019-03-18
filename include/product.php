<?php

  function productSave($id, $data, &$errors = []) {
    $id = intval($id);
    $data = (array)$data;
    $errors = [];

    $item = _validate($id, $data, $errors);

    $item['image'] = '';

    if (!$errors) {
      if ($id) {
        if (dbUpdate('product', $id, $item)) {
          return true;
        }
      } else {
        if ($_id = dbInsert('product', $item)) {
          return $_id;
        }
      }
    }

    if (!$errors) {
      $errors[] = 'Сбой сервера';
    }
    return false;
  }

  function _validate($id, $data, &$errors = []) {
    $item = [];
    $item['name'] = trim(strip_tags($data['name'] ?? ''));
    if ($item['name'] === '') {
      $errors[] = 'Не задано название товара';
    }
    $item['price'] = intval($data['price'] ?? 0);
    if ($item['price'] <= 0) {
      $errors[] = 'Не задана цена товара';
    }
    return $item;
  }

  function productGetList() {
    return dbRows('SELECT * FROM product');
  }

  function productGet($id) {
    return dbRow('SELECT *
      FROM product WHERE id = '.(int)$id.'
      LIMIT 1');
  }

?>