<?php

$target_dir = "./problems/";
$target_file = $target_dir . basename($_FILES["newFile"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
  $uploadOk = 0;
}
  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["newFile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["newFile"]["name"])). " has been uploaded.";
    echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
  } else {
    echo "Sorry, there was an error uploading your file.";
    echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
  }
} 

if ($uploadOk == 1) {
  $jsonString = file_get_contents('./problemList.json');
  $tempArray = json_decode($jsonString, true);
  array_push($tempArray, basename($_FILES["newFile"]["name"]));
  $newJsonString = json_encode($tempArray);
  file_put_contents('./problemList.json', $newJsonString);
}
?>