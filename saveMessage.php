<?php
  // Read the incoming JSON from the POST request
  $input = file_get_contents("php://input");

  // Save the JSON data to the "message.json" file
  file_put_contents("message.json", $input);
?>
