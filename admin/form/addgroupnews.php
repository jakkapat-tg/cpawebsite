<?php include "./redirect.php" ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>กลุ่มข่าว</title>
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
        <?php $page = 'addgroupnews';
        $group = 1;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $getid  = $_GET['pkid'];

        if ($getid == '' || $getid == null) {
            $sqlgroup = "SELECT max(cpa_groupnews_id)as maxid FROM cpa_web_groupnews";
            $queryqroup = mysqli_query($con, $sqlgroup);
            $iddata = mysqli_fetch_assoc($queryqroup);
            $datetime = date("Y/m/d H:i:s");
            $idgroup = $iddata['maxid'] + 1;

            if (isset($_POST['submit'])) {
                $groupnews = $_POST['groupnews'];
                $groupnews2 = htmlspecialchars($groupnews, ENT_QUOTES); //ป้องกันการใส่tag html or script
                $sqladdgroup = "INSERT INTO cpa_web_groupnews (cpa_groupnews_id,cpa_namegroup,insert_date,status) VALUE ('$idgroup','$groupnews2','$datetime','1')";
                $querysqladdgroup = mysqli_query($con, $sqladdgroup);
                if ($querysqladdgroup) {
                    echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "สำเร็จ",
                                text: "แก้ไขข้อมูลสำเร็จ!",
                                type: "success"
                            }).then(function() {
                                window.location = "./addgroupnews.php";
                            });
                        </script>';
                } else {
                    echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";
                }
            }
        }


        if ($getid != '' || $getid != null) {
            $idgroup = $getid;
            $sqlgroup = "SELECT * FROM cpa_web_groupnews where cpa_groupnews_id = '$getid'";
            $queryGetqroup = mysqli_query($con, $sqlgroup);
            $resultgetgroup = mysqli_fetch_assoc($queryGetqroup);
            $getGroupname =  $resultgetgroup['cpa_namegroup'];
            $getstatus     = $resultgetgroup['status'];

            if (isset($_POST['edit'])) {
                $newsgroupnews = $_POST['groupnews'];
                $newstatus    = $_POST['status'];
                $datetime = date("Y/m/d H:i:s");
                $userupdate = $_SESSION['fname'].' '.$_SESSION['lname'];

                $sqlEditgroup = "UPDATE cpa_web_groupnews SET cpa_namegroup = '$newsgroupnews', status = '$newstatus' where cpa_groupnews_id = '$getid'";
                $querysqlEditgroup = mysqli_query($con, $sqlEditgroup);

                $sqlInsertlog = "INSERT INTO cpa_web_log_groupnews (cpa_log_group_old_name,cpa_log_group_new_name,cpa_log_old_status,cpa_log_new_status,cpa_log_update,cpa_log_group_id,cpa_log_user_update) 
                VALUE ('$getGroupname','$newsgroupnews','$getstatus','$newstatus','$datetime','$getid','$userupdate')";
                $queryInsertlog = mysqli_query($con, $sqlInsertlog);

                if ($querysqlEditgroup) {
                    echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "สำเร็จ",
                        text: "แก้ไขข้อมูลสำเร็จ!",
                        type: "success"
                    }).then(function() {
                        window.location = "./tableshowdata.php?page=addgroupnews";
                    });
                </script>';
                } else {
                    echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ไม่สามารถแก้ไขได้', })</script>";
                }
            }
        }
        ?>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title"> เพิ่มหมวดหมู่ข่าวประชาสัมพันธ์</h3>

                        <?php if ($getid != '' || $getid != null) {
                            $sqlgetfrompage = "SELECT * FROM cpa_web_log_groupnews where cpa_log_group_id= '$getid' order by cpa_log_update desc limit 15";
                            $resultquery = mysqli_query($con, $sqlgetfrompage);
                            //class= "text-nowrap" 
                        ?>
                            <button type="button" class="btn btn-primary" data-toggle="modal" style="float:right;" data-target=".bd-example-modal-lg">Log</button>
                        <?php } ?>

                    </div>
                    <div class="card-body">
                        <?php echo '<h2 style="text-align:right;"> กลุ่มที่ ' . $idgroup . '</h2>'; ?>
                        <form action="#" method="POST">
                            <label>เพิ่ม/แก้ไข หมวดหมู่ข่าวประชาสัมพันธ์</label>
                            <div class="form-group">
                                <input type="text" class="form-control" name="groupnews" value="<?= $getGroupname ?>" placeholder="เช่น ข่าวประชาสัมพันธ์" required>
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
                                <button class="btn btn-warning btn-lg btn-block" type="submit" name="edit" value="edit"> แก้ไข </button>
                            <?php } ?>
                        </form>
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