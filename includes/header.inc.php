<?php #header.inc.php ?>

<!doctype html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<title>

			<?php 
				#set a default title if the variable is not set
				if(isset($page_title)) {
				echo $page_title;
				} else {
					echo "No title";
				}
			?>

	</title>
	<!--css with media queries for breakpoints-->
	<link rel="stylesheet" type="text/css" href="styles/base.css" media="screen">
	<link href="styles/600px.css" rel="stylesheet" media="only screen and (min-width: 600px)">
	<link href="styles/900px.css" rel="stylesheet" media="only screen and (min-width: 900px)">
	<!--I have no idea what the next line does-->
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<!--include javascript-->
	<script src="scripts/jquery-1.10.2.min.js"></script>
	<script src="scripts/mainscript.js"></script>

</head>

<body>

	<div id="pagewrapper">

		<div id = "banner">
			<!--left side of the banner-->
			<div id = "banner-left">
				<h1>
	
					<?php
						#default banner title if one is not set
						if(isset($banner_title)) {
							echo $banner_title;
						} else {
							echo "Jesse Byars - PHP 2";
						}
					?>

				</h1>
			</div><!--end of banner-left-->

			<div id = "banner-right">
				
				<p class="assignment-name">
					<?php 
						#default assignment name is one is not set
						if(isset($assignment_name)) { 
						echo $assignment_name;} else {
							echo "No name";
						} 
				?>
				</p>
				
				<p class="due-date">
				
					<?php 
						#default due date if one is not set
						if(isset($due_date)) {
						echo $due_date; } else {
							echo "No date";
						}

					?>

				</p>
			</div><!--end of banner-right-->

		</div><!--end of banner-->

		<div id = "nav">
			<p>
		
				<ul>
					<li><a href="index.php">User List</a></li>
					<li><a href="adduser.php">Add a User</a></li>
					<li><a href="#">Link 3</a></li>
				</ul>

			</p>
		</div><!--end of nav-->

		<div id = "content">
