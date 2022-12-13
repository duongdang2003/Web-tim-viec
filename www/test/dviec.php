<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Đăng việc</title>	
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
  <link href="../test/Style/style2.css" rel="stylesheet">

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
            <h1 class="text-center">Đăng việc</h1>
            <div class="d-sm-flex  flex-sm-row mt-4">
                <div class="form-group col-sm-4">
                    <label for="namework">Tên công việc</label>
                    <input type="text" class="form-control py-3" id="namework" placeholder="Nhập tên công việc ở đây" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="bangcap">Yêu cầu bằng cấp (tối thiểu)</label>
                    <input type="text" class="form-control py-3" id="bangcap" placeholder="Đại học, cấp 3, chứng chỉ,..." required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="linhvuc">Lĩnh vực</label>
                    <select class="form-control" id="linhvuc">
                        <option>Công nghệ thông tin</option>
                        <option>Viễn thông</option>
                        <option>Marketing / Truyền thông / Quảng cáo</option>
                        <option>Nhà hàng / Khách sạn</option>
                        <option>Thời trang</option>
                        <option>Internet / Online</option>
                        <option>Bất động sản</option>
                        <option>Dược phẩm / Y tế / Công nghệ sinh học</option>
                        <option>Kế toán / Kiểm toán</option>
                        <option>Kinh doanh</option>
                        <option>Giáo dục</option>
                        <option>Văn phòng</option>
                        <option>Bảo hiểm</option>
                        <option>Luật</option>
                        <option>Giải trí</option>
                        <option>Agency</option>
                        <option>Tài chính / Ngân Hàng</option>
                        <option>Khác</option>
                    </select>
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-5">
                    <label for="chucvu">Chức vụ</label>
                    <input type="text" class="form-control py-3" id="chucvu" placeholder="Nhập chức vụ ở đây" required>
                </div>
                <div class="form-group col-sm-4">
                    <label for="luong">Lương</label>
                    <input type="text" class="form-control py-3" id="luong" placeholder="Nhập lương($) ở đây" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="loaicv">Loại công việc</label>
                    <select class="form-control" id="loaicv" required>
                        <option>Toàn thời gian</option>
                        <option>Bán thời gian</option>
                    </select>                    
                </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
              <div class="form-group col-9">
                  <label for="diachi">Địa chỉ</label>
                  <input type="text" class="form-control py-3" id="diachi" placeholder="Nhập địa chỉ ở đây" required>
              </div>
              <div class="form-group col-3">
                  <label for="soluongtuyen">Số lượng tuyển dụng</label>
                  <input type="number" class="form-control py-3" id="soluongtuyen" placeholder="1" required>
              </div>
            </div>
            <div class="d-sm-flex flex-sm-row">
                <div class="form-group col-sm-3">
                    <label for="number">Số điện thoại</label>
                    <input type="number" class="form-control py-3" id="number" placeholder="Nhập số điện thoại ở đây" required>
                </div>
                <div class="form-group col-sm-3">
                    <label for="duration">Thời hạn tuyển dụng</label>
                    <input type="date" class="form-control py-3" id="duration" required>
                </div>
                <div class="form-group col-sm-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control py-3" id="email" placeholder="Nhập tên email ở đây" required>
                </div>
            </div>
            <div class="form-group col-12">
                <label for="comment">Mô tả công việc</label>
                <textarea class="form-control" rows="3" id="comment" placeholder="Mỗi dòng mô tả là một mục" required></textarea>
            </div>
            <div class="d-sm-flex flex-sm-row">
              <div class="form-group col-6">
                  <label for="quyenloi">Quyền lợi được hưởng</label>
                  <textarea class="form-control" rows="3" id="quyenloi" placeholder="Mỗi dòng mô tả là một mục" required></textarea>
              </div>
              <div class="col-6">
                  <label for="yeucau">Yêu cầu công việc</label>
                  <textarea class="form-control" rows="3" id="yeucau" placeholder="Mỗi dòng mô tả là một mục" required></textarea>
              </div>
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