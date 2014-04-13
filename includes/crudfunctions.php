<?php

	//pass the database handle, the table name, and optionally, the order and sort method (ASC or DESC)
	function display_table($dbc, $t, $o = null, $s = "ASC") {
		//run a query to get the column names
		$q = "SELECT * FROM $t LIMIT 1";
		
		$r = mysqli_query($dbc, $q);
		$row = mysqli_fetch_assoc($r);
		//start the table
		echo "<table class=\"tabledisplay\">";
		echo "<tr>";
		//make a header for the actions column
		echo "<th>Actions</th>";
		//show the column names as <th>
		foreach($row as $k => $v) {
			echo "<th>$k</th>";
		}
		echo "</tr>";
		//run the query for the whole table
		$q = "SELECT * FROM $t";
		if($o) {
			$q .= " ORDER BY " . $o . " " . $s;
		}
		$r = mysqli_query($dbc, $q);
		while($row = mysqli_fetch_assoc($r)) {
			echo "<tr>";
			echo "<td>";
			echo "<p class=\"space\"><a href=\"?update={$row['student_id']}\">Update</a></p>";
			echo "<a href=\"?delete={$row['student_id']}\">Delete</a>";
			echo "</td>";
			foreach($row as $v) {
				echo "<td>$v</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function add_user($dbc) {
		//check if form was posted, assign shorter variables and verify they exist
		//I should do validation here
		if($_SERVER['REQUEST_METHOD']=="POST") {
			$fn = !empty($_POST['first_name']) ? $_POST['first_name'] : null;
			$ln = !empty($_POST['last_name']) ? $_POST['last_name'] : null;
			$em = !empty($_POST['email']) ? $_POST['email'] : null;
			$sid = !empty($_POST['student_id']) ? $_POST['student_id'] : null;
			$ph = !empty($_POST['phone']) ? $_POST['phone'] : null;
			if( isset($fn)&&isset($ln)&&isset($em)&&isset($sid)&&isset($ph) ) {
				$q = "INSERT INTO students VALUES ('$fn', '$ln', '$em', '$sid', '$ph')";
				mysqli_query($dbc, $q);
				//check for success or failure
				if(mysqli_affected_rows($dbc)==1) {
					echo '<p class="success">Insert was successful!</p>';
				} else {
					echo '<p class="error">Insert failed!</p>';
				}
			} else {
				echo '<p class="error">Insert failed!</p>';
				echo '<p class="error">Some values were not set!</p>';
			}
		}

	}

	function delete_user($dbc) {
		if(isset($_GET['delete'])) {
			//add confirmation!!!
			$q = "DELETE FROM students WHERE student_id = {$_GET['delete']} LIMIT 1";
			mysqli_query($dbc, $q);
			if(mysqli_affected_rows($dbc)==1) {
				echo '<p class="success">Delete was successful</p>';
			} else {
				echo '<p class="error">Delete failed!</p>';
			}
		}
		
		
	}

?>