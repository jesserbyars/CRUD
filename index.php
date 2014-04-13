<?php 

	#Author Name: Jesse Byars
	#Assignment : CRUD
	#Due Date   : None

	#set variables to be used in the header
	$page_title = "CRUD";
	$banner_title = "Jesse Byars - PHP 2";
	$assignment_name = "CRUD";
	$due_date = "No Due Date";

	include 'includes/header.inc.php'; 
	require 'includes/mysqli_connect.inc.php';
	require 'includes/crudfunctions.php';

?>
			<!--this is the content area-->
			<p>

				<?php

					
					//display the table no matter what (so far)
					delete_user($dbc);
					display_table($dbc, "students", "first_name");

				?>
				
			</p>
		

<?php include 'includes/footer.inc.php'; ?>
		