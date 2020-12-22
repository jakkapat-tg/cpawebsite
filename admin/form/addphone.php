<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>เพิ่มแก้ไขเบอร์ติดต่อภายใน</title>
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
        <?php $page = 'addphone';
            $group = 2;
            include "../components/navbar.php";
            include "../../sqlconfig/config.php";
            $getid = '';
            $getid =  $_GET['pkid'];

            //เพิ่ม
            if ($getid == '' || $getid == null) {
                if (isset($_POST['submit'])) {
                    $datetime = date("Y/m/d H:i:s");
                    $dep_name = $_POST['depname'];
                    $tel = $_POST['tel'];
                    $zone = $_POST['zone'];
                    $classname = $_POST['classname'];
                    $userupdate = $_SESSION['fname'].' '.$_SESSION['lname']; 
                    $sqlphone = "INSERT INTO phone_detail_cpa (dep_name,tel_number,tel_type,zone_name,class_name,status_on,userupdate,dateupdate) 
                    VALUE ('$dep_name','$tel','P','$zone','$classname',   'Y',     '$userupdate','$datetime')";
                    $queryphone = mysqli_query($con, $sqlphone);
                     if ($queryphone) {
                        echo '<script>
                              Swal.fire({
                                icon: "success",
                                title: "สำเร็จ",
                                text: "เพิ่มข้อมูลสำเร็จ!",
                                type: "success"
                            }).then(function() { window.location = "./addphone.php";  });  </script>';
                            } else { echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";  }
                }
            }


            //แก้ไข
            if ($getid != '' || $getid != null) {
                $sqlgetphone = "SELECT * FROM phone_detail_cpa where id = '$getid'";
                $querygetphone = mysqli_query($con, $sqlgetphone);
                $resultGetphone = mysqli_fetch_assoc($querygetphone);
                $getdepname = $resultGetphone['dep_name'];
                $getzonename = $resultGetphone['zone_name'];
                $gettel= $resultGetphone['tel_number'];
                $getclass= $resultGetphone['class_name'];
                $datetime = date("Y/m/d H:i:s");

                if (isset($_POST['updatedata'])) {
                    $dep_namenew = $_POST['depname'];
                    $telnew = $_POST['tel'];
                    $classnamenew = $_POST['classname'];
                    $zonenew = $_POST['zone'];
                    $userupdatenew = $_SESSION['fname'].' '.$_SESSION['lname']; 
                    $status = $_POST['status'];

                    $sqleditphone = "UPDATE phone_detail_cpa SET dep_name = '$dep_namenew', tel_number = '$telnew',
                    class_name = '$classnamenew' , zone_name = '$zonenew',status_on = '$status' where id = '$getid'";
                    $queryeditphone = mysqli_query($con, $sqleditphone);

                    if ($queryeditphone) {
                        echo $sqllogphone = "INSERT INTO cpa_web_phone_detail_log (phone_id,depname_old,depname_new,tel_numberold,tel_numbernew,zone_nameold,zone_namenew,updateuser)
                        VALUE ('$getid',' $getdepname','$dep_namenew','$gettel','$telnew','$getzonename','$zonenew','$userupdatenew')";
                        $querysqllogphone = mysqli_query($con, $sqllogphone);
                        echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "สำเร็จ",
                                text: "แก้ไขข้อมูลสำเร็จ!",
                                type: "success"
                            }).then(function() { window.location = "./tableshowdata.php?page=addphone"; }); </script>';
                        } else {
                            echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'แก้ไขไม่สำเร็จ', })</script>";
                        }
                    
                    } //end if post 
                } //end if getpkid
        ?>

        <!-- Main content -->
        <section class="content mt-5">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">เพิ่ม/แก้ไข ข้อมูลเบอร์ติดต่อภายใน</h3>

                                <?php if ($getid != '' || $getid != null) {
                                    $sqlgetfrompage = "SELECT * FROM cpa_web_phone_detail_log where phone_id = '$getid' ORDER BY updatedatetime desc limit 15";
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
                                            <label>ชื่อตึกห้องหรือคลินิก/แผนก/หน่วยงาน</label>
                                            <input type="text" placeholder="ชื่อตึกห้องหรือแผนก" name="depname" value="<? if($getid != '' || $getid != null) {echo   $getdepname ;}?>" class="form-control">
                                        </div>
                                    </div>

                                       <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>ชั้น</label>
                                            <input type="text"  name="classname" value="<? if($getid != '' || $getid != null) {echo  $getclass; }?>" placeholder="ชั้น" class="form-control">
                                        </div>
                                    </div>

                                    

                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                            <label>เบอร์โทร</label>
                                            <input type="text"  name="tel" value="<? if($getid != '' || $getid != null) {echo  $gettel; }?>" placeholder="เบอร์โทร" class="form-control">
                                        </div>
                                    </div>


                                    <div class="col-12 col-lg-12">
                                        <div class="form-group">
                                        <label>zone ตึก </label>
                                        <select class="form-control" name="zone" style="width: 100%;" required>
                                        <option value=''> โปรดเลือก... </option >
                                            <?php 
                                                $sqlzone = 'select * from cpa_web_buildingzone_phone ';
                                                $zone = mysqli_query($con, $sqlzone);
                                                while ($rszone = mysqli_fetch_assoc($zone)) {
                                            ?>
                                              
                                                <option  value="<?php echo $rszone['zone'];?>" 
                                                    <?php  if(($getid != '' || $getid != null) && ($rszone['zone'] === $getzonename)){ echo 'selected'; } ?>>
                                                    <?php  echo $rszone['id'].' : '.$rszone['zone']; ?>  
                                                </option>
                                            <?php }?>
                                            </select>
                                        </div>
                                    </div>


                                
                                    <?php if ($getid == '' || $getid == null) { ?>
                                        <button class="btn btn-primary btn-lg" name="submit">ยืนยัน</button>
                                    <?php } else { ?>
                                        <div class="form-group">
                                            <label>สถานะ Y เปิดใช้งาน N ปิดใช้งาน</label>
                                            <select class="form-control" name="status" style="width: 100%;" required>
                                                <option  value="">status</option>
                                                <option value="ํY" selected="selected"> Y</option>
                                                <option value="N"> N</option>
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