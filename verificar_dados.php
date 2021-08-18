<?php

require_once('bd.php');
session_start();
$result = $conn->query("SELECT * FROM utilizador WHERE id != '".$_SESSION['id_user']."'");
$row = $result->fetch_assoc();


do{
    $nomeUser = $row['nome'];
    $estadoUser = $row['estado'];   
}while($row=$result->fetch_assoc());






?>