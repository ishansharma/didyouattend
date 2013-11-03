<?php
	// THE FUNCTIONS GO IN THIS FILE

	/*
	 * GLOBALS LIE HERE!
	 */
	$current_date = date('Y-m-d'); // current timestamp, used for saving and retrieving the values. 
	$current_user = 1; // user currently using the app. Since multi user support is not added, 1 for now.
	for ($i = 1; $i < 7; $i++) {
		$sub[$i] = '';
	}

	/*
	 * Writing to Database.
	 */
	function write_to_db() {
		global $current_date, $current_user, $sub;
		$mysqli = mysqli_connect('127.0.0.1', 'root', '', 'dya_db');
		if (mysqli_connect_errno($mysqli)) {
			echo "Failed to Connect to Database";
			die();
		}
		else
		{
			$sub[1] = $_POST['subject1'];
			$sub[2] = $_POST['subject2'];
			$sub[3] = $_POST['subject3'];
			$sub[4] = $_POST['subject4'];
			$sub[5] = $_POST['subject5'];
			$sub[6] = $_POST['subject6'];
			$perform_query = mysqli_query($mysqli, "INSERT INTO dya_data VALUES ('$current_user', '$current_date','$sub[1]', '$sub[2]', '$sub[3]', '$sub[4]', '$sub[5]', '$sub[6]')");
			print "<br />Successfully Inserted";
		}
	}

	/*
	 * Getting Data from Database
	 */
	function retrieve_from_db() {
		global $current_date, $current_user;
		$query = mysqli_connect('127.0.0.1', 'root', '', 'dya_db');
		if (mysqli_connect_errno($query)) {
			echo "Failed to Connect to Database";
			die();
		}
		else
		{
			// $data_fetched = mysqli_query($query, "SELECT * FROM dya_data WHERE user_id='$current_user'");
			// while($row = $data_fetched->fetch_array()) {
				
			// }
		}
	}
?>