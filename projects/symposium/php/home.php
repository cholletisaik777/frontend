<!DOCTYPE html>
<html lang="en">
	<head>
    <?php include 'head.php' ?>	
	<!--Personalised styling-->
	<link href="../css/symposium.main.css" rel="stylesheet">

	
  </head>

  <body style="background-image:url('../img/gc3.jpg');background-repeat:no-repeat;background-size:100%;margin-bottom:60px;font-family: 'Roboto', sans-serif;">
  <script>
  $(document).ready(function() {
  $("#home").addClass("active");$("#home_sidebar").addClass("active");
  $("#home").removeClass("default");$("#home_sidebar").removeClass("default");
  });
  </script>
  <!--<script>	
	$(document).ready(function(){
		$('.sidebar').hide();
		$('.menu').on('click', function(){
		$('.sidebar').toggle('slide', { direction: 'left' }, 600);
		});
		$('.main-content').on('click', function(){
		$('.sidebar').hide('slide', { direction: 'left' }, 400);
		});
	});
	</script>-->
	

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand menu">Symposium 2015</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="default" id="home"><a href="">Home</a></li>
			<li class="default" id="about"><a href="">About</a></li>
            <li class="default" id="schedule"><a href="">Schedule</a></li>
            <li class="default" id="speakers"><a href="">Speakers</a></li>
            <li class="default" id="partners"><a href="">Partners</a></li>
			<li class="default" id="faq"><a href="">FAQ</a></li>
			<li class="default" id="register"><a href="">Register</a></li>
			<li class="default" id="hospitality"><a href="">Hospitality</a></li>
			<li class="default" id="contact"><a href="">Contact</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </div>
	
	<?php include 'sidebar.php' ?>	
	
	<div class="main-content">
		<div class="container-fluid">
			<br><br>
			<div class="row">
				<div class="col-xs-4">
					<!--blank space-->
				</div>
				<div class="col-xs-4">
					<center>
						<img src="../img/logo.png">
					</center>
				</div>
				<div class="col-xs-4">
					<center>
						<img src="../img/shaastra.png" style="height:40%;width:40%;align:right;"><br><br>
						<img src="../img/iitm.png" style="height:25%;width:25%;">
					</center>
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-xs-3">
					<!--blank space-->
				</div>
				<div class="col-xs-6">
					<center>
						<div class="welcome">
							Indian Institute of Technology, Madras welcomes you to Symposium 2015...
						</div>
					</center>
				</div>
				<div class="col-xs-3">
					<!--blank space-->
				</div>
			</div>
		
		<?php include 'footer.php' ?>
</body></html>