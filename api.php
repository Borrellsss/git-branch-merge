<?php

    require __DIR__ . '/server.php';

    header('Content-Type: application/json');
    echo json_encode($students);

?> 