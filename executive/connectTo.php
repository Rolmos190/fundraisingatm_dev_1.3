<?php
	function connectTo() {
		$host = "localhost";
		$db_name = "gogrea6_amoodf5_gm2012";
		$username = "gogrea6_amoodf5_ryan";
		$password = "nb]]mFg2ZU.n";
		$link = mysqli_connect("$host", "$username", "$password", "$db_name");
		return $link;
	}	
?>