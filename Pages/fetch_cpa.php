<?php
include "./cpawebsite/sqlconfig/config.php";
if (isset($_POST["query"])) {
	$search = mysqli_real_escape_string($con, $_POST["query"]);
	 $query= " 	SELECT * FROM phone_detail_cpa 
				WHERE 1 = 1
				AND status_on = 'Y'
				AND dep_name LIKE '%" . $search . "%'
				OR tel_number LIKE '%" . $search . "%' 
				OR zone_name LIKE '%" . $search . "%'
			 ";
} else {
	 $query = " SELECT * FROM phone_detail_cpa WHERE status_on = 'Y'  ORDER BY order_show ASC ";
}
$result = mysqli_query($con, $query);
if (mysqli_num_rows($result) > 0) {
?>
	<div class="table-responsive">
		<table class="table bordered font-head">
			<tr class="head-table">
				<th>คลินิก/แผนก/หน่วยงาน</th>
				<th>เบอร์โทรศัพท์</th>
				<th>อาคาร</th>
				<th>ชั้น</th>
			</tr>
			<?php
			while ($row = mysqli_fetch_array($result)) {
			?>
				<tr class="hover-detail">
					<td tooltip="<?php echo "โทร." . $row['tel_number']; ?> ">
						<?echo $row["dep_name"]; ?>
					</td>
					<td>
						<?php
						$st = $row['tel_type'];
						if ($st == 'm') {
							echo "<i class='fa fa-mobile ' aria-hidden='true'></i> <span class='res'> &nbsp;" . $row['tel_number'] . "</span>";
						} elseif ($st == 'p') {
							echo "<i class='fa fa-phone' aria-hidden='true'></i> <span class='res'> &nbsp;" . $row['tel_number'] . "</span>";
						} elseif ($st == 'f') {
							echo "<i class='fa fa-fax' aria-hidden='true'></i> <span class='res'> &nbsp;" . $row['tel_number'] . "</span>";
						} elseif ($st == 'o') {
							echo "<i class='fa fa-volume-control-phone' aria-hidden='true'></i> <span class='res'> &nbsp;" . $row['tel_number'] . "</span>";
						}
						?>
					<td>
						<?php echo $row['zone_name']; ?>
					</td>
					<td>
						<?php echo $row['class_name']; ?>
					</td>
				</tr>
		<?php
			}
		} else {
			echo '<h2 align="center" class="no-result"> ไม่พบรายการที่ค้นหา.. </h2>';
		}
		?>