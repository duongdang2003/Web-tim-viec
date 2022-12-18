<?php
class FormLogin
{
  function previousLogin($previousUser, $previousPass)
  {
?>
    <!DOCTYPE html>
    <html>

    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Đăng nhập</title>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

      <!-- My CSS and JQuery -->
      <link href="../assets/Styles/style.css" rel="stylesheet">
    </head>

    <body>
      <div class="container-fluid">
        <div class="bg">
          <div class="dark-bg"></div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6 col-sm-8 col-xs-12 row-container">
            <form action="../Controllers/C_SignIn.php" method="post" enctype="multipart/form" class="needs-validation" novalidate>
              <input type='hidden' name='SignIn' value='true'>
              <h1 class="text-center"><a style="text-decoration:none;color:white;" href="../../../index.php">FIND WORK</a></h1>
              <h2 class="text-center">Đăng nhập</h2>
              <div class="form-group">
                <label for="username">Tài khoản</label>
                <input name="taikhoan" value='<?= $previousUser ?>' type="text" class="form-control py-4" id="username" required>
                <div class="invalid-feedback">Vui lòng nhập tài khoản.</div>
              </div>
              <div class="form-group mb-0">
                <label for="password" class="label">Mật khẩu</label>
                <input name='matkhau' value='<?= $previousPass ?>' type="password" class="form-control py-4" id="password" required>
                <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
              </div>
              <div class="form-group">
                <label for="select">Bạn là</label>
                <select class="form-control required" id="select" name="who" required>
                  <option value="0" style="color:black !important;">Người xin việc</option>
                  <option value="1" style="color:black !important;">Nhà tuyển dụng</option>
                </select>
              </div>

              <div class='form-group form-check'>
                <input type='checkbox' name='remember' value='1' class='form-check-input' id='exampleCheck1'>
                <label class='form-check-label' for='exampleCheck1'>Remember me</label>
              </div>

              <div class="pass">
                <a href="../../index.php">Quên mật khẩu</a>
              </div>
              <div class="offset-sm-4">
                <button type="submit" class="mx-auto">Đăng nhập</button>
              </div>
              <div class="">
                <div class="signup_link">Bạn chưa có tài khoản? <a href="./C_Register.php">Đăng kí</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <script>
        // Disable form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Get the forms we want to add validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
      </script>
    </body>

    </html>
<?php
  }
}
?>