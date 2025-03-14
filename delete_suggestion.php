<?php
header('Content-Type: application/json');


$data = json_decode(file_get_contents("php://input"), true);

include 'config.php'; 


$stmt = $conn->prepare("DELETE FROM suggestions WHERE suggestionId = ?");
$stmt->bind_param("s", $suggestionId);

$suggestionId = $data['suggestionId'];

$stmt->execute();


$stmt->close();
$conn->close();


echo json_encode(['success' => true]);
?>
