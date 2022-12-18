<?php
	require("check.php");
?>
<!DOCTYPE html>
<html>
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
	<!-- footer.css -->
	<link rel="stylesheet" href="../../../src/assets/Styles/footer.css">
	<!-- reponsive.css -->
	<link rel="stylesheet" href="../../../src/assets/Styles/reponsive.css">
	<!-- navbarUser -->
	<link rel="stylesheet" href="../../../src/assets/Styles/pageinfouser.css">
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>FindWork</title>
</head>

<body>
    <style>
        .format-nav{
            background-color: black !important;
        }
        #navbar-content{
            position: sticky;
        }
		.format-img-userxinviec-right{
			border-radius:100%;
		}
    </style>
	<div id="main">
		<?php
			require_once("./app/navbar.php");
            require_once("./app/infouser.php");
            require_once("../../../src/Views/layouts/app/footer.php");
            ?>
	</div>
</body>
        <!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <form action="../../../src/Controllers/C_setAvatar.php" method='post' enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Đổi ảnh đại diện</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <input type="file" name="avatar" class="form-control col-6" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <!-- end modal -->
<script src="../../../src/assets/Scripts/navbar.js"></script>
<script src="../../../src/assets/Scripts/script.js"></script>
<script src="../../../src/assets/Scripts/inforuser.js"></script>
</html>
<?php
if ($_SESSION["who"] =='Admin'){
		if (isset($_GET["id"])){
			// echo $_GET["id"];
			?>
				<script>
					setTimeout(function() {
						getAllInfoUserByIdURL(<?echo $_GET["id"]?>);
					},350)
				</script>
			<?php
		}
	}
?>