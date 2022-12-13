<?php
class FormLogin
{
  function previousLogin($previousUser, $previousPass)
  {
?>
    <!DOCTYPE html>
    <html lang='en'>

    <head>
      <meta charset='UTF-8'>
      <meta http-equiv='X-UA-Compatible' content='IE=edge'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <title>Sign In</title>
      <!-- Boostrap CDN -->
      <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC' crossorigin='anonymous' />
      <!-- Boostrap separate -->
      <!-- <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js' integrity='sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p' crossorigin='anonymous'></script> -->
      <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js' integrity='sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF' crossorigin='anonymous'></script>
      <!-- Jquery CDN -->
      <script src='https://code.jquery.com/jquery-3.6.1.min.js' integrity='sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=' crossorigin='anonymous'></script>
    </head>

    <body>
      <div class='container my-3 p-5'>
        <form action='../Controllers/C_SignIn.php' method='post' enctype='multipart/form'>
          <input type='hidden' name='SignIn' value='true'>
          <div class='form-group'>
            <label for='taikhoan'>Tài Khoản</label>
            <input value='<?=$previousUser?>' type='input' name='taikhoan' class='form-control' id='taikhoan' aria-describedby='emailHelp' placeholder='Enter UserName'>
            <small id='emailHelp' class='form-text text-muted'>We'll never share your email with anyone else.</small>
          </div>
          <div class='form-group'>
            <label for='exampleInputPassword1'>Mật Khẩu</label>
            <input value='<?=$previousPass?>' type='password' name='matkhau' class='form-control' id='exampleInputPassword1' placeholder='Enter Password'>
          </div>
          <div class='form-group form-check'>
            <input type='checkbox' name='remember' value='1' class='form-check-input' id='exampleCheck1'>
            <label class='form-check-label' for='exampleCheck1'>Remember me</label>
          </div>
          <button type='submit' class='btn btn-primary'>Đăng nhập</button>
          <div class='form-group align-center'>
            Bạn chưa có tài khoản?
            <button class='btn btn-primary'><a style='color:white;' class='nav-link' href='../Controllers/C_SignUp.php'>Đăng ký</a></button>
          </div>
        </form>
      </div>
    </body>

    </html>
<?php
  }
}
?>