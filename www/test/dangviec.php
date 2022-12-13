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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  <!-- My CSS and JQuery -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <link href="../test/Style/style2.css" rel="stylesheet">
  <!-- <script type="text/javascript" src="./index.js"></script>  -->
  <style>
    .bg{
        background: #FAF9F8;
    }
  </style>
</head>
<body>
  <div class="container col-md-10">
    <div class="card">
      <div class="row">
            <h1 class="text-center">ĐĂNG VIỆC</h1>
            <div class="col-md-7 col-xs-12 mt-3 ms-3">
                <label for="workname">Tên công việc</label>
                <input type="text" class="form-control" id="workname" placeholder="Nhập tên công việc ở đây" required>
            </div>
            <div class="col-3 mt-3">
                <label for="sel1">Lĩnh vực</label>
                <select class="form-control" id="sel1">
                    <option>Công nghệ thông tin</option>
                    <option>Điện tử viễn thông</option>
                    <option>Giáo dục</option>
                    <option>Văn phòng</option>
                    <option>Xây dựng</option>
                </select>
            </div>
            <div class="">
                <label for="username">Chức vụ</label>
                <input type="text" class="form-control" id="username" placeholder="Nhập tên công việc ở đây" required>
                <div class="invalid-feedback">Vui lòng nhập tài khoản.</div>
            </div>
            <div class="">
                <label for="username">Lương</label>
                <input type="text" class="form-control" id="username" placeholder="Nhập tên công việc ở đây" required>
                <div class="invalid-feedback">Vui lòng nhập tài khoản.</div>
            </div>
            <div class="">
                <label for="username">Đại chỉ</label>
                <input type="text" class="form-control" id="username" placeholder="Nhập tên công việc ở đây" required>
                <div class="invalid-feedback">Vui lòng nhập tài khoản.</div>
            </div>
            <div class="">
                <label for="number">Số điện thoại</label>
                <input type="number" class="form-control" id="number" required>
                <div class="invalid-feedback">Vui lòng nhập số điện thoại.</div>
              </div>
          <div class="">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" required>
            <div class="invalid-feedback">Vui lòng nhập email.</div>
          </div>

          <div class="">
            <label for="comment">Mô tả công việc</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
          </div>

            <div class="offset-sm-4">
                    <button type="submit" class="mx-auto">Đăng kí</button>
            </div>
            <div class="">
                <div class="signup_link">Đã có tài khoản? <a href="#">Đăng nhập</a>
            </div>

        </div>
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