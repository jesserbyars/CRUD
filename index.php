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
				<?php
					//CHECK SORTING
					set_sort();
					//DELETE SECTION
					//check to see if the user is trying to delete a record
					if(isset($_GET['delete'])) {
						confirm_delete();
					} elseif(isset($_GET['deleteconfirm'])) {
						//delete a user, if confirmation was made
						delete_user($dbc);	
					}
					
					//UPDATE SECTION
					if(isset($_GET['update'])) {
						update_user($dbc);
					} elseif(isset($_POST['update_confirm'])) {
						perform_update($dbc);
					}

					//DISPLAY SECTION
					//display the table
					display_table($dbc, "students", $_SESSION['sortby'], $_SESSION['sortmethod']);

				?>
				
<?php include 'includes/footer.inc.php'; ?>
		