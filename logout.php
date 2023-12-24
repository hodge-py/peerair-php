<?php
session_start();

$_SESSION['loggedIn'] = null;

header('location: index.php');


?>