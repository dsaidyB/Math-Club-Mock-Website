<?php
if (isset($_POST["unLog"])) {
  $jsonString = file_get_contents('status.json');
  $data = json_decode($jsonString, true);
  $data["status"] = "loggedOut";
  $newJsonString = json_encode($data);
  file_put_contents('status.json', $newJsonString);
}
echo "You have logged out.";
echo "<br>"."<a href='../index.php'>Return to Home Page</a>";
?>