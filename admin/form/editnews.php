<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ข่าวประชาสัมพันธ์ </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../tem/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../tem/plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../tem/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../tem/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="../tem/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../tem/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../tem/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../tem/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../tem/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <?php
        $page = 'editnews';
        $group = 2;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $sqlgroup = "SELECT * FROM cpa_web_groupnews";
        $queryqroup = mysqli_query($con, $sqlgroup);
        $sqlspecialgroup = "SELECT * FROM cpa_web_groupspecial_news where status = '1'";
        $queryspqroup = mysqli_query($con, $sqlspecialgroup);
        $getid = '';
        $getid  = $_GET['pkid'];

        if($getid == '' || $getid == null){
            //INSERT DATA
            if (isset($_POST['submit'])) {
                $groupnewsid =  $_POST['groupid'];
                $groupspecialid =  $_POST['groupspecialid']; 
                $newsname =  $_POST['newsname'];
                $description =  $_POST['description'];
                $createdate = date("Y-m-d H:i:s");
                $insertuser = $_SESSION['fname'] . ' ' . $_SESSION['lname'];

                $var = pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
                $var2 = pathinfo(basename($_FILES['file2']['name']), PATHINFO_EXTENSION);
                $var3 = pathinfo(basename($_FILES['file3']['name']), PATHINFO_EXTENSION);
                $datefile = 'attachment-' . date("Ymd") . '-' . date("His");
                $datefile2 = 'attachment-price-' . date("Ymd") . '-' . date("His");
                $datefile3 = 'attachment-spec-' . date("Ymd") . '-' . date("His");

                $new_name = "";
                $new_name2 = "";
                $new_name3 = "";
                if ($var != '') {
                    $new_name = $datefile . "." . $var;
                }
                if ($var2 != '') {
                    $new_name2 = $datefile2 . "." . $var2;
                }
                if ($var3 != '') {
                    $new_name3 = $datefile3 . "." . $var3;
                }


                $file_path =  "../../uploads/pdffile/pdf/";
                $file_path2 = "../../uploads/pdffile/price/";
                $file_path3 = "../../uploads/pdffile/spec/";

                $path_up = $file_path . $new_name;
                $path_up2 = $file_path2 . $new_name2;
                $path_up3 = $file_path3 . $new_name3;
                $file_type1 = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                $file_type2 = strtolower(pathinfo($path_up2, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                $file_type3 = strtolower(pathinfo($path_up3, PATHINFO_EXTENSION)); //ดึง type ไฟล์

                if ($new_name != '' ||  $new_name2 != '' ||  $new_name3 != '') { //หากมีการอัพโหลดไฟล์
                    // เช็คนามสกุลไฟล์หากมีการเลือก
                    if ($file_type1 == "pdf" || $file_type1 == "PDF" || $file_type2 == "pdf" || $file_type2 == "PDF" || $file_type3 == "pdf" || $file_type3 == "PDF") //เช็คว่าใช่ไฟล์ภาพหรือไม่
                    {
                        echo 'type ok';
                        $done = move_uploaded_file($_FILES['file1']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                        $done2 = move_uploaded_file($_FILES['file2']['tmp_name'], $path_up2); //เพิ่มไฟล์ลงโฟลเดอร์
                        $done3 = move_uploaded_file($_FILES['file3']['tmp_name'], $path_up3); //เพิ่มไฟล์ลงโฟลเดอร์

                        if ($done ||  $done2 || $done3) { //หากอัพโหลดสำเร็จให้เพิ่มข้อมูลลง DB 
                            $sqlinsertnews = "INSERT INTO cpa_web_news 
                                (cpa_groupnews_id,cpa_name_news,cpa_descriptions,cpa_pdf_path,cpa_pdf_spec_path,cpa_pdf_price_path,cpa_create_by,cpa_createdatetime,cpa_status,cpa_views,cpa_groupspecial_id) 
                            VALUE ('$groupnewsid', '$newsname',   '$description','$new_name',    '$new_name3',    '$new_name2',     '$insertuser'   ,'$createdate',      '1','0','$groupspecialid')";

                            $Queryinsertnews = mysqli_query($con, $sqlinsertnews);
                            if ($Queryinsertnews) {
                                echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "เพิ่มข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./editnews.php";
                                });
                                </script>';
                            } else {
                                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Insert Fail โปรดลองใหม่อีกครั้ง', })</script>";
                            }
                        } else {
                            echo "<script>Swal.fire({icon: 'error', title: 'ไม่สามารถอัพโหลดไฟล์ได้...', text: 'โปรดลองใหม่อีกครั้งหรือแจ้งadmin', }).then(function() {
                                window.location = './editnews.php';
                            });</script>";
                        }
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรเลือกไฟล์ที่เป็น pdf', }).then(function() {
                            window.location = './editnews.php';
                        });</script>";
                    }
                } else { //หากไม่อัพโหลดไฟล์ใดๆ
                    $sqlinsertnews = "INSERT INTO cpa_web_news 
                    (cpa_groupnews_id,cpa_name_news,cpa_descriptions,   cpa_create_by,  cpa_createdatetime,cpa_status,cpa_groupspecial_id) VALUE
                    ('$groupnewsid', '$newsname',   '$description',    '$insertuser'   ,'$createdate',      '1'         ,'$groupspecialid')";

                    $Queryinsertnews = mysqli_query($con, $sqlinsertnews);
                    if ($Queryinsertnews) {
                        echo '<script>  Swal.fire({  icon: "success", title: "สำเร็จ",  text: "เพิ่มข้อมูลสำเร็จ!",  type: "success"
                        }).then(function() {  window.location = "./editnews.php";  });  </script>';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Insert Fail โปรดลองใหม่อีกครั้ง', })</script>";
                    }
                }
            }
        }

        //EDIT
        if($getid != '' || $getid != null){
            $sqlgetnew = "SELECT * FROM cpa_web_news where cpa_news_id = '$getid'";
            $querygetnew = mysqli_query($con, $sqlgetnew);
            $resultGetNews = mysqli_fetch_assoc($querygetnew);
            $getGroupnewsid= $resultGetNews['cpa_groupnews_id'];
            $getspGroupnewsid= $resultGetNews['cpa_groupspecial_id'];
            $getNames= $resultGetNews['cpa_name_news'];
            $getDescriptions= $resultGetNews['cpa_descriptions'];
            $getPdfpath= $resultGetNews['cpa_pdf_path'];
            $getPdfpath2= $resultGetNews['cpa_pdf_price_path'];
            $getPdfpath3= $resultGetNews['cpa_pdf_spec_path'];
            $getStatus= $resultGetNews['cpa_status'];
            $datetime = date("Y/m/d H:i:s");

            if(isset($_POST['updatedata'])){
                $groupnewsid =  $_POST['groupid'];
                $groupspecialid =  $_POST['groupspecialid']; 
                $newsname =  $_POST['newsname'];
                $description =  $_POST['description'];
                $insertuser = $_SESSION['fname'] . ' ' . $_SESSION['lname'];
                $newstatus = $_POST['status'];

                $var = pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
                $var2 = pathinfo(basename($_FILES['file2']['name']), PATHINFO_EXTENSION);
                $var3 = pathinfo(basename($_FILES['file3']['name']), PATHINFO_EXTENSION);
                $datefile = 'attachment-' . date("Ymd") . '-' . date("His");
                $datefile2 = 'attachment-price-' . date("Ymd") . '-' . date("His");
                $datefile3 = 'attachment-spec-' . date("Ymd") . '-' . date("His");

                $new_name = "";
                $new_name2 = "";
                $new_name3 = "";

                //เช็คหากมีไฟล์เข้ามาในแต่ละตัวแปรให้กำหนดค่าชื่อไปและลบไฟล์เดิมออกจากระบบ
                if ($var != '') {
                    $new_name = $datefile . "." . $var;
                }
                if ($var2 != '') {
                    $new_name2 = $datefile2 . "." . $var2;
                }
                if ($var3 != '') {
                    $new_name3 = $datefile3 . "." . $var3;
                }


                $file_path = "../../uploads/pdffile/pdf/";
                $file_path2 = "../../uploads/pdffile/price/";
                $file_path3 = "../../uploads/pdffile/spec/";

                $path_up = $file_path . $new_name;
                $path_up2 = $file_path2 . $new_name2;
                $path_up3 = $file_path3 . $new_name3;
                $file_type1 = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                $file_type2 = strtolower(pathinfo($path_up2, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                $file_type3 = strtolower(pathinfo($path_up3, PATHINFO_EXTENSION)); //ดึง type ไฟล์

                if ($new_name != '' ||  $new_name2 != '' ||  $new_name3 != '') { //หากมีการอัพโหลดไฟล์
                    // เช็คนามสกุลไฟล์หากมีการเลือก
                    if ($file_type1 == "pdf" || $file_type1 == "PDF" || $file_type2 == "pdf" || $file_type2 == "PDF" || $file_type3 == "pdf" || $file_type3 == "PDF") //เช็คว่าใช่ไฟล์ภาพหรือไม่
                    {
                        $done = move_uploaded_file($_FILES['file1']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                        $done2 = move_uploaded_file($_FILES['file2']['tmp_name'], $path_up2); //เพิ่มไฟล์ลงโฟลเดอร์
                        $done3 = move_uploaded_file($_FILES['file3']['tmp_name'], $path_up3); //เพิ่มไฟล์ลงโฟลเดอร์

                        if ($done) { //หากอัพโหลดสำเร็จให้เพิ่มข้อมูลลง DB ไฟล์แรก
                            if($getPdfpath != '' || $getPdfpath != null ){//เช็คว่าเดิมทีมีไฟล์ไหมหากมีให้ลบอันเก่าออก
                                $deleteoldPdf = $file_path . $getPdfpath; //path ลบไฟล์
                                if (unlink($deleteoldPdf)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("1.ลบไฟล์ PDF แนบเดิม สำเร็จ" .  $deleteoldPdf.'<br>');
                                    $sqlUpdatefile1 = "UPDATE cpa_web_news SET cpa_groupnews_id = '$groupnewsid',
                                    cpa_name_news = '$newsname',cpa_descriptions= '$description',
                                    cpa_pdf_path = '$new_name',
                                    cpa_status=  '$newstatus',
                                    cpa_groupspecial_id = '$groupspecialid'
                                    WHERE cpa_news_id = '$getid'";
                                    $queryupdate1 = mysqli_query($con,$sqlUpdatefile1);              
                                }
                            }
                        }


                        if ($done2) { //หากอัพโหลดสำเร็จให้เพิ่มข้อมูลลง DB ไฟล์สอง
                            if($path_up2 != '' || $path_up2 != null ){//เช็คว่าเดิมทีมีไฟล์ไหมหากมีให้ลบอันเก่าออก
                                $deleteoldPdf2 = $file_path2 . $getPdfpath2; //path ลบไฟล์
                                if (unlink($deleteoldPdf2)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("2.ลบไฟล์ PDF ราคากลางเดิม สำเร็จ" .  $deleteoldPdf2.'<br>');
                                    $sqlUpdatefile1 = "UPDATE cpa_web_news SET cpa_groupnews_id = '$groupnewsid',
                                    cpa_name_news = '$newsname',cpa_descriptions= '$description',
                                    cpa_pdf_price_path = '$new_name2',
                                    cpa_status=  '$newstatus',
                                    cpa_groupspecial_id = '$groupspecialid'
                                    WHERE cpa_news_id = '$getid'";
                                    $queryupdate1 = mysqli_query($con,$sqlUpdatefile1);              
                                }
                            }
                        }


                        if ($done3) { //หากอัพโหลดสำเร็จให้เพิ่มข้อมูลลง DB ไฟล์สาม
                            if($path_up3 != '' || $path_up3 != null ){//เช็คว่าเดิมทีมีไฟล์ไหมหากมีให้ลบอันเก่าออก
                                $deleteoldPdf3 = $file_path3 . $getPdfpath3; //path ลบไฟล์
                                if (unlink($deleteoldPdf3)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("3.ลบไฟล์ PDF คุณลักษณะเฉพาะเดิม สำเร็จ" .  $deleteoldPdf3.'<br>');
                                    $sqlUpdatefile1 = "UPDATE cpa_web_news SET cpa_groupnews_id = '$groupnewsid',
                                    cpa_name_news = '$newsname',cpa_descriptions= '$description',
                                    cpa_pdf_spec_path = '$new_name3',
                                    cpa_status=  '$newstatus',
                                    cpa_groupspecial_id = '$groupspecialid'
                                    WHERE cpa_news_id = '$getid'";
                                    $queryupdate1 = mysqli_query($con,$sqlUpdatefile1);              
                                }
                            }

                        }

                        if($done1 || $done2 || $done3){
                            //  หากมีการแก้ไขไม่ว่าจะเข้าอันใดอันหนึ่งให้ Insert log การแก้ไขข้อมูลไปเลยตามครั้งนั้นๆ
                            $sqlloginsert = "INSERT INTO cpa_web_log_news 
                                (cpa_news_id,cpa_groupnews_id,cpa_groupnews_new_id,   
                                cpa_name_news,cpa_name_news_new,cpa_descriptions,cpa_descriptions_new,
                                cpa_pdf_path,cpa_pdf_path_new,cpa_pdf_spec,cpa_pdf_spec_new,cpa_pdf_price,cpa_pdf_price_new,status,newstatus,user_edit,update_datetime)
                                VALUE
                                ('$getid','$getGroupnewsid','$groupnewsid','$getNames','$newsname','$getDescriptions','$description','$getPdfpath','$new_name',
                                '$getPdfpath2','$new_name2','$getPdfpath3','$new_name3','$getStatus','$newstatus','$insertuser','$datetime')";
                            $Queryinsertnews = mysqli_query($con, $sqlloginsert);
                            if($Queryinsertnews){
                                echo '<script> Swal.fire({  icon: "success", title: "สำเร็จ", text: "แก้ไขข้อมูลสำเร็จ!", type: "success" })
                                .then(function() {  window.location = "./tableshowdata.php?page=editnews";   });  </script>';
                            } else {
                                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Update ผิดพลาดโปรดลองใหม่อีกครั้ง', })</script>";
                            }
                        }else {
                            echo "<script>Swal.fire({icon: 'error', title: 'ไม่สามารถอัพโหลดไฟล์ได้...', text: 'โปรดลองใหม่อีกครั้งหรือติดต่อ admin', })</script>";
                        }

                    }
                }


                else { //หากไม่อัพโหลดไฟล์ใดๆ

                    $sqlloginsert = "INSERT INTO cpa_web_log_news 
                    (cpa_news_id,cpa_groupnews_id,cpa_groupnews_new_id,   
                        cpa_name_news,cpa_name_news_new,cpa_descriptions,cpa_descriptions_new,
                        cpa_pdf_path,cpa_pdf_path_new,cpa_pdf_spec,cpa_pdf_spec_new,cpa_pdf_price,cpa_pdf_price_new,status,newstatus,user_edit,update_datetime)
                        VALUE
                        ('$getid','$getGroupnewsid','$groupnewsid','$getNames','$newsname','$getDescriptions','$description','$getPdfpath','$new_name',
                        '$getPdfpath2','$new_name2','$getPdfpath3','$new_name3','$getStatus','$newstatus','$insertuser','$datetime')";
                        $Queryinsertnews = mysqli_query($con, $sqlloginsert);

                    $sqlupdatenews = "UPDATE cpa_web_news SET 
                        cpa_groupnews_id = '$groupnewsid',
                        cpa_name_news = '$newsname',
                        cpa_descriptions = '$description',
                        cpa_pdf_path = '$getPdfpath',
                        cpa_pdf_spec_path = '$getPdfpath2',
                        cpa_pdf_price_path = '$getPdfpath3',
                        cpa_status = '$newstatus',
                        cpa_groupspecial_id = '$groupspecialid'
                      where cpa_news_id = '$getid'";

                     $queryUpdate = mysqli_query($con,$sqlupdatenews);


                    if ($queryUpdate) {
                        echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./tableshowdata.php?page=editnews";
                                });
                                </script>';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Update ผิดพลาดโปรดลองใหม่อีกครั้ง', })</script>";
                    }
                }



            }
        }



        ?>



        <!-- Main content -->
        <section class="content mt-2">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">จัดการข้อมูลข่าวประชาสัมพันธ์</h3>
                                <?php if ($getid != '' || $getid != null) {
                                    $sqlgetfrompage = "SELECT * FROM cpa_web_log_news where cpa_news_id = '$getid' ORDER BY update_datetime desc limit 15";
                                    $resultquery = mysqli_query($con, $sqlgetfrompage);
                                ?>
                                    <button type="button" class="btn btn-info" data-toggle="modal" style="float:right;" data-target=".bd-example-modal-lg">Log</button>
                                <?php } ?>


                            </div>
                            <div class="card-body">
                                <!-- Form upload -->
                                <form action="#" method="POST" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label>หมวดหมู่</label>
                                        <select class="form-control" name="groupid" style="width: 100%;" required>
                                            <option selected="selected" value="" data-select2-id="27">โปรเลือก...</option>
                                            <?php
                                            while ($Result = mysqli_fetch_assoc($queryqroup)) {
                                            ?>
                                                <option value="<?php echo $Result['cpa_groupnews_id']; ?>" <?php if($getGroupnewsid == $Result['cpa_groupnews_id']){ echo 'selected';}?>>
                                                    <?php echo $Result['cpa_groupnews_id'] . '.' . $Result['cpa_namegroup']; ?>
                                                </option>
                                            <?php }    ?>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>กลุ่มรายการย่อยหากไม่มีให้เว้นว่างไว้</label>
                                        <select class="form-control" name="groupspecialid" style="width: 100%;" >
                                            <option selected="selected" value="" data-select2-id="27">โปรเลือก...</option>
                                            <?php
                                            while ($Result = mysqli_fetch_assoc($queryspqroup)) {
                                            ?>
                                                <option value="<?php echo $Result['cpa_groupspecial_id']; ?>" <?php if($getspGroupnewsid == $Result['cpa_groupspecial_id']){ echo 'selected';}?>>
                                                    <?php echo $Result['cpa_groupspecial_id'] . '.' . $Result['cpa_groupspecial_name']; ?>
                                                </option>
                                            <?php }    ?>
                                        </select>
                                    </div>

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>ชื่อหัวข้อ</label>
                                            <input type="text" name="newsname" value="<?php echo $getNames; ?>" class="form-control" required>
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>รายละเอียด</label>
                                            <input type="text" name="description" value="<?php echo $getDescriptions; ?>" class="form-control">
                                        </div>
                                    </div>

                                    <?php if ($getid != '' || $getid != null) { ?>
                                        <div class="row">
                                            <div class="col text-center">
                                                <hr>
                                                <p style="color: red;">** หากไม่มีการแก้ไขไฟล์ใดๆให้เว้นว่างไว้ **</p>
                                                <hr>
                                            </div>
                                        </div>

                                    <?php } ?>


                                    <p>     *โปรดอัพโหลดไฟล์เป็น .pdf เท่านั้น*</p>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="file1">แนบ</label>
                                                <input type="file" name="file1" id="file1" class="form-control" onchange="Filevalidation()">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="file2">ราคากลาง</label>
                                                <input type="file" name="file2" id="file2" class="form-control" onchange="Filevalidation2()">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="file3">คุณลักษณะเฉพาะ</label>
                                                <input type="file" name="file3" id="file3" class="form-control" onchange="Filevalidation3()">
                                            </div>
                                        </div>
                                        <div class="col">
                                        <?php if ($getid == '' || $getid == null) { ?>
                                        <button class="btn btn-primary btn-lg btn-block" name="submit">ยืนยัน</button>
                                        <?php } else { ?>
                                            <div class="form-group">
                                                <label>สถานะ 1 เปิดใช้งาน 0 ปิดใช้งาน</label>
                                                <select class="form-control" name="status" style="width: 100%;" required>
                                                    <option selected="selected" value="">status</option>
                                                    <option value="1"> 1</option>
                                                    <option value="0"> 0</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-warning btn-lg btn-block" name="updatedata">แก้ไข</button>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
               <!-- --------------------------------------------- MODAL ----------------------- -->
               <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">LOG ประวัติการแก้ไข</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <table id="example1" class="table table-bordered table-striped table-responsive ">
                                <thead>
                                    <tr>
                                        <?php
                                        while ($property = mysqli_fetch_field($resultquery)) {
                                            $index += 1;
                                            echo '<th>' . $ar[$index] = $property->name . '</th>';
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row_result = mysqli_fetch_assoc($resultquery)) {
                                        echo '<tr role="row">';
                                        for ($i = 0; $i < $index; $i++) {
                                            $colObj = mysqli_fetch_field_direct($resultquery, $i);
                                            $col = $colObj->name;
                                            if ($i == 0) {
                                                echo '<td>' . $row_result[$col] . '</td>';
                                            }
                                            if ($i > 0) {
                                                echo '<td class="text-nowrap">' . $row_result[$col] . '</td>';
                                            }
                                        }
                                        echo '</tr>';
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <!-- jQuery -->
    <script src="../tem/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- bs-custom-file-input -->
    <script src="../tem/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../tem/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../tem/dist/js/demo.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            bsCustomFileInput.init();
        });
    </script>



<script> 
    Filevalidation = () => { 
        const fi = document.getElementById('file1'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 8192) { 
                    Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรเลือกไฟล์ที่ขนาดเล็กกว่า 8MB', })
                    document. getElementById('file1'). value = '';
                }else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    } 
    Filevalidation2 = () => { 
        const fi = document.getElementById('file2'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 8192) { 
                    Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรเลือกไฟล์ที่ขนาดเล็กกว่า 8MB', })
                    document. getElementById('file2'). value = '';
                }else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    } 
    Filevalidation3 = () => { 
        const fi = document.getElementById('file3'); 
        // Check if any file is selected. 
        if (fi.files.length > 0) { 
            for (const i = 0; i <= fi.files.length - 1; i++) { 
  
                const fsize = fi.files.item(i).size; 
                const file = Math.round((fsize / 1024)); 
                // The size of the file. 
                if (file >= 8192) { 
                    Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรเลือกไฟล์ที่ขนาดเล็กกว่า 8MB', })
                    document. getElementById('file3'). value = '';
               } else { 
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB'; 
                } 
            } 
        } 
    } 
</script> 
</body>

</html>