
<!DOCTYPE html>
<html>
<head><title>Example of PHP code using data from external file in JSON</title></head>
	

<title>Library Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <h1>Library Dashboard</h1>
    </div>
    <div class="button-container">
        <button class="button1">Library Visits</button>
        <button class="button1">Library Items</button>
        <button class="button1">Library Programs</button>
    </div>


<?php
// /////////////////////////
// example of how to use content from an external JSON file in PHP
// Gil Barros <gil.barros@formato.com.br>, Feb/2025
// /////////////////////////

 $json = file_get_contents('data.json'); // get the external file
 $array = json_decode($json, true); // transform JSON format into an Array in PHP

############################
?>
    <article>
        <h2>Graph</h2>
        <h4>Graph 1</h4>
        <img src="<?= $array["pages"][0]["graph"] ?>" 
	    alt="Graph 1" style="width:300px; height:auto;">

        <h4>Graph 2</h4>
        <img src="<?= $array["pages"][1]["graph"] ?>" 
	    alt="Graph 2" style="width:300px; height:auto;">

        <h4>Graph 3</h4>
        <img src="<?= $array["pages"][2]["graph"] ?>" 
	    alt="Graph 3" style="width:300px; height:auto;">
        </article>

    <div><pre><?php // for debugging /////////////////////////
// var_dump($json);  // uncomment this if needed for debugging
// var_dump($array); // uncomment this if needed for debugging
// you can also look at the terminal on the server with the commands:
// tail -F /var/log/apache2/error.log
// tail -F /var/log/apache2/access.log
    ?></pre></div>

    <div class="container">
        <div class="map">
          <h2>map</h2>
          </div>
        <table>
            <tr>
                <th>Demographic Info</th>
              </tr>
              <tr>
                <td>text</td>
            </tr>
              <tr>
                <td>text</td>
              </tr>
        </table>
    </div>
</body>
</html>
