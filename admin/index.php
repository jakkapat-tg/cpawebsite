
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>หน้าแรก</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="tem/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="tem/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="tem/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="tem/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="tem/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="tem/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="tem/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="tem/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="tem/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <?php $page = 'index'; include "./components/navbar.php" ; if($_SESSION['fname'] == '' ){echo "<script> document.location.href='login.php';</script>"; }?>

  <div class="container-fulid ml-3 mr-3">
  
    <div class="row">
      <div class="col-md-3">
        <div class="info-box mb-3 bg-info">
          <span class="info-box-icon"><i class="far fa-comment"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">แนะนำติชมร้องเรียน(ทั้งหมด)</span>
            <span class="info-box-number">163,921</span>
          </div>
          <!-- /.info-box-content -->
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-box mb-3 bg-warning">
          <span class="info-box-icon"><i class="far fa-comment"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ร้องเรียนเจ้าหน้าที่หน่วยงาน</span>
            <span class="info-box-number">163,921</span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-box mb-3 bg-primary">
          <span class="info-box-icon"><i class="far fa-comment"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ร้องเรียนการให้บริการ</span>
            <span class="info-box-number">163,921</span>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="info-box mb-3 bg-success">
          <span class="info-box-icon"><i class="far fa-comment"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">ข้อคิดเห็นและคำชมเชย</span>
            <span class="info-box-number">163,921</span>
          </div>
        </div>
      </div>
    </div>


    <div class="welcome-screen mt-2">
      <h3>ยินดีต้อนรับ เข้าสู่การใช้งาน Admin Cpa</h3>
      <p>คุณ : <?php echo $_SESSION['fname'].' '.$_SESSION['lname'].'&nbsp;&nbsp;  สิทธิการเข้าถึง: '.$_SESSION['role']?></p>
      <hr>
      แจ้งปัญหาการใช้งาน ติดต่อ 3148 3149
    </div>

    <div class="col-md-12 mt-5">
      <p class="text-center">
        <strong>จำนวนการเพิ่มข่าวประชาสัมพันธ์</strong>
      </p>

      <div class="progress-group">
        Add Products to Cart
        <span class="float-right"><b>160</b>/200</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-primary" style="width: 80%"></div>
        </div>
      </div>
      <!-- /.progress-group -->

      <div class="progress-group">
        Complete Purchase
        <span class="float-right"><b>310</b>/400</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-danger" style="width: 75%"></div>
        </div>
      </div>

      <!-- /.progress-group -->
      <div class="progress-group">
        <span class="progress-text">Visit Premium Page</span>
        <span class="float-right"><b>480</b>/800</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-success" style="width: 60%"></div>
        </div>
      </div>

      <!-- /.progress-group -->
      <div class="progress-group">
        Send Inquiries
        <span class="float-right"><b>250</b>/500</span>
        <div class="progress progress-sm">
          <div class="progress-bar bg-warning" style="width: 50%"></div>
        </div>
      </div>
      <!-- /.progress-group -->
    </div>


  </div>







  <!-- jQuery -->
  <script src="tem/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="tem/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="tem/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="tem/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="tem/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="tem/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="tem/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="tem/plugins/moment/moment.min.js"></script>
  <script src="tem/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="tem/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="tem/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="tem/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="tem/dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="tem/dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="tem/dist/js/demo.js"></script>
</body>

</html>