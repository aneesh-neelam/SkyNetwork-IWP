<?php
/**
 * Created by PhpStorm.
 * User: aneesh
 * Date: 22/5/14
 * Time: 5:35 AM
 */

session_start();

if (isset($_SESSION['email']) && isset($_COOKIE['email']))
{
    setcookie("email", $_SESSION['email'], time() + 2 * 60);
    echo "Welcome " . $_COOKIE['email'] . "! ";
}
else
{
    include "new.html";
}