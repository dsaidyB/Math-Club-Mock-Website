<?php
$date = $_POST["date"];
$announcement = $_POST["announcement"];

$jsonString = file_get_contents('./announcements.json');
$tempArray = json_decode($jsonString, true);

$add = array($date, $announcement);

array_push($tempArray, $add);
$newJsonString = json_encode($tempArray);
file_put_contents('./announcements.json', $newJsonString);

echo $date."<br>";
echo $announcement;
echo "<br>"."<a href='./announcements.html'>Return to Announcements</a>";
?>