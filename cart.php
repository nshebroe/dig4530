<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Lovabulb Cart &ndash; Nicole Shebroe</title>
	<link href='http://fonts.googleapis.com/css?family=|Inder|Quicksand:400,700' rel='stylesheet' type='text/css' />
	<style type='text/css'  media='all'>
		@import 'css/reset.css';
		@import 'css/1140.css';
		@import 'css/styles.css';
	</style>
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
</head>

<body>

<div class="container">
	<div class="twelvecol">
		<div id="topbar">
			<div class="search">
				<input type="text" class="searchbar"></input><input type="submit" name="sa" value="Submit" id="sbb"></input>
			</div>
			<p class="user">Welcome, user! <span class="textcolor">|</span> <a href="home.php">Home</a> <span class="textcolor">|</span> <a href="client.php">My Account</a> <span class="textcolor">|</span> <a href="cart.php">Cart [<span class="textcolor">2</span>]</a> <span class="textcolor">|</span> <a href="admin.php">Admin</a></p>
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
					<li><a href="catalog.php?category=shade">Floor Lamps</a></li>
					<li><a href="catalog.php?category=misc">Table Lamps</a></li>
					<li><a href="catalog.php?category=shade">Ceiling Lamps</a></li>
					<li><a href="catalog.php?category=misc">Wall Lamps</a></li>
					<li><a href="catalog.php?category=shade">Lamp Shades</a></li>
					<li><a href="catalog.php?category=misc">Miscellaneous</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div id="cattop">
		<div class="row">
			<div class="fourcol">
				<a href="catalog.php"><img src="img/database/shade/mustachesmall2.jpg" alt="featured" /></a>
			</div>
			<div class="threecol">
				<div class="catt">
					<h2>Featured Item</h2>
					<p>Feast your eyes on this moustache shade!</p>
				</div>
			</div>
			<div class="threecol">
				<img src="img/database/misc/sale.jpg" alt="featured" />
			</div>
			<div class="twocol last">
				<div class="catt">
					<h2>Current Sales</h2>
					<p>This week's sale features nightlights. Go crazy!</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div id="shop">
		<div class="row">
			<div class="twocol">
				<div id="subnav">
					<ul>
						<li><a href="catalog.php">Shop All</a></li>
						<li><a href="catalog.php?category=shade">Floor Lamps</a></li>
						<li><a href="catalog.php?category=misc">Table Lamps</a></li>
						<li><a href="catalog.php?category=shade">Ceiling Lamps</a></li>
						<li><a href="catalog.php?category=misc">Wall Lamps</a></li>
						<li><a href="catalog.php?category=shade">Lamp Shades</a></li>
						<li><a href="catalog.php?category=misc">Miscellaneous</a></li>
					</ul>
				</div>
				<div id="suggestions">
					<h3>Suggested Items</h3>
					<a href="catalog.php"><img src="img/database/shade/aloha.jpg" alt="suggestions" /></a><a href="catalog.php"><img src="img/database/shade/moose.jpg" alt="suggestions" /></a><br/>
					<a href="catalog.php"><img src="img/database/misc/monkey.jpg" alt="suggestions" /></a><a href="catalog.php"><img src="img/database/misc/chef.jpg" alt="suggestions" /></a>
				</div>
			</div>
			<div class="tencol last">
				<div id="cartview">
					<h1>Cart</h1>
					<div class="cartitem">
						<img src="img/database/shade/mustache.jpg" alt="cartitem" />
						<p>Moustache Shade<br/>
						$66.99<br/>
						<a href="#">remove from cart</a></p>
					</div>
					<div class="cartitem">
						<img src="img/database/shade/aloha.jpg" alt="cartitem" />
						<p>Aloha Shade<br/>
						$40.99<br/>
						<a href="#">remove from cart</a></p>
					</div>
					<p><strong>Total:</strong> $107.98</p>
						<div id="checkout">
							<h2>Checkout</h2>
							<h3>Personal Information</h3>
							<form class="check">
								First name: <input type="text" name="firstname"><br/>
								Last name: <input type="text" name="lastname"><br/>
								Email: <input type="text" name="email">
							</form>
							<h3>Shipping Information</h3>
							<form class="check">
								Address Line 1: <input type="text" name="firstname"><br/>
								Address Line 2: <input type="text" name="lastname"><br/>
								City: <input type="text" name="lastname"><br/>
								State: <input type="text" name="lastname"><br/>
								Zip Code: <input type="text" name="lastname"><br/>
								Phone Number: <input type="text" name="lastname">
							</form>
							<h3>Billing Information</h3>
							<form class="check">
								Credit Card #: <input type="text" name="firstname"><br/>
								Security Code: <input type="text" name="firstname"><br/>
								Phone Number: <input type="text" name="lastname">
							</form>
							<input type="submit" value="Submit">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div id="new">
		<div class="row">
			<div class="twelvecol">
				<h3>What's New...</h3>
				
				<?php
					$connection = mysql_connect("sulley.cah.ucf.edu", "ni718068", "12Nicole");
					mysql_select_db("ni718068", $connection);
				
					//query2 pulling featured image for homepage
					$query2 = "SELECT productImage FROM products LIMIT 7";
					$result2 = mysql_query($query2);
					
					while($new = mysql_fetch_array($result2)){
						$image=$new['productImage'];
						print "<a href='catalog.php'><img src='img/database/$image' alt='new' /></a>";
					}
				?>
				<p><a href="catalog.php">See more...</a></p>
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
						<p><a href="comingsoon.php">Account</a></p>
						<p><a href="comingsoon.php">Help</a></p>
						<p><a href="comingsoon.php">Contact</a></p>
						<br/><br/><br/>
				</div>
			</div>
			<div class="threecol">
				<div class="infobox">
					<h4>Our Products</h4>
						<p><a href="catalog.php">Shop All</a></p>
						<p><a href="catalog.php?category=shade">Floor Lamps</a></p>
						<p><a href="catalog.php?category=misc">Table Lamps</a></p>
						<p><a href="catalog.php?category=shade">Ceiling Lamps</a></p>
						<p><a href="catalog.php?category=misc">Wall Lamps</a></p>
						<p><a href="catalog.php?category=shade">Lamp Shades</a></p>
						<p><a href="catalog.php?category=misc">Miscellaneous</a></p>
					</div>
			</div>
			<div class="threecol">
				<div class="infobox">
					<h4>Company Policies</h4>
						<p><a href="comingsoon.php">Buying Policy</a></p>
						<p><a href="comingsoon.php">Shipping Policy</a></p>
						<p><a href="comingsoon.php">Terms of Service</a></p>
						<br/><br/><br/>
					</div>
			</div>
			<div class="threecol last">
				<div class="infobox">
					<h4>Company Info</h4>
						<p><a href="comingsoon.php">About</a></p>
						<p><a href="comingsoon.php">Our Team</a></p>
						<p><a href="comingsoon.php">Blog</a></p>
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
				designed by Nicole Shebroe</p>
			</div>
		</div>
	</div>
</div>

</body>
</html>