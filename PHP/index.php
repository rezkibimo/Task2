<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<body>

<h1>Test</h1>
<div class="container">
<?php

$url = 'https://api.publicapis.org/entries'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data, true); // decode the JSON feed

 echo '<table class="table-responsive table-striped">';
        foreach($characters['entries'] as $result){
        echo '<tr>';
        echo '<td>'.$result['API'].'</td>';
        echo '<td>'.$result['Description'].'</td>';
        echo '<td>'.$result['Auth'].'</td>';
        echo '<td>'.$result['HTTPS'].'</td>';
        echo '<td>'.$result['Cors'].'</td>';
        echo '<td>'.$result['Link'].'</td>';
        echo '<td>'.$result['Category'].'<td>';
        echo '</tr>';
        }
        echo '</table>';
        
?>

</div>
</body>
</html>