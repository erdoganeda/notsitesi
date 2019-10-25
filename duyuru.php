<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/duyuru.css" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
</head>
<style>
#personel {
border-collapse: collapse;
width: 100%;
}
 
#personel td, #personel th {
border: 1px solid #ddd;
padding: 8px;
}
 
#personel tr:nth-child(even){background-color: #f2f2f2;}
 
#personel tr:hover {
background-color: #2ecc71;
color:#fff;
}
 
#personel th {
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #2c3e50;
color: white;
}
</style>
</script>
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
    <div id="perde"></div>
<div id="duyuru">
<div class="kapat" onclick="document.getElementById('duyuru').style.display = 'none';document.getElementById('perde').style.display = 'none';">X</div>
<h1>Yönetim Bilişim Sistemleri</h1>
<h2><p>Görsel Programlama Dersi LAB A 16:00</u><br /><br /></h2>

</div>
<table id="personel">
<tr>
<th>Tarih</th>
<th>Ders</th>
<th>Konu</th>
<th>Saat</th>
</tr>
<tr>
<td>28/05/2019</td>
<td>Algoritma Ve Prog.Gir</td>
<td>Ödev Gösterimi</td>
<td>16:00</td>


</tr>
<tr>
<td>29/05/2019</td>
<td>Bilişim Projesi</td>
<td>Ödev Gösterimi</td>
<td>10:00</td>
</tr>
<tr>
<td>30/05/2019</td>
<td>Görsel Programlama</td>
<td>Ödev Gösterimi</td>
<td>11:00</td>
</tr>
</table>
</body>
</html>
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