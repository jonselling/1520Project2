<link href="../CSS/Project.css" rel="stylesheet" type="text/css" >
	</head>
	<body>
		<ul>
			<?php
				$pages = array("Home" => "HomePage.php", "Accomplishments" => "Accomps.php", "Organizations and Activities" => "OrgsAndActs.php");
				foreach($pages as $key => $page)
				{
					echo "<li><a href=$page>$key</a></li>";
				}
			?>
		</ul>
