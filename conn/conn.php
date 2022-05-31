<?php
$conn = new mysqli("localhost","root","","pbt2");

if($conn->connect_error){
    die ("connnection: " . $conn->connect_error);
}
?>