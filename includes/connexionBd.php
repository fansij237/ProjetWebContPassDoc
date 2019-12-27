<?php 

    echo"<meta charset='utf-8'>";
    $bd="coffrefort";
    $user="root";
    $server="localhost";
    $password="";
    try{
        $connexion = new PDO("mysql:host=$server,dbname=$bd",$user,$password); 
    }catch(Exception $e){
        echo "<br><br><br><center><i class='fa fa-wrench' style='font-size:70px;'></i>  " .$e->getMessage();
        echo "</center>";
    };
?>