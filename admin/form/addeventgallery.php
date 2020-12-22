<?php include "./redirect.php" ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>กิจกรรม</title>
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


    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">
        <?php $page = 'manageEvent';
        $group = 2;
        include "../components/navbar.php";
        include "../../sqlconfig/config.php";
        $getid =  $_GET['pkid'];

        $sqlselect = "SELECT * FROM cpa_events where cpa_event_id = '$getid'";
        $querysqlselect = mysqli_query($con, $sqlselect);
        $resultOld = mysqli_fetch_assoc($querysqlselect);
        $topic = $resultOld['cpa_event_topic'];
        for ($o = 0; $o <= 6; $o++) {
            //echo '<br>';
            $oldpic[$o] = $resultOld['cpa_event_pic' . $o];
        }


        if (isset($_POST['hasSave'])) {
            //////////////////////////////////////////////////////////////////////////////////////////////////

            // Check the size and format
            $valid_formats = array("jpg", "png");
            $max_file_size = 1024 * 10000; // 5000 kb


            $path =  "../../uploads/image/event-gallery/"; // Upload directory
            $count = 0; // upload success
            $message = array();
            $fname = array();
            $i = 0;
            $hasfile = 0;


            foreach ($_FILES['files']['name'] as $f => $name) {
                //echo '<br>' . $f . ' ' . $name;
                if ($_FILES['files']['size'][$f] > 0) {
                    $hasfile++; //จำนวนที่อัพไฟล์
                }
                $i++;
            }


            // บังคับให้แนบไฟล์ อย่างน้อย 1 ไฟล์
            if ($hasfile < 1 || $hasfile > 6) {
                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'กรุณาแนบไฟล์อย่างน้อย 1 ไฟล์ และน้อยกว่า 6  ไฟล์' }).then(function() {
                    window.location = './addeventgallery.php?pkid=$getid';
                });</script>";
                die();
            }

            $i = 0;
            foreach ($_FILES['files']['name'] as $f => $name) {
                if ($_FILES['files']['error'][$f] == 0) {
                    if ($_FILES['files']['size'][$f] > $max_file_size) {
                        $message[] = "$name มีขนาดไฟล์มากกว่า " . ($max_file_size / 1024) . "";
                        continue; // Skip large files
                    } elseif (!in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats)) {
                        $message[] = "$name ฟอร์แมตไม่ถูกต้อง";
                        continue; // Skip invalid file formats
                    }
                }
            }


            if (count($message) > 0) { // Has error found!
                foreach ($message as $t) {
                    $txt .= $t . ' ';
                }
                print "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: ' $txt ' }).then(function() {
                    window.location = './addeventgallery.php?pkid=$getid';
                });</script>";
                die();
            } else {
                $countFor = 0;
                foreach ($_FILES['files']['name'] as $f => $name) {
                    // Change file name --Kill multiple dot(.)
                    $ext = pathinfo($name, PATHINFO_EXTENSION);
                    $newName = 'event-gallery' . "_f" . $f . "_" . date("YmdHis") . "." . $ext;
                    $file_path = $path . $newName;
                    $countFor++;
                    //echo $oldpic[$countFor] . '<br>';

                    if ($oldpic[$countFor] == '' || $oldpic[$countFor] == null) {
                        //echo 'ภาพว่าง<br>';
                        if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $file_path)) {
                            //อัพไฟล์สำเร็จ
                            echo 'อัพโหลดไฟล์สำเร็จ ' . $count++ . ' |'; // Number of successfully uploaded file
                            $fname[$f] = $file_path; // นำค่าไปใช้งาน เช่น Insert ในฐานข้อมูล
                            $insertname = $newName;

                            $sqlupdate = "UPDATE cpa_events  SET cpa_event_pic$count = '$insertname' WHERE cpa_event_id = '$getid'";
                            $querysqlupdate = mysqli_query($con, $sqlupdate);

                            if ($querysqlupdate) {
                                echo '<script>  Swal.fire({    icon: "success",   title: "สำเร็จ", text: "แก้ไขข้อมูลสำเร็จ!",   type: "success"  }).then(function() {  window.location = "./tableshowdata.php?page=manageEvent"; });  </script>';
                            } else {
                                echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาดอัพโหลดไม่สำเร็จ', })</script>";
                            }
                        }
                    }

                    if ($oldpic[$countFor] != '' || $oldpic[$countFor] != null) {
                         $deleteoldimg = $path . $oldpic[$countFor]; //path ลบไฟล์
                        if (unlink($deleteoldimg)) //หลังจากสั่งลบไฟล์เดิมได้ค่อยทำการ update DB
                        {
                            if (move_uploaded_file($_FILES["files"]["tmp_name"][$f], $file_path)) {
                                //อัพไฟล์สำเร็จ
                                echo 'อัพโหลดไฟล์สำเร็จ ' . $count++ . ' |'; // Number of successfully uploaded file
                                $fname[$f] = $file_path; // นำค่าไปใช้งาน เช่น Insert ในฐานข้อมูล
                                $insertname = $newName;

                                $sqlupdate = "UPDATE cpa_events  SET cpa_event_pic$count = '$insertname' WHERE cpa_event_id = '$getid'";
                                $querysqlupdate = mysqli_query($con, $sqlupdate);

                                if ($querysqlupdate) {
                                    echo '<script>  Swal.fire({    icon: "success",   title: "สำเร็จ", text: "แก้ไขข้อมูลสำเร็จ!",   type: "success"  }).then(function() {  window.location = "./tableshowdata.php?page=manageEvent"; });  </script>';
                                } else {
                                    echo "<script>Swal.fire({icon: 'error', title: 'Invalid...', text: 'ผิดพลาดอัพโหลดไม่สำเร็จ', })</script>";
                                }
                            }
                            echo 'ลบไฟล์เดิม '.$oldpic[$countFor].'สำเร็จ<br>';
                        }
                    }


                }
            } // END //////////////////////////////////////////////////////////////////////////////
        }

        ?>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title"> ภาพกิจกรรมเพิ่มเติม <?php echo ' id :' . $getid; ?><hilight style="color:red"> **สามารถเลือกได้มากกว่า 1 ภาพ แต่ห้ามเกิน 6 ภาพ**</hilight>
                        </h3>
                    </div>

                    <div class="card-body">
                        <form action="#" method="post" enctype="multipart/form-data">
                            <br>
                            <h5>หัวข้อ :<?= $topic ?></h5>
                            <hr>
                            <div class="row">

                                <div class="custom-file col-lg-12 ">
                                    <input type="file" class="form-control" multiple="multiple" name="files[]" accept="image/jpg, image/jpeg">
                                </div>

                            </div>
                            <hr>
                            <button type="submit" class="btn  btn-block" style="background-color:#009688 ;color:white" name="hasSave">Upload</button>
                        </form>

                    </div>
                </div>
        </section>





        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('detail');


            function CKupdate() {
                for (instance in CKEDITOR.instances)
                    CKEDITOR.instances[instance].updateElement();
            }
        </script>




        <!-- jQuery -->
        <script src="../tem/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../tem/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- bs-custom-file-input -->
        <script src="../tem/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../tem/dist/js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../tem/dist/js/demo.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                bsCustomFileInput.init();
            });
        </script>
</body>

</html>