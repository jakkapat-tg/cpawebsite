<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SlideImage</title>
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
        $page = 'editslideimg';
        $group = 2;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $sqlgroup = "SELECT * FROM cpa_web_groupnews";
        $queryqroup = mysqli_query($con, $sqlgroup);

        ?>



        <!-- Main content -->
        <section class="content mt-2">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">แก้ไขภาพหน้าสไลด์หน้าแรกของเว็บ default img กดบันทึกโดยไม่เลือกภาพใดๆ</h3>
                            </div>
                            <div class="card-body">
                                <hr> <p style="text-align: center;color:red;">** แนะนำให้ใช้ภาพขนาด 1980*1080px **</p> <hr>
                                <!-- Form upload -->
                                <form action="#" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="file1">ภาพ 1</label>
                                                <input type="file" name="file1" id="file1" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="file2">ภาพ 2</label>
                                                <input type="file" name="file2" id="file2" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="form-group">
                                                <label for="file3">ภาพ 3</label>
                                                <input type="file" name="file3" id="file3" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <button class="btn btn-primary btn-lg btn-block" name="submit">ยืนยัน</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <?php
             $sqlgetold = "select * from cpa_web_slideimg";
             $queryOldimg = mysqli_query($con,$sqlgetold);
             $resultOldimg = mysqli_fetch_assoc( $queryOldimg);
             $Oldimg1 =  $resultOldimg['image1'];
             $Oldimg2 =  $resultOldimg['image2'];
             $Oldimg3 =  $resultOldimg['image3'];

            if (isset($_POST['submit'])) {
               
                $var = pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
                $var2 = pathinfo(basename($_FILES['file2']['name']), PATHINFO_EXTENSION);
                $var3 = pathinfo(basename($_FILES['file3']['name']), PATHINFO_EXTENSION);
                $datefile  = 'img1-' . date("Ymd") . date("His");
                $datefile2 = 'img2-' . date("Ymd") . date("His");
                $datefile3 = 'img3-' . date("Ymd") . date("His");

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


                $file_path = "../../uploads/image/slideimg/";

                $path_up =  $file_path . $new_name;
                $path_up2 = $file_path . $new_name2;
                $path_up3 = $file_path . $new_name3;
                $file_type1 = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                $file_type2 = strtolower(pathinfo($path_up2, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                $file_type3 = strtolower(pathinfo($path_up3, PATHINFO_EXTENSION)); //ดึง type ไฟล์

                if ($new_name != '' ||  $new_name2 != '' ||  $new_name3 != '') { //หากมีการอัพโหลดไฟล์
                    // เช็คนามสกุลไฟล์หากมีการเลือก
                    if (
                        $file_type1 == "jpg" || $file_type1 == "png" || $file_type1 == "jpeg" || $file_type1 == "gif" ||
                        $file_type2 == "jpg" || $file_type2 == "png" || $file_type2 == "jpeg" || $file_type2 == "gif" ||
                        $file_type3 == "jpg" || $file_type3 == "png" || $file_type3 == "jpeg" || $file_type3 == "gif"
                    ) //เช็คว่าใช่ไฟล์ภาพหรือไม่
                    {
                        $done = move_uploaded_file($_FILES['file1']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                        $done2 = move_uploaded_file($_FILES['file2']['tmp_name'], $path_up2); //เพิ่มไฟล์ลงโฟลเดอร์
                        $done3 = move_uploaded_file($_FILES['file3']['tmp_name'], $path_up3); //เพิ่มไฟล์ลงโฟลเดอร์
                    

                        if($done){
                            echo 'Upload img1 success';
                            if($Oldimg1){
                                $deleteoldimg1 = $file_path . $Oldimg1; //path ลบไฟล์
                                if (unlink($deleteoldimg1)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg1.'<br>');
                                }
                            }
                            $updateimg = " UPDATE cpa_web_slideimg SET image1 = '$new_name' WHERE id = '1' ";
                            $queryupdateimg = mysqli_query($con, $updateimg);    
                        }

                        if($done2){
                            if($Oldimg2){
                                $deleteoldimg2 = $file_path . $Oldimg2; //path ลบไฟล์
                                if (unlink($deleteoldimg2)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg2.'<br>');
                                }
                            }
                            $updateimg = " UPDATE cpa_web_slideimg SET image2 ='$new_name2'  WHERE id = '1' ";
                            $queryupdateimg = mysqli_query($con, $updateimg);    
                        }

                        if($done3){
                            if($Oldimg3){
                                $deleteoldimg3 = $file_path . $Oldimg3; //path ลบไฟล์
                                if (unlink($deleteoldimg3)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg3.'<br>');
                                }
                            }
                            $updateimg = " UPDATE cpa_web_slideimg SET image3 = '$new_name3' WHERE id = '1' ";
                            $queryupdateimg = mysqli_query($con, $updateimg);    
                        }
                       
                        if ($queryupdateimg) {
                            echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "แก้ไขสำเร็จ",
                                    text: "แก้ไขรูปภาพสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./editslideimg.php";
                                });
                                </script>';
                        } else {
                            echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Insert Fail โปรดลองใหม่อีกครั้ง', })</script>";
                        }
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'โปรเลือกไฟล์ที่เป็น image', })</script>";
                    }
                }else{
                    $deleteoldimg1 = $file_path . $Oldimg1; //path ลบไฟล์
                    $deleteoldimg2 = $file_path . $Oldimg2; //path ลบไฟล์
                    $deleteoldimg3 = $file_path . $Oldimg3; //path ลบไฟล์
                    if($Oldimg1 !='' ||$Oldimg1 != null){
                        if (unlink($deleteoldimg1)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                        {
                            echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg1.'<br>');
                        }
                    }
                    if($Oldimg2 !='' ||$Oldimg2 != null){
                        if (unlink($deleteoldimg2)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                        {
                            echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg2.'<br>');
                        }
                    }
                    if($Oldimg3 !='' ||$Oldimg3 != null){
                        if (unlink($deleteoldimg3)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                        {
                            echo ("ลบไฟล์ภาพเดิม สำเร็จ" .  $deleteoldimg3.'<br>');
                        }
                    }
                    
                    $updateimg = " UPDATE cpa_web_slideimg SET image1 = '', image2 = '', image3 = '' WHERE id = '1' ";
                    $queryupdateimg = mysqli_query($con, $updateimg);    
                    echo '<script> Swal.fire({  icon: "warning",     title: "รีเซ็ต",     text: "คืนค่าเริ่มต้นสำเร็จ!",   type: "success"
                        }).then(function() {window.location = "./editslideimg.php";  });  </script>';
                }
            }
            ?>
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