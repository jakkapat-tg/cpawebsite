<!DOCTYPE html>
<html lang="en">

<head>
    <title>ITA</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "./cpawebsite/components/header.php"; ?>
</head>

<body>
    <?php
    $page = "ita";
    include "./cpawebsite/components/navbar.php";
    function DateThai($strDate)
    {
        $strYear = date("Y", strtotime($strDate)) + 543;
        $strMonth = date("n", strtotime($strDate));
        $strDay = date("j", strtotime($strDate));
        $strHour = date("H", strtotime($strDate));
        $strMinute = date("i", strtotime($strDate));
        $strSeconds = date("s", strtotime($strDate));
        $strMonthCut = array("", "ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ย.", "ธ.ค.");
        $strMonthThai = $strMonthCut[$strMonth];
        return "$strDay $strMonthThai $strYear, $strHour:$strMinute";
    }
    //$strDate = "2020-08-14 13:42:44";
    //echo "ThaiCreate.Com Time now : " . DateThai($strDate);
    ?>

    <style>
        #myBtn {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: red;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }

        #myBtn:hover {
            background-color: #555;
        }
    </style>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="content-wrapper">

                <div class="row">
                    <div class="col-md-12 grid-margin">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <img src="./cpawebsite/uploads/image/ITALogo1.png" alt="ไม่สามารถโหลดรูปภาพได้" style="display: block;max-width: 100px;height: auto;" />
                                <h3 style="color:#006738;border-bottom:2px #2dc997 solid;padding-bottom:10px;">โรงพยาบาลเจ้าพระยาอภัยภูเบศร</h3>

                                <nav class="nav nav-pills flex-column flex-sm-row">
                                    <a class="flex-sm-fill text-sm-center nav-link" aria-current="page" href="#">2564</a>
                                    <a class="flex-sm-fill text-sm-center nav-link active" href="#">2563</a>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>

                
                <?php
                $sqlita_eb = "SELECT * FROM ita_eb ";
                $querysqlita_eb = mysqli_query($con, $sqlita_eb);
                while ($topic_ita  = mysqli_fetch_assoc($querysqlita_eb)) {

                ?>
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <p class="card-title mb-0 text-info"><?php echo '<strong>' . $topic_ita['ita_eb_code'] . '</strong> : ' . $topic_ita['ita_eb_name']; ?></p>
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                            <?php
                                            $sqldetail_ita = "SELECT * FROM ita_detail where ita_eb = '" . $topic_ita['ita_eb_id'] . "' and ita_status ='1' Order by ita_order"; //หากลุ่มไอดีที่ส่งเข้ามา
                                            $querysqldetail_ita = mysqli_query($con, $sqldetail_ita);
                                            while ($detail_ita  = mysqli_fetch_assoc($querysqldetail_ita)) {
                                            ?>
                                                <tr>
                                                    <td class="text-danger">
                                                        <i class="ti-arrow-circle-right"></i>
                                                        <span><a href="./cpawebsite/uploads/ita/<?php echo $detail_ita['ita_path']; ?>" target="_blank">&nbsp;&nbsp;<?php echo $detail_ita['ita_detal']; ?></a></span>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <button onclick="topFunction()" id="myBtn" title="Go to top">กลับด้านบน</button>


    </section>

    <?php include "./cpawebsite/components/footer.php" ?>
    <script>
        //Get the button
        var mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>



</body>

</html>