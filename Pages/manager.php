<!DOCTYPE html>
<html lang="en">

<head>
    <title>คณะผู้บริหาร</title>
    <meta charset="utf-8">
    <link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include "./cpawebsite/components/header.php"; ?>
</head>

<body>
    <?php $page = "about";
    include "./cpawebsite/components/navbar.php"; ?>

    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
            <?php
				$selectceo = "SELECT * FROM cpa_ceo where cpa_ceo_statusactive = '1' ORDER BY cpa_ceo_position_show desc";
				$queryselectceo = mysqli_query($con, $selectceo);
				while ($ResultCeo = mysqli_fetch_assoc($queryselectceo)) {
                    $cc +=1;
                ?>
                    <?php if($cc ==1 ) {echo  '<div class="col-md-4"></div>';}?>
					<div class="col-md-3 d-flex ftco-animate justify-content-center ">
						<div class="blog-entry align-self-stretch">
							<a class="block-heights" style="background-image: url('./cpawebsite/uploads/image/ceo/<?php echo $ResultCeo['cpa_ceo_picturename'];?>');">
							</a>
							<div class="text p-4 text-center">
								<h3 class="heading"><a href="#"><?php echo $ResultCeo['cpa_ceo_name'];?></a></h3>
								<p><?php echo $ResultCeo['cpa_ceo_detail'];?></p>
							</div>
                        </div>
                    </div>
                    <?php if($cc ==1 ) {echo  '<div class="col-md-4"></div>';}?>
				<?php } ?>
            </div>
        </div>
    </section>






    <?php include "./cpawebsite/components/footer.php" ?>

    <style>
        .block-heights {
            overflow: hidden;
            background-size: cover;
            background-repeat: no-repeat;
            --background-position: center center;
            height: 400px;
            position: relative;
            display: block;
        }

        @media only screen and (max-width: 800px) {
            .blog-entry {
                background-size: cover;
                width: 100%;
            }
        }
    </style>


</body>

</html>