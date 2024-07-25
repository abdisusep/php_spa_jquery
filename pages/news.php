<?php

header('Content-Type: application/json');

$html = "<h1>News</h1>";

$response = [
    'template' => 'default',
    'title'    => 'News',
    'html'     => $html,
];

echo json_encode($response);

?>