<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
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

    <section id="resume" class="grey-section">
		<div class="row section-intro">
			<div class="col-twelve">
                <h5>Pendidikan</h5>
				<h1>Pendidikan Saya.</h1>
				<p class="lead">Saya akan sedikit menjelaskan mengenai riwayat penidikan Saya.</p>
			</div>   		
		</div> <!-- /section-intro--> 
		
		<div class="row resume-timeline">
			<div class="col-twelve resume-header">
				<h2>Pendidikan</h2>
			</div> <!-- /resume-header -->
			<div class="col-twelve">
				<div class="timeline-wrap">
					<?php
					$query = mysqli_query($con, "SELECT * from pddkn");
					while ($data = mysqli_fetch_array($query)) {
					?>
						<div class="timeline-block">
							<div class="timeline-ico">
								<i class="fa fa-graduation-cap"></i>
							</div>
							<div class="timeline-header">
								<h3><?= $data['j_pddkn'] ?></h3>
								<p><?= $data['thn_pddkn'] ?></p>
							</div>
							<div class="timeline-content">
								<h4><?= $data['nm_sklh'] ?></h4>
								<p><?= $data['almt_sklh'] ?></p>
							</div>
						</div> <!-- /timeline-block -->
					<?php
					}
					?> 
				</div> <!-- /timeline-wrap -->   			
			</div> <!-- /col-twelve -->
			
		</div> <!-- /resume-timeline -->
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