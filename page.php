<?php

session_start();

if (isset ($_SESSION['username'])){
    echo $_SESSION['username'];
    echo '<br/>';
    echo $_SESSION['username2'];
} else{
    echo 'Username not Set';
}


?>