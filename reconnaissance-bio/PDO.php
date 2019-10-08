<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'ihm';


try{

    $database = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $database->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



}catch(PDOException $e){
echo 'Error : '. $e->getMessage();
}

   function secure($info) {
  $info = trim($info);
  $info = stripslashes($info);
  $info = strip_tags($info);
  $info = htmlspecialchars($info);
  return $info;
}


?>
