<?php
  require_once '_init.php';

  $operations = array(
    1 => '+',
    2 => '-',
    3 => '*',
    4 => '/',
  );

  tplSet('controller', 'calculator');
  tplSet('meta_title', 'Калькулятор');

  tplSet('operations', $operations);

  render('calculator');

?>