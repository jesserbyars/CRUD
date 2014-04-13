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
			echo "<p class=\"actions\"><a href=\"?update={$row['student_id']}\">Update</a></p>";
			echo "<p class=\"actions\"><a href=\"?delete={$row['student_id']}\">Delete</a></p>";
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

	function confirm_delete() {
		if(isset($_GET['delete'])) {
			echo "<p class=\"message\">Confirm deletion of user# " . $_GET['delete'];
			echo "<p><a class=\"confirm\" href=\"?delete_confirm={$_GET['delete']}\">Confirm</a></p>";
			echo "<p><a class=\"cancel\" href=\"index.php\">Cancel</a></p>";
		}
	}

	function delete_user($dbc) {
		if(isset($_GET['delete_confirm'])) {
			//add confirmation!!!
			$q = "DELETE FROM students WHERE student_id = {$_GET['deleteconfirm']} LIMIT 1";
			mysqli_query($dbc, $q);
			if(mysqli_affected_rows($dbc)==1) {
				echo '<p class="success">Delete was successful</p>';
			} else {
				echo '<p class="error">Delete failed!</p>';
			}
		}
	}

	function update_user($dbc) {
		if(isset($_GET['update'])) {

			echo '<p class="success">Updating user #'. $_GET['update'] . '</p>';
			$q = "SELECT * FROM students WHERE student_id = {$_GET['update']} LIMIT 1";
			$r = mysqli_query($dbc, $q);
			$row = mysqli_fetch_assoc($r);

			//break out of php
			?>
			
			<form id="update_form" action="index.php" method="post">
			
				<p>First Name:<input type="text" name="first_name" size="30" maxlength="20" value="<?php echo $row['first_name'] ?>"></p>
				<p>Last Name:<input type="text" name="last_name" size="30" maxlength="40" value="<?php echo $row['last_name'] ?>"></p>
				<p>Email Address:<input type="email" name="email" size="30" maxlength="60" value="<?php echo $row['email'] ?>"></p>
				<p>Phone #:<input type="text" name="phone" size="15" maxlength="20" value="<?php echo $row['phone'] ?>"></p>
				<input type="hidden" name="student_id" value="<?php echo $row['student_id'] ?>">
				<input type="hidden" name="update_confirm" value="1">
				<br>
				<input type="submit" value="Update" class="button">
				<br>
				<hr>
				<br>

			</form>

			<?php
		}
		
	}

	function perform_update($dbc) {
		if(isset($_POST['update_confirm'])) {
			$fn = isset($_POST['first_name']) ? $_POST['first_name'] : null;
			$ln = isset($_POST['last_name']) ? $_POST['last_name'] : null;
			$em = isset($_POST['email']) ? $_POST['email'] : null;
			$ph = isset($_POST['phone']) ? $_POST['phone'] : null;
			$id = isset($_POST['student_id']) ? $_POST['student_id'] : null;
			if(isset($fn, $ln, $em, $id, $ph)) {
				$q="UPDATE students SET first_name='$fn', last_name='$ln', email='$em', phone='$ph' WHERE student_id=$id LIMIT 1";
				mysqli_query($dbc, $q);
				if(mysqli_affected_rows($dbc)==1) {
					echo '<p class="success">Update was successful!</p>';
				} else {
					echo '<p class="error">Update failed!</p>';
				}
			}
			
		}
	}

?>