<?php include('server.php') ?>
<?php 
        // connect to database
    $db = mysqli_connect("localhost", "root", "", "bestpractice");

        if (isset($_GET['id'])) {
                $id = $_GET['id'];
                $result = mysqli_query($db, "SELECT * FROM btutilization WHERE id=$id");
                $post = mysqli_fetch_assoc($result);
        }
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>KM-แนวปฏิบัติที่ดี คณะวิทยาศาสตร์และเทคโนโลยี</title>
	<meta charset="UTF-8">
	<meta name="description" content="Real estate HTML Template">
	<meta name="keywords" content="real estate, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Favicon -->
	<link href="img/nrru-logo.png" rel="shortcut icon"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700,700i,900%7cRoboto:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/slicknav.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/> 

</head>
<body>
		<!-- Page Preloder -->
		<div id="preloder">
		<div class="loader"></div>
	</div>


	<!-- Header Section -->
	<header class="header-section">
		<a href="index.php" class="site-logo"> 
			<img src="img/nrru-logo.png" alt="Image" style="width:60px;height:70px;">
		</a>
		<nav class="header-nav">
			<ul class="main-menu">
				<li><a href="index.php" class="active">Home</a></li> <!-- class active เป็นค่าหลักที่อยู่หน้านั้น -->
				<li><a href="#">แผนการจัดการความรู้</a>
					<ul class="sub-menu">
						<li><a href="#">ปี 2566</a></li>
						<li><a href="#">ปี 2565</a></li>
						<li><a href="#">ปี 2564</a></li>
					</ul>
				</li>
				<li><a href="#">คณะกรรมการจัดการความรู้</a>
					<ul class="sub-menu">
						<li><a href="#">ปี 2566</a></li>
						<li><a href="#">ปี 2565</a></li>
						<li><a href="#">ปี 2564</a></li>
					</ul>
				</li>
				<li><a href="#">รวมเล่มแนวปฏิบัติ</a>
					<ul class="sub-menu">
						<li><a href="#">ปี 2566</a></li>
						<li><a href="#">ปี 2565</a></li>
						<li><a href="#">ปี 2564</a></li>
					</ul>
				</li>
				<li><a href="#">การใช้ประโยชน์</a>
					<ul class="sub-menu">
						<li><a href="#">ปี 2566</a></li>
						<li><a href="#">ปี 2565</a></li>
						<li><a href="#">ปี 2564</a></li>
					</ul>
				</li>
				<li><a href="contact.html">ติดต่อ</a></li>
			</ul>
			<div class="header-right">
				<div class="user-panel">
					<a href="http://localhost/Project/webproject/login-systeam/" class="register">เข้าสู่ระบบ</a>
				</div>
			</div>
			
		</nav>
	</header>
	<!-- Header Section end -->

	<!-- หน้าแรก -->
	<section class="hero-section set-bg" data-setbg="img/baner-km.jpg"> <!-- รูปindexข้างบน -->
		<div class="container">
			<div class="hero-warp">
				<form class="main-search-form">
					<div class="search-type">.
						<!-- ค้นหาข้อมูล -->
						<div class="st-item">
							<input type="radio" name="st" id="buy" checked>
							<label for="buy">แนวปฏิบัติที่ดี</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="rent">
							<label for="rent">ด้านความรู้</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="sell">
							<label for="sell">กลุ่มความรู้</label>
						</div>
						<div class="st-item">
							<input type="radio" name="st" id="property">
							<label for="property">ปี พ.ศ.</label>
						</div>
					</div>
					<div class="search-input">
						<input type="search" placeholder="กรอกข้อมูลที่ต้องการค้นหา">
						<button class="site-btn">Search</button>
					</div>
					<p>กรอกข้อมูลที่ต้องการค้นหาให้ครบถ้วน</p>
				</form>
			</div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Intro Section end -->
	<section class="intro-section spad">
		<div class="row text-white">
			<div class="col-lg-10">
					<div class="about-text">
					<p class="m-0 text-center text-white"><span style="color: #008000;"><strong>กองประกันคุณภาพการศึกษา สำนักงานอธิการบดี อาคารเฉลิมพระเกียรติ<br>

			</div>	
		</div>
	</section>

	
	<!-- Intro Section end -->

	

	<!-- Footer Section -->
	<footer class="footer-section">
		<div class="container">
			<div class="row text-white">
			<div class="col-lg-10">
	      		<p class="m-0 text-center text-white">คณะวิทยาศาสตร์และเทคโนโลยี&nbsp; มหาวิทยาลัยราชภัฏนครราชสีมา &nbsp;340 ถ.สุรนารายณ์ ต.ในเมือง อ.เมือง จ.นครราชสีมา 30000</p>
	        	<p class="m-0 text-center text-white">Tel. 044-272939  Email : sciencenrru@nrru.ac.th</p>
	    	        
	      	</div>
				<div class="col-lg-4"><br>
				<div class="fb-page col-lg-12 fb_iframe_widget" data-href="https://www.facebook.com/sciencetech.nrru.fanpage" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=&amp;container_width=456&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fsciencetech.nrru.fanpage&amp;locale=th_TH&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline">
					<span style="vertical-align: bottom; width: 450px; height: 400px;">
					<iframe name="f1c92bbe43441c8" width="1000px" height="1000px" data-testid="fb:page Facebook Social Plugin" title="fb:page Facebook Social Plugin" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://web.facebook.com/v2.11/plugins/page.php?adapt_container_width=true&amp;app_id=&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df1e05fad1daf048%26domain%3Dsciencetech.nrru.ac.th%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fsciencetech.nrru.ac.th%252Ff308d76924a6f18%26relation%3Dparent.parent&amp;container_width=456&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fsciencetech.nrru.fanpage&amp;locale=th_TH&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false&amp;tabs=timeline" style="border: none; visibility: visible; width: 530px; height: 450px;" class=""></iframe></span></div>
				<div class="footer-widger">
					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger">

					</div>
				</div>
				<div class="col-lg-2 col-md-3 col-sm-6">
					<div class="footer-widger"><br>
					<div data-aos="fade-up" data-aos-duration="2000" class="col-md-20 boxshadow" id="googleMap" style="height:400px;background-color:#FFF;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1145.84904957654!2d102.11517929842927!3d14.983741306279954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31194c80ee4800a3%3A0x1993639173d005d2!2z4Lit4Liy4LiE4Liy4LijIDMyIOC4hOC4k-C4sOC4p-C4tOC4l-C4ouC4suC4qOC4suC4quC4leC4o-C5jOC5geC4peC4sOC5gOC4l-C4hOC5guC4meC5guC4peC4ouC4tQ!5e0!3m2!1sen!2sth!4v1692537302471!5m2!1sen!2sth" width="440" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
					</div>
				</div>
			</div>
			<div class="copyright" style="text-align:center">
			Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is 
		<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/profile.php?id=100003107586310" target="_blank"> Thanakorn</a>
	</div>
		</div>
	</footer>
	<!-- Footer Section end -->
	
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
