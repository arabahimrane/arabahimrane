<?php
$servername = "localhost";
$username = "username";
$password = "password";
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}else{
$base = mysqli_select_db($conn,"base_de_donne");
if(!$base){
    echo'base introuvable';
}
}

?>
