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
  </style>
</head>

<body style="background-color: #f0f0f0;">

  <?php include "./cpawebsite/components/navbar.php" ?>
  <div class="container" style="padding-top: 45px; padding-bottom: 45px;">
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
        $sel_col = "SELECT * FROM tb_department WHERE status = 'Y'";
        $querysel_col = mysqli_query($con, $sel_col);
        $defaultOpen = 'id="defaultOpen"';
        while ($ResultCeo = mysqli_fetch_assoc($querysel_col)) {
        ?>
          <button class="tablinks" onclick="openCity(event, '<?php echo $ResultCeo['id']; ?>')" <?php echo $defaultOpen ?>>
            <?php echo $ResultCeo['description']; ?></button>
          <?php echo $defaultOpen = "" ?>
        <?php
        }
        ?>
      </div>

      <?php
      $sel_col = "SELECT * FROM tb_department WHERE status = 'Y'";
      $querysel_col = mysqli_query($con, $sel_col);
      while ($ResultCeo_col = mysqli_fetch_assoc($querysel_col)) {
      ?>
        <div id="<?php echo $ResultCeo_col['id']; ?>" class="tabcontent">
          <div class="table-responsive">
            <table class="table table-striped ">
              <thead>
                <tr>
                  <th>แผนกที่เปิดบริการ</th>
                  <th>วันที่ให้บริการ</th>
                  <th>เวลาที่ให้บริการ</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $sel = "SELECT  e.id as tb_e_id,
                                b.id as tb_id,
                                b.description as td_dep,
                                c.description_sub as td_sub,
                                d.date as td_day,
                                e.detail as td_detail,
                                f.time as td_time,
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
                  if ($ResultCeo['tb_id'] == $ResultCeo_col['id']) {
                    $ResultCeo['td_sub'] = str_replace(")", ")</span>", str_replace("(", "<span style=\"color:#0b5e2c\">(", $ResultCeo['td_sub']));
                ?><tr>
                      <td><?php echo $ResultCeo['td_sub'] != $tmp_name ? $ResultCeo['td_sub'] : ''; ?></td>
                      <td><?php echo $ResultCeo['td_day'] . ' ' . ($ResultCeo['tb_e_id'] == '7' ? '' : $ResultCeo['td_detail']); ?></td>
                      <td><?php echo $ResultCeo['td_time']; ?></td>
                    </tr>
                <?php
                    $tmp_name = $ResultCeo['td_sub'];
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

    @media only screen and (max-width: 800px) {
      .blog-entry {
        background-size: cover;
        width: 60%;
        display: inline-block;
      }

    }
  </style>

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.20/js/uikit.min.js"></script>


</body>

</html>