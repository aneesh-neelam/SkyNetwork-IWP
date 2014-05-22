<?php
/**
 * Created by PhpStorm.
 * User: Aneesh Neelam <neelam.aneesh@gmail.com>
 * Date: 10/4/14
 * Time: 6:17 PM
 */
session_start();
include 'settings.php';
$con = mysql_connect($mysql_host, $mysql_username, $mysql_password);
mysql_select_db($mysql_db);

$email = $_POST['email'];
$password = $_POST['pwd'];
$password2 = $_POST['cpwd'];
$name = $_POST['name'];

if ($password === $password2)
{
    $query = "INSERT INTO $mysql_table_users (email, password, name) VALUES ('$email', '$password', '$name')";
    $res = mysql_query($query);
    if ($res)
    {
        $_SESSION['email'] = $email;
        setcookie("email", $_SESSION['email'], time() + 2 * 60);
        echo 'User Registered. ';
        // include 'profile.php'; // TODO
    }
    else
    {
        echo 'MySQL error. ';
    }
}
else
{
    echo 'Please ensure that both password fields match. ';
    include 'new.html';
}

mysql_close($con);
