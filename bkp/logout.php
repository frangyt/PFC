<?php
echo 'bla';
session_start();
echo 'bla';
session_destroy();
echo 'bla';
header('location:index.php');
?>