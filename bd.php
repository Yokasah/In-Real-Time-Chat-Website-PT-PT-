<?php 

$servername = "localhost";
$username = "root";
$password = "";
$nome = "bdchat";

$conn = new mysqli($servername, $username, $password, $nome)or die(mysqli_error($conn));

