<?php

define ("HOST", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "root");
define ("DATABASE", "crud");

$dbc = @mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE) OR die("<p>Could not connect to the MySQL Server: " . mysqli_connect_error() . "</p>");

mysqli_set_charset($dbc, "utf8");

?>