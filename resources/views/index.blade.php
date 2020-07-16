
<!DOCTYPE HTML>
<html>
	<head>
		<title>Mind-Talk</title>
		<meta charset="utf-8">
   		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/all.js"></script>
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>			
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>	
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css'>
		<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js'></script>
		<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	    <script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="scroll-down.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="" class="logo"><strong>#Mind-Talk</strong></a>
					<nav id="nav">
						<a  class="btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
						<a  class="btn btn-success" href="{{ route('register') }}">{{ __('Register') }}</a>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>

				<div class="type-js headline">
  				
					  <h1 class="text-js">What's in your mind ?</h1>
				</div>
					</header>
					
				<div class="flex ">

						<div>
							<span class="fa fa-comments fa-w-18 fa-3x">­­</span><br></br>
							<h3>Chat with new people</h3>
						</div>

						<div>
							<span class="fa fa-camera fa-w-16 fa-3x"></span><br></br>
							<h3>Express	with  pictures</h3>
						</div>

						<div>
							<span class="fa fa-rss fa-w-14 fa-3x"></span><br></br>
							<h3>Publish your thoughts</h3>
						</div>
					</div>	
				</div>
				       <a class="ct-btn-scroll ct-js-btn-scroll" href="#improvement"><img alt="Arrow Down Icon" src="https://raw.githubusercontent.com/solodev/scroll-down-anchor/master/images/arrow-down-1.png"></a>
			</section>

	<section class="company-heading intro-type" id="improvement">
		<div class="main">
		
				<div class="container jumbo">
				<div class="jumbotron">
				<div class="inner">
	
					<h3>Help us to improve !</h3><br>

					<form action="#" method="post">

						<div class="field half first">
							<label for="name">Name</label>
							<input name="name" id="name" type="text" placeholder="Name">
						</div>
						<div class="field half">
							<label for="email">Email</label>
							<input name="email" id="email" type="email" placeholder="Email">
						</div>
						<div class="field">
							<label for="message">Message</label>
							<textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
						</div>
						<ul class="actions">
							<li><input value="Send Message" class="button alt" type="submit"></li>
						</ul>
					</form>
				</div>
				</div>
				</div>
			</section>
		</div>


		<!-- Footer -->
			<footer id="footer" class="Footer">
				<div class="inner">	
					<div class="copyright">
						&copy; Mind-Talk Media</a>
					</div>
				</div>
			</footer>
	</body>
</html>