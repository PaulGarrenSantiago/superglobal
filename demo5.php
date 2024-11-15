<?php

//session variable
session_start();

$_SESSION['username'] = 'luffy';
$_SESSION['username2'] = 'Neil';

echo $_SESSION['username'];
echo '<br>';
echo $_SESSION['username2'];
?>