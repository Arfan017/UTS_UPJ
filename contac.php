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
    ?>
    <section id="contact">
        <div class="row section-intro">
            <div class="col-twelve">
                <h5>Kontak saya</h5>
                <h1>Saya senang jika bisa berteman dengan anda</h1>
                <p class="lead">Saya senang jika bisa berteman dengan anda, Ayo berteman</p>
            </div>
        </div> <!-- /section-intro -->
        <div class="row contact-form">
            <div class="col-twelve">
                <!-- form -->
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>
                        <div class="form-field">
                            <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
                        </div>
                        <div class="form-field">
                            <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
                        </div>
                        <div class="form-field">
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="">
                        </div>
                        <div class="form-field">
                            <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required=""></textarea>
                        </div>
                        <div class="form-field">
                            <button class="submitform">Submit</button>
                            <div id="submit-loader">
                                <div class="text-loader">Sending...</div>
                                <div class="s-loader">
                                    <div class="bounce1"></div>
                                    <div class="bounce2"></div>
                                    <div class="bounce3"></div>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </form> <!-- Form End -->
                <!-- contact-warning -->
                <div id="message-warning">
                </div>
                <!-- contact-success -->
                <div id="message-success">
                    <i class="fa fa-check"></i>Your message was sent, thank you!<br>
                </div>
            </div> <!-- /col-twelve -->

        </div> <!-- /contact-form -->
        <div class="row contact-info">
            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-pin"></i>
                </div>
                <h5>Where to find me</h5>
                <p>
                    Indonesia<br>
                    Papua Barat, Kota Sorong<br>
                </p>
            </div>
            <div class="col-four tab-full collapse">
                <div class="icon">
                    <i class="icon-mail"></i>
                </div>
                <h5>Email Me At</h5>
                <p>arfankece06@gmail.com<br>
                </p>
            </div>
            <div class="col-four tab-full">
                <div class="icon">
                    <i class="icon-phone"></i>
                </div>
                <h5>Call Me At</h5>
                <p>Phone: (+62) 812 4779 6665<br>
                </p>
            </div>
        </div> <!-- /contact-info -->
    </section> <!-- /contact -->
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