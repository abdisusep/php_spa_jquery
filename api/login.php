<?php
    header('Content-Type: application/json');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username=='admin' && $password=='admin') {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Username or password invalid!']);
    }
?>