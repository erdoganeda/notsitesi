<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="css/style.css" rel="stylesheet" type="text/css"/>
</head>

</script>

    <style>
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.show {display:block;}
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
    <div class="dropdown">
  <button id="myBtn" class="dropbtn">Bilişim Dersleri</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="algoritma.php">Algoritma ve Programlamaya Giriş</a>
    <a href="programlama.php">Programlama Teknikleri</a>
    <a href="gorsel.php">Görsel Programlama</a>
    <a href="internet.php">İnternet Programlama</a>
    <a href="grafik.php">Grafik ve Oyun Tasarımı</a>
    <a href="mobil.php">Mobil Programlama</a>
    <a href="bilisim.php">Bilişim Güvenliği</a>
  </div>
  <button id="myBtn" class="dropbtn">İşletme ve Yönetim Dersleri</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="algoritma.php">Algoritma ve Programlamaya Giriş</a>
    <a href="programlama.php">Programlama Teknikleri</a>
    <a href="gorsel.php">Görsel Programlama</a>
  </div>
  </div>
  <script>
document.getElementById("myBtn").onclick = function() {myFunction()};
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}
     </script>

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