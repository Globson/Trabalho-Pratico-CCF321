<?php  

include "db_conn.php";

$sql = "SELECT * FROM gato ORDER BY NOME_USUARIO DESC";
$result = mysqli_query($conn, $sql);