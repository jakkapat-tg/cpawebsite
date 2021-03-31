<!DOCTYPE html>
<html lang="en">

<head>
    <title>OPEN HOUSE CPA</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include "./cpawebsite/components/header.php"; ?>
</head>

<body>

    <?php $page = "openhouse";
    include "./cpawebsite/components/navbar.php"; ?>

    <div class="container">
        <div class="contents">

            <center>
                <h3 class="mt-5">ลงทะเบียนเข้าเยี่ยมชมโรงพยาบาล</h3>
                <p style="font-weight: 200; ">โปรดกรอกข้อมูลที่เป็นจริง</p>
            </center>
            <br>  <br>  <br>
            <div class="container clearfix">
                <div class="divcenter topmargin" >
                    <div class="contact-widget">
                        <div class="fancy-title title-dotted-border title-center">
                            <h3 class="text-info text-center"><span>ตรวจสอบวันเวลาเข้าเยี่ยมชม</span></h3>
                        </div>
                        <br>
    
                        <div class="contact-form-result"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <h4>เลือกวันที่เข้าเยี่ยมชม</h4>
                                <div class="input-daterange travel-date-group bottommargin-sm">
                                    <div class="row">
                                        <div class="col-md-10 bottommargin-sm">


                                            <div class="input-group">
                                                <input type="date" class="form-control">
                                                
                                            </div>
                                            <br>
                                            <br>

                                            <br>
                                            <label class="form-check-label" for="exampleRadios1">หมายเหตุ : ทาง รพ. เปิดให้สำรองวันและเวลาเข้าเยี่ยมชมล่วงหน้าอย่างน้อย 15 วันทำการ</label>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-6 ">
                                <h4>เลือกรอบเข้าเยี่ยมชม</h4>
                                <div>

                                    <table id="rdoTimeVisit" border="0">
                                        <tbody>
                                            <tr>
                                                <td><input id="rdoTimeVisit_0" type="radio" name="rdoTimeVisit" value="M" checked="checked"><label for="rdoTimeVisit_0"> รอบเช้า : 09.00 - 12.00 น.</label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdoTimeVisit_1" type="radio" name="rdoTimeVisit" value="A"><label for="rdoTimeVisit_1"> รอบบ่าย : 13.30 - 16.30 น.</label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <span id="lblError" class="form-check-label" style="color:Red;">Error Message</span>
                        </div>
                        <div class="text-center mb-5">

                            <input type="submit" class="btn btn-info" style="border-radius: 30px;" name="submitform1" value="ตรวจสอบวันที่เข้าเยี่ยมชม" >
                            <br><br><br>
                            <hr>

                        </div>



                    </div>
                    <script type="text/javascript">
                        //<![CDATA[
                        Sys.WebForms.PageRequestManager._initialize('ScriptManager1', 'Form1', [], [], [], 90, '');
                        //]]>
                    </script>


                    <div class="line"></div>


                </div>

            </div>

        </div>

    </div>
    <?php include "./cpawebsite/components/footer.php" ?>


    <style>
        .imageheader img {
            width: 100%;
        }
    </style>
</body>

</html>