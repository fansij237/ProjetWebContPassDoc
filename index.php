<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.

This is just a school project we've been ask to do  
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
        <?php
            /*
        
            $lang=fopen("language.php", "r+");
            $readLang = fread(fopen("language.php", "r+"),3);
            if($readLang==""){
                $path="language.php";
                 $t[]=array("Nombre"=>"1;");
                 fputs($lang,$t);
            }
            */
            $a= substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
             if($a=="fr"){
                header("Location:pages/fr/index.php");
            }
        ?>
    
</html>
