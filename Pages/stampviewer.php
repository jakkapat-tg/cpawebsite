<?php
    session_start();
    $sessionid = session_id();
    include "./cpawebsite/sqlconfig/config.php";
    date_default_timezone_set("Asia/Bangkok"); //ตั้งโซนเวลา
    $datetime = date("Y-m-d");
    $url = $_SERVER['REQUEST_URI'];
    $ip = $_SERVER['REMOTE_ADDR'];
    //echo ' url:  '.$url .'<br> ip :' .$ip .'<br>'. $datetime .'<br>sessionid: '. $sessionid;

    if(isset($_SESSION['username'])==''||isset($_SESSION['username'])==null){ $userlogin='guest';}

    $viewer = "SELECT * FROM cpa_web_counter where sessions_id = '$sessionid' AND visit = '$url' ";
    $timeStampyet = mysqli_query($con,$viewer);
    $num = mysqli_num_rows($timeStampyet);
    if($num <= 0){
          $sqlInsert = "INSERT INTO cpa_web_counter (date_visit,ip_visit,visit,sessions_id) VALUE ('$datetime','$ip','$url','$sessionid')";
         $queryInsertcounter = mysqli_query($con,$sqlInsert);
    }
?>