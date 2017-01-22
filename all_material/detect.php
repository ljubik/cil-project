<?php
include 'Mobile_Detect.php';
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
    // выводим мобильную версию сайта

    echo "Mobile";
}
?>