<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เพิ่มข้อมูลผู้บริหาร</title>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <?php $page = 'addceo';
            $group = 2;
            include "../components/navbar.php";
            include "../../sqlconfig/config.php";
            $getid = '';
            $getid =  $_GET['pkid'];

            //เพิ่ม
            if ($getid == '' || $getid == null) {
                if (isset($_POST['submit'])) {
                    $datetime = date("Y/m/d H:i:s");
                    $ceoname = $_POST['ceoname'];
                    $ceoclass = $_POST['ceoclass'];
                    $positionshow = $_POST['position'];

                    $var = pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
                    $datefile = date("Ymd") . 'ceo' . date("His");
                    $new_name = $datefile . "." . $var;
                    $file_path = "../../uploads/image/ceo/";
                    $path_up = $file_path . $new_name;
                    $imageFileType = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์

                    // เช็คนามสกุลไฟล์
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") //เช็คว่าใช่ไฟล์ภาพหรือไม่
                    {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรเลือกไฟล์ที่เป็น .jpg .png .jpeg', })</script>";
                        sleep(2);
                        echo "<script> document.location.href='./addceo.php';</script>";
                    } else {
                        $done = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                        if ($done) { //หากอัพโหลดสำเร็๗ให้เพิ่มข้อมูลลง DB 
                            //echo "upload img successfull";
                            $sqlceo = "INSERT INTO cpa_ceo (cpa_ceo_name,cpa_ceo_detail,cpa_ceo_position_show,cpa_ceo_picturename,cpa_ceo_createdate,cpa_ceo_statusactive)
                                VALUE ('$ceoname','$ceoclass','$positionshow','$new_name',' $datetime','1')";
                            $queryceo = mysqli_query($con, $sqlceo);
                            if ($queryceo) {
                                echo '<script>
                                    Swal.fire({
                                        icon: "success",
                                        title: "สำเร็จ",
                                        text: "เพิ่มข้อมูลสำเร็จ!",
                                        type: "success"
                                    }).then(function() {
                                        window.location = "./addceo.php";
                                    });
                                    </script>';
                            } else {
                                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";
                            }
                        }
                    }
                }
            }


            //แก้ไข
            if ($getid != '' || $getid != null) {
                $sqlgetceo = "SELECT * FROM cpa_ceo where cpa_ceo_id = '$getid'";
                $querygetceo = mysqli_query($con, $sqlgetceo);
                $resultGetceo = mysqli_fetch_assoc($querygetceo);
                $getceoname = $resultGetceo['cpa_ceo_name'];
                $getdetail = $resultGetceo['cpa_ceo_detail'];
                $getpicturename = $resultGetceo['cpa_ceo_picturename'];
                $getPositions = $resultGetceo['cpa_ceo_position_show'];
                $getstatus     = $resultGetceo['cpa_ceo_statusactive'];
                $datetime = date("Y/m/d H:i:s");


                if (isset($_POST['updatedata'])) {
                    $datetime = date("Y/m/d H:i:s");
                    $ceoname = $_POST['ceoname'];
                    $ceoclass = $_POST['ceoclass']; //cpa_ceo_detail
                    $positionshow = $_POST['position'];
                    $status = $_POST['status'];
                    $userupdate = $_SESSION['fname'].' '.$_SESSION['lname'];
                    $var = pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION); //ดึงค่านามสกุลไฟล์


                    //หากไม่มีการอัพไฟล์ใหม่
                    if ($var == '' || $var == null) {
                        $new_name = $getpicturename; //ไม่ใส่ค่าไรมาให้ใช้ค่าเดิมที่ดึงมา

                        $sqlceoupdate = "UPDATE cpa_ceo 
                            SET cpa_ceo_name = '$ceoname',cpa_ceo_detail = '$ceoclass',cpa_ceo_position_show = '$positionshow',cpa_ceo_statusactive = '$status' 
                            WHERE cpa_ceo_id = '$getid'";
                        $querysqlceoupdate = mysqli_query($con, $sqlceoupdate);

                        $sqllogceo = "INSERT INTO  cpa_web_log_ceo
                            (cpa_log_ceo_id,cpa_log_old_ceoname,cpa_log_ceonewname,cpa_log_old_detail,cpa_log_new_detail,cpa_log_old_picturename,cpa_log_new_picturename,cpa_log_old_position,cpa_log_update_date,cpa_log_oldstatus,cpa_log_newstatus,cpa_log_userupdate) 
                            value ('$getid','$getceoname','$ceoname','$getdetail','$ceoclass','$getpicturename','$getpicturename','$getPositions','$datetime','$getstatus','$status','$userupdate')";
                        $querysqllogceo = mysqli_query($con, $sqllogceo);

                        if ($querysqlceoupdate) {
                            echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./tableshowdata.php?page=addceo";
                                });
                                </script>';
                        } else {
                            echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาดอัพโหลดไม่สำเร็จ', })</script>";
                        }
                    }


                    //หากมีไฟล์เข้ามา 
                    if ($var != '' || $var != null) {
                        $datefile = date("Ymd") . 'ceo' . date("His");
                        $new_name = $datefile . "." . $var;
                        $file_path = "../../uploads/image/ceo/";
                        $path_up = $file_path . $new_name;
                        $imageFileType = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                        $new_name; //หากอัพไฟล์มาให้ใช้ชื่อใหม่ไฟล์ใหม่

                        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") //ให้เช็คต่อว่าเป็น type ที่ต้องการหรือไม่แล้วค่อย update 
                        {
                            //เช็คหากมีการส่งค่าไฟล์ใหม่มาให้เปลี่ยนค่าและลบไฟล์เดิมออก และเพิ่ม
                            if( $getpicturename != '' || $getpicturename != null ){
                                $deleteoldimg = $file_path . $getpicturename; //path ลบไฟล์
                                if (unlink($deleteoldimg)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg);
                                    $done = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                                    if ($done) { //หากอัพโหลดสำเร็๗ให้เพิ่มข้อมูลลง DB 
                                        //echo "upload img successfull"; 
                                        $sqlceoupdate = "UPDATE cpa_ceo 
                                                SET cpa_ceo_name = '$ceoname',cpa_ceo_detail = '$ceoclass',cpa_ceo_picturename = '$new_name',cpa_ceo_position_show = '$positionshow',cpa_ceo_statusactive = '$status' 
                                                WHERE cpa_ceo_id = '$getid'";
                                        $querysqlceoupdate = mysqli_query($con, $sqlceoupdate);
    
                                        $sqllogceo = "INSERT INTO  cpa_web_log_ceo
                                                (cpa_log_ceo_id,cpa_log_old_ceoname,cpa_log_ceonewname,cpa_log_old_detail,cpa_log_new_detail,cpa_log_old_picturename,cpa_log_new_picturename,cpa_log_old_position,cpa_log_update_date,cpa_log_oldstatus,cpa_log_newstatus) 
                                                value ('$getid','$getceoname','$ceoname','$getdetail','$ceoclass','$getpicturename','$new_name','$getPositions','$datetime','$getstatus','$status')";
                                        $querysqllogceo = mysqli_query($con, $sqllogceo);
    
                                        if ($querysqlceoupdate) {
                                            echo '<script>
                                                    Swal.fire({
                                                        icon: "success",
                                                        title: "สำเร็จ",
                                                        text: "แก้ไขข้อมูลสำเร็จ!",
                                                        type: "success"
                                                    }).then(function() {
                                                        window.location = "./tableshowdata.php?page=addceo";
                                                    });
                                                    </script>';
                                        } else {
                                            echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาดอัพโหลดไม่สำเร็จ', })</script>";
                                        }
                                    } else {
                                        echo ("error ไม่พบไฟล์ภาพเดิมในระบบ ไม่สามารถแก้ไขได้");
                                    }
                                } else {
                                    echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรดอัพไฟล์ นามสกุล .jpg .png .jpge', })</script>";
                                }
                            }

                            //อัพโหลดเลยหากไม่มีไฟล์เดิม
                            if( $getpicturename == '' || $getpicturename == null ){
                                $done = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                                if ($done) { //หากอัพโหลดสำเร็๗ให้เพิ่มข้อมูลลง DB 
                                    //echo "upload img successfull"; 
                                    $sqlceoupdate = "UPDATE cpa_ceo 
                                            SET cpa_ceo_name = '$ceoname',cpa_ceo_detail = '$ceoclass',cpa_ceo_picturename = '$new_name',cpa_ceo_position_show = '$positionshow',cpa_ceo_statusactive = '$status' 
                                            WHERE cpa_ceo_id = '$getid'";
                                    $querysqlceoupdate = mysqli_query($con, $sqlceoupdate);

                                    $sqllogceo = "INSERT INTO  cpa_web_log_ceo
                                            (cpa_log_ceo_id,cpa_log_old_ceoname,cpa_log_ceonewname,cpa_log_old_detail,cpa_log_new_detail,cpa_log_old_picturename,cpa_log_new_picturename,cpa_log_old_position,cpa_log_update_date,cpa_log_oldstatus,cpa_log_newstatus) 
                                            value ('$getid','$getceoname','$ceoname','$getdetail','$ceoclass','$getpicturename','$new_name','$getPositions','$datetime','$getstatus','$status')";
                                    $querysqllogceo = mysqli_query($con, $sqllogceo);

                                    if ($querysqlceoupdate) {
                                        echo '<script>
                                                Swal.fire({
                                                    icon: "success",
                                                    title: "สำเร็จ",
                                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                                    type: "success"
                                                }).then(function() {
                                                    window.location = "./tableshowdata.php?page=addceo";
                                                });
                                                </script>';
                                    } else {
                                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาดอัพโหลดไม่สำเร็จ', })</script>";
                                    }
                                } else {
                                    echo ("error ไม่พบไฟล์ภาพเดิมในระบบ ไม่สามารถแก้ไขได้");
                                }
                            }
                        }
                    } //end if post 
                } //end if getpkid
            }
        ?>

        <!-- Main content -->
        <section class="content mt-5">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">เพิ่มข้อมูลผู้บริหาร</h3>

                                <?php if ($getid != '' || $getid != null) {
                                    $sqlgetfrompage = "SELECT * FROM cpa_web_log_ceo where cpa_log_ceo_id = '$getid' ORDER BY cpa_log_update_date desc limit 15";
                                    $resultquery = mysqli_query($con, $sqlgetfrompage);
                                ?>
                                    <button type="button" class="btn btn-info" data-toggle="modal" style="float:right;" data-target=".bd-example-modal-lg">Log</button>
                                <?php } ?>

                            </div>
                            <div class="card-body">
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>วันที่บันทึก</label>
                                        <input type="datetime" class="form-control" name="datetime" value="<?php echo date('Y-m-d H:i:s'); ?>" disabled>
                                    </div>


                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>ชื่อผู้บริหาร</label>
                                            <input type="text" placeholder="คำนำหน้า  ชื่อ นามสกุล" name="ceoname" value="<? if($getid != '' || $getid != null) {echo  $getceoname; }?>" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>ตำแหน่ง</label>
                                            <input type="text" class="form-control" name="ceoclass" value="<? if($getid != '' || $getid != null) {echo  $getdetail; }?>" placeholder="เช่น ผู้อำนวยการโรงพยาบาลเจ้าพระยาอภัยภูเบศร">
                                        </div>
                                    </div>

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>ลำดับการแสดงผลคนที่ตัวเลขมากจะขึ้นเป็นลำดับแรก</label>
                                            <input type="text" onKeyUp="if(isNaN(this.value)){ alert('กรุณากรอกตัวเลข'); this.value='';}" maxlength="3" name="position" value="<? if($getid != '' || $getid != null) {echo  $getPositions; }?>" placeholder="999" class="form-control">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>ไฟล์ภาพ<hilight style="color: red;"> ขนาดที่แนะนำ 200*300 px <?php if ($getid != '' || $getid != null) {    echo 'หากไม่แก้ไขรูปภาพให้เว้นว่างไว้'; } ?></hilight> </label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="fileToUpload" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                    </div>

                                    <?php if ($getid == '' || $getid == null) { ?>
                                        <button class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
                                    <?php } else { ?>
                                        <div class="form-group">
                                            <label>สถานะ 1 เปิดใช้งาน 0 ปิดใช้งาน</label>
                                            <select class="form-control" name="status" style="width: 100%;" required>
                                                <option selected="selected" value="">status</option>
                                                <option value="1"> 1</option>
                                                <option value="0"> 0</option>
                                            </select>
                                        </div>
                                        <button class="btn btn-warning btn-lg" name="updatedata">แก้ไข</button>
                                    <?php } ?>
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

</body>

</html>