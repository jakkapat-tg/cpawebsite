<?php include "./redirect.php" ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin CPA | ITA detail</title>
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
        <?php
        $page = 'additadetail';
        $group = 2;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $getid = '';
        $getid  = $_GET['pkid'];


        //เพิ่ม
        if (!isset($getid)) {
            if(isset($_POST['submit'])){
                $ebid  = $_POST['itagroup'];
                $ebdetail =  $_POST['detailname'];
                $eborder =  $_POST['order'];
                $status =  $_POST['status'];
                $timeupdate = date('Y-m-d H:i:s');
                $userupdate =  $_SESSION['username'];

                $var = pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
                $filename = 'ITA-EB-'.$ebid.'-'.  date("Ymd") . '-' . md5(date("His"));
                $new_name = "";

                if ($var != '') {
                    $new_name = $filename.'.'.$var;
                }
                $file_path =  "../../uploads/ita/";
                $path_up = $file_path . $new_name;

                $file_type1 = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                if ($new_name != ''){
                    if ($file_type1 == "pdf" || $file_type1 == "PDF") 
                    {
                       //echo 'type ok';
                        $done = move_uploaded_file($_FILES['file1']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                        if ($done ){
                            $sqlinsertnews = "INSERT INTO ita_detail  (ita_order,ita_eb,ita_detal,ita_path,ita_status,ita_update,ita_userupdate) 
                            VALUE ('$eborder','$ebid','$ebdetail','$new_name','1','$timeupdate','$userupdate')";
                             $Queryinsertnews = mysqli_query($con, $sqlinsertnews);

                             if( $Queryinsertnews ){
                                echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "เพิ่มข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./additadetail.php";
                                });
                                </script>';
                            }
                            else {
                                echo "<script>Swal.fire({icon: 'error', title: 'ไม่สามารถเพิ่มข้อมูลได้ ...', text: ' โปรดลองใหม่อีกครั้ง', })</script>";
                            }
                        }
                        else{
                            echo "<script>Swal.fire({icon: 'error', title: 'ไม่สามารถ upload file ได้ !!', text: 'โปรดลองใหม่อีกครั้ง', })</script>";
                        }

                    }
                    else
                    {
                        echo '<script>Swal.fire({icon: "error", title: "ประเภทไฟล์ไม่ถูกต้อง !!", text: "โปรดเลือกไฟล์ที่เป็น .PDF เท่านั้น", }).then(function() {
                            window.location = "./additadetail.php";
                        });</script>';
                    }
                }
            }
        }


        //แก้ไข
        if (isset($getid)) {
            $sqlgeteb = "select * from ita_detail where ita_id = '$getid'";
            $queryebs = mysqli_query($con, $sqlgeteb);
            $resultebs = mysqli_fetch_assoc($queryebs);
            $ebid = $resultebs['ita_id'];
            $eborder = $resultebs['ita_order'];
            $ebgroupid = $resultebs['ita_eb'];
            $ebdetail = $resultebs['ita_detal'];
            $ebpath = $resultebs['ita_path'];
            $timeupdate = date('Y-m-d H:i:s');
            $userupdate =  $_SESSION['username'];
            $getPdfpath= $resultebs['ita_path'];

            if (isset($_POST['edit'])) {
                $ebid  = $_POST['itagroup'];
                $ebdetail =  $_POST['detailname'];
                $eborder =  $_POST['order'];
                $status =  $_POST['status'];
                $timeupdate = date('Y-m-d H:i:s');
                $userupdate =  $_SESSION['username'];

                $var = pathinfo(basename($_FILES['file1']['name']), PATHINFO_EXTENSION);
                $filename = 'ITA-EB-'.$ebid.'-'.  date("Ymd") . '-' . md5(date("His"));
                $new_name = "";

                //เช็คหากมีไฟล์เข้ามาในแต่ละตัวแปรให้กำหนดค่าชื่อไปและลบไฟล์เดิมออกจากระบบ
                if ($var != '') {
                    $new_name = $filename . "." . $var;
                }
                $file_path =  "../../uploads/ita/";
                $path_up = $file_path . $new_name;

                $file_type1 = strtolower(pathinfo($path_up, PATHINFO_EXTENSION)); //ดึง type ไฟล์
                if ($new_name != ''){
                    if ($file_type1 == "pdf" || $file_type1 == "PDF")
                    {
                        $done = move_uploaded_file($_FILES['file1']['tmp_name'], $path_up); //เพิ่มไฟล์ลงโฟลเดอร์
                        if ($done) { //หากอัพโหลดสำเร็จให้เพิ่มข้อมูลลง DB ไฟล์แรก

                            if($getPdfpath != '' || $getPdfpath != null ){//เช็คว่าเดิมทีมีไฟล์ไหมหากมีให้ลบอันเก่าออก
                                $deleteoldPdf = $file_path . $getPdfpath; //path ลบไฟล์
                                if (unlink($deleteoldPdf)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                                {
                                    echo ("1.ลบไฟล์ PDF แนบเดิม สำเร็จ" .  $deleteoldPdf.'<br>');
                                    $sqlUpdatefile1 = "UPDATE ita_detail SET ita_order = '$eborder',
                                    ita_eb = '$ebid',ita_detal= '$ebdetail',
                                    ita_path = '$new_name',
                                    ita_status=  '$status',
                                    ita_update = '$timeupdate',
                                    ita_userupdate = '$userupdate'
                                    WHERE ita_id = '$getid'";
                                    $queryupdate1 = mysqli_query($con,$sqlUpdatefile1);   
                                    if ($queryupdate1) {
                                        echo '<script>
                                                Swal.fire({
                                                    icon: "success",
                                                    title: "สำเร็จ",
                                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                                    type: "success"
                                                }).then(function() {
                                                    window.location = "./tableshowdata.php?page=additadetail";
                                                });
                                                </script>';
                                    } else {
                                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Update ผิดพลาดโปรดลองใหม่อีกครั้ง', })</script>";
                                    }        
                                }
                            }else {//หากเดิมทีไม่ได้อัพไฟล์ไว้ให้ update file เลย
                               echo $sqlUpdatefile1 = "UPDATE ita_detail SET ita_order = '$eborder',
                                ita_eb = '$ebid',ita_detal= '$ebdetail',
                                ita_path = '$new_name',
                                ita_status=  '$status',
                                ita_update = '$timeupdate',
                                ita_userupdate = '$userupdate'
                                WHERE ita_id = '$getid'";
                                $queryupdate1 = mysqli_query($con,$sqlUpdatefile1);    
                                if ($queryupdate1) {
                                    echo '<script>
                                            Swal.fire({
                                                icon: "success",
                                                title: "สำเร็จ",
                                                text: "แก้ไขข้อมูลสำเร็จ!",
                                                type: "success"
                                            }).then(function() {
                                                window.location = "./tableshowdata.php?page=additadetail";
                                            });
                                            </script>';
                                } else {
                                    echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Update ผิดพลาดโปรดลองใหม่อีกครั้ง', })</script>";
                                }          
                            }

                        }

                    }
                }
                else {// หากไม่อัพโหลดไฟล์ใหม่มาเลยให้อัพเดท DB อย่างเดียว
                    $sqlUpdatefile1 = "UPDATE ita_detail SET ita_order = '$eborder',
                    ita_eb = '$ebid',ita_detal= '$ebdetail', ita_path = '$getPdfpath',
                    ita_status=  '$status',  ita_update = '$timeupdate',ita_userupdate = '$userupdate'
                    WHERE ita_id = '$getid'";
                    $queryupdate1 = mysqli_query($con,$sqlUpdatefile1);    
                    if ($queryupdate1) {
                        echo '<script>
                                Swal.fire({
                                    icon: "success",
                                    title: "สำเร็จ",
                                    text: "แก้ไขข้อมูลสำเร็จ!",
                                    type: "success"
                                }).then(function() {
                                    window.location = "./tableshowdata.php?page=additadetail";
                                });
                                </script>';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'Update ผิดพลาดโปรดลองใหม่อีกครั้ง', })</script>";
                    }          
                }

            }
        }

        ?>

        <section class="content">
            <div class="container-fluid">
                <!-- SELECT2 EXAMPLE -->
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">เพิ่มรายละเอียด ITA หัวข้อย่อยพร้อมไฟล์แนบ</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        </div>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>โปรดเลือกหัวข้อ ITA</label>
                                        <select class="select2 select2-hidden-accessible" name="itagroup" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
                                            <?php
                                            $sqleb = 'select * from ita_eb where status = "1"';
                                            $ebs = mysqli_query($con, $sqleb);
                                            while ($rszone = mysqli_fetch_assoc($ebs)) {
                                            ?>
                                                <option value="<?php echo $rszone['ita_eb_id']; ?>" <?php if (($getid != '' || $getid != null) && ($rszone['ita_eb_id'] === $ebgroupid)) {  echo 'selected';   } ?>>
                                                    <?php echo $rszone['ita_eb_code'] . ' : ' . $rszone['ita_eb_name'] . ' : ' . $rszone['ita_eb_year']; ?>
                                                </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <label for="detailname">รายละเอียด</label>
                                    <input type="text" name="detailname" class="form-control" placeholder="เช่น 1.1 รายละเอียด" value="<?php if (isset($getid)) {    echo $ebdetail;      } ?>" required />
                                </div>
                                <div class="col-md-2">
                                    <label for="order">ลำดับแสดงผลที่</label>
                                    <input type="number" name="order" class="form-control" value="<?php if (isset($getid)) {     echo $eborder;       } ?>" placeholder="" required />
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="file1">เอกสารแนบ</label>
                                        <input type="file" name="file1" id="file1" class="form-control">
                                    </div>
                                </div>
                            </div>
                       
                            <div class="col">
                                <?php if ($getid == '' || $getid == null) { ?>
                                    <button class="btn btn-primary btn-lg btn-block" name="submit">ยืนยัน</button>
                                <?php } else { ?>
                                    <div class="form-group">
                                        <label>สถานะ 1 เปิดใช้งาน 0 ปิดใช้งาน</label>
                                        <select class="form-control" name="status" style="width: 100%;" required>
                                            <option value="1" selected> 1</option>
                                            <option value="0"> 0</option>
                                        </select>
                                    </div>

                                    <p style="color: red;text-align:center;">** หากไม่มีการแก้ไขไฟล์ใดๆให้เว้นว่างไว้ **</p>
                                    <button class="btn btn-warning btn-lg btn-block" name="edit">แก้ไข</button>
                                <?php } ?>

                            </div>

                        </form>
                    </div><!-- /.card-body -->
                </div>
            </div><!-- /.container-fluid -->
        </section>




    </div>
    <!-- ./wrapper -->




    <!-- jQuery -->
    <script src="../tem/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Select2 -->
    <script src="../tem/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../tem/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../tem/plugins/moment/moment.min.js"></script>
    <script src="../tem/plugins/inputmask/min/jquery.inputmask.bundle.min.js"></script>
    <!-- date-range-picker -->
    <script src="../tem/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../tem/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../tem/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../tem/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../tem/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../tem/dist/js/demo.js"></script>
    <!-- Page script -->
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
</body>

</html>