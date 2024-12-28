<?php

require("../../common_files/database.php");

$question = $_POST['question'];
$answer = $_POST['answer'];

$check_table = 'SELECT * FROM insert_data';
$response = $db -> query($check_table);
if($response)
{
  $insert_data = "INSERT INTO insert_data(question,answer)VALUES('$question','$answer')";
    $response = $db -> query($insert_data);
    if($response)
    {
      echo "Data inserted";
    }
    else{
      echo "Unable to inserted data";
    }
}
else
{
  $create_table = 'CREATE TABLE insert_data(
    id INT(11) NOT NULL AUTO_INCREMENT,
    question VARCHAR(255),
    answer VARCHAR(255),
    PRIMARY KEY(id)
  )';
  $response = $db -> query($create_table);
  if($response)
  {
    $insert_data = "INSERT INTO insert_data(question,answer)VALUES('$question','$answer')";
    $response = $db -> query($insert_data);
    if($response)
    {
      echo "Data inserted";
    }
    else{
      echo "Unable to inserted data";
    }
  }
  else{
    echo "unable to create table";
  }
}

?>