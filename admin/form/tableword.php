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

    <script src='https://kit.fontawesome.com/a076d05399.js'></script> <!-- Icon  -->
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script> <!-- CKEditor  -->
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
            /* border: 1px solid #ccc; */
            /* background-color: #f1f1f1; */
            width: 35%;
            height: auto;
        }

        /* Style the buttons inside the tab */
        .tab button {
            border-radius: 12px;
            display: block;
            background-color: inherit;
            color: black;
            padding: 22px 16px;
            width: 90%;
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
            border-radius: 12px;
            float: left;
            padding: 0px 12px;
            border: 1px solid #ccc;
            width: 65%;
            /* border-left: none;
            border-bottom: none; */
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
        $page = 'tableword';
        $group = 1;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (!$con) {
                die('Could not connect');
            }
            if ($_POST["word"] != '') {
                $sqlUpdate = "UPDATE tb_department_sub SET word = '" . $_POST["word"] . "' WHERE id = '" . $_POST["sub_id"] . "'";
                mysqli_query($con, $sqlUpdate);
            }

            $var = pathinfo(basename($_FILES['fileToUpload']['name']), PATHINFO_EXTENSION);
            if ($var != '' && $var != null) {
                ///-------------------------------------------------------------------------------------------------------------///
                $sqlgetEvent = "SELECT img as img_path FROM tb_department_sub WHERE id = '" . $_POST["sub_id"] . "'";
                $resultGetEv = mysqli_fetch_assoc(mysqli_query($con, $sqlgetEvent));
                $getpath = $resultGetEv['img_path'];
                $Swal = false;
                ///-------------------------------------------------------------------------------------------------------------///
                $datefile = 'service_' . $_POST["sub_id"] . '_' . date("Ymd") . '_' . date("His");
                $new_name = $datefile . "." . $var;
                $target_dir = "../../uploads/image/service/";
                $target_file = $target_dir . $new_name;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
                $uploadOk = 1;
                // Allow certain file formats
                if (
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" && $var != ''
                ) {
                    echo "||" . $var;
                    $uploadOk = 0;
                    echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "อัพโหลดไฟล์ผิดประเภท",
                            text: "โปรดอัพโหลดไฟล์ที่มีนามสกุล jpg jpge png gif!",
                            type: "error"
                        }).then(function() {
                            window.location = "./tableword.php";
                        });
                        </script>';
                }


                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 4000000) {
                    $uploadOk = 0;
                    echo '<script>
                        Swal.fire({
                            icon: "error",
                            title: "อัพโหลดไฟล์ผิดพลาด",
                            text: "โปรดอัพโหลดไฟล์ที่มีขนาดไม่เกิด 4MB",
                            type: "error"
                        }).then(function() {
                            window.location = "./tableword.php";
                        });
                        </script>';
                }

                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                    $Swal = false;
                    // if everything is ok, try to upload file
                } else {
                    if ($getpath != '' && $getpath != null) {
                        $deleteoldimg = $target_dir . $getpath; //path ลบไฟล์
                        unlink($deleteoldimg); //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB         
                    }
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $Swal = true;
                    } else {
                        $Swal = false;
                    }
                }
                if ($Swal and $uploadOk != 0) {
                    $sqlUpdate = "UPDATE tb_department_sub SET img = '" . $new_name . "'  WHERE id = '" . $_POST["sub_id"] . "'";
                    if (mysqli_query($con, $sqlUpdate)) {
                        echo '<script>
                        Swal.fire({
                            icon: "success",
                            title: "สำเร็จ",
                            text: "แก้ไขข้อมูลสำเร็จ!",
                            type: "success"
                        }).then(function() {
                            window.location = "./tableword.php";;
                        });
                        </script>';
                    }
                } else {
                    echo '<script>
                            Swal.fire({
                                icon: "error",
                                title: "อัพโหลดไฟล์ผิดพลาด2",
                                text: "ไม่สามารถอัพไฟล์ได้",
                                type: "error"
                            }).then(function() {
                                window.location = "./tableword.php";
                            });
                            </script>';
                }
            }
        }

        ?>
        <section class="content">
            <center>
                <div class="container" style="padding-bottom: 265px; margin:1px;">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12 ">
                            <p style="text-align: left;">
                                <span style="font-weight: bold;font-size:28px;color: #046099;">ศูนย์ข้อมูลแผนก</span>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab">
                            <?php
                            $sel_col = "SELECT *,dep.id as dep_id FROM tb_department dep LEFT JOIN cpa_icon icon ON dep.icon_id = icon.id";
                            $querysel_col = mysqli_query($con, $sel_col);
                            $defaultOpen = 'id="defaultOpen"';
                            while ($ResultCeo = mysqli_fetch_assoc($querysel_col)) {
                            ?>
                                <button class="tablinks" <?php echo $ResultCeo['status'] == 'Y' ? '' : 'style = "background-color: #aaabad;"' ?> onclick="openCity(event, '<?php echo $ResultCeo['dep_id']; ?>')" <?php echo $defaultOpen ?>>
                                    <?php echo $ResultCeo['description']; ?></button>
                                <?php $defaultOpen = ""; ?>
                            <?php
                            }
                            ?>

                        </div>

                        <?php
                        $querysel_col = mysqli_query($con, $sel_col);
                        while ($ResultCeo_col = mysqli_fetch_assoc($querysel_col)) {
                        ?>
                            <div id="<?php echo $ResultCeo_col['dep_id']; ?>" class="tabcontent">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="2">
                                                <h4 style="font-weight: bold;"><i class="<?php echo $ResultCeo_col['icon_class'] ?>" style="font-size:26px;color:<?php echo $ResultCeo_col['icon_color'] ?>;"></i> <?php echo $ResultCeo_col['description'] ?></h4>
                                            </th>

                                        </thead>
                                        <thead>
                                            <tr>
                                                <th>
                                                    <center>ข้อมูล</center>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sel = "SELECT  a.id as tb_a_id,
                                                        b.id as tb_b_id,
                                                        c.id as tb_c_id,
                                                        b.description as td_dep,
                                                        c.description_sub as td_sub,
                                                        b.status as status,
                                                        c.word,
                                                        c.img,
                                                        c.content,                                                
                                                        a.order_by
                                                FROM tb_department_event a 
                                                LEFT JOIN tb_department b ON a.department = b.id
                                                LEFT JOIN tb_department_sub c ON a.department_sub = c.id
                                                ORDER BY  b.id,a.order_by";
                                            $querysel = mysqli_query($con, $sel);
                                            $tmp_name = '';
                                            while ($ResultCeo = mysqli_fetch_assoc($querysel)) {
                                                if ($ResultCeo['tb_b_id'] == $ResultCeo_col['dep_id'] and $ResultCeo['tb_c_id'] != $tmp_name) {
                                                    $ResultCeo['td_sub'] = str_replace(")", ")</strong>", str_replace("(", "<strong>(", $ResultCeo['td_sub']));
                                            ?><tr>
                                                        <td style="text-align: center;">
                                                            <button style="border-radius: 20px;width: 75%;background-color: #fff6da;color: black;" class=" btn btn-warning" data-toggle="modal" data-target="#edit<?php echo $ResultCeo['tb_a_id']; ?>"><?php echo $ResultCeo['td_sub'] ?></button>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $tmp_name = $ResultCeo['tb_c_id'];
                                                }
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </center>
            <?php
            foreach ($querysel as $item) {
            ?>
                <!--///////////////////////////////////////////// Modal close job  ///////////////////////////////////////////////////////-->
                <div class="modal fade" id="edit<?php echo  $item['tb_a_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true">
                    <div class="modal-dialog modal-xl">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <form action="#" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="container" style="padding-top: 10px; padding-bottom: 10px;">
                                        <h4><?php echo $item['td_dep']; ?></h4>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>ไฟล์ภาพหน้าปก</p>
                                                <input type="file" name="fileToUpload" id="fileToUpload" style=" border: 1px solid #ccc;">
                                                <span style="color:red;"> *หากใช้รูปเดิม ไม่ต้องใส่ภาพอะไร</span>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-top: 10px; padding-bottom: 7px;">
                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                <p>
                                                    <button type="button" id="word" style="border-radius: 20px;width: 100%;height:40px;background-color: #fff6da;color: black;border: 3px solid #ffca2e;" onclick="return CKupdateClick(<?php echo  $item['tb_a_id']; ?>)">แก้ไขเนื้อหา</button>
                                                </p>
                                                <p>
                                                    <textarea name="word" rows="10" style="width: 100%;" id="detail<?php echo  $item['tb_a_id']; ?>" disabled><?php echo $item['word']; ?></textarea>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="hidden" name="id" value="<? echo $item['tb_a_id']; ?>">
                                    <input type="hidden" name="sub_id" value="<? echo $item['tb_c_id']; ?>">
                                    <input type="hidden" name="status" value="update">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ปิด</button>
                                    <button type="submit" class="btn btn-success" onclick="return confirm('แน่ใจหรือไม่')">ดำเนินการ</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            <?php } ?>
        </section>
    </div>
    <script>
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        function CKupdateClick(a) {
            var button = document.getElementById('detail' + a);
            CKEDITOR.replace('detail' + a);
            button.disabled = false;
        }

        function CKupdate() {
            for (instance in CKEDITOR.instances)
                CKEDITOR.instances[instance].updateElement();
        }
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