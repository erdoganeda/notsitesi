<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script language="javascript" type="text/javascript" src="js/fonksiyonlar.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/dersler.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript">
function showMe(blockId) {
     if ( document.getElementById(blockId).style.display == '' ) {
          document.getElementById(blockId).style.display = 'block'; }
else if ( document.getElementById(blockId).style.display == 'block' ) {
          document.getElementById(blockId).style.display = ''; }
}</script>
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
    <div class="dropdown">
    <button class="mainmenubtn">Bilişim Dersleri</button>
    <div class="dropdown-child">
      <a  href="javascript:;" onclick="showMe('p1');">Algoritma ve Programlamaya Giriş</a>
      <a  href="javascript:;" onclick="showMe('p2');">Programlama Teknikleri</a>
      <a  href="javascript:;" onclick="showMe('p3');">Görsel Programlama</a>
      <a  href="javascript:;" onclick="showMe('p4');">İnternet Programlama</a>
      <a  href="javascript:;" onclick="showMe('p5');">Grafik ve Oyun Tasarımı</a>
      <a  href="javascript:;" onclick="showMe('p6');">Mobil Programlama</a>
      <a  href="javascript:;" onclick="showMe('p7');">Bilişim Güvenliği</a>
    </div>
  </div>
  <div class="dropdown">
    <button class="mainmenubtn">İşletme Dersleri</button>
    <div class="dropdown-child">
    <a href="javascript:;" onclick="showMe('p8');">İşletme Bilimine Giriş</a>
    <a href="javascript:;" onclick="showMe('p9');">Yönetim ve Organizasyon</a>
    <a href="javascript:;" onclick="showMe('p10');">Girişimcilik</a>
    </div>
  </div>
  <p id="p1">
  <b>Algoritma Nedir?</b><br>
Algoritmayı kısaca bir problemin çözümünde izlenecek yol olarak tanımlayabiliriz. Genelde bilgisayar biliminde ve matematikte tanımlanan, belli bir başlangıcı ve sonu olan çözüm yöntemidir.

Algoritmanın en önemli özelliklerinden birisi sonlu olmasıdır. Yani bir algoritma hangi şartta ve hangi girdide olursa olsun mutlaka sonlanacaktır. Sonsuza kadar çalışan bir koda algoritma denilemez.
<br><b>Zaman Karmaşıklığı:</b>

İçinde on binlerce sayının bulunduğu bir veri düşünelim amacımız bu sayıları küçükten büyüğe doğru sıralamak olsun. 
Bu sıralama işlemini ne kadar kısa sürede tamamlarsak algoritmamız o kadar başarılıdır ve zaman karmaşıklığı o kadar düşüktür.
 Yazılım dillerinde zamanı etkileyen en temel faktör yapılan işlem sayısıdır. Normal bir bilgisayar 1 saniyede 200 000 000 (200 milyon) işlem yapabilir. İşlem derken kastettiğim basit matematik işlemleri, değişkenlere veri atama işlemleri gibi örnekler verilebilir. Yani uzun lafın kısası verimli algoritma yazarken amacımız olabildiğince az işlem yapmak olacaktır.

<br><b>Hafıza Karmaşıklığı:</b>
Temel olarak algoritmanın çalıştığı bilgisayardan ödünç aldığımız hafıza miktarıdır. Aldığımız hafıza miktarı ne kadar az ise bu algoritma o kadar az maaliyetlidir. Bu da bu algoritmayı daha verimli kılar.
  <br><b><a href="algoritma.php">Soru örnekleri için tıklayınız</a> </b></p>
   <p id="p2">
   <br><b><a href="programlama.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  
  <p id="p3">
  <br><b><a href="gorsel.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  <p id="p4">
  <br><b><a href="internet.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  <p id="p5">
  <br><b><a href="grafik.php">Soru örnekleri için tıklayınız</a> </b> </p>
    
  <p id="p6">
  <br><b><a href="mobil.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  <p id="p7">
  <br><b><a href="bilisim.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  <p id="p8">
  <br><b><a href="isletme.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  <p id="p9">
  <br><b><a href="yonetim.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
  <p id="p10">
  <br><b><a href="girisimcilik.php">Soru örnekleri için tıklayınız</a> </b>
  </p>
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