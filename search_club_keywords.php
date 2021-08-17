<head>
 
  <title>NorthwoodExtra</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Google Font: Raleway -->
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@800&display=swap" rel="stylesheet"></link>
  <link rel="stylesheet" href="search_club_keywords.css"></link>
</head>

<body>

<?php
	include "navbar_catalog_active.php";
?>

<?php
// Report all errors except E_NOTICE   
error_reporting(E_ALL ^ E_NOTICE);  

include "db_connect2.php";
$keyword = $_GET["keyword"];
$club_tags = $_GET["club_tags"];
?>

<?php
$sql = ("SELECT club_ID, club_name, club_tags, club_meeting_frequency_time, club_president, club_email, club_instagram, club_meeting_link, club_description, club_advisor FROM northwood_table WHERE club_tags LIKE '%$club_tags%' AND club_description LIKE '%$keyword%'");
$result = $mysqli->query($sql); // or die("Error in Fetching Data");
echo "<h1 id='search_text'>Looking for clubs whose descriptions have the word ' <em>$keyword</em> ' and have the tag ' <em>$club_tags</em> '<br></h1>";
?>

<div id="accordion">
<?php
  while($row = $result->fetch_assoc()) {
	echo "<h3>$row[club_name]</h3>";
	echo "<div>
	<p> <span id='club_features'>Meeting Frequency and Time:</span> <span>$row[club_meeting_frequency_time]</span></p>
	<p> <span id='club_features'>President:</span> <span>$row[club_president]</span></p>
	<p> <span id='club_features'>Email:</span> <span>$row[club_email]</span></p>
	<p> <span id='club_features'>Instagram:</span> <span>$row[club_instagram]</span></p>
	<p> <span id='club_features'><a style='color:#0000FF;' href=$row[club_meeting_link]>Meeting Link</a></span>
	<p> <span id='club_features'>Description:</span> <span>$row[club_description]</span></p>
	<p> <span id='club_features'>Club Advisor:</span> <span>$row[club_advisor]</span></p>
	<p> <span id='club_features'>Club Tags:</span> <span>$row[club_tags]</span></p>
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