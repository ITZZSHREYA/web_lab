<!DOCTYPE html>
<html>
<head>
    <title>Login Authentication</title>
</head>
<body>

<form method="post">
    Username:<br>
    <input type="text" name="username"><br><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <button type="submit">Login</button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $uname=$_POST["username"];
    $pass=$_POST["password"];

    $content=trim(file_get_contents("login.txt"));

    if($content==$uname.":".$pass)
    {
        echo "<script>alert('Access granted!')</script>";
    }
    else
    {
        echo "<script>alert('Incorrect username or password!')</script>";
    }
}

?>

</body>
</html>
login.txt
shreya:123
