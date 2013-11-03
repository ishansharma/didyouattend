<!doctype html>
<html lang="en">
<?php
	/*
	 * Index page, this is the main page (initially only one) that user will interact with. Will contain the * UI and a little bit of PHP
	 */
	require("functions.php");

	// Something to fetch the data and update the progress bars
	retrieve_from_db();

	// Calculating Attendance
	for ($i = 1; $i < 7; $i++) {
		$atd[$i] = ($sub[$i] / $total[$i]) * 100;
	}
?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="initial-scale=1">
	<title>Did You Attend?</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="container">
		<h1>Did You Attend Your Classes?</h1>
		<div id="main-form">
			<form action="process.php" method="POST">
				<div class="subject">
					<div class="subject-label">Distributed Operating Systems <span class="percentage"><?php echo round($atd[1], 2); ?>%</span></div>
					<progress max="100" value="<?php echo $atd[1]; ?>"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject1" value="1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject1" value="2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject1" value="3"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Graph Theory <span class="percentage"><?php echo round($atd[2], 2); ?>%</span></div>
					<progress max="100" value="<?php echo $atd[2]; ?>"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject2" value="1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject2" value="2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject2" value="3"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Industrial Economics <span class="percentage"><?php echo round($atd[3], 2); ?>%</span></div>
					<progress max="100" value="<?php echo $atd[3]; ?>"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject3" value="1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject3" value="2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject3" value="3"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Internet and Web Technologies <span class="percentage"><?php echo round($atd[4], 2); ?>%</span></div>
					<progress max="100" value="<?php echo $atd[4]; ?>"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject4" value="1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject4" value="2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject4" value="3"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Mobile Computing <span class="percentage"><?php echo round($atd[5], 2); ?>%</span></div>
					<progress max="100" value="<?php echo $atd[5]; ?>"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject5" value="1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject5" value="2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject5" value="3"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Software Project Management <span class="percentage"><?php echo round($atd[6], 2); ?>%</span></div>
					<progress max="100" value="<?php echo $atd[6]; ?>"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject6" value="1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject6" value="2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject6" value="3"><span>No Class</span></label>
					</div>
				</div>
				<input type="hidden" name="_submitted_true_" />
				<input type="submit" value="Save &rarr;" />
			</form>
		</div>
	</div>
</body>
</html>