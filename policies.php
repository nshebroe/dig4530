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
	<title>Policies &ndash; Group 4</title>
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
	<div id="policies">
		<div class="row">
			<div class="twelvecol">
				
				<div class="policy">
					<a id="shipping"></a><h3>Shipping Policy</h3>
						<h4>Free Ground Shipping to the United States on Orders Over $100</h4>
                        	<p>If you purchase more $100 of product at lovabulb.com (before sales tax and shipping and handling), you will receive free shipping and handling on orders shipping to the continental United States.</p>
							<p>In order to receive free shipping and handling on your order, your order must total at least USD$100.00 in merchandise before shipping and handling and sales tax, but after any other discounts. You must select “Ground” as the shipping method when checking out. We will ship your order using USPS, Fedex or UPS, at our option. Offer valid for orders placed via lovabulb.com in the United States and delivered or shipped to a single, valid address within the continental United States only. Not available for shipments to P.O. Boxes. Customers that received free ground shipping on their order, and need to return or exchange an item are responsible for all shipping costs during that process. If you return any portion of an order using free shipping for a refund, we may at our discretion charge you the original shipping and handling charge. Not valid on prior purchases. Occasionally, some items may be out of stock. If multiple items are purchased, the customer has the option of free shipping on items in stock and standard shipping charge on out of stock merchandise when available. Please note that free shipping may take longer than standard delivery. Orders that ship free of charge may take up to 3 business day to fulfill, especially during the holiday season or other peak times. Most standard shipments will arrive to your door within 7 – 10 business days. Large urban centers may experience faster delivery times than rural addresses, therefore we cannot guarantee shipping times. Subject to change at any time and without notice. Limited to stock on hand. Limited time offer.</p>
                            
                       <h4>Shipping Methods</h4>
                       	<p>We offer shipping by United States Parcel Service (USPS) First-Class Mail, Priority Mail and Express Mail as well as FedEx 2nd Day Air and FedEx Standard Overnight to the United States.</p>
						<p>If you require additional shipping options or help, please send us an email at orders@lovabulb.com or give us a call toll-free at (800) LOV-BULB (1-800-568-2852). We no longer offer shipping by USPS First Class Mail International to Canada or other destinations outside of the United States due to the slowness and poor service levels of this class of service – you must make a special arrangement in advance if you would like to use this level of service, please email or call us.</p>     
				</div>
				
				<div class="policy">
					<a id="tax"></a><h3>Tax Policy</h3>
						<p>The tax rate applied to your order will generally be the combined state and local rate for the address where your order was shipped. Therefore, the sales tax rate applied to your order may be different for an order shipped to your home address versus an order for the very same items shipped to your work address.</p>
                        <p>Items sold by Lovabulb and shipped to destinations in the following states are subject to tax:<br /></p>
                        	<p>California</p>
                            <p>Kansas</p>
                            <p>Kentucky</p>
                            <p>New York</p>
                            <p>North Dakota</p>
                            <p>Pennsylvania</p>
                            <p>Texas</p>
                            <p>Washington</p>
                        <p>No sales tax is charged when purchasing gift cards; however, purchases paid for with gift cards may be subject to tax.<br /></p>
                        <h4>Internet Tax Freedom Act</h4>
                        <p>Companies selling over the Internet are subject to the same sales tax collection requirements as any other retailers. Remote sellers (including Internet retailers and catalog companies) are generally required to collect taxes where they have a physical selling presence. If they do not have any such presence, they are not required to collect sales taxes.<br />The Internet Tax Freedom Act (ITFA) has been renewed through November 1, 2014.<br />The ITFA was primarily intended to prevent state and local governments from imposing new or discriminatory taxes on Internet transactions and on Internet access. Despite the name of the Act, ITFA does not preclude state and local governments from imposing existing sales tax collection requirements on companies selling over the Internet.</p>
				</div>
				
				<div class="policy">

					<a id="return"></a><h3>Return Policy</h3>
						<p>Like many retailers, we guarantee our products; if an item hasn’t met your expectations, you can bring it back. Unlike most retailers, we also guarantee the product selection advice offered through our catalog, website, and staff; if an item you’ve purchased based on this advice turns out to be unsuitable, you can bring it back. In either case, simply return the item for exchange, refund, repair, or credit. </p>
						<p>If you have any questions about our guarantee, please, email us at [ Lovabulb ], ask at the Member Service Desk of any location, or call us at [ 1.888.999.9999 ] or [ 3218675309 ] (Local & International).</p> 

						<h4>Returns and Exchanges</h4>
							<p>Returns and exchanges can be made at any one of our stores, or by mail. Please call our Service Center, if you wish to return or cancel an order placed online. Please note: Our retail stores cannot accept returns by mail or courier. </p>

						<h4>Returning by mail</h4>
							<p>Within the US: Returned items must be sent via insured, prepaid Regular US Mail. Ensuring your return allows you to track your parcel with the US Postal Service. Please Note: We cannot accept CODs or courier deliveries.</p>
							<p>Outside the US: Ship goods prepaid, by insured ground shipping. To avoid unnecessary delays, please write “U.S. Goods returning” on the outside of the package.</p>
												
						<h4>Please Note:</h4> 
								<p>Do not return items by UPS or other carriers, as duty and / or brokerage fees will be charged, and your return will be refused by [ Lovabulb ]. </p>
								<p>If you are requesting an exchange, please remember to include sufficient payment for the return postage. Where applicable, please contact your local customs office for information about any taxes or duties that may be assessed on a return shipment. </p>

							<h4>Please note:</h4> 
								<p>Our Processing Center cannot accept returns in person. Mail returns to: [ Lovabulb, P. Sherman, 42 Wallaby Way, Sydney, Australlia]</p>
				</div>
				

				<div class="policy">
					<a id="privacy"></a><h3>Privacy Policy</h3>
					<h4>Information that is gathered from visitors</h4>
						<p>In common with other websites, log files are stored on the web server saving details such as the visitor's IP address, browser type, referring page and time of visit.</p>
						<p>Cookies may be used to remember visitor preferences when interacting with the website. Where registration is required, the visitor's email and a username will be stored on the server.</p>
					<h4>How the Information is used</h4>
						<p>The information is used to enhance the vistor's experience when using the website to display personalised content and possibly advertising.</p>
						<p>E-mail addresses will not be sold, rented or leased to 3rd parties.</p>
						<p>E-mail may be sent to inform you of news of our services or offers by us or our affiliates.</p>
					<h4>Visitor Options</h4>
						<p>If you have subscribed to one of our services, you may unsubscribe by following the instructions which are included in e-mail that you receive.</p>
						<p>You may be able to block cookies via your browser settings but this may prevent you from access to certain features of the website.</p>
					<h4>Cookies</h4>
						<p>Cookies are small digital signature files that are stored by your web browser that allow your preferences to be recorded when visiting the website. Also they may be used to track your return visits to the website.</p>
						<p>3rd party advertising companies may also use cookies for tracking purposes.</p>
					<h4>Google Ads</h4>
						<p>Google, as a third party vendor, uses cookies to serve ads.<br />
						Google's use of the DART cookie enables it to serve ads to visitors based on their visit to sites they visit on the Internet.</p>
						<p>Website visitors may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p>
				</div>
				
				<div class="policy">
					<a id="security"></a><h3>Security Statement</h3>
					<p>We seek to use reasonable organizational, technical and administrative measures to protect Personal Information under our control. For example, we seek to use Secure Sockets Layer ("SSL") technology for the placement of orders. Unfortunately, no data storage system or data transmission over the Internet can be guaranteed to be 100% secure. Please exercise caution in submitting Personal Information via the Site, especially if you are accessing the Site using a WiFi hotspot or public network. If you have reason to believe that your interaction with us is no longer secure (for example, if you feel that the security of any account that you might have with us has been compromised, or if you are unable to utilize our Site-related SSL technology), please immediately notify us of the problem and place any orders with us over the telephone or in person, instead of using the Site. You may contact us in such circumstances in accordance with the "<a href="#">Company Info</a>" section below. </p>
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