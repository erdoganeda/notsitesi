<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/admin.css" rel="stylesheet" type="text/css"/>
</head>


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
    <form name="frm1" id="frm1">
  
   <a href="uyekontrol.php"><input type="button" value="ÜYE KONTROL"></a>
      <a href=""><input type="button" value="GELENLER"></a>
      <a href=""><input type="button" value="ONAYLANANLAR"></a>
   </form>
   <?php
include ('ayar.php');
 
   if(isset($_POST["sbmt"]))
   {
    $adminname=$_POST["adminname"];
    $adminpass=$_POST["adminpass"];
    $adminial=$db->prepare("SELECT * FROM admin WHERE adminname=?");
   $adminial->execute(array($adminname));
   if($adminial -> rowCount()){
    foreach($db->query("SELECT * FROM admin WHERE adminname='$adminname'") as $recvUserDatas)
    {
        $islem_sifre=$recvUserDatas["adminpass"];
        if($adminpass==$islem_sifre)
        {
            echo"Doğru giriş";
        }
        else echo"şifre yalnış";
    }
   }else{ 
      echo "<h1>Admin bulunamadı</h1>";
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