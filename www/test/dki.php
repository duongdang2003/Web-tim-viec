<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng kí</title>	
  <!-- Import Bootstrap and JQuery -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
  </script>
  <link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <script 
    src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">    
  </script>             -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- My CSS and JQuery -->
  <link href="/Style/style.css" rel="stylesheet">
  <!-- <script type="text/javascript" src="./index.js"></script>  -->
  <style>
    .bg{
        overflow-y: scroll;
    }
  </style>
</head>
<body>
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-md-6 col-sm-8 col-xs-12 row-container my-5">
        <form id="form" action="/" class="needs-validation" novalidate>
            <h1 class="text-center">FIND WORK</h1>
            <h2 class="text-center">Đăng kí</h2>
          <div class="form-group">
            <label for="username">Tài khoản</label>
            <input type="text" class="form-control py-3" id="username" required>
            <div class="invalid-feedback">Vui lòng nhập tài khoản.</div>
          </div>
          <div class="form-group">
            <label for="password" class="label">Mật khẩu</label>
            <input type="password" class="form-control py-3" id="password" required>
            <div class="invalid-feedback">Vui lòng nhập mật khẩu.</div>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control py-3" id="email" required>
            <div class="invalid-feedback">Vui lòng nhập email.</div>
          </div>
          <div class="form-group">
            <label for="number">Số điện thoại</label>
            <input type="number" class="form-control py-3" id="number" required>
            <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
          </div>
          <div class="form-group">
            <label>Bạn là</label>
            <select class="form-control required" id="select" name="" required>
                <option  value="" color="white" >Người xin việc</option>
                <option value="" color="white">Nhà tuyển dụng</option>
            </select>
            <div class="invalid-feedback">Vui lòng chọn.</div>
          </div>
          <div class="form-group">
            <label for="company">Tên doanh nghiệp</label>
            <input type="text" class="form-control py-3" id="company" required>
            <div class="invalid-feedback">Vui lòng nhập tên doanh nghiệp.</div>
          </div>
          <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" class="form-control py-3" id="address" required>
            <div class="invalid-feedback">Vui lòng nhập địa chỉ.</div>
          </div>
          <div class="form-group">
            <label for="website">Website</label>
            <input type="text" class="form-control py-3" id="website" required>
            <div class="invalid-feedback">Vui lòng nhập website.</div>
          </div>
            <div class="offset-sm-4">
                    <button type="submit" class="mx-auto">Đăng kí</button>
            </div>
            <div class="">
                <div class="signup_link">Đã có tài khoản? <a href="#">Đăng nhập</a>
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