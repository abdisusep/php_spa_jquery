<?php

header('Content-Type: application/json');

$html = "<script>redirectTo('login');</script>";

$response = [
    'template' => 'default',
    'title'    => 'Logout',
    'html'     => $html,
];

echo json_encode($response);

?>