<!DOCTYPE html>
<html>
	
<head>
    <title>NorthwoodExtra</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Google Font: Raleway -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"></link>
		
	<!-- Google Font: Roboto -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@300&display=swap">
	<link rel="stylesheet" href="form_class.css">

	<?php

		include "navbar_catalog_active.php";
	?>

</head>

<body style="background-color: #151b29;">
	
	<form class="container-s" action="search_class_keywords.php">
		<fieldset>
		<!-- Form Name -->
		<legend>Search for a class</legend>
		<!-- Search input-->
		<div class="form-group">
		<label class="col control-label" for="class_keyword">Enter a word to search for in the Northwood class database:</label>
		<div class="col">
			<input class="form-control input-md" id="class_keyword" name="class_keyword" type="search" placeholder="eg. biology, programming, theater">
		</div>
		</div>
		
		<!-- Class tags -->
		<div class="form-group" style="margin-top: 20px">
			<p>Optional: Filter your search by class tags:</p>
		</div>

		<div class="inline">
			<label id="inline_level" for="class_level">Class Year:</label>
			<select name="class_level" id="class_level">
				<option value="" disabled selected>Select a class</option>
				<option>Freshmen</option>
				<option>Sophomore</option>
				<option>Junior</option>
				<option>Senior</option>
			</select>
		</div>

		<div class="inline" style="margin-top: 20px">
			<label for="class_department">Department:</label>
			<select name="class_department" id="class_department">
				<option value="" disabled selected>Select a department</option>
				<option>Humanities Core</option>
				<option>English Courses Beyond the Core</option>
				<option>History/Social Studies Beyond the Core</option>
				<option>Mathematics</option>
				<option>Athletics & Physical Education Department</option>
				<option>Science</option>
				<option>Northwood Arts</option>
				<option>Career Technical Education (CTE)</option>
				<option>World Languages</option>
				<option>The Forensics Core</option>
				<option>General Electives</option>
			</select>
		</div>
		
		<!-- Button -->
		<div class="form-group">
		<label class="col control-label" for="submit"></label>
		<div class="col">
			<button id="submit" name="submit" class="btn btn-primary">Search</button>
		</div>
		</div>
		</div>
		</fieldset>	
	</form>
    </div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('input:checkbox').click(function() {
			$('input:checkbox').not(this).prop('checked', false);
		});
	});
	</script>
</body>

</html>