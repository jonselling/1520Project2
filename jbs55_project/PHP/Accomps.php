<!DOCTYPE html>
<html>
	<head>
		<title>Jonathan Selling's Accomplishments</title>
		<?php
			include("Header.php");
		?>
		<div class=buttons style="padding-top: 20px; margin: 30px;">
			<button id="Federated" class="myButton" onclick="getData('Federated', 'Accomplishments')"> Federated Investors </button>
			<button id="MSA" class="myButton" onclick="getData('MSA', 'Accomplishments')"> Mine Safety Appliances </button>
			<button id="Scholarships" class="myButton" onclick="getData('Scholarships', 'Accomplishments')"> Scholarships </button>
		</div>
		<div id="myAccomps">
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
