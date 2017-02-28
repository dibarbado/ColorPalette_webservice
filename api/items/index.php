<?php
header('Content-type: application/json; charset=utf-8');

$conn = new DB();

if (isset($_GET['group_id'])) {
    $results = $conn->get_results("select * from items where group_id = " . $_GET['group_id']);
} else {
    $results = $conn->get_results("select * from items");
}

echo json_encode(['items'=>$results]);
exit;
