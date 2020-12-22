<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EditNav</title>
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
        <?php $page = 'editfooter';
        $group = 2;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $selectfootergroup = "SELECT * FROM cpa_web_footer_group where cpa_footer_status = '1'";
        $queryfootergroup = mysqli_query($con, $selectfootergroup);
        ?>

        <?php
        $getid =  $_GET['pkid'];
        //เพิ่ม
        if($getid == '' || $getid == null){
            if (isset($_POST['submit'])) {
                $menuname    = $_POST['menuname'];
                $linkto    = $_POST['linkto'];
                $groupid    = $_POST['groupid'];
   
               $insertfooter = "INSERT INTO cpa_web_footermenu (cpa_footer_name,cpa_footer_link,cpa_footer_group_id,cpa_footer_status)  VALUE ('$menuname','$linkto','$groupid','1')";
               $queryinsertfooter = mysqli_query($con, $insertfooter);
   
               if ($queryinsertfooter) {
                   echo "<script>Swal.fire({icon: 'success', title: 'Invalid...', text: 'เพิ่มข้อมูลแล้ว', })</script>";
                   sleep(2);
                   echo "<script> document.location.href='./editfooter.php';</script>";
               } else {
                   echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";
               }
           }
        }

        //แก้ไข
        if($getid != '' || $getid != null){
            $sqlgetuser = "SELECT * FROM cpa_web_footermenu where cpa_footer_id = '$getid'";
            $querygetuser = mysqli_query($con, $sqlgetuser);
            $resultGetuser = mysqli_fetch_assoc($querygetuser);
            $getfootername =   $resultGetuser['cpa_footer_name'];
            $getfooterlink =   $resultGetuser['cpa_footer_link'];
            $getfooterstatus=   $resultGetuser['cpa_footer_status'];
            $getfootergroupid=   $resultGetuser['cpa_footer_group_id'];

            if (isset($_POST['edit'])) {
                $menuname    = $_POST['menuname'];
                $linkto    = $_POST['linkto'];
                $groupid    = $_POST['groupid'];
                $status    = $_POST['status'];
                $updatedate = date("Y/m/d H:i:s");
                $userupdate =  $_SESSION['fname'].' '.$_SESSION['lname'];
   
               $insertlogfooter = "INSERT INTO cpa_web_log_footer (cpa_log_footer_id,cpa_log_footer_name,cpa_log_footer_new_name,cpa_log_footer_link,cpa_log_footer_new_link,cpa_log_groupid,cpa_log_new_groupid,cpa_log_status,cpa_log_new_status,cpa_log_update,cpa_log_user_update) 
               VALUE ('$getid','$getfootername','$menuname','$getfooterlink','$linkto','$getfootergroupid','$groupid','$getfooterstatus','$status','$updatedate','$userupdate')";
               $queryinsertlogfooter = mysqli_query($con, $insertlogfooter);

                $sqlupdatefooter = "UPDATE cpa_web_footermenu 
                SET cpa_footer_name = '$menuname',cpa_footer_link = '$linkto' ,cpa_footer_group_id = '$groupid' ,cpa_footer_status = '$status' 
                WHERE cpa_footer_id = '$getid'";
                $querysqlupdatefooter = mysqli_query($con, $sqlupdatefooter);

               if ($querysqlupdatefooter) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "สำเร็จ",
                        text: "แก้ไขข้อมูลสำเร็จ!",
                        type: "success"
                    }).then(function() {
                        window.location = "./tableshowdata.php?page=editfooter";
                    });
                </script>'; 
               } else {
                   echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";
               }
           }

        }
    
        ?>

        <!-- Main content -->
        <section class="content mt-5">
            <div class="container-fluid">
                <div class="form">
                    <div class="row">
                        <div class="col-3"></div>
                        <div class="col-6">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">จัดการข้อมูล Footer</h3>

                                    <?php if ($getid != '' || $getid != null) 
                                    { $sqlgetfrompage = "SELECT * FROM cpa_web_log_footer where cpa_log_footer_id = '$getid' ORDER BY cpa_log_update DESC limit 15"; 
                                        $resultquery = mysqli_query($con, $sqlgetfrompage); 
                                    //class= "text-nowrap" ?>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" style="float:right;" data-target=".bd-example-modal-lg">Log</button>
                                    <?php } ?>


                                </div>

                                <div class="card-body">
                                    <form action="#" method="post">

                                        <div class="form-group">
                                            <label>เลือกเมนูส่วนที่จะเพิ่มหรือแก้ไข</label>
                                            <select class="form-control" name="groupid" style="width: 100%;" id="groupid" required>
                                                <option selected="selected" value="" data-select2-id="27">tb_group_footer</option>
                                                <?php
                                                while ($Result = mysqli_fetch_assoc($queryfootergroup)) {
                                                ?>
                                                    <option value="<?php echo $Result['cpa_footer_group_id']; ?>" <?php if($getfootergroupid == $Result['cpa_footer_group_id'] ) echo 'selected';?>>
                                                        <?php echo $Result['cpa_footer_group_id'] . '.' . $Result['cpa_footer_group_name']; ?>
                                                    </option>
                                                <?php }    ?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>ชื่อเมนู</label>
                                            <input type="text" class="form-control" name="menuname" placeholder="ชื่อเมนู link" id="menuname" value="<?php if ($getid != null || $getid != '') { echo $getfootername;  }?>" required />
                                        </div>

                                        <div class="form-group">
                                            <label>Link</label>
                                            <input type="text" class="form-control" name="linkto" id="linkto" placeholder="link ที่จะให้ไปเปิด เช่น http://cpa.go.th" value="<?php if ($getid != null || $getid != '') { echo $getfooterlink;  }?>" required />
                                        </div>
                                        <?php if ($getid == '' || $getid == null) { ?>
                                        <button class="btn btn-danger btn-lg" type="submit" name="submit" value="submit"> ยืนยัน</button>
                                        <?php } else { ?>
                                            <div class="form-group">
                                                <label>สถานะ 1 เปิดใช้งาน 0 ปิดใช้งาน</label>
                                                <select class="form-control" name="status" style="width: 100%;" required>
                                                    <option selected="selected" value="">status</option>
                                                    <option value="1"> 1</option>
                                                    <option value="0"> 0</option>
                                                </select>
                                            </div>
                                            <button class="btn btn-info btn-lg btn-block" type="submit" name="edit" value="edit"> แก้ไข </button>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-3"></div>
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

                //Initialize Select2 Elements
                $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservationdate').datetimepicker({
                    format: 'L'
                });
                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
                    }
                )

                //Timepicker
                $('#timepicker').datetimepicker({
                    format: 'LT'
                })

                //Bootstrap Duallistbox
                $('.duallistbox').bootstrapDualListbox()

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                $('.my-colorpicker2').on('colorpickerChange', function(event) {
                    $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
                });

                $("input[data-bootstrap-switch]").each(function() {
                    $(this).bootstrapSwitch('state', $(this).prop('checked'));
                });

            })
        </script>
</body>

</html>