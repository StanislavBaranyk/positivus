<?php

function footerDataCheck($footerEmail) {

    $responseServer = [
        'status' => false,
        'responseText' => ''
    ];

    if (strlen($footerEmail) == 0) {} else {
        $responseServer['status'] = true;
        $responseServer['responseText'] = 'Hello '. $footerEmail .',  we get your data. Thank you';

    }
    echo json_encode($responseServer);
}

footerDataCheck($_POST['email']);


