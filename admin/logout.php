<?php
include "../sqlconfig/config.php";
session_start();
session_destroy();
header('location:https://cpa.go.th/');
?>