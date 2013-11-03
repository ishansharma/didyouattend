<?php
	/*
	 * Form Processor
	 * All the logic will go here
	 */
	require('functions.php');

	if (array_key_exists('_submitted_true_', $_POST)) {
		$_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		process_form();
	}
	else
	{
		die();
	}

	function process_form() {
		write_to_db();
	}
?>