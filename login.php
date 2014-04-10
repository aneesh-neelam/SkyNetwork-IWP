<?php
/**
 * Created by PhpStorm.
 * User: Aneesh Neelam <neelam.aneesh@gmail.com>
 * Date: 10/4/14
 * Time: 6:20 PM
 */
include 'settings.php';
$con = mysql_connect($mysql_host, $mysql_username, $mysql_password);
mysql_select_db($mysql_db);

$email = $_POST['email'];
$password = $_POST['pwd'];

$query = "SELECT FROM $mysql_table_users (email, password, name) VALUES ('$email', '$password')";
$res = mysql_query($query);
echo $res;
if ($res) {
    echo 'User Registered. ';
    // http_get('login.php');
} else {
    echo 'Registration Error. ';
}

mysql_close($con);
