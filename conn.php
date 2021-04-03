<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);
$sql = "use db_food";
mysqli_query($conn, $sql);

?>