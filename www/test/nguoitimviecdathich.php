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
    <!-- nguoitimviecdathich.css -->
    <link rel="stylesheet" href="./Style/nguoitimviecdathich.css">
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
                                <a class="nav-link active" href="#">Đăng việc</a>
                            </li>

                        </ul>
                        <button>
                            
                        </button>
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <a class="nav-link active format-name-user" href="#">Google</a>
                            <button>
                            <span><img class="format-img-user" src="./Images/google.png" alt="google"></span>
                            </button>
                           
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
                    <div class="col-sm-12 col-nguoitimviecdathich">
                        <div class="col-sm-12 format-text-heading">
                            <h4>Người tìm việc đã thích</h4>
                        </div>
                    </div>
                    <div onclick="changeLink()" class="offset-sm-1 col-sm-5 col-mg-content-2-left-main">
                        <div class="card card-format-border-left">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-img-text">
                                        <div class="col-img">
                                            <span>
                                                <img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Dương Hải Đăng</h5>
                                            <h6 class="card-subtitle mb-2">Frontend Developer</h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-time">
                                        <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                        <span class="card-text p-time">Toàn thời gian</span>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-12 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-mg-content-2-left-main">
                        <div class="card card-format-border-left">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-img-text">
                                        <div class="col-img">
                                            <span>
                                                <img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Dương Hải Đăng</h5>
                                            <h6 class="card-subtitle mb-2">Frontend Developer</h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-time">
                                        <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                        <span class="card-text p-time">Toàn thời gian</span>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-12 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-sm-1 col-sm-5 col-mg-content-2-left-main">
                        <div class="card card-format-border-left">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-img-text">
                                        <div class="col-img">
                                            <span>
                                                <img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Dương Hải Đăng</h5>
                                            <h6 class="card-subtitle mb-2">Frontend Developer</h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-time">
                                        <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                        <span class="card-text p-time">Toàn thời gian</span>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-12 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5  col-mg-content-2-left-main">
                        <div class="card card-format-border-left">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-img-text">
                                        <div class="col-img">
                                            <span>
                                                <img class="format-img-userxinviec" src="./Images/dummy_team_member.png" al=""></img>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Dương Hải Đăng</h5>
                                            <h6 class="card-subtitle mb-2">Frontend Developer</h6>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-time">
                                        <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                        <span class="card-text p-time">Toàn thời gian</span>
                                    </div>
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-12 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                        <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
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