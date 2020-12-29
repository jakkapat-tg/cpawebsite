<!DOCTYPE html>
<html lang="en">

<head>
  <title>โรงพยาบาลเจ้าพระยาอภัยภูเบศร</title>
  <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php include("./cpawebsite/components/header.php"); ?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <link rel="stylesheet" href="./cpawebsite/Pages/jquery.Thailand.js/dist/jquery.Thailand.min.css">


  <script>
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o), m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-33058582-1', 'auto', {
      'name': 'Main'
    });
    ga('Main.send', 'event', /cpawebsite/Pages
      'jquery.Thailand.js', 'GitHub', 'Visit');
  </script>

</head>

<body style="background-color: #f0f0f0;">

  <?php $page = "contact";
  include "./cpawebsite/components/navbar.php" ?>
  <div id="sure" class="container" style="padding-top: 45px; padding-bottom: 125px; display:<?php echo ($_SERVER["REQUEST_METHOD"] == "POST") ? "none" : "block" ?>;">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <p style="text-align: center;">
          <i class="fa fa-handshake-o" style="color: #046099;font-size:28px;text-shadow:1px 1px 1px #000000;" aria-hidden="true"></i>&nbsp;
          <span style="font-weight: bold;font-size:28px;color: #046099;">ศูนย์รับเรื่องร้องเรียนโรงพยาบาลเจ้าพระยาอภัยภูเบศร</span>
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <p style="text-align: center;">
          <span style="font-weight: bold;font-size:20px;color: #012843;">ข้อตกลง หลักเกณฑ์การรับเรื่องร้องเรียน โรงพยาบาลเจ้าพระยาอภัยภูเบศร</span>
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">1. ใช้ถ้อยคำหรือข้อความที่สุภาพ และต้องมี</span>
      </div>
    </div>
    <div class="row" style="margin-left: 15px; margin-right: 5px;">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:14px;color: #05243a;">
          - วัน เดือน ปี<br>
          - ชื่อ ที่อยู่ หมายเลขโทรศัพท์ อีเมล์ที่สามารถติดต่อถึงผู้ร้องเรียนได้<br>
          - ข้อเท็จจริง หรือ พฤติการณ์ของเรื่องที่ร้องเรียนได้อย่างชัดเจนว่าได้รับ ความเดือดร้อนหรือเสียหายอย่างไร ต้องการให้แก้ไข ดำเนินการอย่างไร หรือ ชี้ช่องทางแจ้งเบาะแสเกี่ยวกับการทุจริตของเจ้าหน้าที่/หน่วยงานได้ชัดแจ้งเพียงพอที่สามารถดำเนินการสืบสวน สอบสวนได้<br>
          - ระบุ พยาน เอกสาร พยานวัตถุ และพยานบุคคล (ถ้ามี)
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">2. เรื่องร้องเรียนต้องเป็นเรื่องจริงที่มีมูลเหตุ มิได้หวังสร้างกระแสหรือสร้างข่าวที่เสียหายต่อบุคคล</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">3. การใช้บริการร้องเรียนของโรงพยาบาลฯ นั้น ต้องสามารถติดต่อกลับไปยังผู้ใช้บริการได้ยีนยันว่ามีตัวตนจริง ไม่ได้สร้างเรื่องเพื่อกล่าวหาบุคคลอื่นหรือหน่วยงานต่างๆ ให้เกิดความเสียหาย</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">4. เป็นเรื่องที่ผู้ร้องได้รับความเดือดร้อน หรือเสียหาย อันเนื่องมาจากการปฏิบัติหน้าที่ต่างๆ ของเจ้าที่หรือหน่วยงานภายในสังกัดกระทรวงสาธารณสุข</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">
          5. เป็นเรื่องที่ประสงค์ขอให้โรงพยาบาลช่วยเหลือหรือขจัดความเดือดร้อน ในด้านที่เกี่ยวข้องกับความรับผิดชอบหรือภารกิจของโรงพยาบาลฯ โดยตรง
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">
          6. เรื่องร้องเรียนที่มีข้อมูลไม่ครบถ้วน ไม่เพียงพอ หรือไม่สามารถหาข้อมูลเพิ่มเติมได้ในการดำเนินการตรวจสอบ สืบสวน สอบสวน ข้อเท็จจริง ตามรายละเอียดที่กล่าวมาในข้อที่ 1 นั้น จะยุติเรื่องทันที
        </span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-weight: bold;font-size:16px;color: #00121e;">
          7. ไม่เป็นเรื่องร้องเรียนที่เข้าลักษณะดังต่อไปนี้
        </span>
      </div>
    </div>
    <div class="row" style="margin-left: 15px; margin-right: 5px;">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <p><span style="text-align: left; font-weight: bold;font-size:14px;color: #05243a;">
            - เรื่องร้องเรียนที่เป็นบัตรสนเท่ห์ เว้นแต่บัตรสนเท่ห์นั้นจะระบุรายละเอียดตามข้อที่ 1 นั้น จึงจะรับไว้พิจารณาเป็นการเฉพาะเรื่อง<br>
            - เรื่องร้องเรียนที่เข้าสู่กระบวนการยุติธรรมแล้ว หรือเป็นเรื่องที่ศาลได้มีคำสั่งพิพากษาหรือคำสั่งถึงที่สุดแล้ว<br>
            - เรื่องร้องเรียนที่เกี่ยวข้องกับสถาบันพระมหากษัตริย์<br>
            - เรื่องร้องเรียนที่เกี่ยวข้องกับนโยบายของรัฐบาล<br>
            - เรื่องร้องเรียนที่หน่วยงานอื่นได้ดำเนินการตรวจสอบ พิจารณาวินิจฉัย และได้มีข้อสรุปผลการพิจารณาเป็นที่เรียบร้อยไปแล้ว
          </span></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12 ">
        <span style="text-align: left; font-size:16px;color: #00121e;">
          -> ข้าพเจ้าขอรับรองว่าข้อเท็จจริงที่ได้ยื่นร้องเรียนต่อโรงพยาบาลเป็นเรื่องที่เกิดขึ้นจริงทั้งหมดและขอรับผิดชอบต่อข้อเท็จจริงดังกล่าวข้างต้นทุกประการ<br>
          -> การนำความเท็จมาร้องเรียนต่อเจ้าหน้าที่ ซึ่งทำให้ผู้อื่นได้รับความเสียหายอาจเป็นความผิดฐานแจ้งความเท็จต่อเจ้าพนักงานตามประมวลกฎหมายอาญา
        </span>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12" style="text-align:center; padding-top: 15px;">
        <button onclick="myFunction()" class="btn" style="text-align: center; font-weight: bold;font-size:20px;color: #207dff;">ยอมรับ</button>
      </div>
    </div>

  </div>
  <script>
    function myFunction() {
      document.getElementById("complaints").style.display = "block";
      document.getElementById("sure").style.display = "none";
      topFunction();
    }

    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>

  <!-- -----------------------------------------------   FROM  ----------------------------------------------- -->
  <?php
  $offname = $pname = $fname = $lname = $gender = "";
  $cidcode = $profession = $province = $amphoe = $district = $zipcode = "";
  $addess =  $phone = $mobile = $email = "";
  $req_to = $req_head = $req_prob_type = $req_details = $request = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["offname"])) {
      $offname = "";
    } else {
      $offname = test_input($_POST["offname"]);
      if (!preg_match('/^[A-Z]+$/', $offname)) {
        $offnameErr = "พบข้อผิดพลาด!!";
      }
    }
    $offname = $_POST["offname"];
    if (empty($_POST["pname"])) {
      $pnameErr = "กรุณากรอกคำนำหน้าชื่อ";
    } else {
      $pname = test_input($_POST["pname"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $pname)) {
        $pnameErr = "กรุณากรอกคำนำหน้าชื่ออีกครั้ง!!";
      }
    }

    if (empty($_POST["fname"])) {
      $fnameErr = "กรุณากรอกชื่อ";
    } else {
      $fname = test_input($_POST["fname"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $fname)) {
        $fnameErr = "กรุณากรอกชื่ออีกครั้ง!!";
      }
    }

    if (empty($_POST["lname"])) {
      $lnameErr = "กรุณากรอกนามสกุล";
    } else {
      $lname = test_input($_POST["lname"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $lname)) {
        $lnameErr = "กรุณากรอกนามสกุลอีกครั้ง!!";
      }
    }

    if (empty($_POST["gender"]) || test_input($_POST["gender"]) == "เพศ*") {
      $genderErr = "กรุณาเลือกเพศ";
    } else {
      $gender = test_input($_POST["gender"]);
      if (!preg_match('/^[FM]+$/', $gender)) {
        $genderErr = "กรุณาเลือกเพศอีกครั้ง!!";
      }
    }

    if (empty($_POST["cidcode"])) {
      $cidcodeErr = "กรุณากรอกเลขบัตรประชาชน";
    } else {
      $cidcode = test_input($_POST["cidcode"]);
      if (!preg_match('/^[0-9]+$/', $cidcode)) {
        $cidcodeErr = "กรุณากรอกเลขเพียงอย่างเดียว";
      }
    }

    if (empty($_POST["profession"])) {
      $professionErr = "กรุณากรอกอาชีพ";
    } else {
      $profession = test_input($_POST["profession"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $profession)) {
        $professionErr = "กรุณากรอกอาชีพอีกครั้ง!!";
      }
    }

    if (empty($_POST["province"])) {
      $provinceErr = "กรุณาเลือกจังหวัด";
    } else {
      $province = test_input($_POST["province"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ]+$/', $province)) {
        $provinceErr = "กรุณาเลือกจังหวัดอีกครั้ง!!";
      }
    }

    if (empty($_POST["amphoe"])) {
      $amphoeErr = "กรุณาเลือกอำเภอ";
    } else {
      $amphoe = test_input($_POST["amphoe"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ]+$/', $amphoe)) {
        $amphoeErr = "กรุณาเลือกอำเภออีกครั้ง!!";
      }
    }

    if (empty($_POST["district"])) {
      $districtErr = "กรุณาเลือกตำบล";
    } else {
      $district = test_input($_POST["district"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ]+$/', $district)) {
        $districtErr = "กรุณาเลือกตำบลอีกครั้ง!!";
      }
    }

    if (empty($_POST["addess"])) {
      $addessErr = "กรุณากรอกที่อยู่";
    } else {
      $addess = test_input($_POST["addess"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $addess)) {
        $addessErr = "กรุณากรอกที่อยู่อีกครั้ง!!";
      }
    }

    if (empty($_POST["zipcode"])) {
      $zipcodeErr = "กรุณากรอกเลขไปรษณีย์";
    } else {
      $zipcode = test_input($_POST["zipcode"]);
      if (!preg_match('/^[0-9._-]+$/', $zipcode)) {
        $zipcodeErr = "กรุณากรอกเลขไปรษณีย์อีกครั้ง!!";
      }
    }

    if (empty($_POST["phone"]) && empty($_POST["mobile"])) {
      $phoneErr = "กรุณากรอกเบอร์โทรศัพท์";
      $mobileErr = "กรุณากรอกเบอร์มือถือ";
    } else {

      if (empty($_POST["phone"])) {
        if (empty($_POST["mobile"])) {
          $phoneErr = "กรุณากรอกเบอร์โทรศัพท์";
        }
      } else {
        $phone = test_input($_POST["phone"]);
        if (!preg_match('/^[0-9]+$/', $phone)) {
          $phoneErr = "กรุณากรอกเลขเพียงอย่างเดียว";
        }
      }
      if (empty($_POST["mobile"])) {
        if (empty($_POST["phone"])) {
          $mobileErr = "กรุณากรอกเบอร์โทรศัพท์";
        }
      } else {
        $mobile = test_input($_POST["mobile"]);
        if (!preg_match('/^[0-9]+$/', $mobile)) {
          $mobileErr = "กรุณากรอกเลขเพียงอย่างเดียว";
        }
      }
    }




    if (empty($_POST["email"])) {
      $emailErr = "กรุณากรอก E-mail";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "กรุณากรอก E-mail อีกครั้ง!!";
      }
    }

    if (empty($_POST["req_to"])) {
      $req_toErr = "กรุณากรอกชื่อผู้อยากกล่าวถึง";
    } else {
      $req_to = test_input($_POST["req_to"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $req_to)) {
        $req_toErr = "กรุณากรอกชื่อผู้อยากกล่าวถึงอีกครั้ง!!";
      }
    }

    if (empty($_POST["req_prob_type"]) || test_input($_POST["gender"]) == "เลือกประเภทเรื่องร้องเรียน") {
      $req_prob_typeErr = "กรุณาเลือกประเภทร้องเรียน";
    } else {
      $req_prob_type = test_input($_POST["req_prob_type"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $req_prob_type)) {
        $req_prob_typeErr = "กรุณาเลือกประเภทร้องเรียนอีกครั้ง!!";
      }
    }

    if (empty($_POST["req_head"])) {
      $req_headErr = "กรุณากรอกหัวเรื่อง";
    } else {
      $req_head = test_input($_POST["req_head"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $req_head)) {
        $req_headErr = "กรุณากรอกหัวเรื่องอีกครั้ง!!";
      }
    }

    if (empty($_POST["req_details"])) {
      $req_detailsErr = "กรุณากรอกลายละเอียด";
    } else {
      $req_details = test_input($_POST["req_details"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $req_details)) {
        $req_detailsErr = "กรุณากรอกลายละเอียดอีกครั้ง!!";
      }
    }

    if (empty($_POST["request"])) {
      $requestErr = "กรุณากรอกอยากให้แก้อะไร";
    } else {
      $request = test_input($_POST["request"]);
      if (!preg_match('/^[ก-์ ะ-ู เ-แ a-zA-Z0-9._-]+$/', $request)) {
        $requestErr = "กรุณากรอกอยากให้แก้อะไรอีกครั้ง!!";
      }
    }

    if (
      $requestErr == '' &&
      $req_detailsErr == '' &&
      $req_headErr == '' &&
      $req_prob_typeErr == '' &&
      $req_toErr == '' &&
      $pnameErr == '' &&
      $fnameErr == '' &&
      $lnameErr == '' &&
      $cidcodeErr == '' &&
      ($genderErr == '') &&
      ($mobileErr == '' || $phoneErr == '') &&
      $offnameErr == ''

    ) {
      if ($offname == "") {
        $offname = "N";
      }
      $req_time = date("Y-m-d H:i:s");
      $sqlinsert = "INSERT INTO req_prob (cidcode,pname,fname,lname,gender,profession,province,amphoe,district,address,zipcode,phone,mobile,email,req_to,req_head,req_prob_type,req_details,request,offname,req_time) 
      VALUE ('$cidcode' ,'$pname' ,'$fname' ,'$lname' ,'$gender' ,'$profession' ,'$province' ,'$amphoe' ,'$district' ,'$address' ,'$zipcode' ,'$phone' ,'$mobile' ,'$email' ,'$req_to' ,'$req_head' ,'$req_prob_type' ,'$req_details' ,'$request ','$offname','$req_time' )";
      $query = mysqli_query($con, $sqlinsert);
      if ($query) {
        //echo "<script>alert('แจ้งข้อมูลไปยังผู้ดูแลระบบเรียบร้อย');window.location=index.php;</script>";
        function send_line_notify($message, $token)
        {
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_POST, 1);
          curl_setopt($ch, CURLOPT_POSTFIELDS, "message=$message");
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          $headers = array("Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token",);
          curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          $result = curl_exec($ch);
          curl_close($ch);
          return $result;
        }

        $message = "\r\n" .
          'คำร้องเรียน ' . date('d-m-yy') . "\r\n" .
          'เรื่อง :' . $_POST["req_head"] . "\r\n" .
          'ชื่อ :' . $_POST["pname"] . " " .  $_POST["fname"] . "  " .  $_POST["lname"] . "\r\n" .
          'สถานะ : รอดำเนินการ';
        $token = 'LWXFDV0Ubg4tpFWJk4huG97lCHKXcnGkrrMHfH0vQfm';
        send_line_notify($message, $token);
        echo '<script>

              Swal.fire({
                  icon: "success",
                  title: "สำเร็จ",
                  text: "แจ้งข้อมูลเรียบร้อยแล้ว!",
                  type: "success"
              }).then(function() {
                  window.location = "./";
              });
          </script>';
      } else {
          echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";
      }
  }
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  ?>
  <!-- -----------------------------------------------   FROM  ----------------------------------------------- -->
  <div class="modal-dialog modal-lg" id="complaints" style=" padding-top: 15px; padding-bottom: 15px; display:<?php echo ($_SERVER["REQUEST_METHOD"] == "POST") ? "block" : "none" ?>;">
    <div class="modal-content">
      <div class="modal-body">
        <!--#########################   FROM  ################################-->
        <!--#########################   FROM  ################################-->
        <form role="form" id="form_compatient" name="form_compatient" autocomplete="off" action="" method="post" class="registration-form" uk-grid>
          <div class="row">
            <div class="col-md-12" style="text-align: right;">
              <span id="datetime" style="font-size:16px"></span>
            </div>
          </div>
          <div class="row" style="padding-left: 15px;">
            <h4 id="modal-register-label">ข้อมูลเกี่ยวกับผู้ร้องเรียน</h4>
          </div>
          <script>
            var dt = new Date();
            document.getElementById("datetime").innerHTML = "วันที่ " + dt.toLocaleDateString('th-TH', {
              year: 'numeric',
              month: 'long',
              day: 'numeric',
            });
          </script>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <!-- <?php echo $offnameErr == "" ? "" : "checked" ?> -->
                <input type="checkbox" name="offname" id="offname" value="Y" <?php echo $offname == "" ? "" : "checked" ?>>
                <font color="red"> คลิกถ้าต้องการปกปิด ชื่อและข้อมูลส่วนตัว</font><br>
                <span class="error" style="color:red"><?php echo $offnameErr; ?></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <input type="text" name="pname" placeholder="คำนำหน้า*" class="form-first-name form-control" id="pname" value="<?php echo $pname ?>">
                <span class="error" style="color:red"><?php echo $pnameErr; ?></span>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <input type="text" name="fname" placeholder="ชื่อ*" class="form-first-name form-control" id="fname" value="<?php echo $fname ?>">
                <span class="error" style="color:red"><?php echo $fnameErr; ?></span>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <input type="text" name="lname" placeholder="นามสกุล*" class="form-first-name form-control" id="lname" value="<?php echo $lname ?>">
                <span class="error" style="color:red"><?php echo $lnameErr; ?></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <input type="text" name="cidcode" placeholder="เลขบัตรประชาชน 13 หลัก*" class="form-last-name form-control" id="cidcode" value="<?php echo $cidcode ?>" minlength="13" maxlength="13">
                <span class="error" style="color:red"><?php echo $cidcodeErr; ?></span>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select name="gender" class="form-last-name form-control" id="gender" value="">
                  <option selected="" value="<?php echo $gender ?>"><?php echo $gender == 'M' ? 'ชาย' : ($gender == 'F' ? 'หญิง' : 'เพศ*') ?></option>
                  <option value="M">ชาย</option>
                  <option value="F">หญิง</option>
                </select>
                <span class="error" style="color:red"><?php echo $genderErr; ?></span>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="profession" placeholder="อาชีพ" class="form-last-name form-control" id="profession" value="<?php echo $profession ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" name="addess" placeholder="ที่อยู่" class="form-last-name form-control" id="addess" value="<?php echo $addess ?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" name="province" placeholder="จังหวัด" class="form-control" id="province" value="<?php echo $province ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" name="amphoe" placeholder="อำเภอ" class="form-control" id="amphoe" value="<?php echo $amphoe ?>">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <input type="text" name="district" placeholder="ตำบล" class="form-control" id="district" value="<?php echo $district ?>">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <input class="form-last-name form-control" id="zipcode" name="zipcode" placeholder="ไปรษณีย์" type="text" value="<?php echo $zipcode ?>" maxlength="5">
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">

                <input type="tel" name="phone" placeholder="โทรศัพท์*" class="form-last-name form-control" id="phone" type="number" value="<?php echo $phone ?>" minlength="9" maxlength="10">
                <span class="error" style="color:red"><?php echo $phoneErr; ?></span>
              </div>
            </div>
            <div class="row">
              <div class="col-md-8">
                <div class="form-group">
                  <input type="email" name="email" placeholder="E-Mail" class="form-last-name form-control" id="email" type="number" value="<?php echo $email?>">
                  <label id="resultEmail"></label>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <input type="email" name="email" placeholder="E-Mail" class="form-last-name form-control" id="email" type="number" value="<?php echo $email ?>">
                <label id="resultEmail"></label>
              </div>
            </div>
          </div>
          <p>
            <h4 class="modal-title" id="modal-register-label">ข้อมูลเกี่ยวกับเรื่องร้องเรียน</h4>
          </p>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" name="req_to" placeholder="ร้องเรียนถึง*" class="form-last-name form-control" id="req_to" value="<?php echo $req_to ?>">
                <span class="error" style="color:red"><?php echo $req_toErr ?></span>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <?php
                $tmp = '';
                if (!empty($_POST["req_prob_type"])) {
                  $tmp = "SELECT describes FROM req_prob_type WHERE id = $req_prob_type";
                  $tmp = mysqli_fetch_assoc(mysqli_query($con, $tmp));
                  $tmp =  $tmp['describes'];
                }


                ?>
                <label class="sr-only" for="form-last-name">ประเภทเรื่องร้องเรียน</label>
                <select name="req_prob_type" class="form-last-name form-control" id="req_prob_type">
                  <option selected="" value=<?php echo $req_prob_type == "null" ? "null" : $req_prob_type ?>><?php echo $req_prob_type == "null" ? "เลือกประเภทเรื่องร้องเรียน" : ($req_prob_type == "" ? "เลือกประเภทเรื่องร้องเรียน" : $tmp) ?></option>
                  <?php
                  $selectceo = "SELECT * FROM req_prob_type WHERE status  = 'Y' ORDER BY orderBy";
                  $queryselectceo = mysqli_query($con, $selectceo);
                  while ($ResultCeo = mysqli_fetch_assoc($queryselectceo)) {
                  ?>
                    <option value="<?php echo $ResultCeo['id']; ?>"><?php echo $ResultCeo['describes']; ?></option>
                  <?php } ?>
                </select>
                <span class="error" style="color:red"><?php echo $req_prob_typeErr; ?></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input type="text" name="req_head" placeholder="หัวข้อเรื่องร้องเรียน*" class="form-last-name form-control" id="req_head" value="<?php echo $req_head ?>">
                <span class="error" style="color:red"><?php echo $req_headErr; ?></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="req_details" placeholder="รายละเอียดเรื่องร้องเรียน*" class="form-about-yourself form-control" id="req_details" value="<?php echo $req_details ?>"><?php echo $req_details ?></textarea>
                <span class="error" style="color:red"><?php echo $req_detailsErr; ?></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <textarea name="request" placeholder="สิ่งที่ต้องการให้แก้ไข*" class="form-about-yourself form-control" id="request" value="<?php echo $request ?>"><?php echo $request ?></textarea>
                <span class="error" style="color:red"><?php echo $requestErr; ?></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12" style="text-align:center">
              <button type="submit" class="btn" id="submit" style="text-align: center; font-weight: bold;font-size:20px;color: #207dff;">บันทึก</button>
            </div>
          </div>
        </form>
        <!--#########################   CLOSE FROM  ################################-->
      </div>
    </div>
  </div>


  <?php include "./cpawebsite/components/footer.php" ?>
  <style>
    .block-heights {
      overflow: hidden;
      background-size: cover;
      background-repeat: no-repeat;
      --background-position: center center;
      height: 300px;
      position: relative;
      display: block;
    }

    @media only screen and (max-width: 800px) {
      .blog-entry {
        background-size: cover;
        width: 60%;
        display: inline-block;
      }

    }
  </style>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>

  <!-- dependencies for zip mode -->
  <script type="text/javascript" src="./cpawebsite/Pages/jquery.Thailand.js/dependencies/zip.js/zip.js"></script>
  <!-- / dependencies for zip mode -->

  <script type="text/javascript" src="./cpawebsite/Pages/jquery.Thailand.js/dependencies/JQL.min.js"></script>
  <script type="text/javascript" src="./cpawebsite/Pages/jquery.Thailand.js/dependencies/typeahead.bundle.js"></script>

  <script type="text/javascript" src="./cpawebsite/Pages/jquery.Thailand.js/dist/jquery.Thailand.min.js"></script>

  <script type="text/javascript">
    $.Thailand({
      database: './cpawebsite/Pages/jquery.Thailand.js/database/db.json',

      $district: $('#form_compatient [name="district"]'),
      $amphoe: $('#form_compatient [name="amphoe"]'),
      $province: $('#form_compatient [name="province"]'),
      $zipcode: $('#form_compatient [name="zipcode"]'),

      onDataFill: function(data) {
        console.info('Data Filled', data);
      },

      onLoad: function() {
        console.info('Autocomplete is ready!');
        $('#loader, .demo').toggle();
      }
    });

    // watch on change

    $('#form_compatient [name="district"]').change(function() {
      console.log('ตำบล', this.value);
    });
    $('#form_compatient [name="amphoe"]').change(function() {
      console.log('อำเภอ', this.value);
    });
    $('#form_compatient [name="province"]').change(function() {
      console.log('จังหวัด', this.value);
    });
    $('#form_compatient [name="zipcode"]').change(function() {
      console.log('รหัสไปรษณีย์', this.value);
    });
  </script>

</body>

</html>