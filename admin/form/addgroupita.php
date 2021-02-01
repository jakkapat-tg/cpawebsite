<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin CPA | Edit group ITA</title>
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
        $page = 'addgroupita';
        $group = 2;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        ?>

        <?php
        $getid =  $_GET['pkid'];
        //เพิ่ม
        if($getid == '' || $getid == null){
            if (isset($_POST['submit'])) {
                $ebcode    = $_POST['ebcode'];
                $ebname    = $_POST['ebname'];
                $ebyear    = $_POST['ebyear'];
                $sqlinserteb = "INSERT INTO ita_eb (ita_eb_code,ita_eb_name,ita_eb_year,status) VALUE ('$ebcode','$ebname','$ebyear','1')";
                $queryinserteb = mysqli_query($con,$sqlinserteb);
   
               if ($queryinserteb) {
                   echo "<script>Swal.fire({icon: 'success', title: 'Invalid...', text: 'เพิ่มข้อมูลแล้ว', })</script>";
                   sleep(2);
                   echo "<script> document.location.href='./addgroupita.php';</script>";
               } else {
                   echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาด', })</script>";
               }
           }
        }


        //แก้ไข
        if($getid != '' || $getid != null){
            $sqlgeteb= "SELECT * FROM ita_eb where ita_eb_id = '$getid'";
            $querygetuser = mysqli_query($con, $sqlgeteb);
            $resultGetuser = mysqli_fetch_assoc($querygetuser);
            $getebcode =   $resultGetuser['ita_eb_code'];
            $getebname =   $resultGetuser['ita_eb_name'];
            $getebyear =   $resultGetuser['ita_eb_year'];
            $getstatus =   $resultGetuser['status'];

            if (isset($_POST['edit'])) {
                $ebcode    = $_POST['ebcode'];
                $ebname    = $_POST['ebname'];
                $ebyear    = $_POST['ebyear'];
                $status    = $_POST['status'];
                $userupdate =  $_SESSION['fname'].' '.$_SESSION['lname'];
                //$updatedate = date("Y/m/d H:i:s");

                $sqlEditeb = "UPDATE ita_eb SET ita_eb_code = '$ebcode', ita_eb_name = '$ebname',ita_eb_year = '$ebyear',status = '$status' where ita_eb_id = '$getid'";
                $querysqlEditeb = mysqli_query($con, $sqlEditeb);


               if ($querysqlEditeb) {
                echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "สำเร็จ",
                        text: "แก้ไขข้อมูลสำเร็จ!",
                        type: "success"
                    }).then(function() {
                        window.location = "./tableshowdata.php?page=addgroupita";
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
                                    <h3 class="card-title">จัดการหัวข้อใหญ่ ITA</h3>
                                </div>

                                <div class="card-body">
                                    <form action="#" method="post">

                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <label> EB CODE</label>
                                                    <input type="text" class="form-control" name="ebcode" placeholder="เช่น EB 1" autocomplete="off" id="menuname" value="<?php if ($getid != null || $getid != '') { echo  $getebcode; }?>" required />
                                                </div>
                                            <div class="col-lg-7">
                                                <label>ชื่อหัวข้อ EB </label>
                                                <input type="text" class="form-control" name="ebname" placeholder="ชื่อเมนู เช่น หน่วยงานมีการวิเคราะห์ผลการจัดซื้อจัดจ้างประจำปี" autocomplete="off" id="menuname" value="<?php if ($getid != null || $getid != '') { echo  $getebname; }?>" required />
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="form-group">
                                                    <label>ปี</label>
                                                    <select class="form-control" name="ebyear" style="width: 100%;" required>
                                                            <option value="">โปรดเลือก ... </option>
                                                            <option value="<?php echo  date('Y')+543+1;  ?>" <?php if($getebyear == (date('Y')+543+1)) {echo " selected";} ?>>  <?php echo (date('Y')+543+1);?></option>
                                                            <option value="<?php echo  date('Y')+543;    ?>" <?php if($getebyear == (date('Y')+543)) {echo " selected";} ?>> <?php echo (date('Y')+543);?></option>
                                                            <option value="<?php echo  date('Y')+543-1 ; ?>" <?php if($getebyear == (date('Y')+543-1)) {echo " selected";} ?>> <?php echo (date('Y')+543-1);?></option>
                                                            <?php if ( ($getebyear != '') &&  ( $getebyear != strval(date('Y')+543))  && ($getebyear != strval(date('Y')+543+1))  && ($getebyear != strval(date('Y')+543-1)))  { 
                                                             echo "<option  value='$getebyear' selected> $getebyear </option>";
                                                            } ?>
                                        
                                                    </select>
                                                </div>
                                            </div>
                                            </div>
                                        </div>

               

                                        <?php if ($getid == '' || $getid == null) { ?>
                                        <button class="btn btn-danger btn-lg" type="submit" name="submit" value="submit"> ยืนยัน</button>
                                        <?php } else { ?>
                                            <div class="form-group">
                                                <label>สถานะ 1 เปิดใช้งาน 0 ปิดใช้งาน</label>
                                                <select class="form-control" name="status" style="width: 100%;" required>
                                                    <option value="1" selected> 1</option>
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