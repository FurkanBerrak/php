<?php
include("baglanti.php");
if(isset($_POST["kaydet"]))
{
  
$name=$_POST["adiniz"];
$surname=$_POST["soyadiniz"];
$email=$_POST["emailiniz"];
$password=$_POST["sifreniz"];
 

$ekle="INSERT INTO giris (isim, soyisim, email, sifre) VALUES('$name','$surname','$email','$password')" ;

$calistirekle = mysqli_query($baglanti,$ekle);
if($calistirekle){
echo '<div class="alert alert-success" role="alert">
Kayıt başarıyla tamamlandı.
</div>';
}
else{
  echo '<div class="alert alert-danger" role="alert">
    Kayıt sırasında hata meydana geldi.
  </div>';
}
mysqli_close($baglanti);
}

 ?>

 
 
<span style="font-family: verdana, geneva, sans-serif;"><!DOCTYPE html>
<html lang="en">
  <head>
    <title>Kayıt Ol/filmseç.com</title>
    <link rel="stylesheet" href="css/style.css" />
    
     
    
  </head>
  <body>
    <div class="signup-box">
      <h1 class="yazi1">Kayıt Ol</h1>
      <h4 class="yazi4">Siteye Girebilmek için Kayıt olmalı veya giriş yapmalısınız.</h4>
      <form action="kayit_form.php" method="POST">
        <label>Adınız</label>
        <input name="adiniz" type="text1" placeholder="" />
        <label>Soyadınız</label>
        <input name="soyadiniz"type="text1" placeholder="" />
        <label>Emailiniz</label>
        <input name="emailiniz"type="email" placeholder="" />
        <label>Şifreniz</label>
        <input name="sifreniz"type="password" placeholder="" />
        <label>Şifrenizi Doğrulayın</label>
        <input name="sifreniz1"type="password" placeholder="" />
        <button type="submit"  name="kaydet" class="buton1" >Kayıt Ol  </button>
      </form>
       
    </div>
    <p class="para-2">
      Zaten hesabınız var mı ? <a href="giris.php">Burdan giriş yapın</a>
    </p>
  </body>
</html></span>