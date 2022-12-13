<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cập nhật thông tin</title>	
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
  <div class="container-fluid bg">
    <div class="row justify-content-center">
      <div class="col-xs-12 col-sm-10 row-container my-5">
        <form id="form" action="/" class="needs-validation my-4" novalidate>
            <h1 class="text-center">Cập nhật thông tin người xin việc</h1>
            <div class="d-sm-flex  flex-sm-row mt-4">
                <div class="form-group col-sm-7">
                    <label for="name">Tên người xin việc</label>
                    <input type="text" class="form-control py-3" id="name" placeholder="Nhập tên công việc ở đây" required>
                </div>
                <div class="form-group col-sm-5">
                    <label for="namework">Công việc</label>
                    <input type="text" class="form-control py-3" id="namework" placeholder="Nhập tên công việc ở đây" required>
                </div>

            </div>
            <div class="d-sm-flex flex-sm-row">

                <div class="form-group col-sm-2">
                    <label for="ns">Ngày sinh</label>
                    <input type="date" class="form-control py-3" id="ns" placeholder="Nhập chức vụ ở đây" required>
                </div>
                <div class="form-group col-sm-2">
                    <label for="gt">Giới tính</label>
                    <select class="form-control" id="gt" required>
                        <option>Nam</option>
                        <option>Nữ</option>
                    </select>                    
                </div>
                <div class="form-group col-sm-4">
                    <label for="loaicv">Loại công việc</label>
                    <select class="form-control" id="loaicv" required>
                        <option>Toàn thời gian</option>
                        <option>Bán thời gian</option>
                    </select>                    
                </div>
                <div class="form-group col-sm-4">
                    <label for="linhvuc">Lĩnh vực</label>
                    <select class="form-control" id="linhvuc">
                        <option>Công nghệ thông tin</option>
                        <option>Điện tử viễn thông</option>
                        <option>Giáo dục</option>
                        <option>Văn phòng</option>
                        <option>Xây dựng</option>
                    </select>
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-6">
                    <label for="number">Số điện thoại</label>
                    <input type="number" class="form-control py-3" id="number" placeholder="Nhập tên số điện thoại ở đây" required>
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
                <label for="comment1">Mục tiêu nghề nghiệp</label>
                <textarea class="form-control" rows="3" id="comment1" placeholder="Nhập mô tả ở đây" required></textarea>
            </div>
            <div class="form-group col-12">
                <label for="comment2">Học vấn</label>
                <textarea class="form-control" rows="3" id="comment2" placeholder="Nhập mô tả ở đây" required></textarea>
            </div>
            <div class="form-group col-12">
                <label for="comment3">Kỹ năng</label>
                <textarea class="form-control" rows="3" id="comment3" placeholder="Nhập mô tả ở đây" required></textarea>
            </div>
            <div class="form-group col-12">
                <label for="comment4">Kinh nghiệm làm việc</label>
                <textarea class="form-control" rows="3" id="comment4" placeholder="Nhập mô tả ở đây" required></textarea>
            </div>
            <div class="form-group col-12">
                <label for="comment5">Chi tiết</label>
                <textarea class="form-control" rows="3" id="comment5" placeholder="Nhập mô tả ở đây" required></textarea>
            </div>
            <div class="form-group">
                <label for="tag">Thêm tag kĩ năng</label>
            </div>
            <div class="offset-sm-4">
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