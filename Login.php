<?php
require "conn.php";

$user_name = $_POST['login'];
$user_pwd=$_POST['pwd'];
$pass=md5($user_pwd);
$vrf="SELECT username, password FROM user_table WHERE username='$user_name' and password='$pass'";
$rsl= mysqli_query($conn,$vrf);
if(mysqli_num_rows($rsl)>0) 
{
echo ' accece';
session_start();
$_SESSION['login'] = $_POST['login'];
$_SESSION['pwd'] = $_POST['pwd'];
header ('location: page_membre.php');
}
else {
    header ('location: index.html');
}
mysqli_close($conn);
?>
