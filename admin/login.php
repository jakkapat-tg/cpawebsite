<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./tem/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./tem/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./tem/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src='https://www.google.com/recaptcha/api.js?hl=th'></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>


<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="../"><b>Admin </b>CPA</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">โปรดเข้าสู่ระบบเพื่อแก้ไข้ข้อมูลต่างๆ</p>

        <form action="#" method="post">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>

          <center>
            <div class="g-recaptcha " data-sitekey="6LcuJLEZAAAAABMp836tXMSqp8ff8vByyC8C05t5"></div>
            <br />
          </center>

          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block" name="submit" value="submit">เข้าสู่ระบบ</button>
            </div>
          </div>
        </form>

        <?php
        include("../sqlconfig/config.php");
        if (isset($_POST['submit'])) {
          $username = $_POST['username'];
          $password = $con->real_escape_string($_POST['password']);
          //echo $username . ' password escapestring' . $password;
          $secret = '6LcuJLEZAAAAAL6LKLY-WHppmsdxyOM3iMeT_u_k'; //คีย์ฝั่ง server
          require_once './recaptcha-master/src/autoload.php';
          $recaptcha = new \ReCaptcha\ReCaptcha($secret);
          $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

          //เช็คRobot
          if ($resp->isSuccess()) {
            //ถ้า captcha ถูกต้องทำต่อตรงนี้ 
            $sql = "SELECT * FROM cpa_web_user WHERE username = '$username' and status ='1'";
            $query = $con->query($sql);
            $accoutUsser =  $query->fetch_assoc();
            $passwordinDb = $accoutUsser['password'];

            if ($query->num_rows > 0) { //เช็ค db หากมี user 
              if (password_verify($password, $passwordinDb)) {   //เช็ครหัสผ่าน
                echo '<br/><br/><span style="color:green">Password is valid!</span>';
                session_start();
                $_SESSION['username'] = $accoutUsser['username'];
                $_SESSION['fname'] = $accoutUsser['fname'];
                $_SESSION['lname'] = $accoutUsser['lname'];
                $_SESSION['role'] = $accoutUsser['role'];
                header('location:./index.php');
              } else {
                //หากใส่รหัสผิด
                echo ' <script>clearform();</script>';
                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'User หรือ password ผิดพลาด', })</script>";
              }
            }
          } else {
            echo "<script>Swal.fire({ icon: 'error',  title: 'กรุณากดยืนยัน...',text: 'ผิดพลาดไม่ได้ยืนยันว่าไม่ใช่ Robot!', })</script>";
          }
        }
        ?>

      </div> <!-- /.login-card-body -->
    </div>
  </div>

  <script>
    function clearform() {
      document.getElementById("username").value = ""; //don't forget to set the textbox ID
      document.getElementById("password").value = ""; //don't forget to set the textbox ID
    }
  </script>

  <!-- jQuery -->
  <script src="./tem/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="./tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="./tem/dist/js/adminlte.min.js"></script>

</body>

</html>