<?php
    require_once("check.php");
?>
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
    <link rel="stylesheet" href="../../../src/assets/Styles/custom.css">
    <!-- navbar.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/navbar.css">
    <!-- content2.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/content2.css">
    <!-- nguoitimviecdathich.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/nguoitimviecdathich.css">
    <!-- reponsive.css -->
    <link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
      <!-- footer.css -->
  <link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Công việc đã thích</title>
</head>

<body>
    <style>
        .format-nav {
            background-color: black !important;
        }

        #navbar-content {
            position: sticky;
        }
        .cards:hover{
            box-shadow: 0 0 5px #cbcbcb !important;
            cursor: pointer;
        }
        .containerFooter{
            position: relative;
            bottom:0;
            right:0;
            left:0;
        }
    </style> 
    <div id="main" style="min-height:100vh;position:relative">
        <?php
        require_once("./app/navbar.php");
        ?>
        <div id="content">
            <div class="container container-content" style="min-height:70vh;">
                <div class="row">
                    <div class="col-sm-12 col-nguoitimviecdathich">
                        <div class="col-sm-12 format-text-heading">
                            <h4>Công việc đã thích</h4>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap" id="wrapSaveCT">

                    </div>

                </div>
            </div>
        </div>
        <div class="containerFooter">
        <?php
            require_once("../../../src/Views/layouts/app/footer.php");
        ?>
        </div>
    </div>
</body>

<script src="../../../src/assets/Scripts/script.js"></script>
<script src="../../../src/assets/Scripts/navbar.js"></script>
<script src="../../../src/assets/Scripts/like.js"></script>

</html>