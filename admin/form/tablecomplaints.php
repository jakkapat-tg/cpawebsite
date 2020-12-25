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
            <?php
            include "../components/navbar.php";
            include "../../sqlconfig/config.php";
            $getpage = $_GET['page'];
            $inpage = 'ตาราง user';

                $inpage = 'ตาราง Complaints';
                $sqlgetfrompage = "SELECT a.*,b.describes FROM req_prob a INNER JOIN req_prob_type b on a.req_prob_type = b.id";
                // $sqlgetfrompage = "SELECT username, md5(password)as password ,fname as ชื่อ ,lname as นามสกุล, role as สิทธิ,
                // case when gender = '1' then 'ชาย' WHEN gender = '2' then 'หญิง' end as เพศ,tel,insertdate_time as วันเวลาที่เพิ่ม,status FROM cpa_web_user";
                $resultquery = mysqli_query($con, $sqlgetfrompage);
            
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
                                    <? if ($_SESSION['status'] == '1') { ?>
                                        <th style="text-align:center;">ตรวจสอบ</th>
                                    <? } ?>
                                </tr>
                            </thead>
                           <tbody>
                            <?php while ($result = mysqli_fetch_assoc($resultquery)) { ?>
                                <tr data-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample">
                                    <td style="text-align:center;"><?php echo $result['id']; ?> </td>
                                    <td><?php echo $result['pname'] . ' ' . $result['fname'] . '    ' . $result['lname']; ?> </td>
                                    <td><?php echo $result['gender'] =='M'?'ชาย':'หญิง' ?></td>
                                    <td><?php echo $result['describes'] ?> </td>
                                    <td><?php echo $result['req_head'] ?> </td>
                                    <td><?php echo $result['time_stamp'] ?> </td>
                                    <td style="text-align:center;"><?php echo $result['check_status'] =='N'?'<span class="ion-close-circled" style="color:red;"></span>':'<span class="ion-checkmark-circled" style="color:green;"></span>' ?></td>
                                    <td><center><button class="btn btn-info" data-toggle="modal" data-target="#closejob<?php echo $result['id']; ?>">เพิ่มเติม</button></center></td>
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
                                    
                                    <div class="modal-body">
                                        <div class="print">
                                            <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                                <!-- $offname = $pname = $fname = $lname = $gender = "";
                                                $cidcode = $profession = $province = $amphoe = $district = $zipcode = "";
                                                $addess =  $phone = $mobile = $email = "";
                                                $req_to = $req_head = $req_prob_type = $req_details = $request = ""; -->
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
                                                
                                                <div class="row" style="margin-left: 15px; margin-right: 5px;">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <table class="table table-bordered table-hover "><td>
                                                        <span style="text-align: left;font-size:14px;color: #000000;"><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?><?php echo $item['req_details']; ?></span>
                                                        </td>    
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">สิ่งที่ต้องการให้แก้ไข :</span>
                                                    </div>		
                                                </div>
                                                <div class="row" style="margin-left: 15px; margin-right: 5px;">
                                                    <div class="col-md-1 col-sm-1 col-xs-1 ">
                                                        <span style="text-align: left;font-size:14px;color: #000000;"><?php echo $item['request']; ?></span>
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
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $fullname =  $item['pname'] . $item['fname'] . ' ' . $item['lname']. ' '?>
                                                        <?php echo $item['offname']=='Y'?'<span style="text-align: left;font-size:16px;color: red;">( ต้องการปกปิดข้อมูลส่วนตัว )</span>':''?></span>			
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">เลขบัตรประชาชน :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['cidcode']?></span>			
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">เพศ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['gender'] =='M'?'ชาย':'หญิง' ?></span>	
                                                        <span style="text-align: left;font-size:16px;color: #000000;">อาชีพ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['profession']?></span>			
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">ที่อยู่ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['addess']==''?' - ':$item['addess'] ?></span>		
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">จังหวัด :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['province']==''?' - ':$item['province'] ?></span>	
                                                        <span style="text-align: left;font-size:16px;color: #000000;">อำเภอ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['amphoe']==''?' - ':$item['amphoe'] ?></span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;">ตำบล :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['district']==''?' - ':$item['district'] ?></span>			
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">ไปรษณีย์ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['zipcode']==''?' - ':$item['zipcode'] ?></span>		
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">โทรศัพท์ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['phone']==''?' - ':$item['phone'] ?></span>	
                                                        <span style="text-align: left;font-size:16px;color: #000000;">มือถือ :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['mobile']==''?' - ':$item['mobile'] ?></span>		
                                                    </div>		
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                        <span style="text-align: left;font-size:16px;color: #000000;">E-mail :</span>
                                                        <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['email']==''?' - ':$item['phone'] ?></span>		
                                                    </div>		
                                                </div>
                                                
                                                <?php if($item['check_by'] != null){ ?>
                                                     <div class="row">
                                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                            <span style="text-align: left;font-size:16px;color: #000000;">ผู้ดำเนินการ :</span>
                                                            <span style="text-align: left;font-size:16px;color: #000000;"><?php echo $item['check_by']?></span>		
                                                        </div>		
                                                    </div>
                                                <?}?>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="nonprint">
                                        <div class="modal-footer"> 
                                            <?php
                                                date_default_timezone_set("Asia/Bangkok"); //ตั้งโซนเวลา
                                                $month = date('m');
                                                $day = date('d');
                                                $year = (date('Y')+543);
                                                $TIME = date("H:i:s");   //date("h:i:s a"); แบบมีpm am
                                                $today =  $day . '/'. $month . '/' . $year  .  '  ' . $TIME;
                                            ?>
                                            <input type="hidden" name="status" value="Y">
                                            <input type="hidden" name="userregis" value="<? echo $userregis; ?>">
                                            <input type="hidden" name="id" value="<? echo $item['id']; ?>">
                                            <input type="hidden" name="today" value="<?php echo $today ?>">
                                            <?php echo date("Y-m-d H:i:s") ?>
                                            
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                            <input type="submit" name="closejob" class="btn btn-primary"  <?php if($item['check_by'] != null)
                                            {echo 'value="ดำเนินการแล้ว"'.'disabled';} else echo 'value="บันทึก"' ?>>
                                        </div>
                                    </div>
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