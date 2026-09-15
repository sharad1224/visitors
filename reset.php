<?php

include "config.php";

$conn->query("UPDATE visitors
SET total_visitors=0
WHERE id=1");

$result = $conn->query("SELECT total_visitors
FROM visitors
WHERE id=1");

$row = $result->fetch_assoc();

echo json_encode($row);

$conn->close();

?>