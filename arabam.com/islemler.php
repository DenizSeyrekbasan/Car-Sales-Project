<?php 
require_once("baglan.php");
session_start();


//uye ekleme islemi
if($_POST['uyeEkle'])
{
    $insert=$db->prepare("INSERT INTO uye_bilgileri SET
    uye_adi=:uye_adi,
    uye_soyadi=:uye_soyadi,
    uye_telefon=:uye_telefon,
    uye_email=:uye_email,
    uye_tc=:uye_tc,
    uye_adres=:uye_adres,
    uye_sifre=:uye_sifre
    ");

    $kaydet=$insert->execute([
    'uye_adi'=>$_POST['uye_adi'],
    'uye_soyadi'=>$_POST['uye_soyadi'],
    'uye_telefon'=>$_POST['uye_telefon'],
    'uye_email'=>$_POST['uye_email'],
    'uye_tc'=>$_POST['uye_tc'],
    'uye_adres'=>$_POST['uye_adres'],
    'uye_sifre'=>$_POST['uye_sifre']
    ]);

    if($_POST['uyeEkle'])
    {
        
        header("Location:uyeLogin.php");
        
    }
}


//uye giris
$bilgi=$db->prepare("SELECT * FROM uye_bilgileri");
$bilgi->execute();

while($bilgi_cek=$bilgi->fetch(PDO::FETCH_ASSOC))
{
    if($_POST['uyeGiris'])
    {   
        if(($_POST['user_name']==$bilgi_cek['uye_adi']) and ($_POST['user_password']==$bilgi_cek['uye_sifre']))
        {
        $_SESSION['login']=true;
        $_SESSION['user_name']=$bilgi_cek['uye_adi'];
        $_SESSION['user_password']=$bilgi_cek['uye_sifre'];
        header("Location:userPage.php");
        }
    }
    else
    {
        echo "Kullanici adi veya sifre hatali !";
        
    }
}
 
//uye ilan ekleme
if($_POST['ilanEkle'])
{
    $yukleklasor="resim"; 
    @$tmp_name=$_FILES['yukle_resim']['tmp_name'];
    @$name=$_FILES['yukle_resim']['name'];
    $tip=$_FILES['yukle_resim']['type'];
    $uzanti=$tip;
    $rastgelesayi1=rand(10000,50000);
    $rastgelesayi2=rand(10000,50000);
    $resimad=$rastgelesayi1.$rastgelesayi2.$name;

    //dosya var mi kontrol
    if(strlen($name)==0)
    {
        echo "Bir dosya seçin";
        exit();
    }
    
    //tip kontrol
    if($tip!='image/jpeg' && $tip !='image/png' && $uzanti !='.jpg')
    {
        echo "yalnızca jpeg veya png formatında olmalıdır !";
    }
    @move_uploaded_file($tmp_name,"$yukleklasor/$resimad");

    $insert=$db->prepare("INSERT INTO ilan_bilgileri SET
    ilan_marka=:ilan_marka,
    ilan_seri=:ilan_seri,
    ilan_model=:ilan_model,
    ilan_yil=:ilan_yil,
    ilan_yakit=:ilan_yakit,
    ilan_vites=:ilan_vites,
    ilan_arac_durumu=:ilan_arac_durumu,
    ilan_km=:ilan_km,
    ilan_kasa_tipi=:ilan_kasa_tipi,
    ilan_motor_gucu=:ilan_motor_gucu,
    ilan_motor_hacmi=:ilan_motor_hacmi,
    ilan_cekis=:ilan_cekis,
    ilan_renk=:ilan_renk,
    ilan_kimden=:ilan_kimden,
    ilan_fiyat=:ilan_fiyat,
    satici_isim=:satici_isim,
    satici_soyisim=:satici_soyisim,
    satici_telefon=:satici_telefon,
    satici_eposta=:satici_eposta,
    arac_resim_ad=:ad
    ");

    $kaydet=$insert->execute([
    'ilan_marka'=>$_POST['ilan_marka'],
    'ilan_seri'=>$_POST['ilan_seri'],
    'ilan_model'=>$_POST['ilan_model'],
    'ilan_yil'=>$_POST['ilan_yil'],
    'ilan_yakit'=>$_POST['ilan_yakit'],
    'ilan_vites'=>$_POST['ilan_vites'],
    'ilan_arac_durumu'=>$_POST['ilan_arac_durumu'],
    'ilan_km'=>$_POST['ilan_km'],
    'ilan_kasa_tipi'=>$_POST['ilan_kasa_tipi'],
    'ilan_motor_gucu'=>$_POST['ilan_motor_gucu'],
    'ilan_motor_hacmi'=>$_POST['ilan_motor_hacmi'],
    'ilan_cekis'=>$_POST['ilan_cekis'],
    'ilan_renk'=>$_POST['ilan_renk'],
    'ilan_kimden'=>$_POST['ilan_kimden'],
    'ilan_fiyat'=>$_POST['ilan_fiyat'],
    'satici_isim'=>$_POST['satici_isim'],
    'satici_soyisim'=>$_POST['satici_soyisim'],
    'satici_telefon'=>$_POST['satici_telefon'],
    'satici_eposta'=>$_POST['satici_eposta'],
    'ad'=>$resimad
    ]);

   if($_POST['ilanEkle'])
    {
        header("Location:userPageGoruntule.php");
       
    }
}

//uye duzenleme islemi
if($_POST['uyeUpdateIslemi'])
{   
    $uye_ad=$_POST['uye_id'];
    $insert=$db->prepare("UPDATE uye_bilgileri SET
    uye_adi=:uye_adi,
    uye_soyadi=:uye_soyadi,
    uye_telefon=:uye_telefon,
    uye_email=:uye_email,
    uye_tc=:uye_tc,
    uye_adres=:uye_adres,
    uye_sifre=:uye_sifre
    WHERE uye_id={$_POST['uye_id']}
    ");

    $kaydet=$insert->execute([
    'uye_adi'=>$_POST['uye_adi'],
    'uye_soyadi'=>$_POST['uye_soyadi'],
    'uye_telefon'=>$_POST['uye_telefon'],
    'uye_email'=>$_POST['uye_email'],
    'uye_tc'=>$_POST['uye_tc'],
    'uye_adres'=>$_POST['uye_adres'],
    'uye_sifre'=>$_POST['uye_sifre']
    ]);

    if($kaydet)
    {
        header("Location:uyeLogin.php");
        
    }

}



    //Uye Ilan Duzenleme
    if($_POST['UyeIlanUpdateIslemi'])
{
    $ilan_id=$_POST['ilan_id'];
    

    $insert=$db->prepare("UPDATE ilan_bilgileri SET
    ilan_marka=:ilan_marka,
    ilan_seri=:ilan_seri,
    ilan_model=:ilan_model,
    ilan_yil=:ilan_yil,
    ilan_yakit=:ilan_yakit,
    ilan_vites=:ilan_vites,
    ilan_arac_durumu=:ilan_arac_durumu,
    ilan_km=:ilan_km,
    ilan_kasa_tipi=:ilan_kasa_tipi,
    ilan_motor_gucu=:ilan_motor_gucu,
    ilan_motor_hacmi=:ilan_motor_hacmi,
    ilan_cekis=:ilan_cekis,
    ilan_renk=:ilan_renk,
    ilan_kimden=:ilan_kimden,
    ilan_fiyat=:ilan_fiyat,
    satici_isim=:satici_isim,
    satici_soyisim=:satici_soyisim,
    satici_telefon=:satici_telefon,
    satici_eposta=:satici_eposta
    
    WHERE ilan_id={$_POST['ilan_id']}
    ");
    
    
    $kaydet=$insert->execute([
    'ilan_marka'=>$_POST['ilan_marka'],
    'ilan_seri'=>$_POST['ilan_seri'],
    'ilan_model'=>$_POST['ilan_model'],
    'ilan_yil'=>$_POST['ilan_yil'],
    'ilan_yakit'=>$_POST['ilan_yakit'],
    'ilan_vites'=>$_POST['ilan_vites'],
    'ilan_arac_durumu'=>$_POST['ilan_arac_durumu'],
    'ilan_km'=>$_POST['ilan_km'],
    'ilan_kasa_tipi'=>$_POST['ilan_kasa_tipi'],
    'ilan_motor_gucu'=>$_POST['ilan_motor_gucu'],
    'ilan_motor_hacmi'=>$_POST['ilan_motor_hacmi'],
    'ilan_cekis'=>$_POST['ilan_cekis'],
    'ilan_renk'=>$_POST['ilan_renk'],
    'ilan_kimden'=>$_POST['ilan_kimden'],
    'ilan_fiyat'=>$_POST['ilan_fiyat'],
    'satici_isim'=>$_POST['satici_isim'],
    'satici_soyisim'=>$_POST['satici_soyisim'],
    'satici_telefon'=>$_POST['satici_telefon'],
    'satici_eposta'=>$_POST['satici_eposta']
    
    ]);
    
   if($kaydet)
    {
        header("Location:userPageGoruntule.php");
        
    }
}



?>



