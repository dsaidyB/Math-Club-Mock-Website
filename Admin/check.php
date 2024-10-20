<?php
if (isset($_POST["ID"]) && isset($_POST["Pass"])) {
  $id = $_POST["ID"];
  $pass = $_POST["Pass"];

  if ($id == "joezou5555" && $pass == "Orange;384"){
    echo $id."<br>";
    echo $pass."<br>";
    echo "You have logged in.";
    echo "<br>"."<a href='../index.php'>Return to Home Page</a>";

    $jsonString = file_get_contents('status.json');
    $data = json_decode($jsonString, true);
    $data["status"] = "loggedIn";
    $newJsonString = json_encode($data);
    file_put_contents('status.json', $newJsonString);
  }

  else{
    echo "Wrong ID or Password.";
    echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
  }
  
}
else{
  echo "Error. Please try again.";
  echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
}
?>