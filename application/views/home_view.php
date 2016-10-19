<html>
	<head>
		<?php $this->load->helper('url');?>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Home</title>
		<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>"/>
		<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
		<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
		<link rel="stylesheet" href="/BookRialto/style/style.css">
	</head>
	<body>
		<?php
        echo $user;		
		$data["user"] = $user;
		$this->load->view("header_view",$data);
		
		?>		
	<div class="jumbotron homestyle text-center">
			<h1>Book RialTo</h1>
			<p>Knowledge is for everyone</p>
			<form class="sub-form">
				<input type="email" class="home-form-control" size="50" placeholder="Enter your email address to subscribe to our newsletter...">
				<button type="button" class="btn btn-danger">Subscribe</button>
			</form>
	</div>
	<br>

	<div class="home-container-fluid text-center">
		<h2>SERVICES</h2>
		<h4>What we offer</h4>
		<br>
		<div class="row">
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-save"></span>
				<h4>STORING</h4>
				<p1>You can easily add and store multiple books in only a matter of clicks!</p1>
				<p2>Create an account and login to get started now!</p2>
			</div>
			<div class="col-sm-4">
				<span class="glyphicon glyphicon-share"></span>
				<h4>SHARING</h4>
				<p1>Customize and tweak your privacy to decide which books you want to share and with whom you want to share!</p1>
			</div>
				<div class="col-sm-4">
				<span class="glyphicon glyphicon-usd"></span>
				<h4>EARNING</h4>
				<p>Earn money by lending or selling copies of your own books to others!</p>
			</div>
		</div>
	</div>
	<br>
	<br>
	<div class="location-text text-center">
		<h2>OUR LOCATION</h2>
	</div>
	<div id="googleMap" style="height:400px;width:50%;left:340px;"></div>
		<script src="http://maps.googleapis.com/maps/api/js"></script>
		<script>
			var myCenter = new google.maps.LatLng(23.777176, 90.399452);

			function initialize() {
				var mapProp = {
					center:myCenter,
					zoom:12,
					scrollwheel:false,
					draggable:false,
					mapTypeId:google.maps.MapTypeId.ROADMAP
				};

				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

				var marker = new google.maps.Marker({
					position:myCenter,
				});

				marker.setMap(map);
			}

			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
	</body>
	<div class="footer">
	<nav class="navbar navbar-inverse navbar-bottom" style="padding:20px 0 0 0; margin-bottom:0px; color:#FFF">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h5 id='footer-header'><img <img src = "/BookRialto/image/logoBW.png" class="footer-img"/></h5>
					<p class = "copyright">Copyright <b>&copy;</b> 2016-2020</p>
				</div>
			</div>
		</div>
	</nav>
	</div>
</html>