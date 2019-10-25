<?php require("ayar.php"); session_start();?>
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

</script>
<style>
section{
   
background:rgba(225, 225, 225, 0.4);
margin:0 auto;
width:300px;
padding:20px;
text-align:center;
-webkit-border-radius: 10px;
-moz-border-radius: 10px;
border-radius: 10px;
-webkit-box-shadow:0 0 65px rgba(0,0,0,0.2);
-moz-box-shadow:0 0 65px rgba(0,0,0,0.2);
box-shadow:0 0 65px rgba(0,0,0,0.2);
}
 
.giris-yap {
margin:5px 5px 15px 5px;
width:250px;
padding:10px;
outline:none;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
border:none;
background:rgba(225, 225, 225, 0.5);
font:1.1em Arial;
color:#fff;
transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-webkit-transition: all .3s ease-in-out;
}
 
.giris-yap:focus {
background:#fff;
transition: all .3s ease-in-out;
-moz-transition: all .3s ease-in-out;
-webkit-transition: all .3s ease-in-out;
color:#1d2b37;
}
 
button{
border:none;
padding:17px;
width:105px;
color:white;
letter-spacing:2px;
text-shadow:1px 1px 0px rgba(0, 0, 0, 0.5);
cursor:pointer;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
margin-top:5px;
font-family: Helvetica, serif;
background: #fff6e4;
background: -moz-linear-gradient(top,#8b9da9 0%, #687e8d 100%);
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#8b9da9), color-stop(100%,#687e8d));
background: -webkit-linear-gradient(top,#8b9da9 0%,#687e8d 100%);
background: -o-linear-gradient(top,#8b9da9 0%,#687e8d 100%);
background: -ms-linear-gradient(top,#8b9da9 0%,#687e8d 100%);
background: linear-gradient(to bottom,#8b9da9 0%,#687e8d 100%);
}
 
button:active {
box-shadow:inset 0px 2px 1px rgba(0, 0, 0, 0.4);
}
h2,h3 {
display:inline-block;
position:relative;
bottom:5px;
margin:0px;
left:6px;
color:white;
font: 500 0.8em Arial;
}
 
h3{float:left; margin-top:20px; border-bottom:1px dotted white;}
.icerik form {
margin-top:100px;
}
#ziyaretci title{
    width:50px;
}
</style>
<body>
<div class="ekran1">
<a href="index.php"><img id="logo" src="butonlar/logo.png"/></a>
<div class="ekran2" >  
<div class="aradiv" ></div>
    <div class="solmenu">
    
    </div>
    <div class="icerik">
<form action="uyelikayarlari.php" method="POST"> <section>
<input class="giris-yap" type="text" name="kullaniciadi" placeholder="Kullanıcı adı" />
<input class="giris-yap" type="password" name="sifre" placeholder="Şifreniz"/>
<button  name="sbmt"type="submit" value="submit">Giriş</button>
<br/>
<br/>
<button><a href="uyeol.php">ÜYE<br>OL</a></button>&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
<button title="Üye olmadan görüş ve öneri ayrıca kaynakları ve notları göremezsiniz.
<br> Tanıtım ve teknoloji haberlerini   görebilirsiniz."><a href="tanitim.php">ZİYARETÇİ GİRİŞİ</button></a>
</section>

</form>

 </div>
    <div class="sagmenu">
    
    </div>
    
</div>
<a href="https://www.facebook.com/Binotnet-446051389498171/?modal=admin_todo_tour"><img id="resim1" src="butonlar/face.png"/></a>
<a href="https://twitter.com/binotnet"><img id="resim2" src="butonlar/twit.png"/></a>
<a href="hakkimizda.php"><img id="resim3" src="butonlar/hakkımızda.png"/></a>
<a href="iletisim.php"><img id="resim4" src="butonlar/iletişim.png"/></a></div>
</body>
</html>
