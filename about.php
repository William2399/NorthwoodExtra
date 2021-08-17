<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NorthwoodExtra</title>
  	
	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- Google Font: Raleway -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"></link>

	<link rel="stylesheet" href="about.css">

	<style>
	</style>
	
</head>

<body style="background-color: #151b29;">
	<!-- Connects to database (phpMyAdmin) -->
	<?php 
		include "db_connect2.php";
	?>

	<!-- //Connects to code for navbar -->
	<?php
		include "navbar_about_active.php";
	?>

	<div id="container">
		<div id="section1">
			<h1 id="title">ABOUT NORTHWOODEXTRA</h1>
			<p id="about_paragraph">
			NorthwoodExtra is a web application that utilizes a back-end database server that contains information 
			regarding Northwood High School’s catalog of classes and clubs. This information was taken from the NHS Program 
			of Studies 2021-22 and the NHS Club Directory 2020-2021 respectively. 
			</p>

			<p id="about_paragraph">	
			The programming languages used follow the standard requirement for a full-stack web application, including HTML, CSS, Javascript, PHP, and SQL. 
			</p>

			<p id="about_paragraph">
			NorthwoodExtra was built by an NHS student to provide all students, both incoming and current, with a simple way to explore 
			the vast selection of NHS classes and clubs.  
			</p>
		</div>
		<div id="section2">
		   <div>
			    <img id="about_picture" src="students.jpg">
		    </div>	
		    <div>
			<a id="source_attribution" href="https://www.freepik.com/vectors/school">School vector created by pch.vector - www.freepik.com</a>
			</div>
		</div>
	</div id="about">
	
</body>
</html>