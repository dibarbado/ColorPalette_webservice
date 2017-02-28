<?php
header('Content-type: application/json; charset=utf-8');

$conn = new DB();
$results = $conn->get_results("select * from groups");

echo json_encode(['groups'=>$results]);
exit;
