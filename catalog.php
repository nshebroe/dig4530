<?php 
	session_start(); 

	if(isset($_SESSION['cart'])){
		$cart = $_SESSION['cart'];
		$cart_count = count($cart);
	}
	else{
		$cart_count=0;
	}
	
	
	// Error reporting:
		error_reporting(E_ALL^E_NOTICE);

		include "connect.php";
		include "comment.class.php";

		$comments = array();
		$result = mysql_query("SELECT * FROM comments ORDER BY id ASC");

		while($row = mysql_fetch_assoc($result))
		{
			$comments[] = new Comment($row);
		}		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<title>Lovabulb Catalog &ndash; Group 4</title>
	<link href='http://fonts.googleapis.com/css?family=|Inder|Quicksand:400,700' rel='stylesheet' type='text/css' />
	<style type='text/css'  media='all'>
		@import 'css/reset.css';
		@import 'css/1140.css';
		@import 'css/styles.css';
	</style>
	
	<link rel="stylesheet" type="text/css" href="css/comment.css" />
	<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.2" media="screen" />
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
	<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
	
	<script type="text/javascript" src="js/css3-mediaqueries.js"></script>
	<script type="text/javascript" src="lib/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.3"></script>
	<script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	
	<style type="text/css">
		.fancybox-custom .fancybox-skin {
			box-shadow: 0 0 50px #222;
		}
	</style>
</head>

<body>


<?php

	$connection = mysql_connect("sulley.cah.ucf.edu", "ni718068", "12Nicole");
	mysql_select_db("ni718068", $connection);
	
	if(isset($_GET['category'])){
		$category = $_GET['category'];
		$query3= "SELECT * FROM products WHERE category = '".$category."'";
	}
	else{
		$query3 = "SELECT * FROM products";
	}
	
	
	$query4 = "SELECT * FROM review LIMIT 7";
	$result4 = mysql_query($query4);
					
	
?>
	


<div class="container">
	<div class="twelvecol">
		<div id="topbar">
			<div class="search">
				<input type="text" class="searchbar"></input><input type="submit" name="sa" value="Submit" id="sbb"></input>
			</div>
			<p class="user"><a href="login.php">Login</a> <span class="textcolor">|</span> <a href="home.php">Home</a> <span class="textcolor">|</span> <a href="client.php">My Account</a> <span class="textcolor">|</span> <a href="cart.php">Cart [<span class="textcolor"><?php print "$cart_count"; ?></span>]</a> </p>
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
						<li><a href="catalog.php?category=floor">Floor Lamps</a></li>
						<li><a href="catalog.php?category=table">Table Lamps</a></li>
						<li><a href="catalog.php?category=ceiling">Ceiling Lamps</a></li>
						<li><a href="catalog.php?category=wall">Wall Lamps</a></li>
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
				<div id="mainshop">
					<?php
					
						$result3 = mysql_query($query3);
						while($item = mysql_fetch_array($result3)){
							$productName=$item['productName'];
							$price=$item['price'];
							$image=$item['productImage'];
							$rating=$item['rating'];
							$id=$item['id'];
							
						
							
							print "<div class='productdet'>
								 <a class='fancybox' href='#test' data-fancybox-group='gallery' title='$productName'><img src='img/database/$image' alt='product' /></a><br/><div class='ptext'>
								<div class='productn'><h3>$productName</h3>$price<br/><p><a href='addToCart.php?id=$id' class='button'>Add to Cart</a></p></div></div>";
							
							print "<div class='rating'>";
							for($i=0;$i<$rating;$i++){
								print "<div class='rating'><img src='img/ratingbulb.png' alt='rating' /></div>";
							}
							
							
							
							$remainder = 5 - $rating;
							for($i=0;$i<$remainder;$i++){
								print "<div class='rating'><img src='img/ratingbulb2.png' alt='rating' /></div>";
							}
							print "</div></div>";
						}
				
							$result4 = mysql_query($query4);
								while($item = mysql_fetch_array($result4)){
									$review=$item['review'];
								}
								
								
							print "<div id='test' style='display:none;width:350px;'>";
							
								foreach($comments as $c){
									echo $c->markup();
								}
								
									print "<div id='addCommentContainer'>
										<p>Add a Comment</p>
										<form id='addCommentForm' method='post' action=''>
											<div>
												<label for='name'>Your Name</label>
												<input type='text' name='name' id='name' />
												
												<label for='email'>Your Email</label>
												<input type='text' name='email' id='email' />
												
												
												<label for='body'>Comment Body</label>
												<textarea name='body' id='body' cols='20' rows='5'></textarea>
												
												<input type='submit' id='submit' value='Submit' />
											</div>
										</form>
									</div>

									
							</div>";
					?>
					
					
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
				designed by Nicole Shebroe</p>
			</div>
		</div>
	</div>
</div>


<script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.5"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */

			// Change title type, overlay closing speed
			$(".fancybox-effects-a").fancybox({
				helpers: {
					title : {
						type : 'outside'
					},
					overlay : {
						speedOut : 0
					}
				}
			});

			// Disable opening and closing animations, change title type
			$(".fancybox-effects-b").fancybox({
				openEffect  : 'none',
				closeEffect	: 'none',

				helpers : {
					title : {
						type : 'over'
					}
				}
			});

			// Set custom style, close if clicked, change title type and overlay color
			$(".fancybox-effects-c").fancybox({
				wrapCSS    : 'fancybox-custom',
				closeClick : true,

				openEffect : 'none',

				helpers : {
					title : {
						type : 'inside'
					},
					overlay : {
						css : {
							'background' : 'rgba(238,238,238,0.85)'
						}
					}
				}
			});

			// Remove padding, set opening and closing animations, close if clicked and disable overlay
			$(".fancybox-effects-d").fancybox({
				padding: 0,

				openEffect : 'elastic',
				openSpeed  : 150,

				closeEffect : 'elastic',
				closeSpeed  : 150,

				closeClick : true,

				helpers : {
					overlay : null
				}
			});

			/*
			 *  Button helper. Disable animations, hide close button, change title type and content
			 */

			$('.fancybox-buttons').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',

				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,

				helpers : {
					title : {
						type : 'inside'
					},
					buttons	: {}
				},

				afterLoad : function() {
					this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
				}
			});


			/*
			 *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
			 */

			$('.fancybox-thumbs').fancybox({
				prevEffect : 'none',
				nextEffect : 'none',

				closeBtn  : false,
				arrows    : false,
				nextClick : true,

				helpers : {
					thumbs : {
						width  : 50,
						height : 50
					}
				}
			});

			/*
			 *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
			*/
			$('.fancybox-media')
				.attr('rel', 'media-gallery')
				.fancybox({
					openEffect : 'none',
					closeEffect : 'none',
					prevEffect : 'none',
					nextEffect : 'none',

					arrows : false,
					helpers : {
						media : {},
						buttons : {}
					}
				});

			/*
			 *  Open manually
			 */

			$("#fancybox-manual-a").click(function() {
				$.fancybox.open('1_b.jpg');
			});

			$("#fancybox-manual-b").click(function() {
				$.fancybox.open({
					href : 'iframe.html',
					type : 'iframe',
					padding : 5
				});
			});

			$("#fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : '1_b.jpg',
						title : 'My title'
					}, {
						href : '2_b.jpg',
						title : '2nd title'
					}, {
						href : '3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 75,
							height: 50
						}
					}
				});
			});


		});
		
		$(".fancybox").fancybox({
			openEffect  : 'none',
			closeEffect : 'none',
			afterLoad   : function() {
				this.inner.prepend( '<h1>Reviews</h1>' );
				this.content = this.content.html();
			}
});
	</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>