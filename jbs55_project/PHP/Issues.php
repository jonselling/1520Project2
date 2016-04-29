<!DOCTYPE html>
<html>
	<head>
		<title>Report an Issue </title>
	</head>
	<body>
		<?php
			include("Header.php");
		?>
		<div style="padding-top: 20px; margin: 30px;">
			<?php
				if(isset($_POST["issue"]))
				{
			?>
			<h1> Thank you for your submission!</h1>
			<?php
				$db = mysqli_connect("localhost","jselling","12345", "jselling");
				if(!$db)
				{
					echo "Database did not connect!";
					die();
				}
				$name = $_POST["name"];
				$email = $_POST["email"];
				$issue = $_POST["issue"];
				$sql = "INSERT INTO `reports`(`Name`, `E-mail`, `Issue`) VALUES ('$name','$email','$issue')";
				$db->query($sql);

				if($email !== "")
				{
					echo "<h1> We will contact you when the issue is fixed! </h1>";
				}
				$_POST = array();
				}
				else
				{
			?>
			<form 	action="Issues.php"
					method="POST">
				<h2>Name*:</h2>
				<input type="text" name="name" maxlength="20" required="true">
				<br />
				<h2>E-mail</h2>
				<input type="email" name="email" maxlength="30">
				<br />
				<h2>Issue*:</h2>
				<input type="text" name="issue" required="true">
				<br /> <br />
				<input type="submit" value="Submit">
			</form>
			<h6> * = required </h6>
			<?php
				}
			?>
		</div>
		<?php
			include("Footer.php");
		?>
	</body>
</html>
