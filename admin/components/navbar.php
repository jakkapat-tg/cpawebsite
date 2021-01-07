   <?php session_start();
    date_default_timezone_set("Asia/Bangkok"); //ตั้งโซนเวลา
    ?>
   <!-- Navbar -->

   <nav class="main-header navbar navbar-expand navbar-white navbar-light">
       <!-- Left navbar links -->
       <ul class="navbar-nav">
           <li class="nav-item">
               <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
           </li>
           <li class="nav-item d-none d-sm-inline-block">
               <a class="nav-link"> <?php echo 'คุณ : ' . $_SESSION['fname'] . ' ' . $_SESSION['lname']; ?> </a>
           </li>
           <li class="nav-item d-none d-sm-inline-block">
               <a class="nav-link">หากพบปัญหาแจ้ง 3148,3149</a>
           </li>
       </ul>
       <!-- Right navbar links -->
       <ul class="navbar-nav ml-auto">
           <li class="nav-item">
               <a class="nav-link" <?php if ($page == 'index') {    echo 'href="./logout.php"';  } else {  echo 'href="../logout.php"';  } ?>>
                   <i class="fa fa-sing-in">LOGOUT</i>
               </a>
           </li>
       </ul>
   </nav>
   <!-- /.navbar -->

   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="../" class="brand-link">
           <center><span class="brand-text font-weight-light ">Admin CPA<sub> home</sub></span></center>
       </a>

       <!-- Sidebar Menu -->

       <nav class="mt-2">

           <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           <?php if($_SESSION['role'] == 'admin')  {  ?>
               <li class="nav-item has-treeview <?php if($group == 1)  {      echo 'menu-open';   } ?>" >
                   <a href="./admin" class="nav-link ">
                       <i class="nav-icon fas fa-tachometer-alt"></i>
                       <p>   Admin   <i class="right fas fa-angle-left"></i>  </p>
                   </a>
                   <ul class="nav nav-treeview">
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/editnav.php" class="nav-link <?php if ($page == 'editnav') { echo 'active'; } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>เปลี่ยนสีแถบเมนูบน (Navbar) </p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/edituser.php" class="nav-link <?php if ($page == 'edituser') { echo 'active';        } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>จัดการข้อมูล User</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/tablecomplaints.php" class="nav-link <?php if ($page == 'tablecomplaints') {  echo 'active';  } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>Complaints User</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/addgroupnews.php" class="nav-link <?php if ($page == 'addgroupnews') {echo 'active';  } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>จัดการหมวดหมู่ประชาสัมพันธ์</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/addspecialgroupnews.php" class="nav-link <?php if ($page == 'addspecialgroupnews ') {echo 'active';  } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>จัดการกลุ่มย่อยประชาสัมพันธ์</p>
                           </a>
                       </li>
                   </ul>
                   <?php }?>
               </li>
     

               <li class="nav-item has-treeview <?php if ($group == 2) { echo 'menu-open'; } ?>">
                   <a href="#" class="nav-link ">
                       <i class="nav-icon fas fa-edit"></i>
                       <p> จัดการหน้าเพจ <i class="fas fa-angle-left right"></i></p>
                   </a>
                   <ul class="nav nav-treeview">
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/editslideimg.php" class="nav-link <?php if ($page == 'editslideimg') {echo 'active';  } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>แก้ไขภาพปก slide หน้าแรก</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/editfooter.php" class="nav-link <?php if ($page == 'editfooter') {   echo 'active';} ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>เพิ่ม/แก้ไข เมนูด้านล่าง(footer)</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/editnews.php" class="nav-link <?php if ($page == 'editnews') {   echo 'active'; } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>เพิ่ม/แก้ไข ข่าวประชาสัมพันธ์</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/manageEvent.php" class="nav-link <?php if ($page == 'manageEvent') {     echo 'active'; } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>เพิ่ม/แก้ไข ภาพกิจกรรม</p>
                           </a>
                       </li>
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/addceo.php" class="nav-link <?php if ($page == 'addceo') {   echo 'active'; } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>เพิ่ม/แก้ไข ข้อมูลผู้บริหาร</p>
                           </a>
                       </li>
                       <!-- <li class="nav-item">
                            <a href="pages/forms/editors.html" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>จัดการตารางตรวจแพทย์</p>
                            </a>
                        </li> -->
                       <li class="nav-item">
                           <a href="/cpawebsite/admin/form/addphone.php" class="nav-link <?php if ($page == 'addphone') {  echo 'active';    } ?>">
                               <i class="far fa-circle nav-icon"></i>
                               <p>เพิ่ม/แก้ไข เบอร์โทรภายใน</p>
                           </a>
                       </li>
                   </ul>
               </li>
       </nav>
   </aside>
   <!-- END Main Sidebar Container -->


   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">

       <!-- Content Header (Page header) -->
       <section class="content-header">
           <div class="container-fluid">
               <?php if ($page !=  "index" && $page !=  "editnav" && $page !=  "editslideimg") { ?>
                   <div class="row mb-2">
                       <div class="col-sm-6">
                           <h1>ปรับแก้ไขข้อมูล</h1>
                       </div>
                       <div class="col-sm-6">
                           <ol class="breadcrumb float-sm-right">
                               <li class="breadcrumb-item "><a class="text-info" href="tableshowdata.php?page=<?php echo $page; ?>">ตารางแสดงข้อมูล & แก้ไข</a></li>
                           </ol>
                       </div>
                   </div>
               <?php } ?>
           </div><!-- /.container-fluid -->
       </section>