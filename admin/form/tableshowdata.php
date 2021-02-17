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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <!-- datatable lib -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <div class="wrapper">
            <?php
            include "../components/navbar.php";
            include "../../sqlconfig/config.php";
            ?>
            <div class="container-fluid text-center">

                <?php
                $getpage = $_GET['page'];
                $inpage = '';
                if ($getpage == 'edituser') {
                    $inpage = 'ตาราง user';
                    $sqlgetfrompage = "SELECT username, md5(password) as password ,fname ,lname, role,tel,insertdate_time as วันเวลาที่เพิ่ม,status FROM cpa_web_user";
                } else if ($getpage == 'addgroupnews') {
                    $inpage = 'ตาราง กลุ่มข่าวประชาสัมพันธ์';
                    $sqlgetfrompage = "SELECT * FROM cpa_web_groupnews";
                } else if ($getpage == 'editfooter') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT cpa_footer_id,cpa_footer_name ,cpa_footer_link,fm.cpa_footer_group_id,fg.cpa_footer_group_name FROM cpa_web_footermenu fm inner join cpa_web_footer_group fg on fm.cpa_footer_group_id =  fg.cpa_footer_group_id";
                } else if ($getpage == 'editnews') {
                    $inpage = 'ตาราง แก้ไขข่าวประชาสัมพัธ์';
                    $sqlgetfrompage = "SELECT cpa_news_id,cpa_groupnews_id as หมวด,cpa_name_news as ชื่อ,cpa_descriptions as รายละเอียด,cpa_createdatetime as วันที่เพิ่ม, cpa_views as ยอดโหลด,cpa_status, cpa_pdf_path,cpa_pdf_spec_path,cpa_pdf_price_path,cpa_groupspecial_id as หมวดย่อย FROM cpa_web_news";
                } else if ($getpage == 'manageEvent') {
                    $inpage = 'ตาราง แก้ไขกิจกรรม';
                    $sqlgetfrompage = "SELECT cpa_event_id,cpa_event_topic as หัวข้อ,cpa_event_detail as รายละเอียด,cpa_event_path as ชื่อไฟล์ ,cpa_event_insert_date as วันที่เพิ่ม ,cpa_event_user_insert as ผู้เพิ่ม ,cpa_event_status as สถานะ   FROM cpa_events ";
                } else if ($getpage == 'addceo') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT * FROM cpa_ceo";
                } else if ($getpage == 'addphone') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT * FROM phone_detail_cpa";
                } else if ($getpage == 'addspecialgroupnews') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT * FROM cpa_web_groupspecial_news";
                } else if ($getpage == 'addgroupita') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT * FROM ita_eb";
                } else if ($getpage == 'additadetail') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT * FROM ita_detail";
                } else if ($getpage == 'ss555') {
                    $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                    $sqlgetfrompage = "SELECT * FROM tbperson";
                } else {
                    echo ' <script> window.location = "../index.php"; </script>';
                }

                $result = mysqli_query($con, $sqlgetfrompage);
                while ($fieldinfo = mysqli_fetch_field($result)) {
                    $myarray[] = $fieldinfo->name;
                } ?>
                <table id="example22" class="display " cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <?php
                            foreach ($myarray as $value) {
                            ?>
                                <th><?php echo $value; ?></th>
                            <?php
                            }
                            ?>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <?php
                            foreach ($myarray as $value) {
                            ?>
                                <th><?php echo $value; ?></th>
                            <?php
                            }
                            ?>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    <style>
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 5px;
        }
    </style>
    <?php //echo $sqlgetfrompage ?>
    <script>
        $(document).ready(function() {

            var dataTable = $('#example22').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    url: "./server_side/server_side.php",
                    type: "post",
                    data: ({
                        "sql": "<?php echo $sqlgetfrompage ?>",
                        "getpage": "<?php echo $getpage ?>"
                    })
                }
            });
        });
    </script>
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
</body>

</html>