<?php

$username = "kelly";
$password = "123456";

if ($_SERVER ['REQUEST_METHOD'] == 'POST') {
    $input = json_decode (file_get_contents('php://input'));
    $passwordInput = $input->password;
    $usernameinput = $input->username;

    if($usernameinput!== $username) {
       header('Content-Type: application/json');
       echo json_encode ([
        'status' => 'error',
        'message' => 'usename not found'
       ]);
       die;
    }

    if($passwordinput !== $password) {
        header('Content-Type: application/json');
        echo json_encode ([
         'status' => 'error',
         'message' => 'incorrect password'
        ]);
        die;
    }
    header('Content-Type: application/json');
    echo json_encode ([
        'status' => 'success',
        'message' => 'login success'
    ]);
    die;

}

if ($_SERVER ['REQUEST_METHOD'] == 'GET') {
    header('Content-Type: application/json');
    echo json_encode ([
        'status' => 'success',
        'message' => 'API READY'
    ]);
    die;

}
header('Content-Type: application/json');
echo json_encode ([
    'status' => 'error',
    'message' => 'METHOD NOT Allowed' 
]);