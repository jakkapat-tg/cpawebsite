<!DOCTYPE html>
<html lang="en">

<head>
	<title>โรงพยาบาลเจ้าพระยาอภัยภูเบศร</title>
	<link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include ("./cpawebsite/components/header.php");?>
</head>

<body>
	<?php
		$page = "index";
		include ("./cpawebsite/components/navbar.php");

		
		//นับจำนวนคนเข้าเว็บตาม sessionid
		$dateNow =  date("Y-m-d");
		$sqlcounter = "SELECT count(*) as today from (SELECT * from  cpa_web_counter WHERE date_visit = '$dateNow' group by sessions_id,date_visit	)as today";
		$querycounter = mysqli_query($con, $sqlcounter);

		$sqlcounter2 = "select count(*)as thismonth from (SELECT count(*)as thismonth from  cpa_web_counter where date_visit between DATE_SUB('$dateNow',INTERVAL DAYOFMONTH('$dateNow')-1 DAY) 
			AND LAST_DAY('$dateNow')
			group by sessions_id,date_visit)as thismonth";
		$querycounter2 = mysqli_query($con, $sqlcounter2);

		$sqlcounter3 = "select count(*)as allofnum from(SELECT * from  cpa_web_counter group by sessions_id)as total";
		$querycounter3 = mysqli_query($con, $sqlcounter3);

		$todaycount = mysqli_fetch_assoc($querycounter);
		$monthcount = mysqli_fetch_assoc($querycounter2);
		$totalcount = mysqli_fetch_assoc($querycounter3);

		$sqlimgslide = "SELECT * from cpa_web_slideimg";
		$querysqlimgslide = mysqli_query($con, $sqlimgslide);
		$resultimg = mysqli_fetch_assoc($querysqlimgslide);

		$resultimg1 = $resultimg['image1'];
		$resultimg2 = $resultimg['image2'];
		$resultimg3 = $resultimg['image3'];

	?>

	<style>
		@media screen and (min-width: 720px) {
			.slidewidth100 {
				width: 100%;
			}
		}
	</style>


	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner hero-wrap">
			<div class="carousel-item  active">
				<img class="slidewidth100" src="<?php if ($resultimg1 == '' || $resultimg1 == null) {	echo './cpawebsite/uploads/image/slideimg/default1.jpg';} else {echo './cpawebsite/uploads/image/slideimg/' . $resultimg1;	} ?>" alt="ไม่สามารถโหลดภาพได้">
			</div>
			<div class="carousel-item">
				<img class="slidewidth100" src="<?php if ($resultimg2 == '' || $resultimg2 == null) {	echo './cpawebsite/uploads/image/slideimg/default2.jpg';} else {echo './cpawebsite/uploads/image/slideimg/' . $resultimg2;	} ?>" alt="ไม่สามารถโหลดภาพได้">
			</div>
			<div class="carousel-item ">
				<img class="slidewidth100" src="<?php if ($resultimg3 == '' || $resultimg3 == null) {echo './cpawebsite/uploads/image/slideimg/default3.jpg';	} else {echo './cpawebsite/uploads/image/slideimg/' . $resultimg3;	} ?>" alt="ไม่สามารถโหลดภาพได้">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>


	<div class="container" style="padding-top: 25px; padding-bottom: 25px;">
		<div class="row">
			<?php
               $seleltGroupNews = "select * from cpa_web_groupnews  where status = '1' order by cpa_groupnews_id";
               $queryGroupNews = mysqli_query($con, $seleltGroupNews); 
              // วนรอบเอาชื่อรายละอียดและเอกสารแนบ
              while ($rgnews  = mysqli_fetch_assoc($queryGroupNews)) {
			?>

			<div class="col-md-4 col-sm-6 col-xs-12 ">
				<div class="alert alert-dismissible alert-theme-g ">
					<p>
					<i class="fa fa-<?php echo $rgnews['icon'];?>" style="color: #046099;" aria-hidden="true"></i>	&nbsp;
						<span style="font-weight: bold;font-size:20px;color: #046099;"><?php echo $rgnews['cpa_namegroup'];?></span>
					</p>
				</div>

			<?php
			   $seleltNews = "select *,DATEDIFF(cpa_createdatetime,NOW())as newpakead 
			   from cpa_web_news  where cpa_status = '1' and cpa_groupnews_id = '".$rgnews['cpa_groupnews_id']."' order by cpa_createdatetime desc limit 3";
               $queryNews = mysqli_query($con, $seleltNews);
              
              // วนรอบเอาชื่อรายละอียดและเอกสารแนบ
              while ($ResultNews  = mysqli_fetch_assoc($queryNews)) {
                $numofrow += 1;
				?>
					<p style="padding-left:15px;" class="col-font-w">
						<?php if($ResultNews['cpa_pdf_path']!=null || $ResultNews['cpa_pdf_path']!= ''){?>
						    <a href="./cpawebsite/uploads/pdffile/pdf/<?php echo $ResultNews['cpa_pdf_path'];?>" target="_blank" class="col-font-w">
							<?php echo $numofrow.'. '.$ResultNews['cpa_name_news'].' ['.$ResultNews['cpa_createdatetime'].']';?> </a>
						<?php }?>
						<?php if($ResultNews['cpa_pdf_path']==null || $ResultNews['cpa_pdf_path']== ''){?>
							<a href="#"><?php echo $numofrow.'. '.$ResultNews['cpa_name_news']?> 	</a>
						<?php }  if ($ResultNews['newpakead'] >= -7) { //หากน้อยกว่า 7 วันจะเป็นหัวข้อใหม่ติดไอค่อน new
								echo '<img src="./cpawebsite/uploads/image/New_icons_23.gif" alt="">';
							  }  
						?>
					</p>
			  <?php }?>

				<p style="padding-left:15px;">
					<a href="news?groupid=<?php echo $rgnews['cpa_groupnews_id'];?>" style="color:#7d7d7d;">
						อ่านเพิ่ม...
					</a>
				</p>

			</div>
			  <?php $numofrow =0; }?>
		</div>
	</div>


	<section class="ftco-counter" id="section-counter">
		<div class="container">
			<div class="row">
				<div class="col-md-4 mb-5 mb-md-0 text-center text-md-left">
					<h2 class="font-weight-bold" style="color: #fff; font-size: 20px;">จำนวนผู้เข้าชม</h2>
				</div>
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $todaycount['today']; ?>">0</strong>
								</div>
								<div class="text">
									<span>วันนี้</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $monthcount['thismonth']; ?>">0</strong>
								</div>
								<div class="text">
									<span>เดือนนี้</span>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
							<div class="block-18 text-center">
								<div class="text">
									<strong class="number" data-number="<?php echo $totalcount['allofnum']; ?>">0</strong>
								</div>
								<div class="text">
									<span>ยอดผู้เข้าชมทั้งหมด</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




	<section class="ftco-section bg-light">
		<div class="container">

			<div class="row justify-content-center pb-5 mb-3">
				<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
					<h2>คณะผู้บริหาร</h2>
				</div>
			</div>
			<div class="row d-flex desc">

				<?php
				$selectceo = "SELECT * FROM cpa_ceo where cpa_ceo_statusactive = '1' ORDER BY cpa_ceo_position_show desc limit 4";
				$queryselectceo = mysqli_query($con, $selectceo);
				while ($ResultCeo = mysqli_fetch_assoc($queryselectceo)) {
				?>
					<div class="col-md-3 d-flex ftco-animate justify-content-center ">
						<div class="blog-entry align-self-stretch">
							<a class="block-heights" style="background-image: url('./cpawebsite/uploads/image/ceo/<?php echo $ResultCeo['cpa_ceo_picturename']; ?>');">
							</a>
							<div class="text p-4 text-center ">
								<h2 class="heading" style="font-size: 100%;"><a href="#"><?php echo $ResultCeo['cpa_ceo_name']; ?></a></h2>
								<p style="font-size: 60%;"><?php echo $ResultCeo['cpa_ceo_detail']; ?></p>
							</div>
						</div>
					</div>
				<?php } ?>

			</div>

		</div>
	</section>






	<!-- ------------------------------------------------------  EVENT PICTURE   ----------------------------------------------------------- -->
	<section class="ftco-section">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate fadeInUp ftco-animated">
				<h2>ประมวลภาพกิจกรรม</h2>
			</div>
		</div>
		<div class="container-fluid px-md-4">
			<div class="row">
				<?php
				$selectevent = "SELECT * FROM cpa_events where cpa_event_status = '1' ORDER BY cpa_event_insert_date desc limit 8";
				$queryEvents = mysqli_query($con, $selectevent);
				while ($Resultevent = mysqli_fetch_assoc($queryEvents)) {
				?>
					<div class="col-md-3 ftco-animate">
						<div class="work mb-4 img d-flex align-items-end" style="background-image: url(./cpawebsite/uploads/image/event/<?php echo $Resultevent['cpa_event_path']; ?>);">
							<a href="./cpawebsite/uploads/image/event/<?php echo $Resultevent['cpa_event_path']; ?>" class="icon image-popup d-flex justify-content-center align-items-center">
								<span class="fa fa-expand"></span>
							</a>
							<div class="desc w-100 px-4">
								<div class="text w-100 mb-3">
									<span><?php echo $Resultevent['cpa_event_detail']; ?></span>
									<h2><a href="event-single/<?php echo $Resultevent['cpa_event_id']; ?>">
											<?php echo $Resultevent['cpa_event_topic']; ?></a>
									</h2>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<!-- ------------------------------------------------------  EVENT PICTURE   ----------------------------------------------------------- -->


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
</body>

</html>