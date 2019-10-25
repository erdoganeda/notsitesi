<?php include ("ayar.php");?>
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

    <table cellpadding="4" cellspacing="0" border="0" width="300" style="font-family:Tahoma; font-size:14px; border:solid; border-color:#999999; border-width:1px;">

<tr style="background-color:#dddddd;"><td>No</td><td>Alan1</td><td>Alan2</td><td>İşlem</td></tr>
<?php
foreach($db->query('SELECT * FROM user order by no asc') as $listele) {
    $no = $listele['Userid'];
	$alan1 = $listele['Username'];
    $alan2 = $listele['Userpass'];
    $alan3 = $listele['Usermail'];
    $alan4 = $listele['Usertel'];

	echo '<form action="sil.php" method="POST"><tr><td>'.$no.'</td><td>'.$alan1.'</td><td>'.$alan2.'</td><td>'.$alan3.'</td><td>'.$alan4.'</td><td><input type="text" name="no" style="display:none; width:30px;" value="'.$no.'"><input type="submit" value="Sil"></td></tr></form>';
	}?>
</table>
 
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