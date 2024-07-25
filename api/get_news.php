<?php
    header('Content-Type: application/json');

    $news = [];
    for ($i=0; $i < 10; $i++) { 
        $news[] = [
            'id' => $i,
            'title' => 'Title '.$i,
            'content' => 'Content '.$i,
        ];
    }
    
    echo json_encode([
        'success' => true,
        'data' => $news
    ]);
?>