<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>กิจกรรม</title>
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
        <?php $page = 'manageEvent';
            $group = 2;
            include "../components/navbar.php";
            include "../../sqlconfig/config.php";
            $getid =  $_GET['pkid'];

            // เพิ่ม
            if ($getid == '' || $getid == null) {
                if (isset($_POST['submit'])) {
                    $datetime = date("Y/m/d H:i:s");
                    $topic =  $_POST['topic'];
                    $detail = $_POST['detail'];
                    $content = $_POST['content'];
                    $insertuser = $_SESSION['fname'].' '.$_SESSION['lname'];


                    $var = pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
                    $datefile = date("Ymd") . '-event-' . date("His");
                    $new_name = $datefile . "." . $var;
                    $file_path = "../../uploads/image/event/";
                    $path_up = $file_path . $new_name;
                    $imageFileType = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์

                    // เช็คนามสกุลไฟล์
                    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") //เช็คว่าใช่ไฟล์ภาพหรือไม่
                    {
                        echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "อัพโหลดไฟล์ผิดประเภท",
                            text: "โปรดอัพโหลดไฟล์ที่มีนามสกุล jpg jpge png!",
                            type: "error"
                        }).then(function() {
                            window.location = "./manageEvent.php";
                        });
                        </script>';
                    } else {
                        $done = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                       // echo $path_up;
                        if ($done) { //หากอัพโหลดสำเร็จให้เพิ่มข้อมูลลง DB 
                            echo "upload img successfull";
                            $sqlevent= "INSERT INTO cpa_events (cpa_event_topic,cpa_event_detail,cpa_event_content,cpa_event_path,cpa_event_insert_date,cpa_event_status,cpa_event_user_insert)
                            VALUE ('$topic','$detail','$content','$new_name','$datetime','1','$insertuser')";
                            $queryevent = mysqli_query($con, $sqlevent);
                            if ($queryevent) {
                                echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "เพิ่มข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./manageEvent.php";
                                });
                                </script>';
                            } else {
                                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', }).then(function() {
                                    window.location ='./manageEvent.php';
                                });</script>";
                            }
                        }
                    }
                }
            }

            // แก้ไข
            if ($getid != '' || $getid != null) {
                $sqlgetEvent = "SELECT * FROM cpa_events where cpa_event_id = '$getid'";
                $querysqlgetEvent = mysqli_query($con, $sqlgetEvent);
                $resultGetEv = mysqli_fetch_assoc($querysqlgetEvent);
                $gettopicname = $resultGetEv['cpa_event_topic'];
                $getdetail = $resultGetEv['cpa_event_detail'];
                $getcontent = $resultGetEv['cpa_event_content'];
                $getpath = $resultGetEv['cpa_event_path'];
                $getstatus  = $resultGetEv['cpa_event_status'];
                $datetime = date("Y/m/d H:i:s");

                if (isset($_POST['edit'])) {
                    $topic =  $_POST['topic'];
                    $detail = $_POST['detail'];
                    $content = $_POST['content'];
                    $status = $_POST['status'];
                    $edituser = $_SESSION['fname'].' '.$_SESSION['lname'];
                    $var = pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);

                    //หากไม่มีการอัพไฟล์ใหม่
                    if ($var == '' || $var == null) {
                        $new_name = $getpath; //ไม่ใส่ค่าไรมาให้ใช้ค่าเดิมที่ดึงมา

                        $sqlupdateevent = "UPDATE cpa_events SET cpa_event_topic = '$topic',cpa_event_detail = '$detail',cpa_event_content = '$content',cpa_event_status = '$status'
                        WHERE cpa_event_id = '$getid'";
                        $querysqlupdateEvent = mysqli_query($con, $sqlupdateevent);

                        $sqlLogEvents = "INSERT INTO  
                        cpa_web_log_events (cpa_log_event_id,cpa_log_topic,cpa_log_new_topic,cpa_log_detail,cpa_log_new_detail,cpa_log_content,cpa_log_new_content,cpa_log_status,cpa_log_new_status,cpa_log_user_update,cpa_log_update_date,cpa_log_img) 
                        value ('$getid','$gettopicname','$topic','$getdetail','$detail','$getcontent','$content','$getstatus','$status','$edituser','$datetime','$new_name') ";
                        $querysqlLogEvents = mysqli_query($con, $sqlLogEvents);

                        if ($querysqlupdateEvent) {
                            echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./tableshowdata.php?page=manageEvent";
                                });
                                </script>';
                        } else {
                            echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ไม่สามารถแก้ไขข้อมูลได้', })</script>";
                        }
                    }

                    //หากมีไฟล์เข้ามา 
                    if ($var != '' || $var != null) {
                        $datefile = date("Ymd") . '-event-' . date("His");
                        $new_name = $datefile . "." . $var;
                        $file_path = "../../uploads/image/event/";
                        $path_up = $file_path . $new_name;
                        $imageFileType = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                        $new_name; //หากอัพไฟล์มาให้ใช้ชื่อใหม่ไฟล์ใหม่

                        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") //ให้เช็คต่อว่าเป็น type ที่ต้องการหรือไม่แล้วค่อย update 
                        {
                            //เช็คหากมีการส่งค่าไฟล์ใหม่มาให้เปลี่ยนค่าและลบไฟล์เดิมออก หากไม่มีการส่งมาให้ส่งค่าเดิมไป
                            $deleteoldimg = $file_path . $getpath; //path ลบไฟล์
                            if (unlink($deleteoldimg)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                            {
                                echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg);
                                $done = move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                                if ($done) { //หากอัพโหลดสำเร็๗ให้เพิ่มข้อมูลลง DB 
                                    //echo "upload img successfull"; 
                                    $sqlupdateevent = "UPDATE cpa_events SET 
                                    cpa_event_topic = '$topic',cpa_event_detail = '$detail',cpa_event_content = '$content',
                                    cpa_event_path  = '$new_name',cpa_event_status = '$status'
                                    WHERE cpa_event_id = '$getid'";
                                    $querysqlupdateEvent = mysqli_query($con, $sqlupdateevent);
                    
                                    $sqlLogEvents = "INSERT INTO  
                                    cpa_web_log_events (cpa_log_event_id,cpa_log_topic,cpa_log_new_topic,cpa_log_detail,cpa_log_new_detail,cpa_log_content,
                                    cpa_log_new_content,cpa_log_status,cpa_log_new_status,cpa_log_img,cpa_log_new_img,cpa_log_user_update,cpa_log_update_date) 
                                    value ('$getid','$gettopicname','$topic','$getdetail','$detail','$getcontent','$content','$getstatus','$status','$getpath','$new_name','$edituser','$datetime') ";
                                    $querysqlLogEvents = mysqli_query($con, $sqlLogEvents);

                                    if ($querysqlupdateEvent) {
                                        echo '<script>
                                                Swal.fire({
                                                    icon: "success",
                                                    title: "สำเร็จ",
                                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                                    type: "success"
                                                }).then(function() {
                                                    window.location = "./tableshowdata.php?page=manageEvent";
                                                });
                                                </script>';
                                    } else {
                                        $deleteoldimg = $file_path . $new_name; //path ลบไฟล์ที่อัพไปใหม่ update ไม่สำเร็จ
                                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ไม่สามารถแก้ไขข้อมูลได้', })</script>";
                                    }
                                } else {
                                    echo ("error ไม่พบไฟล์ภาพเดิมในระบบ ไม่สามารถแก้ไขได้");
                                }
                            } else {
                                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรดอัพไฟล์ นามสกุล .jpg .png .jpge', })</script>";
                            }
                        }
                    } //end if post 
                }

            }
        ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> เพิ่มประมวลภาพกิจกรรมและข้อมูลต่างๆ </h3>

                        <?php if ($getid != '' || $getid != null) 
                                {  $sqlgetfrompage = "SELECT cpa_log_topic,cpa_log_new_topic,cpa_log_detail,
                                cpa_log_new_detail,cpa_log_img,cpa_log_new_img,cpa_log_status,cpa_log_new_status,
                                    cpa_log_user_update,cpa_log_update_date
                                 FROM cpa_web_log_events where cpa_log_event_id = '$getid' ORDER BY cpa_log_update_date DESC limit 15"; 
                                     $resultquery = mysqli_query($con, $sqlgetfrompage); 
                                 //class= "text-nowrap" ?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" style="float:right;" data-target=".bd-example-modal-lg">Log</button>
                        <?php } ?>

                    </div>

                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>หัวข้อ</label>
                                <input type="text" class="form-control" name="topic" value="<? if($getid != '' || $getid != null) {echo  $gettopicname; }?>"  placeholder="เช่น ข่าวประชาสัมพันธ์" required>
                            </div>
                            <div class="form-group">
                                <label>รายละเอียด</label>
                                <input type="text" class="form-control" name="detail" value="<? if($getid != '' || $getid != null) {echo  $getdetail; }?>" placeholder="รายละเอียด" required>
                            </div>
                            
                            <label>ไฟล์ภาพปก   <?php if($getid != '' || $getid != null){?> <hilight style="color:red">*หากไม่แก้ไขไฟล์ให้เว้นว่างไว้*</hilight> <?php }?></label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="fileToUpload" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>เนื้อหา <hilight style="color:red"> ไม่ควรยาวเกิน 4 พันตัวอักษร</hilight></label>
                                <textarea name="content" id="detail" ><?php echo $getcontent;?></textarea>
                            </div>

                            <?php if ($getid == '' || $getid == null) { ?>
                                 <button class="btn btn-info btn-lg btn-block" type="submit" name="submit" value="submit"> ยืนยัน</button>
                                    <?php } else { ?>
                                        <div class="form-group">
                                            <label>สถานะ 1 เปิดใช้งาน 0 ปิดใช้งาน</label>
                                            <select class="form-control" name="status" style="width: 100%;" required>
                                                <option selected="selected" value="">status</option>
                                                <option value="1"> 1</option>
                                                <option value="0"> 0</option>
                                            </select>
                                        </div>
                                         <a href="./addeventgallery.php?pkid=<?=$getid?>" class="btn btn-secondary mb-3">ภาพเพิ่มเติม</a>
                                        <button class="btn btn-info btn-lg btn-block" type="submit" name="edit" value="edit"> แก้ไข </button>
                                    <?php } ?>
                    </div>
                    </form>

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
                                                    echo '<td>'. $row_result[$col] . '</td>';
                                                }
                                                if ($i > 0) {
                                                    echo '<td>' . $row_result[$col] . '</td>';
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





        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('detail');


            function CKupdate() {
                for (instance in CKEDITOR.instances)
                    CKEDITOR.instances[instance].updateElement();
            }
        </script>




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