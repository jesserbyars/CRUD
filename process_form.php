<?php 

	#Author Name: Jesse Byars
	#Assignment : Template
	#Due Date   : 2/25/14

	#set variables to be used in the header
	$page_title = "Form Processor";
	$banner_title = "Jesse Byars - PHP";
	$assignment_name = "Form Processor";
	$due_date = "02/25/14";

	include 'includes/header.inc.php'; 
	//require 'includes/mysqli_connect.inc.php';

?>
			<!--this is the content area-->
			<p>
				<?php
					if($_SERVER['REQUEST_METHOD']!== "POST" && $_SERVER['REQUEST_METHOD']!== "GET") {
						echo "Form was not submitted correctly!";
						exit;
					} else if($_SERVER['REQUEST_METHOD']== "POST") {
						foreach($_POST as $k => $v) {

							if( !is_array($v) )	{
								if(!empty($v)) {
									echo "<p><strong>$k:</strong> $v</p>\n";	
								} else {
									echo "<p>The <strong>$k</strong> field was empty!</p>\n";
								}
								
							} else {
								foreach($v as $value) {
									echo "<p><strong>$k:</strong> $value</p>\n";
								}
							}
							
						}
					} else if($_SERVER['REQUEST_METHOD']== "GET") {
						foreach($_GET as $k => $v) {

							if( !is_array($v) )	{
								if(!empty($v)) {
									echo "<p><strong>$k:</strong> $v</p>\n";	
								} else {
									echo "<p>The <strong>$k</strong> field was empty!</p>\n";
								}
								
							} else {
								foreach($v as $value) {
									echo "<p><strong>$k:</strong> $value</p>\n";
								}
							}
							
						}
					} else {
						echo "Unknown Error!\n";
					}
				?>

			</p>
		

<?php include 'includes/footer.inc.php'; ?>
		