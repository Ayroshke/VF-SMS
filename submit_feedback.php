<?php

header('Content-Type: application/json');


$data = json_decode(file_get_contents("php://input"), true);

include 'config.php'; 


$sql = "UPDATE suggestions SET feedback = ? WHERE suggestionId = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $data['feedback'], $data['suggestionId']);
$stmt->execute();
$stmt->close();


echo json_encode(['success' => true]);


$conn->close();

?>
