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
                                <a class="nav-link active" href="./dangviec.php">Đăng việc</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav  mr-auto mt-2 mt-lg-0">
                            <a class="nav-link active format-name-user">William Shakespeare</a>
                            <div class="filter-dropdown-container-user">
                                <button class="format-btn-user" id="btn-user">
                                    <span><img class="format-img-user" src="./Images/18-F.png" alt=""></span>
                                </button>
                                <ul class="filter-dropdownlist-user" id="filter-btn-user">
                                    <li class="filter-dropdownlistItem">
                                        <a href="./capnhatdoanhnghiep.php" class="filter-dropdownlistitemLink">Chỉnh sửa thông tin</a>
                                    </li>
                                    <li class="filter-dropdownlistItem ormat-border-top">
                                        <a href="./duyetcongviec.php" class="filter-dropdownlistitemLink">Duyệt công việc</a>
                                    </li>
                                    <li class="filter-dropdownlistItem format-border-top">
                                        <a href="./congviecdathich.php" class="filter-dropdownlistitemLink">Công việc đã thích</a>
                                    </li>
                                    <li class="filter-dropdownlistItem format-border-top">
                                        <span><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                        <a href="#" class="filter-dropdownlistitemLink format-text-dropdown ">Đăng xuất</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="navbar-img-notice filter-dropdown-container-user">
                                <button class="btn-notice">
                                    <span>
                                        <img class="format-img-notice" src="./Images/ic_notifications_none_24px.png" alt="">
                                    </span>
                                </button>
                                <ul class="filter-dropdownlist-notice" id="filter-btn-notice">
                                    <li class="filter-dropdownlistItem">
                                        <span><img class="format-img-user" src="./Images/18-F.png" alt=""></span>
                                        <a href="#" class="filter-dropdownlistitemLink">William Shake đã phản hồi về yêu cầu tuyển dụng của bạn</a>
                                    </li>
                                    <li class="filter-dropdownlistItem format-border-top">
                                        <span><img class="format-img-user" src="./Images/18-F.png" alt=""></span>
                                        <a href="#" class="filter-dropdownlistitemLink">John Cena đã phản hồi về yêu cầu tuyển dụng của bạn</a>
                                    </li>
                                </ul>
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
                            <h4>Công việc đã thích</h4>
                        </div>
                    </div>
                    <div class="offset-sm-1 col-sm-5 col-mg-content-2-left-main">
                        <div class="card card-format-border-left">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-img-text">
                                        <div class="col-img">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 84 84">
                                                    <defs>
                                                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 229 220">
                                                            <image width="200" height="160" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOUAAADcCAMAAAC4YpZBAAABDlBMVEX////oTg7pTg7mThLrRQD8///rTA7+/f3nRwDpQQD9//rpTRLoRADsjm/zpovsRQDyx7PwsJrqiWrtkW798+v42sraQADrfVHnSwDiSwDjRQD54NL9/PbfYCjkdkr4yLfnm3zuPgDkUQzlWiL58+zut6HiURPhb0HcTgD77OH++//40sbvShDw4Nzv1s7kXSXufl73hWvlZTXog2HmpITvva/nkHTtZjfvopTuxbzifWHmUR/x3tXilXfys5zvq57ZVgvym4Tw8d7006/75Mf5poj/8fPt5NTyyKLw//vnbU/caCjjmG7hoIv689T1rJPsv6jacD/kyLPniV/z//PwsYf5xa3ZYDfsZj7hkoB7QYfnAAAN0ElEQVR4nO2dDV/bthaHLSlWZEutA4QimwCxSExCzMugQLvSDnq77bZbL9y1a3u//xe5kuMkzpvtQLCdLP/2lzZ2MHp8pKOjI1nRtJVWWmmllVZaaaWVCirzKO8SZKDjk9O8i/DkamwxZyPvQjyx9CbhlP+UdzGeVptnTABK1vMux1Oqve5wiCAqPcu7JE8ns9myMAAALzNl58wlnlhuyva5QaiAcJkpGy+dEhIQIbDElHsnDlZW7Go5Ka9PHcsHIkq5dD2JrKzcQ0JAvLyU5oVncQgE9PHy2vL4gJBBg1xOysYlsy1PLDdl0yOAenSSLZfGxx4fGBhQMMa4TJTVS8YnAC4VpdnklpgGuSyUx1eOLSvrdEpr8Snb6waNxABLSVm+cwiAFAgUR7ngPUlnxwFYVdaprXLx+8ujc8cCU33rclA2XglXIIhjmuTiU772GAaYT2+PEcpF9T7XPxspABebslGXA2XPS025kLn1izdMQAGSGuRCU16fMgiQD7wk57rANbbx1iEIQBTXQy46Ze3Cs/y0eH3KBYvwjn8wjNPW1AjlIvWXjXXWQildzsJSvrMZxRDB6WOsaZSLE/t0vkvPmt7lLCRle90tPQCwR7kQ3qf2i229eZAdQ8pFiAo6ZwyPZVmXzJZHMi6f3bEOURa+v6zdGRbwHklZdFteCEMIPJ4vXyZbtncd7GEoHkcJC03ZuA3i8scAhpQF7i8vkO3PGuZMVIGjgusDwxfTZwWWgrJx6XJw4z/KtRadUm8K4lGIwXxsWcwVanIQORe6norYXzZ+Muy5QhaR8l2LySBguW25eWVg6M2hjywwpfSss3lVmMroxaJcc0rcmylBl5qyMD1JZZ/ZMi5vLTOljMs5wj6KmzlfdMraq/46lrlEriP3ohiZytfIeUTCI1GFyMe2dw0fpZ2/eiBl3j62/Nz1fQ/QlDOuD6PMuye5B+yNEIlLAxaacvvAeEq8QlA2Nlw6n7FVgSmb3PDErHORD6PMzfvIuBxB+IQ+Z6DcsluNS1aa99BjqvKKfS5IiQv6pI41d8rNK1d4NPpcy/JRNk4N2wNYQPoEIWtRKNccC3SnlDNqlTn42L/O3Jjluk9GmWl/2T53beRn1RzzoSzfOoQCIbJqjrlQvt53OJQ+J7PmmAPl0YHBM8frU2bjfRr1eefLZ6TMoCfRL2yb5mbJrCjfughjL9npQIDlcBpG3qtDFEEAMQwlP4FVjA8x6D75jLF8p4LFwUfU3+wpb21V0AREwRFxWsIeFFBwqZZNhQSxh8QYoWo5XhAIU/kjkDCHd89xW2LjobXe2VDusRSdB3Wb79u/H72vk17ZrMvq+3a7WnH81r/kfyLavlgnpB8hIkzQn5Xt/tn3H26GZ+qzoWykSXsIVtEPzbL+K+sd4XXt0NT0D4xax2U9lKZeTL18vcVK3UGNoEa90TujXrXfxPBKr4x8bJplu9SpaKYs/12PEpG6rpdNfZOg0u9mOVTAUjblJ+uOCCixU9Hl3ZHk3Q+UzcZI4JFRf/nMSkHJKpomS/u8b8tSXZdF1jYZcLaDy3T5pAKbaXVHeiABjH9rpqmVNWl2eUbdqd/4qPfJhLJp9PxfDKZRkUxRSquuyCQldLZ1dZnAVEpmTfLUzCskx2/Whl4rS5PL+xFKb9h0xPtkQnn9IMpSXdmnS9ktvhaYMZAE+9hhvmfZDd08/HioR1S9Gc5CZESpO/iRlIEtX37a7epdVVGa5h9+y/1TER/q7dvdnk530ShlNvMkZ7YM0h9QY4cpvxjEJkrsvCZbpmZ+dtVPydZb/s+V2z2lxMFwbjCrXMFl4jOSadrlBglLj43N4LJNg4aV+aURE3ZkRbln8MQnJJJt2aOk2F3rXtahTlv+W9Y/xTzinhll+wVHSdac2C7NiZTAudN7lNUupR1z5cyyWydW4ug5llKLUkIcUlYc/KIanNqyfRnYq2i/pzwoz0niouwxSlKXDkbTPoxRAsTCGsv6lARZNzK0b0nJkL1le1hE9/fJJlfwzqBJSa1plJvGGCWdQMl3q9GA/m83B8prIzF190hKsqUCPD38ffq9OwhmM6NsOIlLXMYpX6owdgZKGbH3f+E9GYxLMqPUD+y4ZLOMF+gYpfFNVwcqxlh/2ad0opRmWcYK5mHXnhcGyr7GanUWZ0sVFbExyg9qRKXfpaVUtlSDz3KX0otQZrUSpmMkUI7Zkl/V9NrhR+0LmV5jI5T8VDfDYVl+lPH5glFKFfAa95oaUjX2cSpKQP97dnBwcLbzl5YfpXYzk/dB0D2TQ0gZ1RwzxEmPMuyOepSyyUaiAkEg4b7bpWxG7mqGlF+SHp+MUlK/ZQdkZW2jhAeUcITSRUGEp8kID6pAFgrK7oMD74YoM5u/XGOT4SZSCizfKUa9zX2QhtLqnhF4QJnH3obXSYm8ASWERmtT7yY/Nhj2JOVkHyspjXYA9TaEwn44KLtjOcQ+mlYb33NwAuWh/iuzDHvjvaabKvKpGFxQOJ2SGh31yfIHVLLl3cGcfaqZZRkdXJZg9rGP1KeEmZKuLT++u/pyX+0ms2R99RCGYGp/WWHYrqsc5eHHzU/7gd6assOUf65auB+GZEnZT5rH19ivQcZVQZp6e4fLLoZO7Um+Sf+7XzuU9+ZQN2uBzHJZvjeP3UgWL9NZ2gT3oyilVVTyWAuyjvr2CZGQYDrlHqPQvdNr5UMtzLyb+qH+UTe/HlgCZh/HSlWTKbUgcWwqRlld70mQLYKqXQ5RwgGl72HnQ5B1lrdGqlaWP17W64YXWVac6VrnN5zGDKVVbj1Ij8sC6191c/vUCRuyoNbvgXE33KBTlJSlZhCuytgHIC62dZWG7tq/rNfMj2uGiC60yZTynOMYymA2KJwI0cqdLbvvrASyroOWumGFD/F5bC3oZ769gGrKy26qCZayrjJ+Kun8hQ0vfsuUsunELaGkbuWrch+N9vH9xo7sQPprSrFvfwgcyxciuhbynb/VZ81vNkSQeIAdNNuNrvepbta9kjRwbpSbDoxJiwi+f3JycnPjEeY4aili/6MIgp3vO1L7PGxsHtr/oQ6cQIyQxzHkzLlRB3ZuWo68FT4emb/McIVa2Y7bzUWeIraaW0c0mE2PzNDLzr6EMZe9StjY5Kuap+byjNowtmtfIg8EM/YYi+GbmemqJv0PkjAugf2XuSrbFWrPkyifSNlSdub7IHBBKbedXCAzptS97NdTdikzXR+79bgdbB5BmeVa53f5NMyMKf/K4nmn3CkbKaakF59SO5t1ZWXSkouRjxaD8jYhXzBD0WeizPZptk5SunIpKNsMUDzTkxbJS06jmMWgNOXgaZlX54daJ+IBm4YuGuWaw2fd/XUelBk/AXXs+E/32GVRehKtJoeYtL+OPsVKywgCjP5/+E38hbLfleEMD5crJSQcAys05UuG/wGU9+q7Cx5UX5MoC9QutWrJRqPtMg3h+Mfia0T0SA77FZxw2itWSszpGMWlfGaNlW8+lHDsdI6UTVfMVmH7QNMoQQFt2XHwbIzx6OEFYi+UA2XDTkMZjz/28/EXy2MfkQOSA2XmuzI8Z/8Eyj0ja8o89oTZZr1yxXBM5JpOGa889hEx38CxYi8fpXZOsqfMfq+mNfZPoDw2UGQz/MklHT0IJ2roAlMvBKHIgbLKQWSBQQaU+eyh9okMVnVmQglIDt9PcssiG8TNjXJyH9u1JfuSPeVrQ8D+wD4NZRxhzO1Cto0AwiVDfG5nT9lmYIIpplLG23E6JfQpxX7JOLioZc8odYJxv6QpbJmitk68kACAuJfbuSBKrfM+JUymfKgtAXK9z428GOWwxKHJ8fjYgQHdxDvTP6gWrQmMifGpkk9VDdXpUk4248yUowaWiBQz5zy3qhqqGskXPJpyrBpjhA0vD686qu98Rko4AyVhZzl51RFtkIdS9t+Nnepu0QSZcdrJGy/UBUsY3o9ZaYhwjJL6wlOUmPDnOXrVER0ZMJlyIuRESnpDfelXiXHWLERVDVXb5/OkhD4UtvSqx2byr85SP5PZKaclslQ4brtvXhXAq45ojc1js3wkKBRIYG78KIZXHVHHiNv4I63U3D22yIufOwWrqqGq6gGCB8+R9CQE4qR1e503zVSdlebwZV2o5H5vFqfnGFfdesS3k1IMBIKYGVudct4gsdpzwGwL8iKC4Eb2/wx9buvJvyhXXTuPcLLUJ86PiyJX1Z52Hg4JmV2YWDVBW2S26SDQW9jGGX9bXK86ol8YmKFdqhgOUoRlAHBWaK86oo4hZqmzcvyPsCix00qxveqIqvYs7gdjD3LDvlyYqhpKPzBm6DAp5e5V87e8Cz27NtI8j4A8RLEMAAg7fV3EeDxRF7G7N4XiJRkiceItXFXt6dpJsWoLIUDYzlo178I+WOZJigeFbMvY3Vsorzqq0xhKqNwq5AxdHuddzEfqbvqjtdjzLGA7V2uL2hwH2pz+nCLE2HZ+vC5mBmA2NWLcj0PWN4s+rEqp4ecU+8E7JGz/bnG96qhubX+wd67AWEAoY9vcZ+TmrAtnQAk5QFSOO4jzLO8ZuTnriPmR7dxkTeWG93l5qmqosvrusl73iFrE2F2sYVVKnRMBhKyoqlEazvmiBwBTtGYgaAEBfG7svzrKuzRPpY4BPQ/7xFnOqhqqYUvfWrJPl7Sq9nRF3DdFWOfwtPrf2f0yBQBT1FiGeHyllVZaaaWVVlpppZWKpf8D129GqTqyddAAAAAASUVORK5CYII=" />
                                                        </pattern>
                                                    </defs>
                                                    <rect id="vng" width="84" height="84" fill="url(#pattern)" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Software engineer</h5>
                                            <h6 class="card-subtitle mb-2">Google</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-money">
                                            <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                                            <p class="card-text p-money">100.000.000đ/tháng</p>
                                        </div>
                                        <div class="col-time">
                                            <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                            <span class="card-text p-time">Toàn thời gian</span>
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-8 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="card-text p-timeleft">Còn 10 ngày</p>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 84 84">
                                                    <defs>
                                                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 229 220">
                                                            <image width="200" height="160" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOUAAADcCAMAAAC4YpZBAAABDlBMVEX////oTg7pTg7mThLrRQD8///rTA7+/f3nRwDpQQD9//rpTRLoRADsjm/zpovsRQDyx7PwsJrqiWrtkW798+v42sraQADrfVHnSwDiSwDjRQD54NL9/PbfYCjkdkr4yLfnm3zuPgDkUQzlWiL58+zut6HiURPhb0HcTgD77OH++//40sbvShDw4Nzv1s7kXSXufl73hWvlZTXog2HmpITvva/nkHTtZjfvopTuxbzifWHmUR/x3tXilXfys5zvq57ZVgvym4Tw8d7006/75Mf5poj/8fPt5NTyyKLw//vnbU/caCjjmG7hoIv689T1rJPsv6jacD/kyLPniV/z//PwsYf5xa3ZYDfsZj7hkoB7QYfnAAAN0ElEQVR4nO2dDV/bthaHLSlWZEutA4QimwCxSExCzMugQLvSDnq77bZbL9y1a3u//xe5kuMkzpvtQLCdLP/2lzZ2MHp8pKOjI1nRtJVWWmmllVZaaaWVCirzKO8SZKDjk9O8i/DkamwxZyPvQjyx9CbhlP+UdzGeVptnTABK1vMux1Oqve5wiCAqPcu7JE8ns9myMAAALzNl58wlnlhuyva5QaiAcJkpGy+dEhIQIbDElHsnDlZW7Go5Ka9PHcsHIkq5dD2JrKzcQ0JAvLyU5oVncQgE9PHy2vL4gJBBg1xOysYlsy1PLDdl0yOAenSSLZfGxx4fGBhQMMa4TJTVS8YnAC4VpdnklpgGuSyUx1eOLSvrdEpr8Snb6waNxABLSVm+cwiAFAgUR7ngPUlnxwFYVdaprXLx+8ujc8cCU33rclA2XglXIIhjmuTiU772GAaYT2+PEcpF9T7XPxspABebslGXA2XPS025kLn1izdMQAGSGuRCU16fMgiQD7wk57rANbbx1iEIQBTXQy46Ze3Cs/y0eH3KBYvwjn8wjNPW1AjlIvWXjXXWQildzsJSvrMZxRDB6WOsaZSLE/t0vkvPmt7lLCRle90tPQCwR7kQ3qf2i229eZAdQ8pFiAo6ZwyPZVmXzJZHMi6f3bEOURa+v6zdGRbwHklZdFteCEMIPJ4vXyZbtncd7GEoHkcJC03ZuA3i8scAhpQF7i8vkO3PGuZMVIGjgusDwxfTZwWWgrJx6XJw4z/KtRadUm8K4lGIwXxsWcwVanIQORe6norYXzZ+Muy5QhaR8l2LySBguW25eWVg6M2hjywwpfSss3lVmMroxaJcc0rcmylBl5qyMD1JZZ/ZMi5vLTOljMs5wj6KmzlfdMraq/46lrlEriP3ohiZytfIeUTCI1GFyMe2dw0fpZ2/eiBl3j62/Nz1fQ/QlDOuD6PMuye5B+yNEIlLAxaacvvAeEq8QlA2Nlw6n7FVgSmb3PDErHORD6PMzfvIuBxB+IQ+Z6DcsluNS1aa99BjqvKKfS5IiQv6pI41d8rNK1d4NPpcy/JRNk4N2wNYQPoEIWtRKNccC3SnlDNqlTn42L/O3Jjluk9GmWl/2T53beRn1RzzoSzfOoQCIbJqjrlQvt53OJQ+J7PmmAPl0YHBM8frU2bjfRr1eefLZ6TMoCfRL2yb5mbJrCjfughjL9npQIDlcBpG3qtDFEEAMQwlP4FVjA8x6D75jLF8p4LFwUfU3+wpb21V0AREwRFxWsIeFFBwqZZNhQSxh8QYoWo5XhAIU/kjkDCHd89xW2LjobXe2VDusRSdB3Wb79u/H72vk17ZrMvq+3a7WnH81r/kfyLavlgnpB8hIkzQn5Xt/tn3H26GZ+qzoWykSXsIVtEPzbL+K+sd4XXt0NT0D4xax2U9lKZeTL18vcVK3UGNoEa90TujXrXfxPBKr4x8bJplu9SpaKYs/12PEpG6rpdNfZOg0u9mOVTAUjblJ+uOCCixU9Hl3ZHk3Q+UzcZI4JFRf/nMSkHJKpomS/u8b8tSXZdF1jYZcLaDy3T5pAKbaXVHeiABjH9rpqmVNWl2eUbdqd/4qPfJhLJp9PxfDKZRkUxRSquuyCQldLZ1dZnAVEpmTfLUzCskx2/Whl4rS5PL+xFKb9h0xPtkQnn9IMpSXdmnS9ktvhaYMZAE+9hhvmfZDd08/HioR1S9Gc5CZESpO/iRlIEtX37a7epdVVGa5h9+y/1TER/q7dvdnk530ShlNvMkZ7YM0h9QY4cpvxjEJkrsvCZbpmZ+dtVPydZb/s+V2z2lxMFwbjCrXMFl4jOSadrlBglLj43N4LJNg4aV+aURE3ZkRbln8MQnJJJt2aOk2F3rXtahTlv+W9Y/xTzinhll+wVHSdac2C7NiZTAudN7lNUupR1z5cyyWydW4ug5llKLUkIcUlYc/KIanNqyfRnYq2i/pzwoz0niouwxSlKXDkbTPoxRAsTCGsv6lARZNzK0b0nJkL1le1hE9/fJJlfwzqBJSa1plJvGGCWdQMl3q9GA/m83B8prIzF190hKsqUCPD38ffq9OwhmM6NsOIlLXMYpX6owdgZKGbH3f+E9GYxLMqPUD+y4ZLOMF+gYpfFNVwcqxlh/2ad0opRmWcYK5mHXnhcGyr7GanUWZ0sVFbExyg9qRKXfpaVUtlSDz3KX0otQZrUSpmMkUI7Zkl/V9NrhR+0LmV5jI5T8VDfDYVl+lPH5glFKFfAa95oaUjX2cSpKQP97dnBwcLbzl5YfpXYzk/dB0D2TQ0gZ1RwzxEmPMuyOepSyyUaiAkEg4b7bpWxG7mqGlF+SHp+MUlK/ZQdkZW2jhAeUcITSRUGEp8kID6pAFgrK7oMD74YoM5u/XGOT4SZSCizfKUa9zX2QhtLqnhF4QJnH3obXSYm8ASWERmtT7yY/Nhj2JOVkHyspjXYA9TaEwn44KLtjOcQ+mlYb33NwAuWh/iuzDHvjvaabKvKpGFxQOJ2SGh31yfIHVLLl3cGcfaqZZRkdXJZg9rGP1KeEmZKuLT++u/pyX+0ms2R99RCGYGp/WWHYrqsc5eHHzU/7gd6assOUf65auB+GZEnZT5rH19ivQcZVQZp6e4fLLoZO7Um+Sf+7XzuU9+ZQN2uBzHJZvjeP3UgWL9NZ2gT3oyilVVTyWAuyjvr2CZGQYDrlHqPQvdNr5UMtzLyb+qH+UTe/HlgCZh/HSlWTKbUgcWwqRlld70mQLYKqXQ5RwgGl72HnQ5B1lrdGqlaWP17W64YXWVac6VrnN5zGDKVVbj1Ij8sC6191c/vUCRuyoNbvgXE33KBTlJSlZhCuytgHIC62dZWG7tq/rNfMj2uGiC60yZTynOMYymA2KJwI0cqdLbvvrASyroOWumGFD/F5bC3oZ769gGrKy26qCZayrjJ+Kun8hQ0vfsuUsunELaGkbuWrch+N9vH9xo7sQPprSrFvfwgcyxciuhbynb/VZ81vNkSQeIAdNNuNrvepbta9kjRwbpSbDoxJiwi+f3JycnPjEeY4aili/6MIgp3vO1L7PGxsHtr/oQ6cQIyQxzHkzLlRB3ZuWo68FT4emb/McIVa2Y7bzUWeIraaW0c0mE2PzNDLzr6EMZe9StjY5Kuap+byjNowtmtfIg8EM/YYi+GbmemqJv0PkjAugf2XuSrbFWrPkyifSNlSdub7IHBBKbedXCAzptS97NdTdikzXR+79bgdbB5BmeVa53f5NMyMKf/K4nmn3CkbKaakF59SO5t1ZWXSkouRjxaD8jYhXzBD0WeizPZptk5SunIpKNsMUDzTkxbJS06jmMWgNOXgaZlX54daJ+IBm4YuGuWaw2fd/XUelBk/AXXs+E/32GVRehKtJoeYtL+OPsVKywgCjP5/+E38hbLfleEMD5crJSQcAys05UuG/wGU9+q7Cx5UX5MoC9QutWrJRqPtMg3h+Mfia0T0SA77FZxw2itWSszpGMWlfGaNlW8+lHDsdI6UTVfMVmH7QNMoQQFt2XHwbIzx6OEFYi+UA2XDTkMZjz/28/EXy2MfkQOSA2XmuzI8Z/8Eyj0ja8o89oTZZr1yxXBM5JpOGa889hEx38CxYi8fpXZOsqfMfq+mNfZPoDw2UGQz/MklHT0IJ2roAlMvBKHIgbLKQWSBQQaU+eyh9okMVnVmQglIDt9PcssiG8TNjXJyH9u1JfuSPeVrQ8D+wD4NZRxhzO1Cto0AwiVDfG5nT9lmYIIpplLG23E6JfQpxX7JOLioZc8odYJxv6QpbJmitk68kACAuJfbuSBKrfM+JUymfKgtAXK9z428GOWwxKHJ8fjYgQHdxDvTP6gWrQmMifGpkk9VDdXpUk4248yUowaWiBQz5zy3qhqqGskXPJpyrBpjhA0vD686qu98Rko4AyVhZzl51RFtkIdS9t+Nnepu0QSZcdrJGy/UBUsY3o9ZaYhwjJL6wlOUmPDnOXrVER0ZMJlyIuRESnpDfelXiXHWLERVDVXb5/OkhD4UtvSqx2byr85SP5PZKaclslQ4brtvXhXAq45ojc1js3wkKBRIYG78KIZXHVHHiNv4I63U3D22yIufOwWrqqGq6gGCB8+R9CQE4qR1e503zVSdlebwZV2o5H5vFqfnGFfdesS3k1IMBIKYGVudct4gsdpzwGwL8iKC4Eb2/wx9buvJvyhXXTuPcLLUJ86PiyJX1Z52Hg4JmV2YWDVBW2S26SDQW9jGGX9bXK86ol8YmKFdqhgOUoRlAHBWaK86oo4hZqmzcvyPsCix00qxveqIqvYs7gdjD3LDvlyYqhpKPzBm6DAp5e5V87e8Cz27NtI8j4A8RLEMAAg7fV3EeDxRF7G7N4XiJRkiceItXFXt6dpJsWoLIUDYzlo178I+WOZJigeFbMvY3Vsorzqq0xhKqNwq5AxdHuddzEfqbvqjtdjzLGA7V2uL2hwH2pz+nCLE2HZ+vC5mBmA2NWLcj0PWN4s+rEqp4ecU+8E7JGz/bnG96qhubX+wd67AWEAoY9vcZ+TmrAtnQAk5QFSOO4jzLO8ZuTnriPmR7dxkTeWG93l5qmqosvrusl73iFrE2F2sYVVKnRMBhKyoqlEazvmiBwBTtGYgaAEBfG7svzrKuzRPpY4BPQ/7xFnOqhqqYUvfWrJPl7Sq9nRF3DdFWOfwtPrf2f0yBQBT1FiGeHyllVZaaaWVVlpppZWKpf8D129GqTqyddAAAAAASUVORK5CYII=" />
                                                        </pattern>
                                                    </defs>
                                                    <rect id="vng" width="84" height="84" fill="url(#pattern)" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Software engineer</h5>
                                            <h6 class="card-subtitle mb-2">Google</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-money">
                                            <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                                            <p class="card-text p-money">100.000.000đ/tháng</p>
                                        </div>
                                        <div class="col-time">
                                            <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                            <span class="card-text p-time">Toàn thời gian</span>
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-8 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="card-text p-timeleft">Còn 10 ngày</p>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 84 84">
                                                    <defs>
                                                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 229 220">
                                                            <image width="200" height="160" xlink:href="data:image/png;base64,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" />
                                                        </pattern>
                                                    </defs>
                                                    <rect id="vng" width="84" height="84" fill="url(#pattern)" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Software engineer</h5>
                                            <h6 class="card-subtitle mb-2">Google</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-money">
                                            <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                                            <p class="card-text p-money">100.000.000đ/tháng</p>
                                        </div>
                                        <div class="col-time">
                                            <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                            <span class="card-text p-time">Toàn thời gian</span>
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-8 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="card-text p-timeleft">Còn 10 ngày</p>
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
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80" height="80" viewBox="0 0 84 84">
                                                    <defs>
                                                        <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 229 220">
                                                            <image width="200" height="160" xlink:href="data:image/png;base64,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" />
                                                        </pattern>
                                                    </defs>
                                                    <rect id="vng" width="84" height="84" fill="url(#pattern)" />
                                                </svg>
                                            </span>
                                        </div>
                                        <div class="col-text">
                                            <h5 class="card-title format-text-bold">Software engineer</h5>
                                            <h6 class="card-subtitle mb-2">Google</h6>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="col-money">
                                            <span><i class="fa fa-eur" aria-hidden="true"></i></span>
                                            <p class="card-text p-money">100.000.000đ/tháng</p>
                                        </div>
                                        <div class="col-time">
                                            <span><img class="img-time" src="./Images/time.jpg" alt=""></span>
                                            <span class="card-text p-time">Toàn thời gian</span>
                                        </div>
                                    </div>
                                  
                                    <div class="col-sm-12">
                                        <p class="card-text p-request">PHP</p>
                                        <p class="card-text p-request">Golang</p>
                                        <p class="card-text p-request">My SQL</p>
                                        <p class="card-text p-request">English</p>
                                    </div>
                                    <div class="col-sm-8 col-diadiem">
                                        <span><i class="fa fa-map-marker" aria-hidden="true"></i><span>
                                                <span class="card-text p-diadiem">Thành Phố Hồ Chí Minh</span>
                                    </div>
                                    <div class="col-sm-4">
                                        <p class="card-text p-timeleft">Còn 10 ngày</p>
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
<script src="./Script/script2.js"></script>
</html>