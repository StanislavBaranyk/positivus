<?php

function dataCheck($name, $email, $message) {

    $response = [
        'status' => false,
        'responseText' => '',
    ];

    if (strlen($name) == 0 || strlen($email) == 0 || strlen($message) == 0) {
        $response['responseText'] = '
<div class="alert alert-danger" role="alert">
<p>Oops something went wrong</p>
</div>';
    } else {
        $response['status'] = true;
        $response['responseText'] = '
<div class="alert alert-success" role="alert">
<p>Hello: ' . $name . ', we get your data</p> <br>
             <p>You are email: ' . $email . '</p><br>
            <p>You are comment: ' . $message . '</p><br>
</div>';
    }

    echo json_encode($response);
}

dataCheck($_POST['name'], $_POST['email'], $_POST['message']);



