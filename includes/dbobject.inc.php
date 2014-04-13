<?php

	class DbO {
	
	//local public variables for the class
	public $dbc = null;
	public $host = null;
	public $username = null;
	public $pass = null;
	public $database = null;
	public $connected = null;
	public $table = null;
	public $query = null;
	public $result = null;
	public $row = null;
	public $num_rows = null;
	public $message = [];

	//initialize class with db properties
	public function __construct($host, $username, $pass, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->pass = $pass;
		$this->database = $database;
	}

	//connect with the parameters given upon instantiation
	public function connect() {

		$this->dbc = @mysqli_connect($this->host, $this->username, $this->pass, $this->database) OR die("<p>Could not connect to the MySQL Server: " . mysqli_connect_error() . "</p>");

		mysqli_set_charset($this->dbc, "utf8");

		//set a property to keep track of whether the connection is active
		$this->connected = true;

	}

	//close the connected
	public function close() {
		mysqli_close($this->dbc);
		$this->connected = false;
	}

	//check if connected, via the "connected" property
	public function is_connected() {
		return $this->connected ? true : false;
	}

	public function set_table($t) {
		$this->table = $t;
	}

	//report object status
	public function status() {
		
		if ($this->is_connected()) {
			$this->message[] = "<strong>Connection is active</strong>"; 
			$this->message[] = "<strong>Host</strong> = $this->host";
			$this->message[] = "<strong>Database</strong> = $this->database";
			$this->message[] = "<strong>Using table:</strong> $this->table";
			$this->message[] = "<strong>Number of rows</strong> = $this->num_rows";
			$this->message[] = "<strong>Query</strong> = $this->query";
		} else {
			$this->message[] = "<strong>Connection is not active</strong>";
		}



		echo "<div class=\"status_message\">";
		foreach($this->message as $m) {
			echo "<p>$m</p>";
		}
		echo "</div>";

		$this->message = array();

	}

	//this method is far too specific, a more general one is needed that specifies the table, etc...
	
	
	//get total rows in the table, this method relies on the get_results() method and is prone to break whenever I mess that method up
	public function get_num_rows($sort_column, $sort_method) {
		
		$this->get_results();
		$this->num_rows = mysqli_num_rows($this->result);

	}

	
	//manually set the query
	public function set_query($q) {
		$this->query = $q;
	}

	//manually clear the query
	public function clear_query() {
		$this->query = null;
	}

	//runs either a query passed to the method, or the query that is already set
	//with delete and insert check the return value to see if it was successful, if a query affects more than one row, check using another external technique
	public function run_query($q=-1) {

		$this->result=0;

		if($q==-1) {
			$q=$this->query;
		}

		$this->result = mysqli_query($this->dbc, $q);
		
		if(mysqli_affected_rows($this->dbc)==1) {
			return true;
		} else {
			return false;
		}

	}

	//an insert query must be set first or this will do something unexpected, this could probably be converted into a general purpose query function
	public function insert_data() {

		if($this->run_query()) {
			echo "Insert was successful!";
		} else {
			echo "Insert failed!";
		}


	}

	public function clean($s) {

		$s1 = mysqli_real_escape_string($this->dbc, trim($s));
		return $s1;

	}

	//template for fetching data in an extended class
	/*public function fetch_data() {

		while($this->row = mysqli_fetch_array($this->result)) {
			
		}

	}*/

}


class DbObject extends DbO{

	//this is under construction, perhaps the table tags and headers should all be generated here for consistency
	public function render_table_data() {

		while($this->row = mysqli_fetch_array($this->result, MYSQL_ASSOC)) {

			echo "<tr>\n";
			echo "<td>";
			echo "<a href=\"?delete={$this->row['student_id']}\" class=\"delete_record\">Delete</a>";
			echo " ";
			echo "<a href=\"?edit=1&student_id={$this->row['student_id']}&first_name={$this->row['first_name']}&last_name={$this->row['last_name']}\">Edit</a>";
			echo "</td>\n";
		
			foreach($this->row as $r) {
				echo "<td>{$r}</td>\n";	
			}
			echo "</tr>\n";
		}

	}

	//all parameters are optional, use none to ignore sorting, leave off the last two parameters to get all records..this method is specific to the users table

	public function get_results($sort_column=-1, $sort_method=-1, $limit=-1, $limit2=-1) {
		
		if ($this->table == null) {
			echo "<p>Table is not set!</p>";
			return false;
		}

		$this->query = "SELECT student_id, first_name, last_name, email, phone FROM " . $this->table;
		if($sort_column!=-1) {
			$this->query .= " ORDER BY " . $sort_column;
			if($sort_method!=-1) {
				$this->query .= " " . $sort_method;
			}
		}
		if($limit >= 0) {
			$this->query .= " LIMIT " . $limit;
			if($limit2 >= 0) {
				$this->query .= ", " . $limit2;	
			}
		}
	
		$this->run_query();

	}

}

?>