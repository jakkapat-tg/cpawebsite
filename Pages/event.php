<!DOCTYPE html>
<html lang="en">

<head>
  <title>กิจกรรม</title>
  <meta charset="utf-8">
	<link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="./cpawebsite/css/animate.css">

	<link rel="stylesheet" href="./cpawebsite/css/owl.carousel.min.css">
	<link rel="stylesheet" href="./cpawebsite/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="./cpawebsite/css/magnific-popup.css">


	<link rel="stylesheet" href="./cpawebsite/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href=".css/jquery.timepicker.css">

	<link rel="stylesheet" href="./cpawebsite/css/flaticon.css">
	<link rel="stylesheet" href="./cpawebsite/css/style.css">
</head>

<body>
  <?php
    $page = "about";
    include "./cpawebsite/components/navbar.php";

    function DateThai($strDate)
    {
      $strYear = date("Y", strtotime($strDate)) + 543;
      $strMonth = date("n", strtotime($strDate));
      $strDay = date("j", strtotime($strDate));
      $strHour = date("H", strtotime($strDate));
      $strMinute = date("i", strtotime($strDate));
      $strSeconds = date("s", strtotime($strDate));
      $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
      $strMonthThai = $strMonthCut[$strMonth];
      return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
    }
    //$strDate = "2020-08-14 13:42:44";
    //echo "ThaiCreate.Com Time now : " . DateThai($strDate);
  ?>

  <section class="ftco-section bg-light">


    <div class="container">
      <?php
        $start = 1;
        $perpage = 9;
        $getpage =  preg_replace("/[^\d]/i", '',$_GET['page']);

        if (isset( $getpage)) {
          $page =  $getpage;
           if($page >= 1){
            $start = ($page - 1) * $perpage;
           }   
        } else {
          $page = 1;
        }

        //query เอาเลขหน้า
        $sql = "select * from cpa_events  where cpa_event_status = '1' ORDER BY cpa_event_id desc limit {$start} , {$perpage} ";
        $query = mysqli_query($con, $sql);

        $allrec = "SELECT * FROM cpa_events ORDER BY cpa_event_id desc";
        $queryalrecord = mysqli_query($con, $allrec);

        if (isset($_GET['txtKeyword'])) {
          $txtkeyword =  preg_replace('/[^a-z0-9\_\- ]/i', '', ($_GET['txtKeyword']));
         
          if ( $txtkeyword != "") {
            $sql  =  "select * from cpa_events 
                          WHERE   cpa_event_topic LIKE '%" .  $txtkeyword . "%' 
                          or cpa_event_user_insert LIKE '%" .  $txtkeyword . "%' 
                          ORDER BY cpa_event_id desc";
          } else {
             $sql = "select * from cpa_events  ORDER BY cpa_event_id desc limit {$start} , {$perpage} ";
          }
          $query = mysqli_query($con, $sql);
        }
      ?>


      <!--  //////////////////////////////////////////// ค้นหา/////////////////////////////////////////////////////////     -->
      <div class="nonprint" >
        <form name="frmSearch" method="get" action="./event?txtKeyword">
            <div class="row">
              <div class="col-lg-8">
                <input name="txtKeyword" placeholder="ค้นหา" type="text" class="form-control" pattern="[A-Za-zก-ฮ]{1,}" id="txtKeyword" value="">
              </div>
              <div class="col-lg-4">
                  <input type="submit" class="btn btn-info btn-lg btn-block" value="ยืนยัน">
              </div>
            </div>
          <hr>
        </form>
      </div>
      <!--  //////////////////////////////////////////////////////////////////////////////////////////////////////////////    -->

      <div class="row d-flex">
        <?php  while ($Resultevent = mysqli_fetch_assoc($query)) {  ?>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <?php $image = $Resultevent['cpa_event_path']; ?>
              <a href="event-single/<?php echo $Resultevent['cpa_event_id']; ?>" class="block-20 rounded" style="background-image: url('./cpawebsite/uploads/image/event/<?php echo $image ?>');">
              </a>
              <div class="text p-4">
                <div class="meta mb-2">
                  <div><a href="event-single/<?php echo $Resultevent['cpa_event_id']; ?>"><?php echo DateThai($Resultevent['cpa_event_insert_date']); ?></a></div>
                  <div><a href="event-single/<?php echo $Resultevent['cpa_event_id']; ?>"><?php echo $Resultevent['cpa_event_user_insert']; ?></a></div>
                  <i class="fa fa-eye" aria-hidden="true">&nbsp;
                     <?php 
                       $sqlcountview   = "SELECT count(*)as viewpage FROM cpa_web_counter where visit = '/event-single/".$Resultevent['cpa_event_id']."' ";
                       $querycountView = mysqli_query($con,$sqlcountview);
                       $rusultView = mysqli_fetch_assoc($querycountView);
                       echo $rusultView['viewpage'];
                      ?>
                  </i>
                </div>
                <h3 class="heading"><a href="event-single/<?php echo $Resultevent['cpa_event_id']; ?>"><?php echo $Resultevent['cpa_event_topic']; ?></a></h3>
                <p><?php echo $Resultevent['cpa_event_detail']; ?></p>
                <p style="color:white"> ------------------------------------------------------------------------------------------------------</p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>


      <!--  /////////////////// ส่วนของ paginatorทำ query มาใหม่และนับจำนวนแถว //////////////////     -->
      <?php
        $sql2 = "select * from cpa_events order by cpa_event_id desc";
        if (isset( $txtkeyword)) {
          if ($txtkeyword != "") {
            $sql2  =  "select * from cpa_events 
            WHERE   cpa_event_topic LIKE '%" . $txtkeyword . "%' 
            or cpa_event_user_insert LIKE '%" . $txtkeyword . "%' 
            ORDER BY cpa_event_id desc";
          } else {
            $sql2 = "SELECT * FROM `cpa_events` ORDER BY `cpa_event_id` DESC";
          }
        }

        $query2 = mysqli_query($con, $sql2);
        $total_record = mysqli_num_rows($query2);
        $total_page = ceil($total_record / $perpage);
      ?>
      <!--  /////////////////// ส่วนของ paginatorทำ query มาใหม่และนับจำนวนแถว //////////////////     -->
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="event?page=1">&lt;</a></li>
              <?php for ($i = 1; $i <= $total_page; $i++) { ?>
                <li class="<?php if($page==$i){echo 'active';}?>" ><a href="event?page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
              <?php } ?>
              <li><a href="event?page=<?php echo $total_page; ?>">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  
  <?php include "./cpawebsite/components/footer.php" ?>


</body>

</html>