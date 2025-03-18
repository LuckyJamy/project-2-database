<?php
// /////////////////////////
// example of how to get parameters from the URL (AKA query string) in PHP
// and then use these to select the right data from a JSON file, making this a PHP Template
// Gil Barros <gil.barros@formato.com.br>, Feb/2024
// /////////////////////////

$json = file_get_contents('data.json'); // get the external file
$array = json_decode($json, true); // transform JSON format into an Array in PHP

$id = $_GET["id"]; // getting the ID from the URL
if ($id == false) { $id = 0; } // default value for id parameter

$next = $id >= 2 ? 0 : $id+1; // for navigation to next and previous
$prev = $id <= 0 ? 2 : $id-1; // for navigation to next and previous
############################
?>
<!DOCTYPE html>
<html>
<head>
    <title>Example of PHP code using data from external file in JSON</title></head>
    <link rel="stylesheet" href="/styles.css">
    <title>Library Dashboard</title>
</head>


<body>
    <div>
        <h1>Open Portal Library Dashboard</h1>
    </div>
    <div class="button-container">
        <button class="button1"><a href="template.php?id=0">Library Visits</a></button>
        <button class="button1"><a href="template.php?id=1">Library Items </a></button>
        <button class="button1"><a href="template.php?id=2">Library Programs</a></button>
		<button class="button1">Map</button>
    </div>


     <article>
        <img src="<?= $array["pages"][$id]["graph"] ?>" 
	    alt="Graph 1" style="width:956px; height:598px;">

    <div><pre><?php // for debugging /////////////////////////
// var_dump($json);  // uncomment this if needed for debugging
// var_dump($array); // uncomment this if needed for debugging
// you can also look at the terminal on the server with the commands:
// tail -F /var/log/apache2/error.log
// tail -F /var/log/apache2/access.log
    ?></pre></div>
</body>
</html>