<div class="container">
  <div class="text-center">
    <h1 class="my-3">
      <?php if ($id): ?>
        Редактирование товара ID <?php echo $id; ?>
      <?php else: ?>
        Новый товар
      <?php endif; ?>
    </h1>
  </div>
  
  <div class="row justify-content-center my-3">
    <div class="col-md-6">
      <form action="" method="post">
        <div class="form-group">
          <label>Название</label>
          <input type="text" name="name" class="form-control" value="<?php
            echo _esc(reqPost('name', $data['name'] ?? ''));
          ?>">
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <label>Цена</label>
            <input type="number" name="price" size="7" class="form-control" value="<?php
            $_val = intval(reqPost('price', $data['price'] ?? 0));
            echo $_val != 0 ? $_val : '';
          ?>">
          </div>
        </div>
        <div class="form-group">
          <label>Картинка</label>
          <input type="file" name="image" class="form-control-file">
        </div>
        <button type="submit" class="btn btn-primary" name="save">Сохранить</button>
      </form>
    </div>
  </div>

</div>