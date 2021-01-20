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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            font-family: "Lato", sans-serif;
        }

        /* Style the tab */
        .tab {
            float: left;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
            width: 20%;
            height: auto;
        }

        /* Style the buttons inside the tab */
        .tab button {
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 100%;
            border: none;
            outline: none;
            text-align: left;
            cursor: pointer;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current "tab button" class */
        .tab button.active {
            background-color: #207dff;
            color: WHITE;
        }

        /* Style the tab content */
        .tabcontent {
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 80%;
            border-left: none;
            height: auto;
        }

        .select2-container {
            width: 100% !important;
            padding: 0 !important;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini">



    <div class="wrapper">
        <?php
        $page = 'tabledoctor';
        $group = 1;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$con) {
                die('Could not connect');
            }
            if ($_POST["status"] == "update") {
                $sqlUpdate = "UPDATE tb_department_event SET department_date = '" . $_POST["td_day"] . "', department_detail = '" . $_POST["td_detail"] . "', department_time = '" . $_POST["td_time"] . "' WHERE id = '" . $_POST["id"] . "'";
                mysqli_query($con, $sqlUpdate);
                $sqlUpdateSub = "UPDATE tb_department_sub SET description_sub = '" . $_POST["sub"] . "' WHERE id = '" . $_POST["sub_id"] . "'";
                mysqli_query($con, $sqlUpdateSub);
            } else if ($_POST["status"] == "add") {
                if (!mysqli_num_rows(mysqli_query($con, "SELECT * FROM tb_department_sub WHERE id = '" . $_POST["add_sub" . $_POST["id"]] . "'")) > 0) {
                    $sqlIns_sub = "INSERT INTO tb_department_sub (description_sub) VALUES ('" . $_POST["add_sub" . $_POST["id"]] . "')";
                    mysqli_query($con, $sqlIns_sub);
                    $sql1 = mysqli_fetch_assoc(mysqli_query($con, "SELECT id FROM tb_department_sub ORDER BY id DESC LIMIT 1"))['id'];
                } else {
                    $sql1 = $_POST["add_sub" . $_POST["id"]];
                }
                $sql2 = mysqli_fetch_assoc(mysqli_query($con, "SELECT order_by+1 as order_by FROM tb_department_event WHERE department = '" . $_POST["id"] . "' ORDER BY id DESC LIMIT 1"))['order_by'];
                if ($sql2 == '') {
                    $sql2 = '1';
                }
                $sqlIns_event = "INSERT INTO tb_department_event (department,department_sub,department_date,department_detail,department_time,order_by)
                VALUES ('" . $_POST["id"] . "','" . $sql1 . "'  ,'" . $_POST["td_day"] . "','" . $_POST["td_detail"] . "','" . $_POST["td_time"] . "','" . $sql2 . "')";
                mysqli_query($con, $sqlIns_event);
            } else if ($_POST["status"] == "del") {
                mysqli_query($con, "DELETE FROM tb_department_event WHERE `id` = '" . $_POST["id"] . "'");
            } else if ($_POST["status"] == "add_dep") {
                mysqli_query($con, "INSERT INTO tb_department (description,en_description) VALUES ('" . $_POST["sub"] . "','" . $_POST["sub_en"] . "')");
            } else if ($_POST["status"] == "status") {
                mysqli_query($con, "UPDATE tb_department SET `status` = '" . $_POST["status_dep"] . "' WHERE `id` = '" . $_POST["id"] . "'");
            } else if ($_POST["status"] == "edit_dep") {
                mysqli_query($con, "UPDATE tb_department SET description = '" . $_POST["sub_dep"] . "', en_description = '" . $_POST["sub_en_dep"] . "' WHERE id = '" . $_POST["id"] . "'");
            }
            //echo '<script>window.location = "./tabledoctor.php";</script>';
        }

        ?>
        <section class="content">

            <div class="container" style="padding-bottom: 265px;">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                        <p style="text-align: center;">
                            <span style="font-weight: bold;font-size:28px;color: #046099;">ตารางตรวจแพทย์</span>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="tab">
                        <?php
                        $sel_col = "SELECT * FROM tb_department";
                        $querysel_col = mysqli_query($con, $sel_col);
                        $defaultOpen = 'id="defaultOpen"';
                        while ($ResultCeo = mysqli_fetch_assoc($querysel_col)) {
                        ?>
                            <button class="tablinks" <?php echo $ResultCeo['status'] == 'Y' ? '' : 'style = "background-color: #aaabad;"' ?> onclick="openCity(event, '<?php echo $ResultCeo['id']; ?>')" <?php echo $defaultOpen ?>>
                                <?php echo $ResultCeo['description']; ?></button>
                            <?php $defaultOpen = ""; ?>
                        <?php
                        }
                        ?>
                        <row style="padding: 5px;">
                            <center>
                                <button class="btn btn-success" style="background-color: #28a745;width: 70%; text-align: center;color: #fff;" data-toggle="modal" data-target="#add_dep"> เพิ่มแผนก</button>
                            </center>
                        </row>
                    </div>

                    <?php
                    $sel_col = "SELECT * FROM tb_department";
                    $querysel_col = mysqli_query($con, $sel_col);
                    while ($ResultCeo_col = mysqli_fetch_assoc($querysel_col)) {
                    ?>
                        <div id="<?php echo $ResultCeo_col['id']; ?>" class="tabcontent">
                            <div class="table-responsive">
                                <table class="table table-striped ">
                                    <thead>
                                        <th colspan="2">
                                            <h4 style="font-weight: bold;"><?php echo $ResultCeo_col['description'] ?></h4>
                                        </th>
                                        <th colspan="2" style="text-align:right;">
                                            <button class="btn btn-outline-warning" data-toggle="modal" data-target="#edit_dep<?php echo $ResultCeo_col['id']; ?>">แก้ไขชื่อแผนก</button>
                                            <button class="btn btn-outline-<?php echo $ResultCeo_col['status'] == 'Y' ? 'danger' : 'success' ?>" data-toggle="modal" data-target="#status<?php echo $ResultCeo_col['id']; ?>"><?php echo $ResultCeo_col['status'] == 'Y' ? 'ปิดการใช้งาน' : 'เปิดการใช้งาน' ?></button>
                                        </th>
                                    </thead>
                                    <thead>
                                        <tr>
                                            <th>แผนกที่เปิดบริการ</th>
                                            <th>วันที่ให้บริการ</th>
                                            <th>เวลาที่ให้บริการ</th>
                                            <th>
                                                <center>ดำเนินการ</center>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $sel = "SELECT  a.id as tb_a_id,
                                                        b.id as tb_b_id,
                                                        c.id as tb_c_id,
                                                        d.id as tb_d_id,
                                                        e.id as tb_e_id,
                                                        f.id as tb_f_id,
                                                        b.description as td_dep,
                                                        c.description_sub as td_sub,
                                                        d.date as td_day,
                                                        e.detail as td_detail,
                                                        f.time as td_time,
                                                        b.status as status,                                                
                                                        a.order_by
                                                FROM tb_department_event a 
                                                LEFT JOIN tb_department b ON a.department = b.id
                                                LEFT JOIN tb_department_sub c ON a.department_sub = c.id
                                                LEFT JOIN tb_department_date d ON a.department_date = d.id
                                                LEFT JOIN tb_department_detail e ON a.department_detail = e.id
                                                LEFT JOIN tb_department_time f ON a.department_time = f.id
                                                ORDER BY  b.id,a.order_by";
                                        $querysel = mysqli_query($con, $sel);
                                        $tmp_name = '';
                                        while ($ResultCeo = mysqli_fetch_assoc($querysel)) {
                                            if ($ResultCeo['tb_b_id'] == $ResultCeo_col['id']) {
                                                $ResultCeo['td_sub'] = str_replace(")", ")</span>", str_replace("(", "<span style=\"color:#0b5e2c\">(", $ResultCeo['td_sub']));
                                        ?><tr>
                                                    <td><?php echo $ResultCeo['td_sub'] != $tmp_name ? $ResultCeo['td_sub'] : ''; ?></td>
                                                    <td><?php echo $ResultCeo['td_day'] . ' ' . ($ResultCeo['tb_e_id'] == '7' ? '' : $ResultCeo['td_detail']); ?></td>
                                                    <td><?php echo $ResultCeo['td_time']; ?></td>
                                                    <td>
                                                        <center>
                                                            <button class="btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $ResultCeo['tb_a_id']; ?>">แก้ไข</button>
                                                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete<?php echo $ResultCeo['tb_a_id']; ?>">ลบ</button>
                                                        </center>
                                                    </td>
                                                </tr>
                                        <?php
                                                $tmp_name = $ResultCeo['td_sub'];
                                            }
                                        }
                                        ?>
                                        <tr>
                                            <td colspan="4">
                                                <center>
                                                    <button style="width: 100%;" class="btn btn-success" data-toggle="modal" data-target="#add<?php echo $ResultCeo_col['id']; ?>">เพิ่ม</button>
                                                </center>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <?php
            $selectDate =    "SELECT * FROM tb_department_date ORDER BY (CASE
                                    WHEN date LIKE 'จ%' THEN '1'
                                        WHEN date LIKE 'อั%' THEN '2'
                                        WHEN date LIKE 'พุ%' THEN '3'
                                        WHEN date LIKE 'พฤ%' THEN '4'
                                        WHEN date LIKE 'ศ%' THEN '5'
                                        WHEN date LIKE 'เส%' THEN '6'
                                        WHEN date LIKE 'อา%' THEN '7'
                                    ELSE date END)";
            $selectDetail = "SELECT * FROM tb_department_detail";
            $selectTime = "SELECT * FROM tb_department_time ORDER BY time";
            $selectSub = "SELECT * FROM tb_department_sub ORDER BY description_sub";

            $queryDate = mysqli_query($con, $selectDate);
            $queryDetail = mysqli_query($con, $selectDetail);
            $queryTime = mysqli_query($con, $selectTime);
            $querySub = mysqli_query($con, $selectSub);
            foreach ($querysel as $item) {
            ?>
                <!--///////////////////////////////////////////// Modal close job  ///////////////////////////////////////////////////////-->
                <div class="modal fade" id="edit<?php echo  $item['tb_a_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                        <h4><?php echo $item['td_dep']; ?></h4>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">แผนกที่เปิดบริการ</span>
                                                    <input type="text" name="sub" placeholder="ชื่อแผนกที่เปิดบริการ" class="form-last-name form-control" id="sub" value="<?php echo $item['td_sub']; ?>" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">วันที่ให้บริการ</span>
                                                    <select name="td_day" class="form-last-name form-control" id="td_day">
                                                        <option selected="" value="<?php echo $item['tb_d_id'] ?>"><?php echo $item['td_day'] ?></option>
                                                        <?php
                                                        foreach ($queryDate as $Result) {
                                                            if ($Result['id'] != $item['tb_d_id']) {
                                                        ?>
                                                                <option value="<?php echo $Result['id']; ?>"><?php echo $Result['date']; ?></option>
                                                        <?php
                                                            }
                                                        } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">รายละเอียดเพิ่มเติม</span>
                                                    <select name="td_detail" class="form-last-name form-control" id="td_detail">
                                                        <option selected="" value="<?php echo $item['tb_e_id'] ?>"><?php echo $item['td_detail'] ?></option>
                                                        <?php
                                                        foreach ($queryDetail as $Result) {
                                                            if ($Result['id'] != $item['tb_e_id']) {
                                                        ?>
                                                                <option value="<?php echo $Result['id']; ?>"><?php echo $Result['detail']; ?></option>
                                                        <?php
                                                            }
                                                        } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">เวลาที่ให้บริการ</span>
                                                    <select name="td_time" class="form-last-name form-control" id="td_time">
                                                        <option selected="" value="<?php echo $item['tb_f_id'] ?>"><?php echo $item['td_time'] ?></option>
                                                        <?php
                                                        foreach ($queryTime as $Result) {
                                                            if ($Result['id'] != $item['tb_f_id']) {
                                                        ?>
                                                                <option value="<?php echo $Result['id']; ?>"><?php echo $Result['time']; ?></option>
                                                        <?php
                                                            }
                                                        } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="<? echo $item['tb_a_id']; ?>">
                                    <input type="hidden" name="sub_id" value="<? echo $item['tb_c_id']; ?>">
                                    <input type="hidden" name="status" value="update">
                                    <!-- 
                                sub 
                                td_day
                                td_detail
                                td_time 
                                -->
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    <button type="submit" class="btn btn-success" onclick="return confirm('แน่ใจหรือไม่')">ดำเนินการ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="delete<?php echo  $item['tb_a_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                        <h4><?php echo $item['td_dep']; ?></h4>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">แผนกที่เปิดบริการ</span>
                                                    <input type="text" name="sub" placeholder="ชื่อแผนกที่เปิดบริการ" class="form-last-name form-control" id="sub" value="<?php echo $item['td_sub']; ?>" disabled>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="<? echo $item['tb_a_id']; ?>">
                                    <input type="hidden" name="status" value="del">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    <button type="submit" class="btn btn-danger">ดำเนินการลบ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
            <?php } ?>
            <?php foreach ($querysel_col as $item) { ?>
                <div class="modal fade" id="add<?php echo  $item['id']; ?>" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" style="overflow:hidden;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                        <h4><?php echo $item['description']; ?></h4>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">แผนกที่เปิดบริการ</span>
                                                    <select name="add_sub<?php echo  $item['id']; ?>" id="add_sub<?php echo  $item['id']; ?>" element.style="width: 90% !important;" class="form-control form-control-lg select2" required>
                                                        <option value=""></option>
                                                        <?php foreach ($querySub as $item2) { ?>
                                                            <option value="<?php echo $item2['id']; ?>"><?php echo $item2['description_sub']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">วันที่ให้บริการ</span>
                                                    <select name="td_day" class="form-last-name form-control" id="td_day">
                                                        <?php
                                                        foreach ($queryDate as $Result) {
                                                        ?>
                                                            <option value="<?php echo $Result['id']; ?>"><?php echo $Result['date']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">รายละเอียดเพิ่มเติม</span>
                                                    <select name="td_detail" class="form-last-name form-control" id="td_detail">
                                                        <option selected="" value="7">-</option>
                                                        <?php
                                                        foreach ($queryDetail as $Result) {
                                                            if ($Result['id'] != $item['tb_e_id']) {
                                                        ?>
                                                                <option value="<?php echo $Result['id']; ?>"><?php echo $Result['detail']; ?></option>
                                                        <?php
                                                            }
                                                        } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">เวลาที่ให้บริการ</span>
                                                    <select name="td_time" class="form-last-name form-control" id="td_time">
                                                        <?php
                                                        foreach ($queryTime as $Result) {
                                                        ?>
                                                            <option value="<?php echo $Result['id']; ?>"><?php echo $Result['time']; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="<? echo $item['id']; ?>">
                                    <input type="hidden" name="status" value="add">
                                    <!-- 
                                sub 
                                td_day
                                td_detail
                                td_time 
                                -->
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    <button type="submit" class="btn btn-success" onclick="return confirm('แน่ใจหรือไม่')">ดำเนินการ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="status<?php echo  $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                        <h4><?php echo $item['description']; ?></h4>
                                        <div class="row" style="padding-top: 30px; padding-bottom: 20px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <center><button type="submit" class="btn btn-outline-<?php echo $item['status'] == 'Y' ? 'danger' : 'success' ?>"><?php echo $item['status'] == 'Y' ? 'ปิดการใช้งาน' : 'เปิดการใช้งาน' ?></button></center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="status" value="status">
                                    <input type="hidden" name="status_dep" value="<? echo $item['status'] == 'Y' ? 'N' : 'Y' ?>">
                                    <input type="hidden" name="id" value="<? echo $item['id']; ?>">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="edit_dep<?php echo  $item['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form action="#" method="post">
                                <div class="modal-body">
                                    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                        <h4><?php echo $item['description']; ?></h4>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">ชื่อภาษาไทย</span>
                                                    <input type="text" name="sub_dep" id="sub_dep" placeholder="ชื่อแผนกที่เปิดบริการภาษาไทย" class="form-last-name form-control" value="<?php echo $item['description']; ?>" required>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <span style="text-align: left;font-size:16px;">ชื่อภาษาอังกฤษ</span>
                                                    <input type="text" name="sub_en_dep" id="sub_en_dep" placeholder="ชื่อแผนกที่เปิดบริการภาษาอังกฤษ" class="form-last-name form-control" value="<?php echo $item['en_description']; ?>" required>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="status" value="edit_dep">
                                    <input type="hidden" name="id" value="<? echo $item['id']; ?>">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    <button type="submit" class="btn btn-success" onclick="return confirm('แน่ใจหรือไม่')">บันทึก</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <div class="modal fade" id="add_dep" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <form action="#" method="post">
                            <div class="modal-body">
                                <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                    <h4>เพิ่มแผนก</h4>
                                    <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                                            <p>
                                                <span style="text-align: left;font-size:16px;">แผนกที่เปิดบริการ</span>
                                                <input type="text" name="sub" placeholder="ชื่อแผนกที่เปิดบริการ" class="form-last-name form-control" id="sub" value="" autocomplete="off" required><br>
                                                <input type="text" name="sub_en" placeholder="ชื่อแผนกที่เปิดบริการภาษาอังกฤษ" class="form-last-name form-control" id="sub" value="" autocomplete="off">
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="status" value="add_dep">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                <button type="submit" class="btn btn-success" onclick="return confirm('แน่ใจหรือไม่')">เพิ่มแผนก</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </div>



    <script>
        $(document).ready(function() {
            $.fn.modal.Constructor.prototype._enforceFocus = function() {};
            $('.select2').select2({

                placeholder: 'ชื่อแผนกที่เปิดบริการ',
                theme: 'bootstrap4',
                tags: true,
            }).on('select2:close', function() {
                var element = $(this);
                var new_category = $.trim(element.val());

                if (new_category != '') {
                    $.ajax({
                        url: "add.php",
                        method: "POST",
                        data: {
                            category_name: new_category
                        },
                        success: function(data) {
                            if (data == 'yes') {
                                element.append('<option value="' + new_category + '">' + new_category + '</option>').val(new_category);
                            }
                        }
                    })
                }

            });

        });
    </script>

    <script src="../tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>

</body>

</html>