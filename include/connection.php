<?php
// Database Connection Constance


//information needed to connect to the DB
// $db = new PDO("sqlite:".__DIR__."/database.bd");
// var_dump($db);

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','root');
define('DB_NAME','database');


$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

//Check if connected
  if($connection) {
    echo "true";
  } else {
    die("database not connected");
  }

// var_dump($connection);
 ?>
