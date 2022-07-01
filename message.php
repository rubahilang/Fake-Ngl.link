<html><head>
<title>All Messages</title>
<link rel="stylesheet" href="https://ngl.link/stylesheets/normalize.css">
<link rel="stylesheet" href="https://ngl.link/stylesheets/style.css?v=3">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ngl.link/scripts/main.js?v=2"></script>
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<script></script>
<style type="text/css">@font-face{font-family:Roboto;src:url(chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf)}</style>
<script src="https://www.googletagmanager.com/gtag/js?l=dataLayer&amp;id=G-5DV1ZR5ZHG" async=""></script>

<style>.comment{resize:none;height:60px;width:400px}</style>


<link rel="dns-prefetch" href="//i.ibb.co"><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head>
<body>
        
        <?php
        //Don't change this php!
		include "koneksi.php";
		$ambildata = mysqli_query($kon, "Select * from barang");
		while ($tampil = mysqli_fetch_array($ambildata)) {
			echo '
			<div class="container">
	
		<div class="bubble">
			<div class="header">
				<div class="pfp-container">
                <!-- You can change photo in here -->
					<img class="pfp" src="https://i.ibb.co/Y7DQj8r/121707037-174720290930920-3808080396647901556-n.jpg">
				</div>
				<div class="user-container">
                <!-- You can change username in here -->
					<div class="username">@MrSans</div> 
					<div class="prompt">ask me anything, anonymously</div>
				</div>
			</div>
			<div class="textarea-container form-group">
				<div class="top-right-corner"></div>
				<div class="top-left-corner"></div>
				<textarea readonly class="comment" <p>'.$tampil['nama'].'</textarea>
				<br>
				<textarea readonly <p>'.$tampil['pesan'].'</textarea>
			</div>
			<input class="deviceId" type="hidden" name="deviceId" value="5efa4306-d2d4-4b17-b738-bc662177c527"></div>
		
		
	
</div>';

		}
	?>

</body>
</html>