<!DOCTYPE html>
<html lang="en">

<head>
    <title>OPEN HOUSE CPA</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "./cpawebsite/components/header.php"; ?>
</head>

<body>

    <?php $page = "openhouse";
    include "./cpawebsite/components/navbar.php"; ?>

    <div class="container">
        <div class="contents">
            <div class="imageheader">
                <img src="./cpawebsite/uploads/image/bikboran02-2.jpg" alt="">
                <h3 class="mt-2">เปิดบ้าน โรงพยาบาลเจ้าพระยาอภัยภูเบศร</h3>
                <p>
                    &nbsp; &nbsp; &nbsp; ในปี พ.ศ.2452 ตึกเจ้าพระยาอภัยภูเบศร ได้ถูกสร้างขึ้นจากความจงรักภักดี ของเจ้าพระยาอภัยภูเบศร (ชุ่ม อภัยวงศ์) ด้วยประสงค์จะใช้เป็นที่ประทับ รับเสด็จพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว ในวโรกาสที่เสด็จประพาสเมืองปราจีนบุรี แต่สวรรคตเสียก่อน ตึกหลังนี้จึงได้รับใช้รับเสด็จพระบาทสมเด็จ พระมงกุฏเกล้าเจ้าอยู่หัว จากนั้นตึกหลังนี้เป็นมรดกตกทอดมาเป็นของพระยา อภัยวงศ์วรเชษฐ (ช่วง อภัยวงศ์) ต่อมาพระนางเจ้าสุวัทนา พระวรราชเทวี ซึ่งเป็นหลานของพระยาอภัยวงศ์วรเชษฐ ได้กรรมสิทธิ์ในสิ่งเหล่านี้จึงได้ประทานตึกหลังนี้แก่มณฑลทหารบกที่ 2 ตั้งเป็นสถานพยาบาล และต่อมาทางจังหวัดปราจีนบุรีขอโอนมาเปิดใช้เป็นโรงพยาบาลประจำจังหวัดใช้ชื่อว่า “โรงพยาบาลเจ้าพระยาอภัยภูเบศร” เมื่อวันที่ 24 มิถุนายน 2484 เพื่อเกียรติแห่งคุณความดี ของท่านผู้เป็นเจ้าของ หลังจากที่โรงพยาบาลได้รับงบประมาณสิ่งก่อสร้างเป็นอาคารผู้ป่วย ตึกหลังนี้จึงมิได้ใช้เป็นสถานที่บริการผู้ป่วย ได้รับการอนุรักษ์ไว้นับแต่นั้นเป็นต้นมาและได้ขึ้นทะเบียนเป็นโบราณสถานแห่งชาติของกรมศิลปากร เมื่อวันที่ 25 มกราคม 2533
                    ได้รับรางวัลพระราชทานอาคารอนุรักษ์ดีเด่น ประจำปี 2542 จากสมเด็จพระเทพรัตนราชสุดาฯ สยามบรมราชกุมารี <br>
                <center>
                    <button class="btn btn-primary" style="border-radius: 30px;">ดาวโหลดรายละเอียดทั้งหมด</button>&nbsp;&nbsp;
                    <a href="./register-openhouse"> <button class="btn btn-primary" style="border-radius: 30px;"> <i class="fa fa-calendar" aria-hidden="true"></i> ลงทะเบียนเข้าเยี่ยมชม</button></a>
                </center>
            </div>

            <div class="blog-entry align-self-stretch">
                <div class="row">
                    <div class="col-md-6 col-12 mt-5">
                        <h1 class="ml-3">โปรแกรมการเยี่ยมชม</h1>
                        <hr />
                        1.ตึกเจ้าพระยาอภัยภูเบศร <br>
                        2.อภัยภูเบศรเดย์สปาร์ <br>
                        3. <br>
                        4. <br>
                        5. <br>
                    </div>

                    <div class="col-md-6 col-12 mt-5">
                        <h1 class="ml-3"> ขั้นตอนการเยี่ยมชม </h1>
                        <hr />
                        1. <br />
                        2. <br />
                        3. <br />
                    </div>
                </div>
            </div>

            <section class="ftco-section">
                <!-- <div class="container"> -->
                <div class="row justify-content-center pb-5 mb-3">
                    <div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
                        <h2>ประมวลภาพการเยี่ยมชม</h2>
                    </div>
                </div>
                <div class="container-fluid px-md-4">
                    <div class="row">
                        <?php
                        $selectevent = "SELECT * FROM cpa_events where cpa_event_status = '1' ORDER BY cpa_event_insert_date desc limit 4";
                        $queryEvents = mysqli_query($con, $selectevent);
                        while ($Resultevent = mysqli_fetch_assoc($queryEvents)) {
                        ?>
                            <div class="col-md-3 ftco-animate">
                                <div class="work mb-4 img d-flex align-items-end" style="background-image: url(./cpawebsite/uploads/image/event/<?php echo $Resultevent['cpa_event_path']; ?>);">
                                    <a href="./cpawebsite/uploads/image/event/<?php echo $Resultevent['cpa_event_path']; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
                                        <span class="fas fa-expand"></span>
                                    </a>
                                    <div class="desc w-100 px-4">
                                        <div class="text w-100 mb-3">
                                            <span><?php echo $Resultevent['cpa_event_detail']; ?></span>
                                            <h2><a href="event-single/<?php echo $Resultevent['cpa_event_id']; ?>">
                                                    <?php echo $Resultevent['cpa_event_topic']; ?></a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!-- </div> -->
            </section>

            <div class="blog-entry align-self-stretch">
                <div class="row">
                    <div class="col-md-6 col-12 mt-5">
                        <h1 class="ml-3">ข้อปฎิบัติ</h1>
                        <hr />
                        1. <br>
                        2. <br>
                        3. <br>
                    </div>

                    <div class="col-md-6 col-12 mt-5">
                        <h1 class="ml-3"> เงื่อนไขการพิจารณา </h1>
                        <hr />
                        1. <br />
                        2. <br />
                        3. <br />
                    </div>
                </div>
            </div>






        </div>

    </div>
    <?php include "./cpawebsite/components/footer.php" ?>


    <style>
        .imageheader img {
            width: 100%;
        }
    </style>
</body>

</html>