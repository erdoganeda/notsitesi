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
<body>
<div class="ekran1">
<a href="index.php"><img id="logo" src="butonlar/logo.png"/></a>
<div class="ekran2" >  
<div class="aradiv" ></div>
    <div class="solmenu">
    
     <a href="teknoloji.php"><img src="butonlar/teknoloji.png"/></a><br><br>
  
    </div>
    <div class="icerik" style="height: 588px;width:855px; overflow-x: hidden; overflow-y: scroll;">

  <ul class="bxslider">	
  <li><img src="images/2.png"></li>
  <li><img src="images/1.png" /></li>
  <li><img src="images/bir.png" /></li>
   </ul>
   <script>
    $(document).ready(function(){
  $('.bxslider').bxSlider({
      captions: true
});
});
    </script>
   
    </div>
    <div class="sagmenu">
    &nbsp;&nbsp;&nbsp;&nbsp;
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