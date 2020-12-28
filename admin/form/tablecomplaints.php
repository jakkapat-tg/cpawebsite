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
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $sql = "SELECT a.*,b.describes FROM req_prob a INNER JOIN req_prob_type b on a.req_prob_type = b.id ORDER BY id DESC";
        $resultquery = mysqli_query($con, $sql);
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
                    'คำร้องเรียน ' . date('d-m-yy') . "\r\n" .
                    'ID: ' . $_POST["id"] . "\r\n" .
                    'เรื่อง: ' . $_POST["req_head"] . "\r\n" .
                    'ชื่อ: ' . $_POST["pname"] . " " .  $_POST["fname"] . "  " .  $_POST["lname"] . "\r\n" .
                    'สถานะ: ดำเนินการเรียบร้อย';
                $token = 'LWXFDV0Ubg4tpFWJk4huG97lCHKXcnGkrrMHfH0vQfm';
                send_line_notify($message, $token);
                echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "สำเร็จ",
                            text: "สถานะดำเนินการเรียบร้อยแล้ว!",
                            type: "success"
                        }).then(function() {
                            window.location = "./tablecomplaints.php";
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
                            window.location = "./tablecomplaints.php";
                        });
                    </script>';
            }
        }
        ?>



        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <table class="table table-bordered table-hover ">
                            <thead>
                                <tr>
                                    <th style="text-align:center;"> เลขที่</th>
                                    <th style="text-align:center;">ชื่อ-นามสกุล ผู้แจ้ง </th>
                                    <th style="text-align:center;">เพศ</th>
                                    <th style="text-align:center;">ประเภทการร้องเรียน</th>
                                    <th style="text-align:center;">เรื่อง</th>
                                    <th style="text-align:center;">วันที่แจ้ง</th>
                                    <th style="text-align:center;">สถานะดำเนินการ</th>
                                    <?php if ($_SESSION['status'] == '1') { ?>
                                        <th style="text-align:center;">ตรวจสอบ</th>
                                    <?php } ?>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while ($result = mysqli_fetch_assoc($resultquery)) { ?>
                                    <tr data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                        <td style="text-align:center;"><?php echo $result['id']; ?> </td>
                                        <td><?php echo $result['pname'] . ' ' . $result['fname'] . '    ' . $result['lname']; ?> </td>
                                        <td><?php echo $result['gender'] == 'M' ? 'ชาย' : 'หญิง' ?></td>
                                        <td><?php echo $result['describes'] ?> </td>
                                        <td><?php echo $result['req_head'] ?> </td>
                                        <td><?php echo date("d/m/Y G:i \น\.", strtotime($result['req_time'])) ?> </td>
                                        <td style="text-align:center;"><?php echo $result['check_status'] == 'N' ? '<span class="ion-close-circled" style="color:red;"></span>' : '<span class="ion-checkmark-circled" style="color:green;"></span>' ?></td>
                                        <td>
                                            <center><button class="btn btn-info" data-toggle="modal" data-target="#closejob<?php echo $result['id']; ?>">เพิ่มเติม</button></center>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <tbody>
                        </table>

                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
                <? foreach ($resultquery as $item) { ?>
                <!--///////////////////////////////////////////// Modal close job  ///////////////////////////////////////////////////////-->
                <div class="modal fade" id="closejob<?php echo  $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="print">
                                        <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                            <h4>รายการคำร้องที่: <?php echo $item['id']; ?></h4>
                                            <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left; font-weight: bold;font-size:20px;color: #000000;">ข้อมูลเกี่ยวกับเรื่องร้องเรียน</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">วันเวลาร้องเรียน :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['time_stamp']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">ร้องเรียนถึง :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['req_to']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">ประเภทเรื่องร้องเรียน :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['describes']; ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col -xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">หัวเรื่องร้องเรียน :</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">รายละเอียดเรื่องร้องเรียน :</span>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <textarea class="form-about-yourself form-control" value=""><?php echo $item['req_details']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">สิ่งที่ต้องการให้แก้ไข :</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <textarea class="form-about-yourself form-control" value=""><?php echo $item['request']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left; font-weight: bold;font-size:20px;color: #000000;">ข้อมูลส่วนตัวผู้ส่งคำร้อง</span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">ชื่อ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $fullname =  $item['pname'] . $item['fname'] . ' ' . $item['lname'] . ' ' ?>
                                                        <?php echo $item['offname'] == 'Y' ? '<span style="text-align: left;font-size:16px;color: red;">( ต้องการปกปิดข้อมูลส่วนตัว )</span>' : '' ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">เลขบัตรประชาชน :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['cidcode'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">เพศ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['gender'] == 'M' ? 'ชาย' : 'หญิง' ?></span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;">อาชีพ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['profession'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">ที่อยู่ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['addess'] == '' ? ' - ' : $item['addess'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">จังหวัด :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['province'] == '' ? ' - ' : $item['province'] ?></span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;">อำเภอ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['amphoe'] == '' ? ' - ' : $item['amphoe'] ?></span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;">ตำบล :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['district'] == '' ? ' - ' : $item['district'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">ไปรษณีย์ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['zipcode'] == '' ? ' - ' : $item['zipcode'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">โทรศัพท์ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['phone'] == '' ? ' - ' : $item['phone'] ?></span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;">มือถือ :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['mobile'] == '' ? ' - ' : $item['mobile'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">E-mail :</span>
                                                    <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['email'] == '' ? ' - ' : $item['phone'] ?></span>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                    <span style="text-align: left;font-size:16px;color: #000000;">สถานะ :</span>
                                                    <span style="text-align: left;font-size:16px;color: <?php echo $item['check_by'] != null ? 'green' : 'red' ?>;"><?php echo $item['check_by'] != null ? 'ดำเนินการแล้ว' : 'ยังไม่ดำเนินการแก้ไข' ?></span>
                                                </div>
                                            </div>
                                            <?php if ($item['check_by'] != null) { ?>

                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">ผู้ดำเนินการ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['check_by'] ?></span>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="nonprint">
                                    <div class="modal-footer">
                                        <input type="hidden" name="id" value="<? echo $item['id']; ?>">
                                        <input type="hidden" name="cidcode" value="<? echo $item['cidcode']; ?>">
                                        <input type="hidden" name="pname" value="<? echo $item['pname']; ?>">
                                        <input type="hidden" name="fname" value="<? echo $item['fname']; ?>">
                                        <input type="hidden" name="lname" value="<? echo $item['lname']; ?>">
                                        <input type="hidden" name="req_head" value="<? echo $item['req_head']; ?>">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                        <?php if ($item['check_by'] == null and $item['check_status'] == 'N') { ?>
                                            <button type="submit" class="btn btn-success" onclick="return confirm('แน่ใจหรือไม่')">ดำเนินการ</button>
                                        <?php } ?>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
                <? } ?>
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
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