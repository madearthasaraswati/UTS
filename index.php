<?php 
 session_start();
include_once '../config/config.php';
$con = new config();
if($con->auth()){
    //panggil fungsi
    switch (@$_GET['mod']){
        case 'barang':
        include_once 'controller/barang.php';
        break;
        default:
        include_once 'controller/barang.php';
    }
}else{
    //panggil cont login
    include_once 'controller/login.php';
}
?>


