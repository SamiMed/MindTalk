
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="assets/css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="assets/css/fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="page" class="container">
	<div id="header">
		<div id="current-user">
			<img src="images/pic02.jpg" alt="" />
			
            <h1>{{ Auth::user()->name }}</h1>
		</div>
		<div id="menu">
			<ul>
				<li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li>
				<li><a href="#" accesskey="2" title="">Profil</a></li>
				<li><a href="#" accesskey="3" title="">News feed</a></li>
				<li><a href="#" accesskey="4" title="">About us</a></li>
				<li><a href="#" accesskey="5" title="">Setting</a></li>
                <li> <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">sign out</a></li>    
                <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>                
            </ul>
		</div>
	</div>
	<div id="main">
		<div id="banner">
			<img src="images/pic01.jpg" alt="" class="image-full" />
		</div>
		<div id="welcome">
			<div class="title">
				<h2>My story</h2>
				<span class="byline">My favorite quote here !</span>
			</div>
			<p><strong>Text about me</strong></p>
				
			</ul>
		</div>
		<div id="featured">
			<div class="title">
				<h2>History of my activities</h2>
				<span class="byline"></span>
			</div>
			<ul class="style1">
				<li class="first">
					<p class="date"><a href="#">Jan<b>05</b></a></p>
					<h3></h3>
					<p><a href="#"></a></p>
				</li>
				<li>
					<p class="date"><a href="#">Jan<b>03</b></a></p>
					<h3></h3>
					<p><a href="#"></a></p>
				</li>
				<li>
					<p class="date"><a href="#">Jan<b>01</b></a></p>
					<h3></h3>
					<p><a href="#"></a></p>
				</li>
				<li>
					<p class="date"><a href="#">Dec<b>31</b></a></p>
					<h3></h3>
					<p><a href="#"></a></p>
				</li>
			</ul>
		</div>
        
        	<!-- Footer -->
            <footer id="footer" class="Footer">
                        <div class="inner">	
                            <div class="copyright">
                                &copy; Mind-Talk Media</a>
                            </div>
                        </div>
            </footer>
	    </div>
    </div>
</body>
</html>









