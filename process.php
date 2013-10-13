<?php
	/*
	 * Form Processor
	 * All the logic will go here
	 */
	if (array_key_exists('_submitted_true_', $_POST)) {
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		process_form();
	}
	else
	{
		die();
	}

	function process_form() {
		// foreach ($_POST as $subject => $code) {
		// 	print $subject;
		// 	print ' ';
		// 	echo $code . '<br />';
		// }
		write_to_db();
	}

	function write_to_db() {
		$mysqli = mysqli_connect('127.0.0.1', 'root', '', 'dya_db');
		if (mysqli_connect_errno($mysqli)) {
			echo "Failed to Connect to Database";
			die();
		}
		// $query = mysqli_query($mysqli, "INSERT INTO dya_data VALUES");
		$result = mysqli_fetch_assoc($query);
		print_r($result);
	}
?>