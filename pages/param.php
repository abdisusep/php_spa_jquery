<?php

header('Content-Type: application/json');

$id   = $_GET['id'];
$name = $_GET['name'];

$html = "
<h1>Param ID : $id</h1>
<h1>Param Name : $name</h1>
";

$response = [
    'template' => 'default',
    'title' => 'Param',
    'html' => $html,
];

echo json_encode($response);

?>