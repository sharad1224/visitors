<?php

include "config.php";

$sql = "SELECT total_visitors FROM visitors WHERE id=1";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

echo json_encode($row);

$conn->close();

?>