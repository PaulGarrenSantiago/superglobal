<?php

$firstname = htmlspecialchars($_POST['fname']);
$lastname = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>
</head>
<body>
    <table border = '4'>
        <tr>
            <th>Firstname:</th>
            <td><?= $firstname?> </td>
        </tr>
        <tr>
            <th>Lastname:</th>
            <td><?= $lastname?> </td>
        </tr>
        <tr>
            <th>Email:</th>
            <td><?= $email?> </td>
        </tr>
    </table>
</body>
</html>