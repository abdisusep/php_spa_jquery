<?php

header('Content-Type: application/json');

$html = "
<h1>Home</h1>
<h1>Welcome</h1>
";

$response = [
    'template' => 'default',
    'title' => 'Home',
    'html' => $html,
];

echo json_encode($response);

?>