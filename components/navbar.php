<?php
include "./cpawebsite/Pages/stampviewer.php";
?>
<style>
	body::-webkit-scrollbar {
		display: none;
	}

	@font-face {
		font-family: myFirstFont;
		src: url('./cpawebsite/fonts/flaticon/font/Kanit-Light.ttf');
	}

	div {
		font-family: myFirstFont;
	}
</style>
<div class="wrap">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex align-items-center">
				<p class="mb-0 phone pl-md-2">
					<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span>โทร 037-211-088 037-211-088 แฟกซ์ 037-211-243 037-211-243 </a>
				</p>
			</div>
			<div class="col-md-6 d-flex justify-content-md-end">
				<div class="social-media">
					<p class="mb-0 d-flex">
						<a href="https://www.facebook.com/abhaibhubejhrhospital/" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
						<a href="./cpawebsite/admin/login.php" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-sing-in"><i class="fa fa-sign-in" aria-hidden="true"></i></span></a>
					</p>
				</div>
			</div>

		</div>
	</div>
</div>

<?php
$selectnavcolor = "SELECT * FROM cpa_navbar";
$querynavcolor	 = mysqli_query($con, $selectnavcolor);
$resultcolor = mysqli_fetch_assoc($querynavcolor);

?>

<style>
	.ftco-navbar-light {
		background: <?php if ($resultcolor['cpa_background_color'] == '' || $resultcolor['cpa_background_color'] == null) echo '#fff';
					else {
						echo $resultcolor['cpa_background_color'];
					} ?> !important;
	}

	.ftco-navbar-light .navbar-brand span {
		color: <?php if ($resultcolor['cpa_text_blod_color'] == '' || $resultcolor['cpa_text_blod_color'] == null) echo '#207dff';
				else {
					echo $resultcolor['cpa_text_blod_color'];
				} ?>
	}

	.ftco-navbar-light .navbar-brand {
		color: <?php if ($resultcolor['cpa_text_color'] == '' || $resultcolor['cpa_text_blod_color'] == null) echo '##000000';
				else {
					echo $resultcolor['cpa_text_color'];
				} ?>
	}

	.ftco-navbar-light .navbar-nav>.nav-item>.nav-link {
		color: <?php if ($resultcolor['cpa_text_color'] == '' || $resultcolor['cpa_text_blod_color'] == null) echo '##000000';
				else {
					echo $resultcolor['cpa_text_color'];
				} ?>
	}
</style>



<!-- NAV -->
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="./">โรงพยาบาล <span style="font-size: 85%;">เจ้าพระยาอภัยภูเบศร </span></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span> เมนู
		</button>
		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item "> <a href="./web_63" class="nav-link">เว็บไซต์เดิม</a></li>
				<li class="nav-item <?php if ($page == "index") {
										echo "active";
									} ?>"> <a href="./" class="nav-link">หน้าแรก</a></li>
				<li class="nav-item <?php if ($page == "about") {
										echo "active";
									} ?> dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						เกี่ยวกับเรา
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="./about">เกี่ยวกับเรา</a>
						<a class="dropdown-item" href="./manager">คณะผู้บริหาร</a>
						<a class="dropdown-item" href="./event">กิจกรรม</a>
				</li>

				<li class="nav-item <?php if ($page == "news") {
										echo "active";
									} ?>"><a href="news" class="nav-link">ประชาสัมพันธ์</a></li>
				<li class="nav-item"><a href="http://wops.moph.go.th/ops/oic/" target="_blank" class="nav-link">ศูนย์ข้อมูลข่าวสาร</a></li>
				<li class="nav-item <?php if ($page == "ita") {
										echo "active";
									} ?> "><a href="./ita" class="nav-link">ITA</a></li>
				<li class="nav-item <?php if ($page == "contact") {
										echo "active";
									} ?> dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> ติดต่อ</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="./contact">ติดต่อ</a>
						<a class="dropdown-item" href="	./complaints">แนะนำร้องเรียนติชม</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- END nav -->