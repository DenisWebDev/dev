<div class="container">
  <h1 class="my-3 text-center">Калькулятор</h1>
  <div class="row justify-content-center">
    <div class="col-md-8">
      <form>
        <div class="row justify-content-center">
          <div class="col-4">
            <input type="text" class="form-control" />
          </div>
          <div class="col-2">
            <select class="form-control">
              <?php foreach ($operations as $k => $v): ?>
                <option value="<?php
                  echo _esc($k);
                ?>"><?php
                  echo _esc($v);
                ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-4">
            <input type="text" class="form-control" />
          </div>
          <div class="col-2">
            <input type="submit" class="btn btn-primary" value="=" />
          </div>
        </div>
      </form>
    </div>
  </div>
</div>