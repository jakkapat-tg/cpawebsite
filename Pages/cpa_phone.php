<!DOCTYPE html>
<html lang="en">

<head>
	<title>เบอร์โทรศัพท์ โรงพยาบาลเจ้าพระยาอภัยภูเบศร</title>
	<link rel="shortcut icon" type="image/x-icdo" href="./cpawebsite/uploads/image/icon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php include("./cpawebsite/components/header.php");?>
	<link rel="stylesheet" href="./cpawebsite/css/style.phone.css">

</head>

<style> 
        #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        font-size: 18px;
        border: none;
        outline: none;
        background-color: red;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 4px;
        }
        #myBtn:hover {
        background-color: #555;
        }
    </style>
	
<body>
<?php include "./cpawebsite/components/navbar.php" ;?>
	<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
	<div class="container">
		<br />
		<br />
		<br />
		<h2 align="center" class="head-main">เบอร์โทรศัพท์ โรงพยาบาลเจ้าพระยาอภัยภูเบศร</h2><br />
		<div class="group">
			<input type="text" name="search_text" id="search_text" placeholder=" ค้นหาข้อมูลติดต่อ..." autofocus/>
			<span class=" search_text"></span><span class="bar"></span>
		</div>
		<br />
		<div id="result"></div>
	</div>
	<div style="clear:both"></div>
	<br />

	<br />
	<br />
	<br />
	
	<?php include "./cpawebsite/components/footer.php" ?>
</body>

</html>


<script>
	$(document).ready(function() {
		load_data();

		function load_data(query) {
			$.ajax({
				url: "fetch_cpa",
				method: "post",
				data: {
					query: query
				},
				success: function(data) {
					$('#result').html(data);
				}
			});
		}

		$('#search_text').keyup(function() {
			var search = $(this).val();
			if (search != '') {
				load_data(search);
			} else {
				load_data();
			}
		});
	});


	var mybutton = document.getElementById("myBtn");
	window.onscroll = function() {
		scrollFunction()
	};

	function scrollFunction() {
		if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		} else {
			mybutton.style.display = "none";
		}
	}

	function topFunction() {
		document.body.scrollTop = 0;
		document.documentElement.scrollTop = 0;
	}
</script>