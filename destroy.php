<?php

session_start();

//unset a single session variable
//unset($_SESSION['username']);

/* echo $_SESSION['username'];
echo '<br>';
echo $_SESSION['username2']; */

session_destroy();

echo ' Session Destroyed';

?>