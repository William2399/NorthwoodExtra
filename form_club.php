<!DOCTYPE html>
<html>

<head>
    <title>NorthwoodExtra</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<!-- Google Font: Raleway -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"></link>

	<link rel="stylesheet" href="form_club.css">


</head>

<body style="background-color: #151b29;">
	<?php

	include "navbar_catalog_active.php";
	?>

	<form class="container-s" action="search_club_keywords.php" method="get">
		<fieldset>

		<!-- Form Name -->
		<legend>Search for a club</legend>

		<!-- Search input-->
		<div class="form-group">
		<label class="col control-label" for="keyword">Enter a word to search for in the Northwood club database:</label>
		<div class="col">
			<input class="form-control input-md" id="keyword" name="keyword" type="search" placeholder="eg. chess, music, culture">
		</div>
		</div>

		<!-- Club tags -->
		<div class="form-group" style="margin-top: 20px">
		<p>Optional: Filter your search by club tag:</p>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Arts">
			Arts</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Competition">
			Competition</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Finance">
			Finance</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Humanities">
			Humanities</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Language">
			Language</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Music">
			Music</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="STEM">
			STEM</label>
		</div>
		<div class="form-check form-check-inline"> 
		    <label>
			<input type="radio" name="club_tags" value="Sports">
			Sports</label>
		</div>
		<div class="form-check form-check-inline">
		    <label> 
			<input type="radio" name="club_tags" value="Volunteering">
			Volunteering</label>
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