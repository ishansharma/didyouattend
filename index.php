<!doctype html>
<html lang="en">
<?php
	/*
	 * Index page, this is the main page (initially only one) that user will interact with. Will contain the * UI and a little bit of PHP
	 */
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
					<div class="subject-label">Distributed Operating Systems</div>
					<progress max="100" value="75"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject1"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject1"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject1"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Graph Theory</div>
					<progress max="100" value="60"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject2"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject2"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject2"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Industrial Economics</div>
					<progress max="100" value="40"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject3"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject3"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject3"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Internet and Web Technologies</div>
					<progress max="100" value="54"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject4"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject4"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject4"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Mobile Computing</div>
					<progress max="100" value="60"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject5"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject5"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject5"><span>No Class</span></label>
					</div>
				</div>
				<div class="subject">
					<div class="subject-label">Software Project Management</div>
					<progress max="100" value="67"></progress>
					<div class="buttons">
						<label class="green"><input type="radio" name="subject6"><span>Yes</span></label>
						<label class="red"><input type="radio" name="subject6"><span>No</span></label>
						<label class="grey"><input type="radio" name="subject6"><span>No Class</span></label>
					</div>
				</div>
				<input type="submit" value="Save &rarr;" />
			</form>
		</div>
	</div>
</body>
</html>