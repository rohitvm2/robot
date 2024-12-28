<?php

$db = new mysqli('localhost','root','','robot');
if($db -> connect_error)
{
  echo "unable to connect database";
}


?>
