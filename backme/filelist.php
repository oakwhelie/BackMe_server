<?php

$path    = 'uploads';
$files = scandir($path);

foreach ($files as $key => $value)
{
  echo $value."<br>";
}

 ?>
