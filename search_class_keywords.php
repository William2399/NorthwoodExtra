<head>
 
  <title>NorthwoodExtra</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Font: Raleway -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"></link>
  <link rel="stylesheet" href="search_class_keywords.css"></link>
  
 </head>
 
<body>

<?php
	include "navbar_catalog_active.php";
?>

 <?php
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE); 

include "db_connect2.php";
$class_keyword = $_GET["class_keyword"];
$class_level = $_GET["class_level"];
$class_department = $_GET["class_department"];
?>

<?php
$sql = ("SElECT classID, class_name, class_department, class_year, class_length, class_prerequisite, class_description from class_table WHERE class_year LIKE '%$class_level%' AND class_department LIKE '%$class_department%' AND (class_name LIKE '%$class_keyword%' OR class_description LIKE '%$class_keyword%') ");
$result = $mysqli->query($sql); // or die("Error in Fetching Data");
echo "<h1 id='search_text'>Looking for classes whose names or descriptions have the word ' <em>$class_keyword</em> ', have the class level of '<em>$class_level</em>', and a department of '<em>$class_department</em>' <br></h1>";
?>

<div id="accordion">
<?php
  while($row = $result->fetch_assoc()) {
	echo "<h3>$row[class_name]</h3>";
	echo "<div>
	<p> <span id='class_features'>Class Department:</span> <span>$row[class_department]</span></p>
	<p> <span id='class_features'>Level:</span> <span>$row[class_year]</span></p>
	<p> <span id='class_features'>Course Length:</span> <span>$row[class_length]</span></p>
	<p> <span id='class_features'>Prerequisite:</span> <span>$row[class_prerequisite]</span></p>
	<p> <span id='class_features'>Class Description:</span> <span>$row[class_description]</span></p>
	</div>";
}
?>

</div>

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
	$( function() {
    $( "#accordion" ).accordion({
		collapsible: true,
		heightStyle: "content"
	});
  });
  </script>
 </body>