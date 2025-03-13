<?php
// /////////////////////////
// example of how to use content from an external JSON file in PHP
// Gil Barros <gil.barros@formato.com.br>, Feb/2025
// /////////////////////////

$json = file_get_contents('data.json'); // get the external file
$array = json_decode($json, true); // transform JSON format into an Array in PHP

############################
?>
<!DOCTYPE html>
<html>
<head><title>Example of PHP code using data from external file in JSON</title></head>
<body style="font-family:sans-serif">
	
	<h4>Graph 1</h4>
    <img src="<?= $array["pages"][0]["graph"] ?>" 
	alt="Graph 1" style="width:300px; height:auto;">

    <h4>Graph 2</h4>
    <img src="<?= $array["pages"][1]["graph"] ?>" 
	alt="Graph 2" style="width:300px; height:auto;">

    <h4>Graph 3</h4>
    <img src="<?= $array["pages"][2]["graph"] ?>" 
	alt="Graph 3" style="width:300px; height:auto;">


<div><pre><?php // for debugging /////////////////////////
// var_dump($json);  // uncomment this if needed for debugging
// var_dump($array); // uncomment this if needed for debugging
// you can also look at the terminal on the server with the commands:
// tail -F /var/log/apache2/error.log
// tail -F /var/log/apache2/access.log
?></pre></div>
</body>
</html>
