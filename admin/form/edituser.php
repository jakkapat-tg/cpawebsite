<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>EditUser</title>
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
            $page = 'edituser';
            $group = 1;
            include "../components/navbar.php"; 

            include "../../sqlconfig/config.php";
            $getid =  $_GET['pkid'];
            
            //เพิ่ม
            if ($getid == '' || $getid == null) {
                if (isset($_POST['submit'])) {
                    $fname    = $_POST['fname'];
                    $lname    = $_POST['lname'];
                    $gender    = $_POST['gender'];
                    $role     = $_POST['role'];
                    $username = trim($_POST['username']);
                    $tel = $_POST['tel'];
                    $datetime = date("Y/m/d H:i:s");
                    $password = $con->real_escape_string($_POST['password']);
                    $hash = password_hash($password, PASSWORD_BCRYPT); //เข้ารหัส password
                    //echo 'fname ' . $fname . '<br> lname ' . $lname . '<br> role ' . $role . '<br> user ' . $username . '<br> pass ' . $hash;

                    $insertSql = "INSERT INTO cpa_web_user (username, password, fname,lname,gender,role,insertdate_time,tel,status)
                                VALUES ('$username', '$hash',  '$fname', '$lname' ,'$gender',' $role','$datetime','$tel','1')";
                    //echo $insertSql;
                    $query = mysqli_query($con, $insertSql);
                    if ($query) {
                        echo '<script>
                    Swal.fire({
                        icon: "success",
                        title: "สำเร็จ",
                        text: "เพิ่มข้อมูลสำเร็จ!",
                        type: "success"
                    }).then(function() {
                        window.location = "./edituser.php";
                    });
                    </script>';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาดมี usernameนี้ในระบบแล้ว', })</script>";
                    }
                }
            }

            //แก้ไข
            if ($getid != '' || $getid != null) {
                $sqlgetuser = "SELECT * FROM cpa_web_user where username = '$getid'";
                $querygetuser = mysqli_query($con, $sqlgetuser);
                $resultGetuser = mysqli_fetch_assoc($querygetuser);
                $getusername = $resultGetuser['username'];
                $getfname = $resultGetuser['fname'];
                $getlname = $resultGetuser['lname'];
                $gettel = $resultGetuser['tel'];
                $getrole     = $resultGetuser['role'];
                $getstatus     = $resultGetuser['status'];
                $getgender     = $resultGetuser['gender'];


                if ($_POST['edit']) {
                    $fname    = $_POST['fname'];
                    $lname    = $_POST['lname'];
                    $gender   =   $getgender  ;
                    $role     = $_POST['role'];
                    $username = trim($_POST['username']);
                    $tel = $_POST['tel'];
                    $datetime = date("Y/m/d H:i:s");
                    $status    = $_POST['status'];
                    $password = $con->real_escape_string($_POST['password']);
                    $hash = password_hash($password, PASSWORD_BCRYPT); //เข้ารหัส password
                    //echo 'fname ' . $fname . '<br> lname ' . $lname . '<br> role ' . $role . '<br> user ' . $username . '<br> pass ' . $hash;

                    $sqlinsertlog = "INSERT INTO cpa_web_log_userupdate (cpa_log_user_id,cpa_log_update_date,cpa_log_type_update,cpa_log_old_fname,cpa_log_old_lname,cpa_log_old_role,cpa_log_oldstatus,cpa_log_tel,cpa_log_user_update) 
                    VALUE ('$getusername','$datetime','UPDATE','$getfname','$getlname',' $getrole','$getstatus','$gettel','".$_SESSION['username']."')";
                    $queryLog = mysqli_query($con,$sqlinsertlog);

                    $updateuser = "UPDATE  cpa_web_user 
                    SET password = '$hash',
                    fname = '$fname',lname = '$lname',gender = '$gender',role = '$role' ,status = '$status'
                    WHERE username = '$getid'";
                   
                    $queryUpdate = mysqli_query($con, $updateuser);
                    if ($queryUpdate) {
                        echo '<script>
                            Swal.fire({
                                icon: "success",
                                title: "สำเร็จ",
                                text: "แก้ไขข้อมูลสำเร็จ!",
                                type: "success"
                            }).then(function() {
                                window.location = "./tableshowdata.php?page=edituser";
                            });
                        </script>';
                    } else {
                        echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ไม่สามารถแก้ไขได้', })</script>";
                    }
                }
            }
        ?>
        <!-- Main content -->
        <section class="content mt-5">
            <div class="row">
                <div class="col-lg-3"> </div>
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="card card-info">
                            <div class="card-header">
                                <h1 class="card-title">จัดการข้อมูล User</h1>


                                <?php if ($getid != '' || $getid != null) 
                                { $sqlgetfrompage = "SELECT * FROM cpa_web_log_userupdate where cpa_log_user_id = '$getid'"; 
                                     $resultquery = mysqli_query($con, $sqlgetfrompage); 
                                 //class= "text-nowrap" ?>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" style="float:right;" data-target=".bd-example-modal-lg">Log</button>
                                <?php } ?>

                                

                            </div>
                            <div class="card-body">
                                <form action="#" method="POST" oninput='password2.setCustomValidity(password2.value != password.value ? "Passwords do not match." : "")'>
                                    <div class="row">
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label>ชื่อ</label>
                                                <input type="text" class="form-control" placeholder="ชื่อ" id="fname" name="fname" value="<?php if ($getid != null || $getid != '') { echo $getfname;  } else {echo $_POST['fname']; } ?>" required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <label>นามสกุล</label>
                                                <input type="text" class="form-control" placeholder="นามสกุล" id="lname" name="lname" value="<?php if ($getid != null || $getid != '') { echo $getlname;  } else { echo $_POST['lname'];  } ?>" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label>เพศ</label>
                                                <?php
                                                    if($getid =='' || $getid == null){
                                                ?>
                                                <select class="form-control" style="width: 100%;" name="gender" value="" id="gender" required>
                                                    <option selected="selected" data-select2-id="27" value="">โปรดเลือกเพศ</option>
                                                    <option value="1">ชาย</option>
                                                    <option value="2">หญิง</option>
                                                </select>
                                                <?php }?>
                                                <?php   if($getid !='' || $getid != null){ ?>
                                                    <input type="text" class="form-control" value="<?if($getgender =='1')echo 'ชาย'; else if($getgender ==2) echo 'หญิง'; ?>"  disabled>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-8">
                                            <div class="form-group">
                                                <label>เบอร์ติดต่อ</label>
                                                <input type="number" class="form-control" name="tel" id="tel" value="<?php if ($getid != null || $getid != '') { echo $gettel; } else { echo $_POST['tel'];   } ?>" placeholder="เบอร์ติดต่อ">
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label>username</label>
                                                <input type="text" class="form-control" name="username" id="username" value="<?php if ($getid != null || $getid != '') { echo $getusername;    } else {  echo $_POST['username'];   } ?>" placeholder="username" <?php if ($getid != null || $getid != ''){?> disabled <?php }?> required>
                                                <?php if ($getid != null || $getid != ''){?>
                                                    <input type="hidden" name="username" value="<?php echo $getusername;?>"/>
                                                <?php }?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label>password</label>
                                                <input type="password" class="form-control" minlength="4" name="password" id="password" value="" placeholder="password" id="password" name='password' required>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-4">
                                            <div class="form-group">
                                                <label>confirmpassword</label>
                                                <input type="password" class="form-control" placeholder="confirmpassword" id="password2" name='password2' required>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label>สิทธิการเข้าถึง</label>
                                        <select class="form-control" name="role" style="width: 100%;" required>
                                            <option selected="selected" data-select2-id="27" value="">tb_group_status</option>
                                            <option value="admin"> admin</option>
                                            <option value="user"> user</option>
                                        </select>
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





    <script>
        function clearform() {
            document.getElementById("fname").value = ""; //don't forget to set the textbox ID
            document.getElementById("lname").value = ""; //don't forget to set the textbox ID
            document.getElementById("tel").value = ""; //don't forget to set the textbox ID
            document.getElementById("gender").value = ""; //don't forget to set the textbox ID
            document.getElementById("role").value = ""; //don't forget to set the textbox ID
            document.getElementById("username").value = ""; //don't forget to set the textbox ID
        }
        $(document).ready(function() {
            $("#success-alert").hide();
            $("#myWish").click(function showAlert() {
                $("#success-alert").alert();
                window.setTimeout(function() {
                    $("#success-alert").alert('close');
                }, 2000);
            });
        });
    </script>


<!--import script  -->
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