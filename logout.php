<?php

session_start();
session_destroy();

// Change page to login
header('Location: login.php');

?>
