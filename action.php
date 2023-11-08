<?php

function name($name)
{

    if (strlen($name) === 0) {
        echo '<p>Please enter name </p><br>';

    } else {
        echo '<p>Hello: ' . $name . '</p> <br>';

    }

}

name($_POST['name']);

function email($email)
{
    if (strlen($email) === 0) {
        echo '<p>Please enter email </p><br>';
    } else {
        echo '<p>You are email: ' . $email . '</p><br>';
    }
}

email($_POST['email']);

function message($message) {

    if (strlen($message) === 0) {

    }
    else {
        echo '<p>You are comment: ' . $_POST['message'] . '<p></p><br>';
    }
}

message($_POST['message']);


