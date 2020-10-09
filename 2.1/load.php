<?php

$offset = 0;
$limit = 6;

if (isset($_GET['offset'])) {
	$offset = $_GET['offset'];
}
if (isset($_GET['limit'])) {
	$limit = $_GET['limit'];
}

$data = json_decode(file_get_contents('items.json'));

$result = [
	'items' => array_slice($data, $offset, $limit),
	'total' => count($data),
];

echo json_encode($result);
