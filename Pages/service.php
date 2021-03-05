<!DOCTYPE html>
<html lang="en">

<head>
    <title>โรงพยาบาลเจ้าพระยาอภัยภูเบศร</title>
    <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include("./cpawebsite/components/header.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

        .btn-link {
            border: none;
            outline: none;
            background: none;
            padding: 0px;
            /* cursor: pointer;
            color: #0000EE;
            padding: 0;
           
            font-family: inherit;
            font-size: inherit; */
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: none;
        }
    </style>
</head>

<body style="background-color: #ffffff;">

    <?php include "./cpawebsite/components/navbar.php" ?>
    <?php
    $show = true;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $show = !$show;
        if (!is_null($_POST["submit"])) {
            $id = $_POST["submit"];
            $dep_name = $_POST["dep_name" . $id];
            $icon_class = $_POST["icon_class" . $id];
            $icon_color = $_POST["icon_color" . $id];
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!is_null($_GET["id_sub"])) {
            $show = !$show;
        }
    }
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="main" style="padding:10px;display:<?php echo $show ? "block" : "none"; ?>;">
        <div class="row " style="padding:25px">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p style="text-align: center;">
                    <span style="font-weight: bold;font-size:28px;color: #046099;">บริการของเรา</span>
                </p>
            </div>
        </div>
        <form method="POST" id="form1" action="./service">
            <div class="row" style="padding:10px">
                <?php
                $sel_col = "SELECT *,dep.id as dep_id FROM tb_department dep LEFT JOIN cpa_icon icon ON dep.icon_id = icon.id WHERE dep.status = 'Y'";
                $querysel_col = mysqli_query($con, $sel_col);
                while ($ResultCeo = mysqli_fetch_assoc($querysel_col)) {
                ?>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <div class="card shadow p-3 mb-5 bg-white rounded">
                            <button onclick="myFunction()" value="<?php echo $ResultCeo['dep_id']; ?>" type="submit" class="btn-link" name="submit">
                                <input type="hidden" name="dep_name<?php echo $ResultCeo['dep_id']; ?>" value="<?php echo $ResultCeo['description']; ?>">
                                <input type="hidden" name="icon_class<?php echo $ResultCeo['dep_id']; ?>" value="<?php echo $ResultCeo['icon_class']; ?>">
                                <input type="hidden" name="icon_color<?php echo $ResultCeo['dep_id']; ?>" value="<?php echo $ResultCeo['icon_color']; ?>">
                                <div class="card-body row text-center">
                                    <div class="col-3">
                                        <i class="<?php echo $ResultCeo['icon_class']; ?>" style="font-size:48px;color:<?php echo $ResultCeo['icon_color']; ?>;"></i>
                                    </div>
                                    <div class="col">
                                        <div class="text-value-xl" style="font-weight: bold;font-size:18px;color: #046099;"><?php echo $ResultCeo['description']; ?></div>
                                        <div class="text-muted small text-left"><?php echo $ResultCeo['detail']; ?></div>
                                    </div>
                                </div>
                            </button>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </form>
    </div>

    <script type="text/javascript">
        function myFunction() {
            topFunction();
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        if (!is_null($_GET["id_sub"])) {
            $show = !$show;
            $id_sub = $_GET["id_sub"];
        }
    }
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="sub" style="padding:10px;display:<?php echo $show ? "none" : "block"; ?>;">
        <div class="row " style="padding:25px">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <p style="text-align: center;">
                    <span style="font-weight: bold;font-size:28px;color: #046099;"><i class="<?php echo $icon_class ?>" style="font-size:32px;color:<?php echo $icon_color ?>;"></i> <?php echo $dep_name; ?><?php echo $show; ?></span>
                </p>
                <form action="./service">
                    <button onclick="myFunction()" style="width: 250px;background-color: #e7edff;border-radius: 15px;border: none;">บริการของเรา</button>
                </form>
            </div>
        </div>
        <div class="row" style="padding:10px">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $sel_col = "SELECT *,sub.id as sub_id FROM tb_department_event ev LEFT JOIN tb_department_sub sub ON ev.department_sub = sub.id WHERE ev.department = '$id'";
                $querysel_col = mysqli_query($con, $sel_col);
                $tmp_name = '';
                while ($ResultCeo = mysqli_fetch_assoc($querysel_col)) {
                    if ($ResultCeo['department_sub'] != $tmp_name) {
            ?>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                            <a href="./service?id_sub=<?php echo $ResultCeo['sub_id']; ?>">
                                <div class="card shadow p-3 mb-5 bg-white rounded" type="submit">
                                    <div class="card-body row text-center">
                                        <div class="col">
                                            <div class="text-value-xl" style="font-weight: bold;font-size:18px;color: #484848;"><?php echo $ResultCeo['description_sub']; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                    }
                    $tmp_name = $ResultCeo['department_sub'];
                }
                if ($id == 7) { ?>
                    <style>
                        .wrapper {
                            position: relative !important;
                            width: 100% !important;
                            background-size: cover !important;
                            overflow: hidden !important;
                            display: block !important;

                        }
                    </style>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="https://www.abhaishop.com/th" target="_blank">
                            <div class="card shadow p-3 mb-5 rounded wrapper" style="background: url('./cpawebsite/uploads/image/service/pic01.png') 0 0 no-repeat;background-color: #3e1e03;">
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl" style="background-color: rgba(255,255,255,0.9);font-weight: bold;font-size:18px;color: #484848;"><?php echo "ซื้อสินค้าออนไลน์" ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="https://www.youtube.com/channel/UCtYAMPNpxrb62S3h3agetOQ" target="_blank">
                            <div class="card shadow p-3 mb-5 rounded wrapper" style="background: url('./cpawebsite/uploads/image/service/pic02.png') 0 0 no-repeat;background-color: #3e1e03;">
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl" style="background-color: rgba(255,255,255,0.9);font-weight: bold;font-size:18px;color: #484848;"><?php echo "ช่อง YouTube" ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="https://www.facebook.com/abhaiherb/photos/?tab=album&album_id=917514031647004" target="_blank">
                            <div class="card shadow p-3 mb-5 rounded wrapper" style="background: url('./cpawebsite/uploads/image/service/pic03.png') 0 0 no-repeat;background-color: #3e1e03;">
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl" style="background-color: rgba(255,255,255,0.9);font-weight: bold;font-size:18px;color: #484848;"><?php echo "รีวิวจากลูกค้า" ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="http://www.abhaiherb.com/index.html" target="_blank">
                            <div class="card shadow p-3 mb-5 rounded wrapper" style="background: url('./cpawebsite/uploads/image/service/pic04.png') 0 0 no-repeat;background-color: #3e1e03;">
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="text-value-xl" style="background-color: rgba(255,255,255,0.9);font-weight: bold;font-size:18px;color: #484848;"><?php echo "คลังความรู้" ?></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="https://drive.google.com/drive/folders/1EjnZintx6pM7zkcO-XSwwwsZPFIRnH2r" target="_blank">
                            <div class="card shadow p-3 mb-5 rounded wrapper" style="background: url('./cpawebsite/uploads/image/service/pic05.png') 0 0 no-repeat;background-color: #3e1e03;">
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="col">
                                            <div class="text-value-xl" style="background-color: rgba(255,255,255,0.9);font-weight: bold;font-size:18px;color: #484848;"><?php echo "วารสารสมุนไพร" ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                        <a href="http://abhaiherb.com/quiz/" target="_blank">
                            <div class="card shadow p-3 mb-5 rounded wrapper" style="background: url('./cpawebsite/uploads/image/service/pic06.png') 0 0 no-repeat;background-color: #3e1e03;">
                                <div class="card-body row text-center">
                                    <div class="col">
                                        <div class="col">
                                            <!--background-image: url('/cpawebsite/uploads/image/pic06.jpg'); -->
                                            <div class="text-value-xl" style="background-color: rgba(255,255,255,0.9);font-weight: bold;font-size:18px;color: #484848;"><?php echo "แอปพลิเคชัน" ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

            <?php    }
            }
            ?>
        </div>
    </div>
    <!-- -----------------------------------------------------description_sub description word content-------------------------------------------------------------------------------------- -->
    <?php
    if (!is_null($_GET["id_sub"])) {
        $sel_col = "SELECT DISTINCT sub.*,dep.*,dep.id as dep_id ,ic.* FROM tb_department_sub sub INNER JOIN tb_department_event ev ON ev.department_sub = sub.id 
LEFT JOIN tb_department dep ON ev.department = dep.id LEFT JOIN cpa_icon ic ON dep.icon_id = ic.id WHERE dep.status = 'Y' and sub.id = '$id_sub'";
        $querysel_col = mysqli_query($con, $sel_col);
        $ResultCeo = mysqli_fetch_assoc($querysel_col);
    }
    ?>
    <div class="col-md-12 col-sm-12 col-xs-12" id="sub" style="padding:10px;display:<?php echo is_null($_GET["id_sub"]) ? "none" : "block"; ?>;">
        <div class="container">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                <img style="border-radius:20px;" src="./cpawebsite/uploads/image/service/<?php echo $ResultCeo['img'] ?>" alt="Cinque Terre" width="80%">

            </div>

        </div>
        <div class="row " style="padding:25px">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <p style="text-align: center;">
                        <span style="font-weight: bold;font-size:34px;color: #046099;"><?php echo $ResultCeo['description_sub'] ?></span>
                    <form method="POST" id="form1" action="./service">
                        <button onclick="myFunction()" value="<?php echo $ResultCeo['dep_id']; ?>" type="submit" class="" name="submit" style="width: 250px;background-color: #e7edff;border-radius: 15px;border: none;">
                            <div class="text-value-xl" style="color: #484848;"><?php echo $ResultCeo['description']; ?></div>
                            <input type="hidden" name="dep_name<?php echo $ResultCeo['dep_id']; ?>" value="<?php echo $ResultCeo['description']; ?>">
                            <input type="hidden" name="icon_class<?php echo $ResultCeo['dep_id']; ?>" value="<?php echo $ResultCeo['icon_class']; ?>">
                            <input type="hidden" name="icon_color<?php echo $ResultCeo['dep_id']; ?>" value="<?php echo $ResultCeo['icon_color']; ?>">
                        </button>
                    </form>
                    </p>
                </div>
            </div>
        </div>
        <div class="row" style="margin-left:8%;margin-right:8%;margin-bottom:8%">
            <div class="container">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <span style="font-size:16px;color: #484848;"><?php echo $ResultCeo['word']  ?></span>
                </div>

            </div>

        </div>
    </div>


    <?php include "./cpawebsite/components/footer.php" ?>
    <style>
        .block-heights {
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            --background-position: center center;
            height: 300px;
            position: relative;
            display: block;
        }

        /* @media only screen and (max-width: 800px) {
            .blog-entry {
                background-size: cover;
                width: 60%;
                display: inline-block;
            }

        } */
    </style>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>


</body>

</html>