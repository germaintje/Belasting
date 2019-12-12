<?php
//standaart index.php 
session_start();
require_once 'Controller/controller.php';

$controller = new Controller();
$controller->handleRequest();
?>