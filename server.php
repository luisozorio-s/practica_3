<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST");
header("Access-Control-Allow-Headers: Content-Type");

if (isset($_GET['file'])) {
    $file = $_GET['file'];
    include $file . ".php";
}
?>
