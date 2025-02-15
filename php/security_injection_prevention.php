<?php

$id = $_GET['id'];


$stmt = $conn->prepare("SELECT * FROM users WHERE id = ?");
$stmt->bind_param("i", $id); // Bind the parameter as an integer
$stmt->execute();
$result = $stmt->get_result();
?>