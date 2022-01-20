<?php
$conn = new mysqli("localhost", 'root', '' , 'practicacongio');
if ($conn->connect_errno) {
echo "Error: ". $conn->connect_error;
}
?>