<?php
include "./cpawebsite/sqlconfig/config.php";
if (isset($_SESSION['token']){
	$query = "SELECT * FROM cpa_web_job_user WHERE token = '".$_SESSION['token']."'";
	$result = mysqli_query($con, $query);
	if (mysqli_num_rows($result) > 0) {
		$query = "UPDATE cpa_web_job_user SET status = 'Y',token = 'active' WHERE token = '" . $_SESSION['token'] . "'";
		mysqli_query($con, $query);
	}
}
header('Location: /main');
// if (isset($_POST["query"])) {
// 	$search = mysqli_real_escape_string($con, $_POST["query"]);
// 	 $query= " 	SELECT * FROM phone_detail_cpa 
// 				WHERE 1 = 1
// 				AND status_on = 'Y'
// 				AND dep_name LIKE '%" . $search . "%'
// 				OR tel_number LIKE '%" . $search . "%' 
// 				OR zone_name LIKE '%" . $search . "%'
// 			 ";
// } else {
// 	 $query = " SELECT * FROM phone_detail_cpa WHERE status_on = 'Y'  ORDER BY order_show ASC ";
// }
// $result = mysqli_query($con, $query);
// if (mysqli_num_rows($result) > 0) {
// 	header('Location: /main');
// }
?>
<!-- 
if ($_SESSION['loggedin'] != TRUE) {
        header('Location: /login');
    } else {
        include('conn.php');
        $userid = $_SESSION['id'];

        $query = $db->query("SELECT * FROM accounts WHERE id='$userid'", PDO::FETCH_ASSOC);
        if ($query->rowCount()) {
            foreach ($query as $row) {
                $permission = $row["permission"];
            }
        }

        if ($permission == 5) {
            $title = $_REQUEST["title"];
            $data = $_REQUEST["data"];
            $public = $_REQUEST["status"];

            $query = $db->prepare("UPDATE announcements SET title = :title, data = :data, public = :public WHERE id = :id");
            $update = $query->execute(array("title" => $title, "data" => $data, "public" => $public, "id" => $id));

            header('Location: /announcements');
        } else {
            header('Location: /main');
        }
    } -->