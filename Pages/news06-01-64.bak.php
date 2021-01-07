<!DOCTYPE html>
<html lang="en">

<head>
  <title>ประชาสัมพันธ์</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include "./cpawebsite/components/header.php"; ?>

</head>

<body>
  <?php $page = "news";
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
  function Fullmonth($strmonth)
  {
    $strMonthCut = array("", "มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
    $strMonthThai = $strMonthCut[$strmonth];
    return "$strMonthThai";
  }

  ?>


  <div class="container">
    <h2 class="mt-5 text-info">ข่าวประชาสัมพันธ์</h2>
    <hr>


    <?php
    $getidfromuser = preg_replace("/[^\d]/i", '',$_GET['groupid']);

    if ($getidfromuser == '' || $getidfromuser == null) {
      $seleltgroupNews = "SELECT * FROM cpa_web_groupnews where status = '1'";
      $querygroupNews = mysqli_query($con, $seleltgroupNews);
      while ($groupNews  = mysqli_fetch_assoc($querygroupNews)) {// วนตาม group id
    ?>
        <p class="box">
          <h4 style="color: #009668;"><?php echo $groupNews['cpa_namegroup']; ?> </h4>
          <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-12 ml-5" style="margin-bottom:15px;">
            <?php
            $seleltNews = "SELECT *,DATEDIFF(cpa_createdatetime,NOW())as newpakead  FROM cpa_web_news where cpa_status = '1' 
            and cpa_groupnews_id =  '" . $groupNews['cpa_groupnews_id'] . "' ORDER BY cpa_createdatetime desc limit 3";
            $queryNews = mysqli_query($con, $seleltNews);
            while ($News  = mysqli_fetch_assoc($queryNews)) {
              $numofrow += 1;
            ?>
              <p class="ml-4">
                <?php
                echo '<strong>'.$numofrow . '. ' . $News['cpa_name_news'] . '  [ ' . DateThai($News['cpa_createdatetime']) . ' ] </strong>';
                if ($News['newpakead'] >= -7) { //หากน้อยกว่า 7 วันจะเป็นหัวข้อใหม่ติดไอค่อน new
                  echo '<img src="./cpawebsite/uploads/image/New_icons_23.gif" alt="">';
                }
                ?>
                <br>
                <?php if ($News['cpa_pdf_path'] != '' || $News['cpa_pdf_path'] != null) { ?>
                  <a href="./cpawebsite/uploads/pdffile/pdf/<?php echo $News['cpa_pdf_path']; ?>" target="_blank" class="mr-3">รายละเอียด</a>
                <?php } ?>

                <?php if ($News['cpa_pdf_price_path'] != '' || $News['cpa_pdf_price_path'] != null) { ?>
                  <a href="./cpawebsite/uploads/pdffile/price/<?php echo $News['cpa_pdf_price_path']; ?>" target="_blank" class="mr-3">ราคากลาง</a>
                <?php } ?>

                <?php if ($News['cpa_pdf_spec_path'] != '' || $News['cpa_pdf_spec_path'] != null) { ?>
                  <a href="./cpawebsite/uploads/pdffile/spec/<?php echo $News['cpa_pdf_spec_path']; ?>" target="_blank" class="mr-3">รายละเอียดคุณลักษณะเฉพาะ</a>
                <?php } ?>

              </p>
            <?php   }
            $numofrow = 0; ?>
          </div>
          <a href="./news?groupid=<?php echo preg_replace("/[^\d]/i", '',$groupNews['cpa_groupnews_id']); ?>">อ่านทั้งหมด</a>
        </p>
        <hr />
      <?php } ?>
      <hr>







      <?php //หากมีการเลือกดูรายการทั้งหมด
        } else {
          $sqlHavegroupindb = "SELECT *,count(*)as checkrow FROM cpa_web_groupnews where cpa_groupnews_id = '$getidfromuser'";//หากลุ่มไอดีที่ส่งเข้ามา
          $querydataongroup = mysqli_query($con, $sqlHavegroupindb);
          while ($groupNews  = mysqli_fetch_assoc($querydataongroup)) {
            if ($groupNews['checkrow'] == 0) {
              echo '<H1>ไม่พบข้อมูล</H1>';
            }
      ?>
      
        <p class="box">
          <h4 style="color: #009668;"><?php echo $groupNews['cpa_namegroup']; ?> </h4>
          <?php
          $dategroup = "SELECT  concat(LPAD(MONTH(cpa_createdatetime),2,'0'),'/',YEAR(cpa_createdatetime)+543)  as ym,
          MONTH(cpa_createdatetime) as mm,YEAR(cpa_createdatetime)as yyyy
          FROM cpa_web_news where cpa_status = '1' and cpa_groupnews_id =  '" . $groupNews['cpa_groupnews_id'] . "'
          group by ym ORDER BY cpa_createdatetime desc";
          $querydategroup = mysqli_query($con, $dategroup);


          // วนรอบเอาค่าเดือนปีมาแสดงเป็น head
          while ($Resultdategroup  = mysqli_fetch_assoc($querydategroup)) { 
            if($Resultdategroup['mm'] !='' ||$Resultdategroup['mm']  != null){
              echo '<h4>เดือน '.Fullmonth($Resultdategroup['mm'] ).' '.($Resultdategroup['yyyy']+543)  . '</h4>';
            }
          ?>


            <div class="col-md-11 col-md-offset-1 col-sm-11 col-sm-offset-1 col-xs-12 ml-5" style="margin-bottom:15px;">
              <?php
                $seleltNews = "SELECT *,DATEDIFF(cpa_createdatetime,NOW())as newpakead,concat(LPAD(MONTH(cpa_createdatetime),2,'0'),'/',YEAR(cpa_createdatetime)+543)  as ym
                FROM cpa_web_news where cpa_status = '1' and cpa_groupnews_id =  '" . $groupNews['cpa_groupnews_id'] . "' 
                and concat( LPAD( MONTH ( cpa_createdatetime ), 2, '0' ), '/', YEAR( cpa_createdatetime ) + 543 ) =  '".$Resultdategroup['ym']."'
                ORDER BY cpa_createdatetime desc";
              $queryNews = mysqli_query($con, $seleltNews);
              
              // วนรอบเอาชื่อรายละอียดและเอกสารแนบ
              while ($News  = mysqli_fetch_assoc($queryNews)) {
                $numofrow += 1;
              ?>


                <div class="ml-4">
                  <?php
                  echo '<h6><b>' . $numofrow . '. ' . $News['cpa_name_news'] . '  [ ' . DateThai($News['cpa_createdatetime']) . ' ] ';
                  if ($News['newpakead'] >= -7) { //หากน้อยกว่า 7 วันจะเป็นหัวข้อใหม่ติดไอค่อน new
                    echo '<img src="./cpawebsite/uploads/image/New_icons_23.gif" alt="">';
                  }
                  echo '</b></h6>';
                  if ($News['cpa_descriptions'] != '' || $News['cpa_descriptions'] != null) {
                    echo '<p>' . $News['cpa_descriptions'] . '</p>';
                  } else {
                    echo '<p>ไม่ได้ระบุไว้</p>';
                  };
                  ?>

                  <?php if ($News['cpa_pdf_path'] != '' || $News['cpa_pdf_path'] != null) { ?>
                    <a href="./cpawebsite/uploads/pdffile/pdf/<?php echo $News['cpa_pdf_path']; ?>" target="_blank" class="mr-3">รายละเอียด</a>
                  <?php } ?>
                  <?php if ($News['cpa_pdf_price_path'] != '' || $News['cpa_pdf_price_path'] != null) { ?>
                    <a href="./cpawebsite/uploads/pdffile/price/<?php echo $News['cpa_pdf_price_path']; ?>" target="_blank" class="mr-3">ราคากลาง</a>
                  <?php } ?>
                  <?php if ($News['cpa_pdf_spec_path'] != '' || $News['cpa_pdf_spec_path'] != null) { ?>
                    <a href="./cpawebsite/uploads/pdffile/spec/<?php echo $News['cpa_pdf_spec_path']; ?>" target="_blank" class="mr-3">รายละเอียดคุณลักษณะเฉพาะ</a>
                 
                  <?php } ?>
                  <hr>
                </div>
              <?php } ?>
            </div>
        </p>
        <hr />
  <?php
          }
        }
      }
      if($getidfromuser != '' ){
        echo '<a href="./news">ย้อนกลับ</a><hr>';
      }
  ?>
   

    <br>
  </div>

  <?php include "./cpawebsite/components/footer.php" ?>



</body>

</html>