
<?php
//making config as we need this everytime we can just use it through include_once
//1st step for database php connection
$mysqli = new mysqli('sql100.infinityfree.com', 'if0_38222097', '7Y2LwBd2piQMf', 'if0_38222097_ecommerce');

//Before we can access data in the MySQL database, we need to be able to connect to the server i.e php
$conn = new mysqli($serverName,$dBUsername,$dBPassword,$dBName );


?>