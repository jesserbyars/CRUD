<?php 

	#Author Name: Jesse Byars
	#Assignment : CRUD - Add User
	#Due Date   : None

	#set variables to be used in the header
	$page_title = "CRUD - Add User";
	$banner_title = "Jesse Byars - PHP 2";
	$assignment_name = "CRUD - Add User";
	$due_date = "No Due Date";

	include 'includes/header.inc.php'; 
	require 'includes/mysqli_connect.inc.php';
	require 'includes/crudfunctions.php';

?>
			<!--this is the content area-->
			<p>

				<?php

					add_user($dbc);

				?>

				<form id="insert_user" action="adduser.php" method="post">

					
					<p>First Name:<input type="text" name="first_name" size="30" maxlength="20"></p>
					<p>Last Name:<input type="text" name="last_name" size="30" maxlength="40"></p>
					<p>Email Address:<input type="email" name="email" size="30" maxlength="60"></p>
					<p>Student ID #:<input type="text" name="student_id" size="4" maxlength="4"></p>
					<p>Phone #:<input type="text" name="phone" size="15" maxlength="20"></p>
					<br>
					<hr>
					<input type="submit" value="Add User" class="button">
	
				</form>
				
			</p>
		

<?php include 'includes/footer.inc.php'; ?>
		