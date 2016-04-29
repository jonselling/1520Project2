<!DOCTYPE html>
<html>
	<head>
		<title>Jonathan Selling's Organizations and Accomplishments</title>
	</head>
	<body>
		<?php
			include("Header.php");
		?>
		<div class=buttons style="padding-top: 20px; margin: 30px;">
			<button id="Band" class="myButton" onclick="getData('Band', 'OrgsAndActs')"> Band </button>
			<button id="MKY" class="myButton" onclick="getData('MKY', 'OrgsAndActs')"> Mu Kappa Upsilon </button>
			<button id="Kings" class="myButton" onclick="getData('Kings', 'OrgsAndActs')"> King's Ambassador's </button>
		</div>
		<div id="OrgsAndActs">
		<p class="leftside" id="info"> </p>
		<img id="image">
		</div>
		<iframe
			hidden
			id="maps"
			width="600"
			height="450"
			frameborder="0" style="border:0"
			src="https://www.google.com/maps/embed/v1/search?key=AIzaSyACJFuhYNZ1cWkqAfhrpzMCtHbz9_GXvkU&q=Pittsburgh+PA" allowfullscreen>
		</iframe>
		<?php
			include("Footer.php");
		?>
	</body>
</html>
