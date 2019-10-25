<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

<style>input{
    border:3px solid blue;
    border-radius:5px;
    height:50px;
    width:10%;
    margin:15px;
      }</style>
<body>
<div class="ekran1">
<a href="index.php"><img id="logo" src="butonlar/logo.png"/></a>
<div class="ekran2" >  
<div class="aradiv" ></div>
    <div class="solmenu">
     <a href="dersler.php"><img src="butonlar/dersler.png"/></a><br><br>
     <a href="kaynaklar.php"><img src="butonlar/kaynaklar.png"/></a><br><br>
     <a href="teknoloji.php"><img src="butonlar/teknoloji.png"/></a><br><br>
     <a href="paylasimyap.php"><img src="butonlar/paylaşım yap.png"/></a><br><br>
    </div>
    <div class="icerik" style="height: 588px;width:855px; overflow-x: hidden; overflow-y: scroll;">
    <?php

	include ('ayar.php');
	 
	   if(isset($_POST["sbmt"]))
	   {
		$username=$_POST["kullaniciadi"];
		$userpass=$_POST["sifre"];
		$useral=$db->prepare("SELECT * FROM user WHERE Username=?");
	   $useral->execute(array($username));
	   if($useral -> rowCount()){
		foreach($db->query("SELECT * FROM user WHERE Username='$username'") as $recvUserDatas)
		{
			$islem_sifre=$recvUserDatas["Userpass"];
			if($userpass==$islem_sifre)
			{
                echo '<h2>Hoş Geldin &nbsp;'.$username.'</h2>';
                echo "<input type='button' value='Hesap ayarları'><input type='button' value='Puan Detayları'><input type='button' value='Yüklenen Notlar'>";
			}
            else {echo"Şifre yalnış";}
        		}
	   }else{ 
		  echo "<h1>Kullanıcı bulunamadı</h1>";
	   }
	
     }
	  ?>
      
    </div>
    <div class="sagmenu">
     <a href="uyeol.php"><img src="butonlar/uye.png"/></a><br><br>
    <a href="duyuru.php"><img src="butonlar/duyurular.png"/></a><br><br>
     <a href="gorusoneri.php"><img src="butonlar/gorusveoneri.png"/></a><br><br>
    </div>
    
</div>
<a href="https://www.facebook.com/Binotnet-446051389498171/?modal=admin_todo_tour"><img id="resim1" src="butonlar/face.png"/></a>
<a href="https://twitter.com/binotnet"><img id="resim2" src="butonlar/twit.png"/></a>
<a href="hakkimizda.php"><img id="resim3" src="butonlar/hakkımızda.png"/></a>
<a href="iletisim.php"><img id="resim4" src="butonlar/iletişim.png"/></a>
</div>
</body>
</html>