<?php

header('Content-Type: application/json');


include 'config.php'; 

date_default_timezone_set('UTC'); 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $suggestion = $_POST["suggestion"];
    $feedback = $_POST["feedback"];

    $sql = "INSERT INTO suggestions (suggestion, feedback, date_submitted) VALUES ('$suggestion', '$feedback', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Record inserted successfully"]);
    } else {
        echo json_encode(["error" => "Error inserting record: " . $conn->error]);
    }

    $conn->close();
    exit(); 
}

$sql = "SELECT suggestion, feedback, date_submitted FROM suggestions ORDER BY date_submitted DESC";
$result = $conn->query($sql);

$feedbackData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        
        $dateSubmitted = new DateTime($row['date_submitted']);
        $formattedDate = $dateSubmitted->format('d F Y');

        $feedbackData[] = array(
            'suggestion' => $row['suggestion'],
            'feedback' => $row['feedback'],
            'date_submitted' => $formattedDate, 
        );
    }
}


echo json_encode($feedbackData);


$conn->close();

?>
