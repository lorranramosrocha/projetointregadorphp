<?php
$localhost = "localhost";
$user = "root";
$pass = "";
$bd = "bdloja";

$con = mysqli_connect($localhost,$user,$pass,$bd);

if(!$con){
    echo "Não conectou ao BD";
}

?>