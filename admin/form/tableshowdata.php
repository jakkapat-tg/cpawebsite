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
</head>

<body class="hold-transition sidebar-mini">


    <div class="wrapper">
        <div class="wrapper">
            <?php
            include "../components/navbar.php";
            include "../../sqlconfig/config.php";
            $getpage = $_GET['page'];
            $inpage = '';
           

            if ($getpage == 'edituser') {
                $inpage = 'ตาราง user';
                $sqlgetfrompage = "SELECT username, md5(password)as password ,fname as ชื่อ ,lname as นามสกุล, role as สิทธิ,
                case when gender = '1' then 'ชาย' WHEN gender = '2' then 'หญิง' end as เพศ,tel,insertdate_time as วันเวลาที่เพิ่ม,status FROM cpa_web_user";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            } else if ($getpage == 'addgroupnews') {
                $inpage = 'ตาราง กลุ่มข่าวประชาสัมพันธ์';
                $sqlgetfrompage = "SELECT * FROM cpa_web_groupnews";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            } else if ($getpage == 'editfooter') {
                $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                $sqlgetfrompage = "SELECT cpa_footer_id,cpa_footer_name as ชื่อเมนู ,cpa_footer_link as link,concat(fm.cpa_footer_group_id,' ',fg.cpa_footer_group_name)as หมวดหมู่,fm.cpa_footer_status FROM cpa_web_footermenu fm 
                inner join cpa_web_footer_group fg on fm.cpa_footer_group_id =  fg.cpa_footer_group_id";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            } else if ($getpage == 'editnews') {
                $inpage = 'ตาราง แก้ไขข่าวประชาสัมพัธ์';
                $sqlgetfrompage = "SELECT cpa_news_id,cpa_groupnews_id as หมวด,cpa_name_news as ชื่อ,cpa_descriptions as รายละเอียด,cpa_createdatetime as วันที่เพิ่ม,
                cpa_views as ยอดโหลด,cpa_status, cpa_pdf_path,cpa_pdf_spec_path,cpa_pdf_price_path
                FROM cpa_web_news";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            } else if ($getpage == 'manageEvent') {
                $inpage = 'ตาราง แก้ไขกิจกรรม';
                $sqlgetfrompage = "SELECT cpa_event_id,cpa_event_topic as หัวข้อ,cpa_event_detail as รายละเอียด,cpa_event_path as ชื่อไฟล์ 
                ,cpa_event_insert_date as วันที่เพิ่ม ,cpa_event_user_insert as ผู้เพิ่ม ,cpa_event_status as สถานะ 
                FROM cpa_events ";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            } else if ($getpage == 'addceo') {
                $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                $sqlgetfrompage = "SELECT * FROM cpa_ceo";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            } else if ($getpage == 'addphone') {
                $inpage = 'ตาราง แก้ไขแถบด้านล่างเว็บไซต์';
                $sqlgetfrompage = "SELECT * FROM phone_detail_cpa";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            }else{
                echo ' <script> window.location = "../index.php"; </script>';
            }
            ?>



            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">แสดงผลข้อมูล <?php echo  $inpage; ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
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
                                                        echo 
                                                        '<td>
                                                            <a class="btn btn-info" href="./'.$getpage.'.php?pkid='.$row_result[$col].' ">
                                                             <i class="fa fa-edit ">แก้ไข</i></a>&nbsp;&nbsp;&nbsp;' . $row_result[$col] . 
                                                        '</td>';
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
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
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