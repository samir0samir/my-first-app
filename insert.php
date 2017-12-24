<?php
include('connexion.php');
$name=$_POST['email'];
$age=$_POST['sujet'];
$email=$_POST['message'];


$r=$conn->prepare("INSERT INTO contact (email,sujet,message) VALUES ('$email','$sujet','$message')");
$r->execute();
echo "yes";
?>