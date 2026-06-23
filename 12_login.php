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

##1.Create into.txt and index.php file code accordingly. in Same directory. 
2. change the file.txt modo. 
>chmat info.txt 777 
3. Go to browser and execute the filename.php. 
