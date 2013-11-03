<?php
	// THE FUNCTIONS GO IN THIS FILE

	/*
	 * GLOBALS LIE HERE!
	 */
	$current_date = date('Y-m-d'); // current timestamp, used for saving and retrieving the values. 
	$current_user = 1; // user currently using the app. Since multi user support is not added, 1 for now.
	for ($i = 1; $i < 7; $i++) {
		$sub[$i] = 0;
		$total[$i] = 0;
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
			print "<br />Successfully Done";
		}
	}

	/*
	 * Getting Data from Database
	 */
	function retrieve_from_db() {
		global $current_date, $current_user, $total, $sub;
		$query = mysqli_connect('127.0.0.1', 'root', '', 'dya_db');
		if (mysqli_connect_errno($query)) {
			echo "Failed to Connect to Database";
			die();
		}
		else
		{
			$data_fetched = mysqli_query($query, "SELECT * FROM dya_data WHERE user_id='$current_user'");
			while($row = $data_fetched->fetch_array()) {
				if ($row['sub1'] == 1) {
					$sub[1]++;
					$total[1]++;
				}
				elseif ($row['sub1'] == 2) {
					$total[1]++;
				}

				// Subject 2
				if ($row['sub2'] == 1) {
					$sub[2]++;
					$total[2]++;
				}
				elseif ($row['sub2'] == 2) {
					$total[2]++;
				}

				// Subject 3
				if ($row['sub3'] == 1) {
					$sub[3]++;
					$total[3]++;
				}
				elseif ($row['sub3'] == 2) {
					$total[3]++;
				}

				// Subject 4
				if ($row['sub4'] == 1) {
					$sub[4]++;
					$total[4]++;
				}
				elseif ($row['sub4'] == 2) {
					$total[4]++;
				}

				// Subject 5
				if ($row['sub5'] == 1) {
					$sub[5]++;
					$total[5]++;
				}
				elseif ($row['sub5'] == 2) {
					$total[5]++;
				}

				// Subject 6
				if ($row['sub6'] == 1) {
					$sub[6]++;
					$total[6]++;
				}
				elseif ($row['sub6'] == 2) {
					$total[6]++;
				}
			}
		}
	}
?>