<?php 

try
{
    $db=new PDO("mysql:host=localhost;dbname=arabam.com;charset=utf8",'root','');
    //echo "baglantı basarili";
}
catch(PDOExpception $hata)
{
    echo $hata->getMessage();
}



?> 