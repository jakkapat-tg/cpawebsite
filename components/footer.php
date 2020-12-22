	<footer class="footer">
		<div class="container">
			<div class="row">

				<?php
				$selectfootergroup = "SELECT * FROM cpa_web_footer_group where cpa_footer_status = '1'";
				$queryfootergroup = mysqli_query($con, $selectfootergroup);
				while ($Result = mysqli_fetch_assoc($queryfootergroup)) {
				?>
					<div class="col-md-6 col-lg-3 pl-lg-5 mb-1 mb-md-0">
						<h2 class="footer-heading"><?php echo $Result['cpa_footer_group_name']; ?></h2>
						<ul class="list-unstyled">
							<?php
							$selectfootermenu = "SELECT * FROM cpa_web_footermenu where cpa_footer_group_id = '" . $Result["cpa_footer_group_id"] . "' and cpa_footer_status = '1'";
							$queryfootermenu = mysqli_query($con, $selectfootermenu);
							while ($Resultmenu = mysqli_fetch_assoc($queryfootermenu)) { ?>
								<li><a href="<?php  if($Resultmenu['cpa_footer_link'] =='' || null ){echo '#';}else echo $Resultmenu['cpa_footer_link'] ;?>"  class="py-2 d-block">
								<?php echo $Resultmenu['cpa_footer_name'] ;?></a></li>
							<?php } ?>
						</ul>
					</div>
				<?php } ?>

				
				<div class="col-md-6 col-lg-3 mb-4 mb-md-0">
					<h2 class="footer-heading">ที่ตั้ง</h2>
					<div class="block-23 mb-3">
						<ul>
							<li><span class="icon fa fa-map"></span><span class="text">โรงพยาบาลเจ้าพระยาอภัยภูเบศร เลขที่ 32/7 หมู่ 12 ต.ท่างาม อ.เมืองจ.ปราจีนบุรี </span></li>
							<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">(037) 211-088</span></a></li>
						</ul>
					</div>
				</div>

			</div>
			<div class="row mt-5">
				<div class="col-md-12 text-center">

					<p class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> Information Center@Chaopraya Abhaiphubejhr Hospital. Version 1.0 <i class="fa fa-heart" aria-hidden="true"></i>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</p>
				</div>
			</div>
		</div>
	</footer>

	
	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>


	<script src="./cpawebsite/js/jquery.min.js"></script>
	<script src="./cpawebsite/js/jquery-migrate-3.0.1.min.js"></script>
	<script src="./cpawebsite/js/popper.min.js"></script>
	<script src="./cpawebsite/js/bootstrap.min.js"></script>
	<script src="./cpawebsite/js/jquery.easing.1.3.js"></script>
	<script src="./cpawebsite/js/jquery.waypoints.min.js"></script>
	<script src="./cpawebsite/js/jquery.stellar.min.js"></script>
	<script src="./cpawebsite/js/jquery.animateNumber.min.js"></script>
	<script src="./cpawebsite/js/bootstrap-datepicker.js"></script>
	<script src="./cpawebsite/js/jquery.timepicker.min.js"></script>
	<script src="./cpawebsite/js/owl.carousel.min.js"></script>
	<script src="./cpawebsite/js/jquery.magnific-popup.min.js"></script>
	<script src="./cpawebsite/js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="./cpawebsite/js/google-map.js"></script>
	<script src="./cpawebsite/js/main.js"></script>
	<!-- loader -->