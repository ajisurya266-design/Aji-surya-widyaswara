<?php
$username = $_GET['usrnm'];
$password = $_GET['pwd'];
if($username=="useradmin" && $password=="123"){
    echo "selamat datang admin";
}elseif($username=="userfinance" && $password=="1234"){
    echo "selamat datang finance";
}elseif($username=="userlogistik" && $password=="12345"){
    echo "selamat datang logistik";
}else{
    echo "salah password";
}
?>

