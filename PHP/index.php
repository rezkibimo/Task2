<?php

$url = 'https://api.publicapis.org/entries'; // path to your JSON file
$data = file_get_contents($url); // put the contents of the file into a variable
$characters = json_decode($data); // decode the JSON feed

echo $characters->entries[0]->API;

?>