<?php
function dataCheck($name, $email, $message)
{
    $response = [
        'status' => false,
        'responseText' => [],
    ];

    if (strlen($name) == 0 || strlen($email) == 0 || strlen($message) == 0) {

    } else {
        $response['status'] = true;
        $response['responseText'] = '<p>Hello: ' . $name . ', we get your data</p> <br>
             <p>You are email: ' . $email . '</p><br>
            <p>You are comment: ' . $message . '</p><br>';
    }

    echo json_encode($response);
}

dataCheck($_POST['name'], $_POST['email'], $_POST['message']);



//echo '<p>Hello: ' . $name . '</p> <br>';

//echo '<p>You are email: ' . $email . '</p><br>';

//echo '<p>You are comment: ' . $_POST['message'] . '<p></p><br>';



