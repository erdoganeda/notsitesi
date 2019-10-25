
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script language="javascript" type="text/javascript" src="js/fonksiyonlarr.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/uyeol.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="ekran1">
<a href="index.php"><img id="logo" src="butonlar/logo.png"/></a>
<div class="ekran2" >  
<div class="aradiv" ></div>
    <div class="solmenu">
    </div>
    <div class="icerik" style="height: 588px;width:855px; overflow-x: hidden; overflow-y: scroll;">
    <form name="frm1" id="frm1" action=" " method="post" onsubmit="return giris()">
   <fieldset>
        <legend>Üye işlemleri</legend>
    <HR><legend>Kullanıcı Bilgileriniz</legend><HR>
    <input type="text" id="kulad" name="kulad" placeholder="Kullanıcı adı" ><br>
    <input type="password"  size="8" id="sifre1" name="sifre1" placeholder="Şifre" ><br>
    <input type="email" name="email" placeholder="e-mail"><br>
    <input type="number" id="tel" name="tel" placeholder="Telefon"><br> 
    <input name="sbmt"type="submit" value="Gönder">
     
  </fieldset>
 </form>
   
    </div>
    <div class="sagmenu">
     <a href="uyeol.php"><img src="butonlar/uye.png"/></a><br><br>
    </div>
    
</div>
<a href="https://www.facebook.com/Binotnet-446051389498171/?modal=admin_todo_tour"><img id="resim1" src="butonlar/face.png"/></a>
<a href="https://twitter.com/binotnet"><img id="resim2" src="butonlar/twit.png"/></a>
<a href="hakkimizda.php"><img id="resim3" src="butonlar/hakkımızda.png"/></a>
<a href="iletisim.php"><img id="resim4" src="butonlar/iletişim.png"/></a>
</div>
</body>
</html>
<?php 
if($_SERVER['REQUEST_METHOD']=="POST")
{if(isset($_POST["sbmt"]))
{
  $kulad=$_POST["kulad"];
  $sifre=$_POST["sifre1"];
  $email=$_POST["email"];
  $tel=$_POST["tel"];
}

try
{
    $database_connection = new PDO("mysql:host=localhost;dbname=binotnet;charset=utf8","root","");
    $database_connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sqlquery =  "INSERT INTO user (Username,Userpass,Usermail,Usertel) VALUES ('$kulad','$sifre','$email','$tel')"; 
    $database_connection->exec($sqlquery);

}
catch(PDOException $ex)
{

    echo $ex->getMessage();
}
    
    /*
    echo $database_connection->lastInsertId(); 
    $dbbaglanti = NULL;*/

} 
?>