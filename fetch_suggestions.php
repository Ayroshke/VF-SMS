<?php

header('Content-Type: application/json');

include 'config.php'; 


$sql = "SELECT suggestionId, suggestion, feedback, date_submitted FROM suggestions ORDER BY date_submitted DESC";
$result = $conn->query($sql);

$suggestionsData = array();

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $suggestionsData[] = array(
            'suggestionId' => $row['suggestionId'],
            'suggestion' => $row['suggestion'],
            'feedback' => $row['feedback'],
            'date_submitted' => $row['date_submitted'],
        );
    }
}


echo json_encode($suggestionsData);

$conn->close();

?>
