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
	<section id="portfolio">
		<div class="row section-intro">
			<div class="col-twelve">
				<h5>Prestasi</h5>
				<h1>Lihat beberapa sertifikat saya</h1>
				<p class="lead">Hello, Ini adalah beberapa setifikat yang saya dapatkan dari hasil mengikuti kursusus online dari Dicoding.</p>
			</div>
		</div> <!-- /section-intro-->
		<div class="row portfolio-content">
			<div class="col-twelve">
				<!-- portfolio-wrapper -->
				<div id="folio-wrapper" class="block-1-2 block-mob-full stack">
					<?php
					$query = mysqli_query($con, "SELECT * FROM prestasi");
					while ($data = mysqli_fetch_array($query)) {
					?>
						<div class="bgrid folio-item">
							<div class="item-wrap">
								<img src="images/<?=$data['gambar']?> " alt="AWS">
								<a href="#modal-01" class="overlay">
									<div class="folio-item-table">
										<div class="folio-item-cell">
											<h3 class="folio-title"><?= $data['label1'] ?></h3>
											<span class="folio-types">
												<?= $data['label2'] ?>
											</span>
										</div>
									</div>
								</a>
							</div>
						</div>
					<?php
					}
					?>
					<!-- /folio-item -->
				</div> <!-- /portfolio-wrapper -->
			</div> <!-- /twelve -->
		</div> <!-- /portfolio-content -->
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