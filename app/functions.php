<?php
include __DIR__ . '/env.php';

$site = "Compare Machinery";
$phone_number = "1300 096 278";
$admin_email = 'arijal@aiims.com.au'; // 'info@assetfinanceshop.com';
$bcc_email = ''; //'kalbassit@aiims.com.au';
$no_reply_email = 'info@assetfinanceshop.com';
$recaptcha_client_secret = $client_secret;
$recaptcha_server_secret = $server_secret;
$pageRef = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$application_page = false;

function renderImg($filename, $folder, $classname = "")
{
    $filename_without_ext = preg_replace('/\\.[^.\\s]{3,4}$/', '', $filename);
    $src = "./assets/images/" . $folder . "/" . $filename;

    if (file_exists("./assets/images/" . $folder . "/" . $filename_without_ext . ".webp")) {
        $src = "./assets/images/" . $folder . "/" . $filename_without_ext . ".webp";
    }

    return "<img src=" . $src . " alt=" . $filename_without_ext . " class='" . $classname . "'>";
}
