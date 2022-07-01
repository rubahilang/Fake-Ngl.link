<?php
//Include file koneksi to database
include "koneksi.php";

//receive the value of the input-goods form submission 
$nama_barang=$_POST["nama"];
$harga=$_POST["pesan"];

//The input query inputs data into the barang table
  $sql="insert into barang (nama,pesan) values
		('$nama_barang','$harga')";

//Execute/run the above query
  $hasil=mysqli_query($kon,$sql);

//Condition whether successful or not
  if ($hasil) {
	echo '<html><head>
	<title></title>
	<link rel="stylesheet" href="https://ngl.link/stylesheets/normalize.css">
	<link rel="stylesheet" href="https://ngl.link/stylesheets/style.css?v=3">
	<script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202206280101/show_ads_impl_with_ama_fy2019.js?client=ca-pub-4674648418922788&amp;plah=&amp;bust=31068269" id="google_shimpl"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://ngl.link/scripts/main.js?v=2"></script>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script></script>
	<style type="text/css">
	@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }
	</style>
	<script src="https://www.googletagmanager.com/gtag/js?l=dataLayer&amp;id=G-5DV1ZR5ZHG" async=""></script>
	<meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<link rel="preload" href="https://adservice.google.nl/adsid/integrator.js?domain=ngl.link" as="script">
	<script type="text/javascript" src="https://adservice.google.nl/adsid/integrator.js?domain=ngl.link"></script>
	<link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=ngl.link" as="script">
	<script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=ngl.link"></script>
	<meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="></head>
	<body>
	
	<div class="container sent-container">
		<img class="check" src="https://ngl.link/images/sent.png">
		<h1 class="sent">Sent!</h1>
		<h2 class="download-prompt">ðŸ‘‡ <span class="clickCount">265</span> people just tapped the buttonðŸ‘‡ </h2>
		<a class="button pulse" href="https://apps.apple.com/us/app/ask-fun/id1596550932" target="_blank">Get your own messages!</a><a class="another" href="javascript:history.back()">Send another message</a>
	</div>
	</body></html>';
	exit;
  }
  
else {
	echo '<html><head>
	<title></title>
	<link rel="stylesheet" href="https://ngl.link/stylesheets/normalize.css">
	<link rel="stylesheet" href="https://ngl.link/stylesheets/style.css?v=3">
	<script src="https://pagead2.googlesyndication.com/pagead/managed/js/adsense/m202206280101/show_ads_impl_with_ama_fy2019.js?client=ca-pub-4674648418922788&amp;plah=&amp;bust=31068269" id="google_shimpl"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://ngl.link/scripts/main.js?v=2"></script>
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<script></script>
	<style type="text/css">
	@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }
	</style>
	<script src="https://www.googletagmanager.com/gtag/js?l=dataLayer&amp;id=G-5DV1ZR5ZHG" async=""></script>
	<meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
	<link rel="preload" href="https://adservice.google.nl/adsid/integrator.js?domain=ngl.link" as="script">
	<script type="text/javascript" src="https://adservice.google.nl/adsid/integrator.js?domain=ngl.link"></script>
	<link rel="preload" href="https://adservice.google.com/adsid/integrator.js?domain=ngl.link" as="script">
	<script type="text/javascript" src="https://adservice.google.com/adsid/integrator.js?domain=ngl.link"></script>
	<meta http-equiv="origin-trial" content="AzoawhTRDevLR66Y6MROu167EDncFPBvcKOaQispTo9ouEt5LvcBjnRFqiAByRT+2cDHG1Yj4dXwpLeIhc98/gIAAACFeyJvcmlnaW4iOiJodHRwczovL2RvdWJsZWNsaWNrLm5ldDo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A6+nc62kbJgC46ypOwRsNW6RkDn2x7tgRh0wp7jb3DtFF7oEhu1hhm4rdZHZ6zXvnKZLlYcBlQUImC4d3kKihAcAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXN5bmRpY2F0aW9uLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="><meta http-equiv="origin-trial" content="A/9La288e7MDEU2ifusFnMg1C2Ij6uoa/Z/ylwJIXSsWfK37oESIPbxbt4IU86OGqDEPnNVruUiMjfKo65H/CQwAAACLeyJvcmlnaW4iOiJodHRwczovL2dvb2dsZXRhZ3NlcnZpY2VzLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjYxMjk5MTk5LCJpc1N1YmRvbWFpbiI6dHJ1ZSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ=="></head>
	<body>
	
	<div class="container sent-container">
		<img class="check" src="https://ngl.link/images/sent.png">
		<h1 class="sent">Failed!</h1>
		<h2 class="download-prompt">ðŸ‘‡ <span class="clickCount">265</span> people just tapped the buttonðŸ‘‡ </h2>
		<a class="button pulse" href="https://apps.apple.com/us/app/ask-fun/id1596550932" target="_blank">Get your own messages!</a><a class="another" href="javascript:history.back()">Send another message</a>
	</div>
	
	
	
	
	
	</body></html>';
	exit;
}  

?>