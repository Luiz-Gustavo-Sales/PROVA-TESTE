<?php
$host="localhost";
$user="root";
$pass="";
$banco="concecionaria";
$link= new mysqli($host,$user,$pass,$banco);
if($link->connect_errno >0){
 day ('Não foi possivel conectar ao banco de dados [',$link->connect_errno,']');
}

?>