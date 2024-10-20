<?php 
$file = $_POST["file"];
$file_pointer = "./problems/" . $file; 

// Use unlink() function to delete a file 
if (!unlink($file_pointer)) {
  echo ("$file_pointer cannot be deleted due to an error");
  echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
}

else { 
  $jsonString = file_get_contents('./problemList.json');
  $tempArray = json_decode($jsonString, true);
  
  $key = array_search($file, $tempArray);
  unset($tempArray[$key]);
  $arr2 = array_values($tempArray);  
  $newJsonString = json_encode($arr2);
  file_put_contents('./problemList.json', $newJsonString);
  
  echo ("$file_pointer has been deleted"); 
  echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
}
?>