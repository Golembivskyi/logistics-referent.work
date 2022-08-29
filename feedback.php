<?php

$data = [
    'Company' => isset($_POST['company']) ? $_POST['company'] : '(Not set)',
    'Name' => isset($_POST['name']) ? $_POST['name'] : '(Not set)',
    'Phone' => isset($_POST['phone']) ? $_POST['phone'] : '(Not set)',
    'Email' => isset($_POST['email']) ? $_POST['email'] : '(Not set)',
    'Route' => isset($_POST['route']) ? $_POST['route'] : '(Not set)',
    'Parameters' => isset($_POST['parameters']) ? $_POST['parameters'] : '(Not set)',
    'Message' => isset($_POST['message']) ? $_POST['message'] : '(Not set)',
];

$headers = 'Content-Type: text/plain; charset=utf-8' . "\r\n";

mail('denisenko.ruslana.v@gmail.com', 'Website Message', implode("\n", $data), $headers);