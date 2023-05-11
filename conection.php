<?php
$server = "localhost";
$usrname = "root";
$password = "";
$dbname = "week8";
$conection = new mysqli($server,$usrname,$password,$dbname);

if (!$conection){
    die("koneksi gagal" . $conection->connect_error);
}