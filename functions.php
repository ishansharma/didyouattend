<?php
	// THE FUNCTIONS GO IN THIS FILE

	/*
	 * GLOBALS LIE HERE!
	 */
	$current_date = date('Y-m-d'); // current timestamp, used 


	/*
	 * Writing to Database.
	 */
	function write_to_db() {
		$mysqli = mysqli_connect('127.0.0.1', 'root', '', 'dya_db');
		if (mysqli_connect_errno($mysqli)) {
			echo "Failed to Connect to Database";
			die();
		}
		else
		{
			$sub1 = $_POST['subject1'];
			$sub2 = $_POST['subject2'];
			$sub3 = $_POST['subject3'];
			$sub4 = $_POST['subject4'];
			$sub5 = $_POST['subject5'];
			$sub6 = $_POST['subject6'];
			$perform_query = mysqli_query($mysqli, "INSERT INTO dya_data VALUES ('1', '$current_date','$sub1', '$sub2', '$sub3', '$sub4', '$sub5', '$sub6')");
			print "<br />Successfully Inserted";
		}
	}

	/*
	 * Getting Data from Database
	 */
	function retrieve_from_db() {
		$query = mysqli_connect('127.0.0.1', 'root', '', 'dya_db');
		if (mysqli_connect_errno($query)) {
			echo "Failed to Connect to Database";
			die();
		}
		else
		{
			$
		}
	}
?>