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
    <!-- content2.css -->
    <link rel="stylesheet" href="./Style/content2.css">
    <link rel="stylesheet" href="./Style/pageinfouser.css">
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

        <div id="content" class="container container-pageinfouser">
            <div class="offset-sm-3 col-sm-6 col-content-pageinfouser">
                <div class= "row ds-row-pageinfouser">
                    <div class="col-sm-12 infor-userxinviec col-pageinfouserabove">
                        <div class="card-info-userxinviec">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-12 img-userxinviec-right">
                                        <span><img class="format-img-userxinviec-right" src="./Images/18-F.png" alt=""></span>
                                    </div>
                                    <div class="col-sm-12">
                                        <h5 class="card-title format-text-bold">William Shakespeare</h5>
                                        <h6 class="card-subtitle mb-2">Nhân viên bán hàng</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 ">
                        <div class="card-basicinfo">
                            <div class="body">
                                <div class="row">
                                    <div class="col-sm-12 mgl-col-content2-right-below">
                                        <h5 class="card-title format-text-bold">Thông tin cơ bản</h5>
                                    </div>
                                    <div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
                                        <span class="format-span-img-cake"><img class="format-img-cake" src="./Images/ic_cake_24px.png" alt="">1/1/2000</span>
                                        <span class="format-span-img-gender"><img class="format-img-gender" src="./Images/ic_wc_24px.png" alt="">Nữ</span>
                                    </div>

                                    <div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
                                        <span class="format-span-img-call"><img class="format-img-call" src="./Images/ic_call_24px.png" alt="">0987654321</span>
                                        <span class="format-span-img-letter"><img class="format-img-letter" src="./Images/ic_markunread_24px.png" alt="">William@gmail.com</span>
                                    </div>

                                    <div class="col-sm-12  mgl-col-content2-right-below format-mt-item">
                                        <span><img class="format-img-place" src="./Images/ic_place_24px.png" alt="">19 Đ. Nguyễn Hữu Thọ, Tân Hưng, Quận 7, Thành phố Hồ Chí Minh</span>
                                    </div>

                                    <div class="col-sm-12 mgl-col-content2-right-below col-muctieu">
                                        <h5 class="card-title format-text-bold">Mục tiêu nghề nghiệp</h5>
                                        <span>
                                            <p class="p-muctieu">Áp dụng những kinh nghiệm về kỹ năng bán hàng và sự hiểu biết về
                                                thị trường để trở thành một nhân viên bán hàng chuyên nghiệp,
                                                mang đến nhiều giá trị cho khách hàng. Từ đó giúp Công ty tăng số
                                                lượng khách hàng và mở rộng tập khách hàng.
                                            </p>
                                        </span>
                                    </div>

                                    <div class="col-sm-12 mgl-col-content2-right-below col-hocvan">
                                        <h5 class="card-title format-text-bold">Học vấn</h5>
                                        <span>
                                            <p class="p-hocvan">Đại học Tôn Đức Thắng
                                                </br>
                                                Quản trị Doanh nghiệp
                                                </br>
                                                10/2010 - 05/2014
                                                </br>
                                                Tốt nghiệp loại Giỏi, điểm trung bình 8.0
                                            </p>
                                        </span>
                                    </div>

                                    <div class="col-sm-12 mgl-col-content2-right-below col-kynang">
                                        <h5 class="card-title format-text-bold">Kỹ năng</h5>
                                        <span>
                                            <p class="p-kynang">Tin học văn phòng :
                                                </br>
                                                -Sử dụng thành thạo các công cụ Word, Excel, Power Point
                                                </br>
                                                Tiếng Anh:
                                                </br>
                                                -Khả năng giao tiếp Tiếng Anh trôi chảy

                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-kinhnghiem">
                                        <h5 class="card-title format-text-bold">Kinh nghiệm làm việc</h5>
                                        <span>
                                            <p class="p-kinhnghiem">
                                                Công ty ABC
                                                </br>
                                                Nhân viên bán hàng 03/2015 - Hiện tại
                                                </br>
                                                - Hỗ trợ viết bài quảng cáo sản phẩm qua kênh facebook, các
                                                forum,...
                                                </br>
                                                - Giới thiệu, tư vấn sản phẩm, giải đáp các vấn đề thắc mắc của khách
                                                hàng qua điện thoại và email.
                                                Cửa hàng XYZ
                                                </br>
                                                Nhân viên bán hàng 06/2014 - 02/2015
                                                </br>
                                                - Bán hàng trực tiếp tại cửa hàng cho người nước ngoài và người Việt.
                                                </br>
                                                - Quảng bá sản phẩm thông qua các ấn phẩm truyền thông: banner,
                                                poster, tờ rơi...
                                                </br>
                                                - Lập báo cáo sản lượng bán ra hàng ngày.

                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-sm-12 mgl-col-content2-right-below col-chitiet">
                                        <h5 class="card-title format-text-bold">Chi tiết</h5>
                                        <span>
                                            <p class="p-chitiet">
                                                Xem CV: https://findwork/users/my-cv.com
                                            </p>
                                            <p class="p-chitiet">
                                                Xem Porfolio: https://findwork/users/my-portfolio.com
                                            </p>
                                        </span>
                                    </div>
                                    <div class="col-md-12 col-tuyenngay">
                                        <a class="btn btn-dark btn-outline-light btn-tuyenngay" tabindex="-1" role="button" href="#">Ứng tuyển ngay</a>
                                        <button class="btn-luuyeu-thich" id="btn-luuyeuthich" aria-haspopup="true" aria-expanded="false">
                                            <span>
                                                <svg class="img-ungtuyenngay" width="50" height="40" role="img" aria-label="biểu tượng-lưu" focusable="false" viewBox="0 0 18 18">
                                                    <g>
                                                        <path d="M12.38,2.25A4.49,4.49,0,0,0,9,3.82,4.49,4.49,0,0,0,5.63,2.25,4.08,4.08,0,0,0,1.5,6.38c0,2.83,2.55,5.15,6.41,8.66L9,16l1.09-1C14,11.52,16.5,9.21,16.5,6.38A4.08,4.08,0,0,0,12.38,2.25ZM9.08,13.91L9,14l-0.08-.08C5.35,10.68,3,8.54,3,6.38A2.56,2.56,0,0,1,5.63,3.75,2.93,2.93,0,0,1,8.3,5.52H9.7a2.91,2.91,0,0,1,2.67-1.77A2.56,2.56,0,0,1,15,6.38C15,8.54,12.65,10.68,9.08,13.91Z"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

<script src="./Script/script.js"></script>

</html>