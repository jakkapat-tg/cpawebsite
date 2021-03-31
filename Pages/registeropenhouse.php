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
            <br> <br> <br>
            <div class="container clearfix">
                <div class="divcenter topmargin">
                    <div class="contact-widget">
                        <div class="fancy-title title-dotted-border title-center">
                            <h3 class="text-info text-center"><span>ตรวจสอบวันเวลาเข้าเยี่ยมชม</span></h3>
                        </div>
                        <br>

                        <div class="contact-form-result"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <h4>เลือกวันที่เข้าเยี่ยมชม</h4>
                                <div class="input-daterange travel-date-group bottommargin-sm">
                                    <div class="row">
                                        <div class="col-md-10 bottommargin-sm">
                                            <div class="input-group">
                                                <input type="date" class="form-control" required>
                                            </div> <br> <br> <br>
                                            <label class="form-check-label mt-3" for="exampleRadios1">หมายเหตุ : ทาง รพ. เปิดให้สำรองวันและเวลาเข้าเยี่ยมชมล่วงหน้าอย่างน้อย 15 วันทำการ</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-lg-8 ">
                                <h4>เลือกรอบเข้าเยี่ยมชม</h4>
                                <div>

                                    <table id="rdoTimeVisit" border="0">
                                        <tbody>
                                            <tr>
                                                <td><input id="rdoTimeVisit_0" type="radio" name="rdoTimeVisit" value="M" ><label for="rdoTimeVisit_0">&nbsp; เดย์สปาร์ รอบเช้า : 09.00 - 12.00 น.</label></td>
                                                <td><input id="rdoTimeVisit_1" type="radio" name="rdoTimeVisit" value="A"><label for="rdoTimeVisit_1">&nbsp; เดย์สปาร์ รอบบ่าย : 13.30 - 16.30 น.</label></td>
                                                <td><input id="rdoTimeVisit_3" type="radio" name="rdoTimeVisit" value="ND" checked="checked"><label for="rdoTimeVisit_3">&nbsp; ไม่ประสงค์เยี่ยมชม เดย์สปาร์</label></td>
                                            </tr>
                                            <tr>
                                                <td><input id="rdoTimeVisit1_1" type="radio" name="rdoTimeVisit2" value="M1"><label for="rdoTimeVisit1_1"> &nbsp;สมุนไพร รอบเช้า : 09.00 - 12.00 น.</label></td>
                                                <td><input id="rdoTimeVisit1_2" type="radio" name="rdoTimeVisit2" value="A1"><label for="rdoTimeVisit1_2"> &nbsp;สมุนไพร  รอบบ่าย : 13.30 - 16.30 น.</label></td>
                                                <td><input id="rdoTimeVisit1_3" type="radio" name="rdoTimeVisit2" value="ND" checked="checked"><label for="rdoTimeVisit1_3" > &nbsp;ไม่ประสงค์เยี่ยมชม สมุนไพร </label></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="text-center">
                            <span id="lblError" class="form-check-label" style="color:Red;">Error Message โปรดเลือกวันที่ล่วงหน้าอย่างน้อย 15 วัน กรุณากรอกข้อมูลให้ครบถ้วน ครับ/ค่ะ</span>
                        </div>
                        <div class="text-center mb-5">

                            <input type="submit" class="btn btn-info  mt-3" style="border-radius: 30px;" name="submitform1" value="ตรวจสอบวันที่เข้าเยี่ยมชม">
                            <br><br><br>
                        </div>
                    </div>







                    <div id="divInformation">
                        <div class="fancy-title title-dotted-border title-center">
                            <h3><span>กรอกข้อมูลผู้ติดต่อ</span></h3>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="inputState">คำนำหน้าชื่อ</label>

                                <select name="ddlPrefixName" id="ddlPrefixName" class="form-control">
                                    <option selected="selected" value="1">นาย</option>
                                    <option value="2">นาง</option>
                                    <option value="3">นางสาว</option>
                                    <option value="4">เด็กหญิง</option>
                                    <option value="5">เด็กชาย</option>

                                </select>
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputEmail4">ชื่อผู้ติดต่อ</label>

                                <input name="txtFirstName" id="txtFirstName" type="name" class="form-control" onkeyup="">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputPassword4">นามสกุล</label>

                                <input name="txtLastName" id="txtLastName" type="lname" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail4">หมายเลขโทรศัพท์</label>

                                <input name="txtTel" maxlength="10" id="txtTel" type="name" class="form-control" >
                                <span id="RegularExpressionValidator1" style="color:Red;visibility:hidden;">กรุณาใส่เฉพาะตัวเลข</span>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputPassword4">e-Mail</label>

                                <input name="txtEmail" id="txtEmail" type="email" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="ddlType">ประเภทผู้เข้าเยี่ยมชม*</label>
                            <select name="ddlType" id="ddlType" class="form-control">
                                <option selected="selected" value="0">โปรดเลือก</option>
                                <option value="1">สถาบันการศึกษา</option>
                                <option value="2">ชุมชน</option>
                                <option value="3">ข้าราชการ</option>
                                <option value="4">เกษตรกรปลูกไม้กระดาษ</option>
                                <option value="5">สื่อมวลชน</option>
                                <option value="6">นักลงทุน</option>
                                <option value="7">พนักงานในเครือ</option>
                                <option value="8">อื่นๆ</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="inputAddress">ชื่อคณะ/หน่วยงาน</label>

                            <input name="txtDepartment" id="txtDepartment" type="Department" class="form-control">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputCity">ที่อยู่</label>

                                <input name="txtAddress" id="txtAddress" type="txtAddress" class="form-control">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCity">ตำบล/แขวง</label>

                                <input name="txtDistrict" id="txtDistrict" type="txtAddress2" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="inputCity">อำเภอ/เขต</label>

                                <input name="txtAmphur" id="txtAmphur" type="txtAddress3" class="form-control">
                            </div>
                            <div class="form-group col-md-5">
                                <label for="inputState">จังหวัด</label>

                                <select name="ddlProvince" id="ddlProvince" class="form-control">
                                    <option selected="selected" value="-">จังหวัด</option>
                                    <option value="1">กระบี่</option>
                                    <option value="2">กรุงเทพมหานคร</option>
                                    <option value="3">กาญจนบุรี</option>
                                    <option value="4">กาฬสินธุ์</option>
                                    <option value="5">กำแพงเพชร</option>
                                    <option value="6">ขอนแก่น</option>
                                    <option value="7">จันทบุรี</option>
                                    <option value="8">ฉะเชิงเทรา</option>
                                    <option value="9">ชลบุรี</option>
                                    <option value="10">ชัยนาท</option>
                                    <option value="11">ชัยภูมิ</option>
                                    <option value="12">ชุมพร</option>
                                    <option value="13">เชียงราย</option>
                                    <option value="14">เชียงใหม่</option>
                                    <option value="15">ตรัง</option>
                                    <option value="16">ตราด</option>
                                    <option value="17">ตาก</option>
                                    <option value="18">นครนายก</option>
                                    <option value="19">นครปฐม</option>
                                    <option value="20">นครพนม</option>
                                    <option value="21">นครราชสีมา</option>
                                    <option value="22">นครศรีธรรมราช</option>
                                    <option value="23">นครสวรรค์</option>
                                    <option value="24">นนทบุรี</option>
                                    <option value="25">นราธิวาส</option>
                                    <option value="26">น่าน</option>
                                    <option value="27">บึงกาฬ</option>
                                    <option value="28">บุรีรัมย์</option>
                                    <option value="29">ปทุมธานี</option>
                                    <option value="30">ประจวบคีรีขันธ์</option>
                                    <option value="31">ปราจีนบุรี</option>
                                    <option value="32">ปัตตานี</option>
                                    <option value="33">พระนครศรีอยุธยา</option>
                                    <option value="34">พะเยา</option>
                                    <option value="35">พังงา</option>
                                    <option value="36">พัทลุง</option>
                                    <option value="37">พิจิตร</option>
                                    <option value="38">พิษณุโลก</option>
                                    <option value="39">เพชรบุรี</option>
                                    <option value="40">เพชรบูรณ์</option>
                                    <option value="41">แพร่</option>
                                    <option value="42">ภูเก็ต</option>
                                    <option value="43">มหาสารคาม</option>
                                    <option value="44">มุกดาหาร</option>
                                    <option value="45">แม่ฮ่องสอน</option>
                                    <option value="46">ยโสธร</option>
                                    <option value="47">ยะลา</option>
                                    <option value="48">ร้อยเอ็ด</option>
                                    <option value="49">ระนอง</option>
                                    <option value="50">ระยอง</option>
                                    <option value="51">ราชบุรี</option>
                                    <option value="52">ลพบุรี</option>
                                    <option value="53">ลำปาง</option>
                                    <option value="54">ลำพูน</option>
                                    <option value="55">เลย</option>
                                    <option value="56">ศรีสะเกษ</option>
                                    <option value="57">สกลนคร</option>
                                    <option value="58">สงขลา</option>
                                    <option value="59">สตูล</option>
                                    <option value="60">สมุทรปราการ</option>
                                    <option value="61">สมุทรสงคราม</option>
                                    <option value="62">สมุทรสาคร</option>
                                    <option value="63">สระแก้ว</option>
                                    <option value="64">สระบุรี</option>
                                    <option value="65">สิงห์บุรี</option>
                                    <option value="66">สุโขทัย</option>
                                    <option value="67">สุพรรณบุรี</option>
                                    <option value="68">สุราษฎร์ธานี</option>
                                    <option value="69">สุรินทร์</option>
                                    <option value="70">หนองคาย</option>
                                    <option value="71">หนองบัวลำภู</option>
                                    <option value="72">อ่างทอง</option>
                                    <option value="73">อำนาจเจริญ</option>
                                    <option value="74">อุดรธานี</option>
                                    <option value="75">อุตรดิตถ์</option>
                                    <option value="76">อุทัยธานี</option>
                                    <option value="77">อุบลราชธานี</option>

                                </select>

                            </div>
                            <div class="form-group col-md-2">
                                <label for="inputZip">รหัสไปรษณีย์</label>

                                <input name="txtPostcode" maxlength="10" id="txtPostcode" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <h4>จำนวนผู้เข้าเยี่ยมชม</h4>
                                <div class="form-group row">
                                    <label for="input001" class="col-sm-2 col-form-label">จำนวน</label>
                                    <div class="col-sm-6">
                                        <input name="txtNumberVisiter" type="number" id="txtNumberVisiter" class="form-control" >
                                    </div>
                                    <label for="input001" class="col-sm-4 col-form-label">คน </label>
                                </div>
                                <small id="emailHelp" class="form-text text-muted">รับเป็นหมู่คณะ 20 - 100 ท่าน ถ้าเกิน 100 ท่าน ติดต่อเจ้าหน้าที่</small>
                            </div>


                            <div class="form-group col-md-6">
                                <h4>พาหนะที่ใช้เข้าเยี่ยมชมโรงพยาบาล</h4>
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <div class="form-group row">
                                            <label for="input001" class="col-sm-3 col-form-label">จำนวนรถตู้ </label>
                                            <div class="col-sm-6">

                                                <input name="txtNumberVan" type="number" id="txtNumberVan" class="form-control" >
                                                
                                            </div>
                                            <label for="input001" class="col-sm-3 col-form-label">คัน </label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input001" class="col-sm-3 col-form-label">จำนวนรถบัส </label>
                                            <div class="col-sm-6">
                                                <input name="txtNumberBus" type="number" id="txtNumberBus" class="form-control" >
                                            </div>
                                            <label for="input001" class="col-sm-3 col-form-label">คัน </label>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-row">

                            <div class="form-group col-md-6">
                                <h4>แนบจดหมายขอเข้าเยี่ยมชมโรงพยาบาล</h4>

                                <input type="file" name="fulLetter" id="fulLetter" class="form-control-file">
                                <span id="Label2">File extention must be .pdf <br> File name allow only a-z, A-Z, 0-9, _, -</span><br>
                                <div id="UpdatePanel2">

                                    <span id="lblFileLetterError" class="form-check-label" style="color:Red;"></span>

                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <h4>แนบรายรายชื่อ-ตำแหน่งผู้เข้าเยี่ยมชมโรงพยาบาล</h4>


                                <input type="file" name="fulNameList" id="fulNameList" class="form-control-file">
                                <span id="Label3">File extention must be .pdf <br> File name allow only a-z, A-Z, 0-9, _, -</span><br>
                                <div id="UpdatePanel3">

                                    <span id="lblFileNameListError" class="form-check-label" style="color:Red;"></span>

                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-12">
                                <h4>ท่านรู้จักโครงการ Cpa เปิดบ้านจากช่องทางใด</h4>
                                <div>
                                    <label for="chk_1">ทราบจากผู้อื่นที่เคยเข้ามาเยี่ยมชม</label>
                                    <input name="txtChk_1" id="txtChk_1" type="form001" class="form-control form-control-sm mb-2" placeholder="โปรดระบุชื่อ/คณะ">
                                </div>

                                <div>
                                    <label for="chk_2">มีผู้เกี่ยวข้องทำงานในบริษัท</label>
                                    <input name="txtChk_2" id="txtChk_2" type="form001" class="form-control form-control-sm mb-2" placeholder="โปรดระบุชื่อ/ตำแหน่ง/หน่วยงาน">
                                </div>
                      
                            </div>
                        </div>

                        <div id="UpdatePanel1">
                            <div class="line"></div>
                            <div class="text-center">
                                <br><input type="submit" class="btn btn-primary mb-5" style="border-radius: 30px;" name="btnRegister" value="ลงทะเบียนเยี่ยมโรงพยาบาล" ><br>
                            </div>
                        </div>

                    </div>




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