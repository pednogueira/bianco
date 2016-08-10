<?php
// Free html5 templates : http://www.html5xcss3.com

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject=$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = "Html5xcss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

	$from = "Html5xcss3 dot com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 

	if(@mail($to,$subject,$message,$headers))
	{
		$text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Vintauge</title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | html5xcss3.com">
    <meta name="author" content="http://www.html5xcss3.com">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="css/menu.css">
    <script src="js/jquery1111.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>

    <!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/Items/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
      <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
		<![endif]-->

	</head>

	<body>
		<div class="wrap-body">
			<div id='cssmenu' class="align-center">
				<ul>
					<li><a href='index.php'><span>Home</span></a></li>
					<li class=' has-sub'><a href='#'><span>Galeria</span></a>
						<ul >
							<li class='has-sub'><a href='#'><span>Decada de 30</span></a>
								<ul>
									<li><a href='#'><span>Paisagem</span></a></li>
									<li class='last'><a href='#'><span>Nu</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>Decada de 40</span></a>
								<ul>
									<li><a href='#'><span>Paisagem</span></a></li>
									<li class='last'><a href='#'><span>Nu</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>Decada de 50</span></a>
								<ul>
									<li><a href='#'><span>Paisagem</span></a></li>
									<li class='last'><a href='#'><span>Nu</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>Decada de 60</span></a>
								<ul>
									<li><a href='#'><span>Paisagem</span></a></li>
									<li class='last'><a href='#'><span>Nu</span></a></li>
								</ul>
							</li>
							<li class='has-sub'><a href='#'><span>Decada de 70</span></a>
								<ul>
									<li><a href='#'><span>Paisagem</span></a></li>
									<li class='last'><a href='#'><span>Nu</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a href='sobre.php'><span>Sobre</span></a></li>
					<li class='active last'><a href='contact.php'><span>Contato</span></a></li>
				</ul>
			</div>
			<header class="">
				<div class="logo">
					<hr class="line-1">
					<a href="#">Enrico Bianco</a>
					<!-- <span>Lorem ipsum dolor sit amet</span> -->
					<hr class="line-1">
				</div>
			</header>
			<!--////////////////////////////////////Container-->
			<section id="container">
				<div class="wrap-container">
					<!-----------------Content-Box-------------------->
					<section class="content-box zerogrid">
						<div class="row wrap-box"><!--Start Box-->
							<h3 class="t-center">Formulário para contato</h3>
							<!--Warning-->
							<!-- <center><?php echo $text;?></center> -->
							<!---->
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label class="row">
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="name" id="name" placeholder="Nome" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="email" name="email" id="email" placeholder="E-mail" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Assunto" required="required" />
											</div>
										</div>
									</label>
									<label class="row">
										<div class="wrap-col">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Mensagem"></textarea>
										</div>
									</label>
									<center><input class="sendButton" type="submit" name="submitcontact" value="Enviar"></center>
								</form>
							</div>
						</div>
					</section>

				</div>
			</section>
			<!--////////////////////////////////////Footer-->
			<?php include_once 'include/footer.php' ?>
			<!-- carousel -->
			<script src="owl-carousel/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-slide").owlCarousel({
						autoPlay: 3000,
						items : 2,
						itemsDesktop : [1199,2],
						itemsDesktopSmall : [979,1],
						itemsTablet : [768, 1],
						itemsMobile : [479, 1],
						navigation: true,
						navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
						pagination: false
					});
				});
			</script>
		</div>
	</body>
	</html>