<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ตารางข้อมูล</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="../tem/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="../tem/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../tem/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../tem/dist/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <?php
        $page = 'Covid19';
        $group = 1;
        include "../components/navbar.php";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            function send_line_notify($message, $token)
            {
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, "message=$message");
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                $headers = array("Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token",);
                curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $result = curl_exec($ch);
                curl_close($ch);
                return $result;
            }
            $date = date("Y-m-d H:i:s");
            $fullname = $_SESSION["fname"] . " " . $_SESSION["lname"];
            $sqlinsert = "UPDATE req_prob SET check_status = 'Y' ,check_time = '$date' ,check_by = '$fullname' WHERE id = " . '\'' . $_POST['id'] . '\' AND cidcode = \'' . $_POST['cidcode'] . '\'';
            if (mysqli_query($con, $sqlinsert)) {
                $message = "\r\n" .
                    'คำร้องเรียน ' . $_POST["req_time"] . "\r\n" .
                    'ID: ' . $_POST["id"] . "\r\n" .
                    'เรื่อง: ' . $_POST["req_head"] . "\r\n" .
                    'ชื่อ: ' . $_POST["pname"] . " " .  $_POST["fname"] . "  " .  $_POST["lname"] . "\r\n" .
                    'สถานะ: ดำเนินการเรียบร้อย' . "\r\n" .
                    'วันที่ดำเนินการ: ' . date('d-m-Y H:i น.');
                $token = 'LWXFDV0Ubg4tpFWJk4huG97lCHKXcnGkrrMHfH0vQfm';
                send_line_notify($message, $token);
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "สำเร็จ",
                            text: "สถานะดำเนินการเรียบร้อยแล้ว!",
                            type: "success"
                        }).then(function() {
                            window.location = "./Covid19.php";
                        });
                    </script>';
            } else {
                echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "ไม่สำเร็จ",
                            text: "กรุณาลองใหม่อีกครั้ง",
                            type: "cancel"
                        }).then(function() {
                            window.location = "./Covid19.php";
                        });
                    </script>';
            }
        }
        ?>



        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <p style="text-align: center;">
                        <span style="font-weight: bold;font-size:28px;color: #046099;">ข้อมูลผลตรวจ Covid-19</span>
                    </p>
                </div>
            </div>

            <div class="container-fulid" style="margin:100px;">
                <form class="form" method="POST" action="./export/exportexcel.php" target="_blank">
                    <div class="row">
                        <div class="col-lg-3">
                            <label for="day"> โปรดเลือกวันที่เริ่มต้น : </label>
                            <input type="date" class="form-control" name="datepickers" autocomplete="off" require>
                        </div>
                        <div class="col-lg-3">
                            <label for="datepickert"> วันที่สิ้นสุด :</label>
                            <input type="date" class="form-control" name="datepickert" autocomplete="off" require>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-lg-12 ">
                            <input type="hidden" name="page" value="covid19">
                            <button type="submit" name="submit" value="submit" class="btn btn-info btn-block " style="margin-top:25px;" vaule='submit'>ยืนยัน</button>
                        </div>
                    </div>
                    <input type="hidden" name="status" value="update">
                </form>
            </div>

        </section>
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../tem/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../tem/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../tem/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../tem/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../tem/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../tem/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../tem/dist/js/demo.js"></script>
    <!-- page script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
</body>

</html>