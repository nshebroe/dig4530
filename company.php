<?php 
	session_start(); 

	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		$cart_count = count($cart);
	}
	else{
		$cart_count=0;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Lovabulb Background</title>
	<link href='http://fonts.googleapis.com/css?family=|Inder|Quicksand:400,700' rel='stylesheet' type='text/css' />
	<style type='text/css'  media='all'>
		@import 'css/reset.css';
		@import 'css/1140.css';
		@import 'css/styles.css';
	</style>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-35842504-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>

<body>

<div class="container">
	<div class="twelvecol">
		<div id="topbar">
			<div class="search">
				<form method="GET" action="search-form.php" class="searchbar">
						<input type="text" name="keyword"><input type="submit" id="sbb" value="Search!" />
				</form>
			</div>
			<p class="user"><a href="login.php">Login</a> <span class="textcolor">|</span> <a href="home.php">Home</a> <span class="textcolor">|</span> <a href="client.php">My Account</a> <span class="textcolor">|</span> <a href="cart.php">Cart [<span class="textcolor"><?php print "$cart_count"; ?></span>]</a> <span class="textcolor">|</span> <a href="admin.php">Admin</a></p>
		</div>
	</div>
</div>

<div class="container">
	<div id="header">
		<div class="row">
			<div class="twocol">
				<h2>Lighting</h2>
				<p>Lovabulb is synonomous with fantastic lighting.</p>
			</div>
			<div class="twocol">
				<h2>Lamps</h2>
				<p>Stuck in the dark? Our lamps will light the way!</p>
			</div>
			<div class="fourcol">
				<a href="home.php"><img src="img/logo2.png" alt="logo"/></a>
			</div>
			<div class="twocol">
				<h2>Service</h2>
				<p>Free shipping on many orders. We're here for you! </p>
			</div>
			<div class="twocol last">
				<h2>Quality</h2>
				<p>Lovabulb and quality go hand in hand. Always.</p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div id="nav">
		<div class="row">
			<div class="twelvecol">
				<ul>
					<li><a href="home.php">Home</a></li>
					<li><a href="catalog.php">Shop All</a></li>
					<li><a href="catalog.php?category=floor">Floor Lamps</a></li>
					<li><a href="catalog.php?category=table">Table Lamps</a></li>
					<li><a href="catalog.php?category=ceiling">Ceiling Lamps</a></li>
					<li><a href="catalog.php?category=wall">Wall Lamps</a></li>
					<li><a href="catalog.php?category=shade">Lamp Shades</a></li>
					<li><a href="catalog.php?category=misc">Miscellaneous</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="admin">
		<div class="row">
			<div class="twelvecol">
				<div id="team">
					<h2>The Lovabulb Team</h2>
						<div class="profile">
							<img src="img/nicole.png" alt="Nicole" />
							<div class="desc">
								<h3>Nicole Shebroe</h3>
								<p>Hi! I'm Nicole. I happen to be the team leader of Lovabulb. My first ideas and designs of Lovabulb's website happen to be the foundation of the final Lovabulb site. I also dabble in PHP to work with both front-end and back-end developing team mates in the Lovabulb Project. I basically run this.</p>
							</div>
						</div>

						<div class="profile3">
							<img src="img/jon.png" alt="Jon" />
							<div class="desc3">
								<h3>Jonathan Williamson</h3>
								<p>Hello, I'm Jon! I'm a floater. I enjoy front-end and back-end projects so I like to hop around Lovabulb and chime in where and when I can! From content to data tables, I'm your man. Our mission is to provide the most unique lighting around the world at the lowest prices, and Lovabulb does just that.</p>
							</div>
						</div>

						<div class="profile">
							<img src="img/megan.png" alt="Megan" />
							<div class="desc">
								<h3>Megan Morgan</h3>
								<p>Hi! I'm Megan and I am one of the front-end developers for Lovabulb. I mostly deal with mark up language and content, and of course my front-end buddy Natalie. We basically plump up Lovabulb so that it's good and full of yummy content. We strive to please those with weird lamp fetishes.</p>
							</div>
						</div>

						<div class="profile3">
							<img src="img/natalie.png" alt="Natalie" />
							<div class="desc3">
								<h3>Natalie Bednarz</h3>
								<p>Hi! I'm Natalie and I am one of the front-end developers for Lovabulb. I handle all of the html and css along side my pal Megan. Together we make Lovabulb a feast to the eyes, that you won't be able to take your eyes off of until of course ...you buy a lamp.</p>
							</div>
						</div>

						<div class="profile2">
							<img src="img/bill.png" alt="Bill" />
							<div class="desc2">
								<h3>Bill Columbia</h3>
								<p>Hey there, I'm Wild Bill! My heart and soul is in PHP. I am the back bone to Lovabulbs' shopping cart system. In other words I am one of the back-end developers for Project Lovabulb.</p>	
							</div>
						</div>

				</div>
			</div>
		</div>
	</div>
</div>


<!-- TESTING -->


<div class="container">
	<div id="admin">
		<div class="row">
			<div class="twelvecol">
				<div id="options">
					<h2>Lovabulb HQ</h2>
						<div class="cohq">
							<h3>The Map</h3>
							<iframe width="225" height="150" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=university+of+central+florida&amp;aq=&amp;sll=-33.673983,151.285815&amp;sspn=0.007402,0.013937&amp;g=42+wallaby+way,+sydney,+australia&amp;ie=UTF8&amp;hq=university+of+central+florida&amp;t=m&amp;ll=28.599255,-81.198106&amp;spn=0.025471,0.021544&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=university+of+central+florida&amp;aq=&amp;sll=-33.673983,151.285815&amp;sspn=0.007402,0.013937&amp;g=42+wallaby+way,+sydney,+australia&amp;ie=UTF8&amp;hq=university+of+central+florida&amp;t=m&amp;ll=28.599255,-81.198106&amp;spn=0.025471,0.021544" style="color:#0000FF;text-align:left">View Larger Map</a></small>	
						</div>
						<div class="cohq">
							<h3>Corporate Headquarters</h3>
								<p>42 Wallaby Way <br />Orlando, FL 32816</p>	
						</div>

						<div class="cohq">
							<h3>Call Us Anytime!</h3>
								<h4>1-800-LOV-BULB</h4>	
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div id="contactbar">
		<div class="row">
			<div class="fourcol">
			</div>
			<div class="fourcol">
				<div id="banner">
					<img src="img/logobanner.png" alt="banner" />
				</div>
			</div>
			<div class="fourcol last">				
				<div id="social">
					<a href="mailto:nshebroe@knights.ucf.edu" target="_blank"><img src="img/email.png" alt="email icon" /></a>
					<a href="http://www.twitter.com" target="_blank"><img src="img/twitter.png" alt="twitter icon" /></a>
					<a href="http://www.facebook.com" target="_blank"><img src="img/facebook.png" alt="facebook icon" /></a>	
					<h2>Get in touch...</h2>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div id="infobar">
		<div class="row">
			<div class="threecol">
				<div class="infobox">
					<h4>Customer Support</h4>
						<p><a href="client.php">Account</a></p>
						<p><a href="policies.php">Help</a></p>
						<p><a href="company.php">Contact</a></p>
						<br/><br/><br/>
				</div>
			</div>
			<div class="threecol">
				<div class="infobox">
					<h4>Our Products</h4>
						<p><a href="catalog.php">Shop All</a></p>
						<p><a href="catalog.php?category=floor">Floor Lamps</a></p>
						<p><a href="catalog.php?category=table">Table Lamps</a></p>
						<p><a href="catalog.php?category=ceiling">Ceiling Lamps</a></p>
						<p><a href="catalog.php?category=wall">Wall Lamps</a></p>
						<p><a href="catalog.php?category=shade">Lamp Shades</a></p>
						<p><a href="catalog.php?category=misc">Miscellaneous</a></p>
					</div>
			</div>
			<div class="threecol">
				<div class="infobox">
					<h4>Company Policies</h4>
						<p><a href="policies.php#shipping">Shipping Policy</a></p>
						<p><a href="policies.php#tax">Tax Policy</a></p>
						<p><a href="policies.php#return">Return Policy</a></p>
						<p><a href="policies.php#privacy">Privacy Policy</a></p>
						<p><a href="policies.php#security">Security Statement</a></p>
						<br/><br/>
					</div>
			</div>
			<div class="threecol last">
				<div class="infobox">
					<h4>Company Info</h4>
						<p><a href="company.php">Our Team</a></p>
						<p><a href="http://www.tumblr.com/tagged/lamp">Blog</a></p>
						<br/>
						<br/><br/><br/>
					</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div id="footer">
		<div class="row">
			<div class="twelvecol">
				<p>This site is not official and is an assignment for a UCF Digital Media course<br/>
				designed by Nicole Shebroe/Group 4</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>