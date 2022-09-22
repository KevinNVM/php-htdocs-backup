<?php 
session_start();
session_destroy();

$_COOKIE = [];

header("Location: login.php");