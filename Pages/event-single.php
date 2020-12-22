<!DOCTYPE html>
<html lang="en">

<head>
  <title>รายละเอียดกิจกรรม</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icdo" href="../cpawebsite/uploads/image/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../cpawebsite/css/animate.css">
  <link rel="stylesheet" href="../cpawebsite/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../cpawebsite/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../cpawebsite/css/magnific-popup.css">

  <link rel="stylesheet" href="../cpawebsite/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="../cpawebsite/css/jquery.timepicker.css">

  <link rel="stylesheet" href="../cpawebsite/css/flaticon.css">
  <link rel="stylesheet" href="../cpawebsite/css/style.css">
  <style>
    @font-face {
      font-family: myFirstFont;
      src: url('../cpawebsite/fonts/flaticon/font/Kanit-Light.ttf');
    }
    div {
    font-family: myFirstFont;
    }
  </style>
</head>

<body>
  <?php $page = "about"; ?>
  <?php include "./cpawebsite/Pages/stampviewer.php"; ?>
  <div class="wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center">
          <p class="mb-0 phone pl-md-2">
            <a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>โทร 037-211-088 037-211-088 แฟกซ์ 037-211-243 037-211-243 </a>
          </p>
        </div>
        <div class="col-md-6 d-flex justify-content-md-end">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="https://www.facebook.com/abhaibhubejhrhospital/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
              <a href="../cpawebsite/admin/login.php" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-sing-in"><i class="fa fa-sign-in" aria-hidden="true"></i></span></a>
            </p>
          </div>
        </div>

      </div>
    </div>
  </div>

  <?php
    $selectnavcolor = "SELECT * FROM cpa_navbar";
    $querynavcolor	 = mysqli_query($con,$selectnavcolor);
    $resultcolor = mysqli_fetch_assoc($querynavcolor);

  ?>

  <style>
    .ftco-navbar-light {
      background:<?php if($resultcolor['cpa_background_color'] == '' || $resultcolor['cpa_background_color'] == null) echo '#fff'; else {echo $resultcolor['cpa_background_color'];}?>  !important;
    }

    .ftco-navbar-light .navbar-brand span {
      color:<?php if($resultcolor['cpa_text_blod_color'] == '' || $resultcolor['cpa_text_blod_color'] == null) echo '#207dff';else {echo $resultcolor['cpa_text_blod_color'];} ?>
    }

    .ftco-navbar-light .navbar-brand {
      color: <?php if($resultcolor['cpa_text_color'] == '' || $resultcolor['cpa_text_blod_color'] == null) echo '##000000';else {echo $resultcolor['cpa_text_color'];} ?>
    }

    .ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
      color: <?php if($resultcolor['cpa_text_color'] == '' || $resultcolor['cpa_text_blod_color'] == null) echo '##000000';else {echo $resultcolor['cpa_text_color'];} ?>
    }
  </style>

  <!-- NAV -->
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="/">โรงพยาบาล <span>เจ้าพระยาอภัยภูเบศร </span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item "> <a href="../web_63" target="_blank" class="nav-link">เว็บไซต์เดิม</a></li> 
          <li class="nav-item <?php if ($page == "index") {echo "active";	} ?>"> <a href="../" class="nav-link">หน้าแรก</a></li>
          <li class="nav-item <?php if ($page == "about") {	echo "active";	} ?> dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              เกี่ยวกับเรา
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../about">เกี่ยวกับเรา</a>
              <a class="dropdown-item" href="../manager">คณะผู้บริหาร</a>
              <a class="dropdown-item" href="../event">กิจกรรม</a>
          </li>

          <li class="nav-item <?php if ($page == "news") {	echo "active";		} ?>"><a href="../news" class="nav-link">ประชาสัมพันธ์</a></li>
          <li class="nav-item"><a href="http://wops.moph.go.th/ops/oic/" target="_blank" class="nav-link">ศูนย์ข้อมูลข่าวสาร</a></li>
          <li class="nav-item"><a href="../ita"  class="nav-link">ITA</a></li>
          <li class="nav-item <?php if ($page == "contact") {	echo "active";	} ?> dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">	ติดต่อ</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="../contact">ติดต่อ</a>
              <a class="dropdown-item" target="_blank" href="	https://cpa.go.th/complaint/">แนะนำร้องเรียนติชม</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  


  <section class="ftco-section ftco-degree-bg">
    <div class="container">
  
      <?php
      if(!isset($idevent)){ echo $message = '<H1 class="text-center">ไม่พบข้อมูล</H1>';}
      if (isset($idevent)) {
        $selectevent = "SELECT * FROM cpa_events where cpa_event_id = '$idevent' ";
        $queryEvents = mysqli_query($con, $selectevent);
        while ($Resultevent = mysqli_fetch_assoc($queryEvents)) {
      ?>
          <div class="row">
            <div class="col-lg-12 ftco-animate">
              <p>
                <img src="../cpawebsite/uploads/image/event/<?php echo $Resultevent['cpa_event_path'];?>" alt="" class="img-fluid">
              </p>
              <i class="fa fa-eye" aria-hidden="true">&nbsp;
                     <?php 
                       $sqlcountview   = "SELECT count(*)as viewpage FROM cpa_web_counter where visit = '/event-single/".$Resultevent['cpa_event_id']."' ";
                       $querycountView = mysqli_query($con,$sqlcountview);
                       $rusultView = mysqli_fetch_assoc($querycountView);
                       echo $rusultView['viewpage'];
                      ?>
                  </i>
              <h2 class="mb-3"><?php echo $Resultevent['cpa_event_topic']; ?></h2>
              <h6 class="mb-3"><?php echo $Resultevent['cpa_event_detail']; ?></h6>
              <textcontent style="word-wrap:break-word;"> 
                <?php echo $Resultevent['cpa_event_content']; ?>  
              </textcontent >
            </div> 
            
          </div>

                  
          <!-- ------------------------------------------------------  EVENT PICTURE   ----------------------------------------------------------- -->
          <section class="ftco-section">
            <div class="container px-md-4">
              <div class="row">
                <?php
                $selectevent = "SELECT * FROM cpa_events where cpa_event_id = '$idevent'";
                $queryEvents = mysqli_query($con, $selectevent);
                while ($Resultevent = mysqli_fetch_assoc($queryEvents)) {
                ?>
                    <?php
                     for($fp = 1;$fp < 7 ;$fp++){
                      if($Resultevent['cpa_event_pic'.$fp] !='' || $Resultevent['cpa_event_pic'.$fp]!= null){

                    ?>
                      <div class="col-md-4  ftco-animate">
                        <div class=" work mb-4 img d-flex align-items-end" style="background-image: url(../cpawebsite/uploads/image/event-gallery/<?php echo $Resultevent['cpa_event_pic'.$fp]; ?>);">
                          <a href="../cpawebsite/uploads/image/event-gallery/<?php echo $Resultevent['cpa_event_pic'.$fp]; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="fa fa-expand"></span>
                          </a>
                        </div>  
                      </div>
                    <?php }} ?>
                <?php } ?>
              </div>
            </div>
          </section>
          <!-- ------------------------------------------------------  EVENT PICTURE   ----------------------------------------------------------- -->

      <?php
        }
      }
      ?>
    </div>
  </section>
  <!-- .section -->

	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="../cpawebsite/js/jquery.min.js"></script>
	<script src="../cpawebsite/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="../cpawebsite/js/popper.min.js"></script>
	<script src="../cpawebsite/js/bootstrap.min.js"></script>
	<script src="../cpawebsite/js/jquery.easing.1.3.js"></script>
	<script src="../cpawebsite/js/jquery.waypoints.min.js"></script>
	<script src="../cpawebsite/js/jquery.stellar.min.js"></script>
	<script src="../cpawebsite/js/jquery.animateNumber.min.js"></script>
	<script src="../cpawebsite/js/bootstrap-datepicker.js"></script>
	<script src="../cpawebsite/js/jquery.timepicker.min.js"></script>
	<script src="../cpawebsite/js/owl.carousel.min.js"></script>
	<script src="../cpawebsite/js/jquery.magnific-popup.min.js"></script>
	<script src="../cpawebsite/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="../cpawebsite/js/google-map.js"></script>
	<script src="../cpawebsite/js/main.js"></script>
	<!-- loader -->

</body>

</html>