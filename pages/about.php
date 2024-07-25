<?php

header('Content-Type: application/json');

$html = "<h1>About</h1>";

$response = [
    'template' => 'default',
    'title'    => 'About',
    'html'     => $html,
];

echo json_encode($response);

?>