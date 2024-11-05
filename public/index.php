<?php 
require "../app/src/core/Init.php"; 
session_start();

$app = new App();
$app->loadController();
