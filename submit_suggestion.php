<?php
header('Content-Type: application/json');

include 'config.php';


$data = json_decode(file_get_contents("php://input"), true);


$stmt = $conn->prepare("INSERT INTO suggestions (suggestionId, suggestion, timestamp, feedback) VALUES (?, ?, ?, NULL)");
$stmt->bind_param("sss", $suggestionId, $suggestion, $timestamp);

$suggestionId = uniqid(); 
$suggestion = $data['suggestion'];
$timestamp = time(); 

if ($stmt->execute()) {
 
    $stmt->close();
    $conn->close();

  
    echo json_encode(['success' => true, 'suggestionId' => $suggestionId]);
} else {
    
    error_log("Error executing SQL statement: " . $stmt->error, 0);

    
    echo json_encode(['error' => 'Error submitting suggestion. Please try again.']);
   
    $stmt->close();
    $conn->close();
    exit();
}
?>
