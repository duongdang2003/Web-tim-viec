<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Boostrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Boostrap separate -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Jquery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- Custom.css -->
    <link rel="stylesheet" href="./Style/custom.css">
    <!-- navbar.css -->
    <link rel="stylesheet" href="./Style/navbar.css">
    <link rel="stylesheet" href="./Style/duyetungvien.css">
    <!-- reponsive.css -->
    <link rel="stylesheet" href="./Style/reponsive.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>

<body>
    <div id="main">
    <div class="navbar-content sticky-top" id="navbar-content">
            <nav class="navbar navbar-expand-lg navbar-dark px-4 format-nav">
                <div class="container">
                    <a class="navbar-brand" href="./userlogin.php">FINDWORK</a>
                    <button class="navbar-toggler" id="btn-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" href="#">Tìm việc</a>
                            </li>

                        </ul>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <a class="nav-link active format-name-user" href="#">William Shakespeare</a>
                            <span>
                                <img class="format-img-user" src="./Images/18-F.png" alt="google"></span>
                            <div class="navbar-img-notice">
                                <span>
                                    <img class="format-img-notice" src="./Images/ic_notifications_none_24px.png" alt="">
                                </span>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="content">
            <div class="container container-content">
                <div class="row">
                    <div class="col-sm-12 col-duyetungvien">
                        <div class="col-sm-12 format-text-heading">
                            <h4>CÔNG VIỆC ĐƯỢC MỜI</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white format-table">
                                <thead class="format-thead-background">
                                    <tr class="format-text">
                                        <th></th>
                                        <th>Tên công ty</th>
                                        <th>Công việc</th>
                                        <th>Chi tiết</th>
                                        <th>Duyệt</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/google.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Google</p>
                                        </td>
                                        <td>Frontend Devloper</td>
                                        <td class="format-td">
                                        
                                            <div class="format-td-baidang">
                                                <a class="format-baidang" class="aa" role="button" href="#" class="btn btn-link btn-rounded">
                                                    Xem bài đăng
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="format-btn-dongy">
                                                <button class="btn-dongy" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-done" src="./Images/ic_done_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="format-btn-tuchoi" id="format-btn-tuchoi-id">
                                                <button class="btn-tuchoi" id="btn-tuchoi-id" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-clear" src="./Images/ic_clear_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/vng.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Công ty cổ phần VNG</p>
                                        </td>
                                        <td>Product Coordinator</td>
                                        <td class="format-td">
                                        
                                            <div class="format-td-baidang">
                                                <a class="format-baidang" class="aa" role="button" href="#" class="btn btn-link btn-rounded">
                                                    Xem bài đăng
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="format-btn-dongy">
                                                <button class="btn-dongy" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-done" src="./Images/ic_done_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="format-btn-tuchoi" id="format-btn-tuchoi-id">
                                                <button class="btn-tuchoi" id="btn-tuchoi-id" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-clear" src="./Images/ic_clear_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/vcb.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">VIETCOMBANK - NGÂN HÀNG TMCP ...</p>
                                        </td>
                                        <td>Lao công</td>
                                        <td class="format-td">
                                        
                                            <div class="format-td-baidang">
                                                <a class="format-baidang" class="aa" role="button" href="#" class="btn btn-link btn-rounded">
                                                    Xem bài đăng
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="format-btn-dongy">
                                                <button class="btn-dongy" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-done" src="./Images/ic_done_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="format-btn-tuchoi" id="format-btn-tuchoi-id">
                                                <button class="btn-tuchoi" id="btn-tuchoi-id" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-clear" src="./Images/ic_clear_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/circlek.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Công ty cổ phần Circle K</p>
                                        </td>
                                        <td>Tester</td>
                                        <td class="format-td">
                                        
                                            <div class="format-td-baidang">
                                                <a class="format-baidang" class="aa" role="button" href="#" class="btn btn-link btn-rounded">
                                                    Xem bài đăng
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="format-btn-dongy">
                                                <button class="btn-dongy" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-done" src="./Images/ic_done_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>
                                            <div class="format-btn-tuchoi" id="format-btn-tuchoi-id">
                                                <button class="btn-tuchoi" id="btn-tuchoi-id" aria-haspopup="true" aria-expanded="false">
                                                    <span>
                                                        <img class="format-img-clear" src="./Images/ic_clear_24px.png" alt="">
                                                    </span>
                                                </button>
                                            </div>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-duyetungvien">
                        <div class="col-sm-12 format-text-heading">
                            <h4>CÔNG VIỆC ĐÃ GỬI YÊU CẦU TUYỂN DỤNG/h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white format-table">
                                <thead class="format-thead-background">
                                    <tr class="format-text">
                                        <th></th>
                                        <th>Tên</th>
                                        <th>Công việc</th>
                                        <th>Chi tiết</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/vng.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Công ty cổ phần VNG</p>
                                        </td>
                                        <td>Graphic Designer</td>
                                        <td class="format-td">
                                            <div class="format-td-hoso">
                                                <a class="format-hoso" role="button" href="#" class="btn btn-link  btn-rounded">
                                                    Xem hồ sơ
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <span> Chưa phản hồi </span>
                                        </td>
                                    </tr>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/google.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Google</p>
                                        </td>
                                        <td>Tester</td>
                                        <td class="format-td">
                                            <div class="format-td-hoso">
                                                <a class="format-hoso" role="button" href="#" class="btn btn-link  btn-rounded">
                                                    Xem hồ sơ
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <span class="format-text-dadongy"> Đã đống ý</span>
                                        </td>
                                    </tr>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/circlek.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Công ty cổ phần Circle K</p>
                                        </td>
                                        <td>Gamer</td>
                                        <td class="format-td">
                                            <div class="format-td-hoso">
                                                <a class="format-hoso" role="button" href="#" class="btn btn-link  btn-rounded">
                                                    Xem hồ sơ
                                                </a>
                                            </div>

                                        </td>
                                        <td>
                                            <span class="format-text-datuchoi"> Đã từ chối </span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-sm-12 col-ungviendaduyet">
                        <div class="col-sm-12 format-text-heading">
                            <h4>CÔNG VIỆC ĐÃ DUYỆT</h4>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 bg-white format-table">
                                <thead class="format-thead-background">
                                    <tr class="format-text">
                                        <th></th>
                                        <th>Tên</th>
                                        <th>Công việc</th>
                                        <th>Chi tiết</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="format-text">
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="./Images/vng.png" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Công ty cổ phần VNG</p>
                                        </td>
                                        <td>Product Coordinate</td>
                                        <td class="format-td">
                                            <div class="format-td-hoso">
                                                <a class="format-hoso" role="button" href="#" class="btn btn-link  btn-rounded">
                                                     Xem bài đăng
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./Script/script.js"></script>

</html>