<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Processing...</title>
</head>
<body>
	<p>
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
	</p>
	<p>
		Redirecting back...
		<script type="text/javascript">
			window.setInterval(function() {window.location.replace("http://127.0.0.1:8080/gt/didyouattend/");}, 1000);
		</script>
	</p>	
</body>
</html>