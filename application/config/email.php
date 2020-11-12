<?php defined('BASEPATH') OR exit('No direct script access allowed');
        
// SMTP configuration

$config["email"] = array(
    'Host' => 'smtp.gmail.com', 
    'SMTPAuth' => TRUE,
    'Username' => 'no-reply@shipplo.com',
    'Password' => 'FiT@#000',
    'SMTPSecure' => 'ssl', //can be 'ssl' or 'tls' for example
    'Port' => '465',
    'SMTPOptions' => array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    ),
    'CharSet' => 'UTF-8' //plaintext 'text' mails or 'html'
);
