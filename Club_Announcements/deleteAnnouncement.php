<?php
$key = $_POST["announcement_index"];

$jsonString = file_get_contents('./announcements.json');
$tempArray = json_decode($jsonString, true);
unset($tempArray[$key]);
$arr2 = array_values($tempArray);  
$newJsonString = json_encode($arr2);
file_put_contents('./announcements.json', $newJsonString);

echo $key." Announcement Deleted";
echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
?>