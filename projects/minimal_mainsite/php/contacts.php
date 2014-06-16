<!DOCTYPE html>
<html style="height:100%">
	<head>

		<title>Contact Us | Shaastra 2015</title>		
		<!-- CSS -->
		<link href="../stylesheets/contact.css" rel="stylesheet">
		<link href="../stylesheets/resp.css" rel="stylesheet">
		<link href="../stylesheets/bootstrap/css/bootstrap.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="../stylesheets/component_menu.css" />
		<style>
			body {
				background-image:url('../images/background.jpg');
				font-family: 'Titillium Web', sans-serif;
				height : 100%;
				width : 100%;
			}
			.title *, .title * {
				font-family: 'Dosis', sans-serif;
			}
			.container.title, .container-fluid.title {
				margin-bottom: 2%;
			}
		</style>

		<!-- Metas -->
		<link rel="shortcut icon" href="../pics/favicon.ico" />

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css' />
		<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css' />
	</head>
	
	<body>
		<section id="set-7">
			<div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
				<c id="menu_icon" style="position:absolute; top:0%; left:0%; z-index:399" class="hi-icon hi-icon-list"></c>
			</div>
		</section>
		
		<!-- menu popup start -->
		
		<div id="menu_popup" style="position:absolute; background-color:black; z-index:400; height:100%; width:30%; top:0%; left:-30%; opacity:0">
			<table style="color:white; width:100%">
				<tr>
					<th class="header">SHAASTRA 2015</th>
				</tr>
				<!--gap1-->
				<tr>
					<td class="gap"></td>
				</tr>
				<!--gap1-->
				<tr>
					<td id="close_menu" class="menu_options" style="color:#99C68E"><span class="glyphicon glyphicon-chevron-left"></span>Back to Website</td>
				</tr>
				<!--gap2-->
				<tr>
					<td class="gap"></td>
				</tr>
				<!--gap2-->
				<tr>
					<td id="menu_home" class="menu_options">Home</td>
				</tr>
				<tr>
					<td class="menu_options">About Us</td>
				</tr>
				<tr>
					<td class="menu_options">Events</td>
				</tr>
				<tr>
					<td id="menu_envisage" class="menu_options">Envisage</td>
				</tr>
				<tr>
					<td class="menu_options">Lectures</td>
				</tr>
				<tr>
					<td class="menu_options">Sponsors</td>
				</tr>
				<tr>
					<td id="menu_contacts" class="menu_options">Contact Us</td>
				</tr>
				
				
				<tr>
					<td class="header"><i>follow us on</i></td>
				</tr>
				<tr>
					<td id="facebook" class="menu_options" style="color:#0020C2">Facebook</td>
				</tr>
				<tr>
					<td id="twitter" class="menu_options" style="color:#38ACEC">Twitter</td>
				</tr>
				<tr>
					<td id="you_tube" class="menu_options" style="color:#F62217">You Tube</td>
				</tr>
			</table>
		</div>
		
		<div id="menu_rhs" style="position:absolute; z-index:401; height:100%; width:0%; top:0%; right:-70%; opacity:0.5">
			<img style="width:100%; height:100%" src="../images/right_side_image.jpg">
		</div>
		<!-- menu popup end -->
		
		<div class="container-fluid title white centered">
			<div class="row">
				<div class="col-xs-12">
					<h1 class="text-center">CONTACT US</h1>
					<div class="white breaker">
						<span class="left"></span>
						<div class="dice white"></div>
						<span class="right"></span>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container-fluid" style="height : 100%;">
			<div class="row white" style="height : 70%;">
				<div class="col-md-5 col-md-offset-1" style="height : 100%;">
					<div class="container-fluid text-center white" style="height : 100%;">
						<div class="row" style="padding: 0.3%; height : 50%;">
							<div 
								class="btn btn-lg btn-bluebox col-md-5" 
								style="margin: 1%;"
								data-toggle="modal" 
								data-target="#co-curricular">
								Co-Curricular<br />
								Affairs<br />
								Secretary
							</div>
								
							<div 
								class="btn btn-lg btn-bluebox col-md-5" 
								style="margin: 1%;"
								data-toggle="modal" 
								data-target="#spons_pr">
								Sponsorships,<br />
								PR and<br />
								Networking
							</div>
						</div>

						<div class="row" style="padding: 0.3%; height : 50%;">
							<div 
								class="btn btn-lg btn-bluebox col-md-5" 
								style="margin: 1%;"
								data-toggle="modal" 
								data-target="#events_queries">
								Event<br />
								Queries
							</div>
							
							<div 
								class="btn btn-lg btn-bluebox col-md-5" 
								style="margin: 1%;"
								data-toggle="modal" 
								data-target="#student_relations">
								Student<br />
								Relations
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-md-5" style="height : 100%;">
					<div class="container-fluid white text-center" style="height : 70%;">
						<div class="row" style="height : 100%;">
							<div id="map_canvas" class="col-sm-12" style="height: 80%">
								<!--For google map-->
							</div>
						</div>
						<div class="row">
							<div class="col-sm-4">
								<p style="font-size:1.3em">Facebook</p>
							</div>
							<div class="col-sm-4">
								<p style="font-size:1.3em">Twitter</p>
							</div>
							<div class="col-sm-4">
								<p style="font-size:1.3em">Youtube</p>
							</div>
						</div>
						
						<div class="row">
							<div class="col-sm-10 col-sm-offset-1">
								<button class="btn btn-lg btn-primary margin-top-2" data-toggle="modal" data-target="#comments">
									Couldn't find what you are looking for?
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- modal for comments start -->
		
		<div class="modal fade" id="comments" tabindex="-1" role="dialog" aria-labelledby="comments" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Leave us a message</h1>
						</div>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="input-group merged col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-user"></span>
								</span>
								<input type="text" class="form-control" placeholder="Name"/>
							</div>
						</div>
						<div class="row">
							<div class="input-group merged col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-envelope"></span>
								</span>
								<input type="text" class="form-control" placeholder="Email ID"/>
							</div>
						</div>
						<div class="row">
							<div class="input-group merged col-xs-6 col-xs-offset-3">
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-phone"></span>
								</span>
								<input type="tel" class="form-control" placeholder="Mobile (optional)"/>
							</div>
						</div>
						<div class="row">
							<div class="col-xs-8 col-xs-offset-2">
								<textarea id="comments" rows="3" class="form-control" placeholder="Your Message..."></textarea>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</div>
		</div>
		<!-- modal for comments end -->
		
		<!-- modals for boxes start -->
		<div class="modal fade" id="co-curricular" tabindex="-1" role="dialog" aria-labelledby="co-curricular" aria-hidden="true">
			<div class="modal-dialog" style="width:40%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 class="text-center">Secretary</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<h4>SIDDHARTH DIALANI</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact :
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail :
								</p>
							</div>
						</div>
					</div>
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="spons_pr" tabindex="-1" role="dialog" aria-labelledby="spons_pr" aria-hidden="true">
			<div class="modal-dialog" style="width:75%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="msg">
							<h1 style="color:black; font-family: 'Dosis', sans-serif">Sponsorships, PR and Networking</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-4">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
							<div class="col-md-4">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="events_queries" tabindex="-1" role="dialog" aria-labelledby="events_queries" aria-hidden="true">
			<div class="modal-dialog" style="width:40%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1>Events</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-8 col-md-offset-4">
								<h4>SIDDHARTH DIALANI</h4>
								<p>
									<span class="glyphicon glyphicon-phone"></span>
									Contact :
								</p>
								<p>
									<span class="glyphicon glyphicon-envelope"></span>
									E-Mail :
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="student_relations" tabindex="-1" role="dialog" aria-labelledby="student_relations" aria-hidden="true">
			<div class="modal-dialog" style="width:50%">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<div class="title">
							<h1 >Student Relations</h1>
						</div>
					</div>
					
					<div class="modal-body">
						<div class="row">
							<div class="col-md-6">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
							<div class="col-md-6">
								<div class="col-md-8 col-md-offset-4">
									<h4>SIDDHARTH DIALANI</h4>
									<p>
										<span class="glyphicon glyphicon-phone"></span>
										Contact :
									</p>
									<p>
										<span class="glyphicon glyphicon-envelope"></span>
										E-Mail :
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
		
		<!-- modals for boxes end -->
	</body>
	
	<!-- JS -->
	<script src="../javascripts/jquery.min.js"></script>
	<!--<script src="../javascripts/modernizr.custom.js"></script>-->
	<script src="../stylesheets/bootstrap/js/bootstrap.js"></script>
	<script src="../javascripts/home_js.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js"></script>
	
	<script>
		$(document).ready(function() {
			/* GoogleMaps code start */
			function initialize() {
				var map_canvas = document.getElementById('map_canvas');
				var map_options = {
					center: new google.maps.LatLng(13.006387, 80.24258),
					zoom: 16,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
				var map = new google.maps.Map(map_canvas, map_options)
			}
			google.maps.event.addDomListener(window, 'load', initialize);
			/* GoogleMaps code end */
		});
	</script>
</html>