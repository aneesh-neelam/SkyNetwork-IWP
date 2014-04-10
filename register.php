<?php
/**
 * Created by PhpStorm.
 * User: Aneesh Neelam <neelam.aneesh@gmail.com>
 * Date: 10/4/14
 * Time: 6:17 PM
 */
include 'settings.php';
$con = mysql_connect($mysql_host, $mysql_username, $mysql_password);
mysql_select_db($mysql_db);

$email = $_POST['email'];
$password = $_POST['pwd'];
$name = $_POST['name'];

$query = "INSERT INTO $mysql_table_users (email, password, name) VALUES ('$email', '$password', '$name')";
echo $query;
$res = mysql_query($query);
echo $res;
if ($res) {
    echo 'User Registered. ';
    // http_get('login.php');
} else {
    echo 'MySQL error. ';
}

mysql_close($con);
