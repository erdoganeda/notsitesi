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
</style>
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
    <br/>
    <br/>
    <form action="https://formspree.io/Edaerdogan280@gmail.com" method="post"> 
    <div class="input-block">
        <label for="contact_author">
            <strong>Ad Soyad</strong></label>
            <input class="giris-yap" type="text" name="contact_author" id="contact_author" required>
    </div>
    <div class="input-block" >
        <label for="_replyto">
            <strong>Mail Adresi</strong></label>
            <input class="giris-yap"="email" name="_replyto" id="_replyto" required>
    </div>            
    <div class="input-block">
        <label for="contact_subject">
            <strong>İleti Konusu</strong></label>
            <input class="giris-yap" type="text" name="contact_subject" id="contact_subject" required>
    </div>
    <div class="textarea-block">
        <label for="contact_content">
            <strong>İleti</strong></label>
        <textarea name="contact_content" id="contact_content" required></textarea>
    </div>
    <input type="hidden" name="_next" value="http://localhost/binotnet/thanks.html"> <!-- Form formspree.io adresine gönderildikten sonra tekrar sitenize dönüş yapılarak sitenizdeki thanks.html dosyasının görüntülenmesini sağlıyor. -->
    <br/>
    <input type="submit" value="GÖNDER">
</form>
   
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