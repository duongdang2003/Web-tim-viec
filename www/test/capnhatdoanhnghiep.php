<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cập nhật thông tin doanh nghiệp</title>	
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
  <link href="/Style/style2.css" rel="stylesheet">
  <!-- My CSS and JQuery -->
  <!-- <link href="/style.css" rel="stylesheet"> -->
  <!-- <script type="text/javascript" src="./index.js"></script>  -->
  <style>
  </style>
</head>
<body>
  <nav class="navbar sticky-top navbar-dark bg-dark">
    <a class="navbar-brand offset-sm-1" href="#" style="font-family:Ink Free, Regularl">FINDWORK</a>
  </nav>
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 row-container my-5">
        <form id="form" action="/" class="needs-validation my-4" novalidate>
            <h1 class="text-center">Cập nhật thông tin doanh nghiệp</h1>
            <div class="form-group col-12">
                <label for="name">Tên doanh nghiệp</label>
                <input type="text" class="form-control py-3" id="name" placeholder="Nhập tên của bạn ở đây" required>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-5">
                    <label for="linhvuc">Lĩnh vực</label>
                    <select class="form-control" id="linhvuc">
                        <option>Công nghệ thông tin</option>
                        <option>Điện tử viễn thông</option>
                        <option>Giáo dục</option>
                        <option>Văn phòng</option>
                        <option>Xây dựng</option>
                    </select>
                </div>
                <div class="form-group col-sm-7">
                    <label for="website">Trang web của công ty</label>
                    <input type="text" class="form-control py-3" id="website" placeholder="Nhập trang web của công ty" required>
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-6">
                    <label for="number">Số điện thoại</label>
                    <input type="number" class="form-control py-3" id="number" placeholder="Nhập số điện thoại ở đây" required>
                  </div>
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control py-3" id="email" placeholder="Nhập tên email ở đây" required>
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-5">
                    <label for="tp">Thành phố</label>
                    <select class="form-control" id="tp" required>
                        <option>Hồ Chí Minh</option>
                        <option>Hà Nội</option>
                    </select>                    
                </div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-7">
                    <label for="diachi">Địa chỉ</label>
                    <input type="text" class="form-control py-3" id="diachi" placeholder="Nhập tên địa chỉ ở đây" required>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="comment">Giới thiệu doanh nghiệp</label>
                <textarea class="form-control" rows="3" id="comment" placeholder="Nhập mục tiêu nghề nghiệp ở đây" required></textarea>
            </div>
            <div class="offset-4">
                    <button type="submit" class="mx-auto">Đăng việc</button>
            </div>
        </div>
        </form>
      </div>
    </div>
  </div>
  <script>
</script>
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