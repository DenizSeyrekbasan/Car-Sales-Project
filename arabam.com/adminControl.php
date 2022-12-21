<?php 
session_start();

$admin="admin";
$pass="123";

if(($_POST['admin_name']==$admin) and ($_POST['admin_password']==$pass) )
{
    $_SESSION['login']=true;
    $_SESSION['admin_name']=$admin;
    $_SESSION['admin_password']=$pass;
    echo "Giriş başarılı, admin sayfasına yönlendiriliyorsunuz !";
    header('Refresh:1;Url=adminPage.php');
}
else
{
    header("Location:adminLogin.php");
    
}


?>