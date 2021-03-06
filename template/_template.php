<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <title><?php echo _esc(tplGet('meta_title')); ?></title>
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item<?php
              echo tplGet('controller') == 'index' ? ' active' : '';
            ?>">
              <a class="nav-link" href="/">Главная</a>
            </li>
            <li class="nav-item<?php
              echo tplGet('controller') == 'calculator' ? ' active' : '';
            ?>">
              <a class="nav-link" href="/calculator.php">Калькулятор</a>
            </li>
            <li class="nav-item<?php
              echo tplGet('controller') == 'admin' ? ' active' : '';
            ?>">
              <a class="nav-link" href="/admin.php">Администрирование</a>
            </li>
          </ul>

        </div>
      </nav>

      <div class="container">
        <?php foreach (getMessagesToPrint() as $type => $messages): ?>
          <div class="alert alert-<?php
            if ($type == 'error') {
              echo 'danger';
            } elseif ($type == 'success') {
              echo 'success';
            } else {
              echo 'primary';
            }
          ?> my-2" role="alert">
            <?php echo implode('<br>', $messages); ?>
          </div>
        <?php endforeach; ?>
      </div>

    </div>

    <?php echo $content; ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>