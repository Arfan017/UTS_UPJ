<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
	<!--- basic page needs
================================================== -->
	<meta charset="utf-8">
	<title>Kards</title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- mobile specific metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/vendor.css">
	<!-- script
	================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>
	<!-- favicons
		================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">
</head>

<body id="top">
	<!-- header 
================================================== -->
	<?php
	include("menu.php");
	include("config.php");
	?>

	<section id="about">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Tentang Saya</h5>
				<h1>Perkenalan Diri.</h1>
				<div class="intro-info">
					<img src="images/profile-pic.jpg" alt="Profile Picture">
					<p class="lead">halo, nama saya Muhammad Arfan, saya mahasiswa dari Universitas Muhammadiyah Sorong, saya mengikuti program pembelajaran jarak jauh universitas pembangunan Jaya.</p>
				</div>
			</div>
		</div> <!-- /section-intro -->
		<div class="row about-content">
			<div class="col-six tab-full">
				<?php
				$query = mysqli_query($con, "SELECT * from profil");
				while ($data = mysqli_fetch_array($query)) {
					$profil = $data['Biodata'];
					$nama = $data['nm'];
					$tgl = $data['tgl_lahir'];
					$kerja = $data['kerja'];
					$web = $data['web'];
					$email = $data['email'];
				}
				?>
				<h3>Profile</h3>
				<p>Nama saya Muhammad Arfan, saya berasal dari Provinsi Sulawesi, tepatnya Sulawesi Selatan, suku bugis, Saat ini keluarga besar saya sedang merantau di provinsi Papua Barat, Kota Sorong. Hobi saya membaca, belajar, dan bermain game </p>
				<ul class="info-list">
					<li>
						<strong>Nama Lengkap:</strong>
						<span><?= $nama ?></span>
					</li>
					<li>
						<strong>Tangal Lahir:</strong>
						<span><?= $tgl ?></span>
					</li>
					<li>
						<strong>Pekerjaan:</strong>
						<span>Mahasiswa</span>
					</li>
					<li>
						<strong>Website:</strong>
						<span><?= $web ?></span>
					</li>
					<li>
						<strong>E-mail:</strong>
						<span><?= $email ?></span>
					</li>
				</ul> <!-- /info-list -->
			</div>
			<div class="col-six tab-full">
				<h3>Skills</h3>
				<p>Berikut Persentasi mengenai Skill/kemampuan yang saya miliki dari hasil belajar dari Youtube, Buku, maupun perkuliahan.</p>
				<ul class="skill-bars">
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>HTML5</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>CSS3</strong>
					</li>
					<li>
						<div class="progress percent50"><span>50%</span></div>
						<strong>PHP</strong>
					</li>
				</ul> <!-- /skill-bars -->
			</div>
		</div>
	</section>
	<?php
	include("footer.php");
	?>
	<!-- Java Script
	================================================== -->
	<script src="js/jquery-2.1.3.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/main.js"></script>
</body>

</html>