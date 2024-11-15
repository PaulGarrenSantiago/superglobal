<?php

$firstname = '';
$lastname = '';
$email = '';
$show = false;

 if($_SERVER['REQUEST_METHOD']=== 'POST' && isset($_POST['submit'])){
    $firstname = htmlspecialchars($_POST['fname']);
    $lastname = htmlspecialchars($_POST['lname']);
    $email = htmlspecialchars($_POST['email']);
    $show = true;
 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Name Info</title>
</head>
<body>
    <form method="POST">
        First name: <input type="text" name="fname">
        Last name: <input type="text" name="lname">
        Email: <input type="text" name="email">
        <input type="submit" name="submit" value="Send">
    </form>

<?php if ($show): ?>

    <h1>You are now Registered user</h1>
    <h3><?=$lastname. ' '. $firstname?></h3>
    <h3><?=$email?></h3>
<?php endif; ?>
</body>
</html>