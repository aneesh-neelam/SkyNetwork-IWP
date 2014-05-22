<?php
/**
 * Created by PhpStorm.
 * User: Aneesh Neelam <neelam.aneesh@gmail.com>
 * Date: 10/4/14
 * Time: 6:20 PM
 */
session_start();
include 'settings.php';
$con = mysql_connect($mysql_host, $mysql_username, $mysql_password);
mysql_select_db($mysql_db);

$email = $_POST['email'];
$password = $_POST['pwd'];

$query = "SELECT * FROM $mysql_table_users WHERE email='$email' AND password='$password'";
$res = mysql_query($query);
$count = mysql_num_rows($res);
if ($count > 0)
{
    $_SESSION['email'] = $email;
    setcookie("email", $_SESSION['email'], time() + 2 * 60);
    echo "<table border='1'>
        <tr>
        <th>Name</th>
        <th>Email</th>
        </tr>";

    while ($row = mysql_fetch_array($res, MYSQL_ASSOC))
    {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    // include 'profile.php'; // TODO
}
else
{
    echo 'No such user, please register. ';
    include 'new.html';
}

mysql_close($con);
