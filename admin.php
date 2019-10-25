<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
     <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="http://bxslider.com/lib/jquery.bxslider.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">      
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    </script>
        <style>
    

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>




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

   <body class="bg-dark">
<?php
session_start();
include("inc/fonk.php"); 


if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    header("location:indexx.php");
} 
else if (isset($_COOKIE["cerez"])) {


    $sorgu = $baglanti->prepare("select adminname from admin");
    $sorgu->execute();


    while ($sonuc = $sorgu->fetch()) {
      
        if ($_COOKIE["cerez"] == md5("aa" . $sonuc['adminname'] . "bb")) {

            $_SESSION["Oturum"] = "6789";
            $_SESSION["adminname"] = $sonuc['adminname'];

          
            header("location:indexx.php");
        }
    }
}

if ($_POST) {
    $txtadminname = $_POST["txtadminname"]; 
    $txtadminpass = $_POST["txtadminpass"]; 
}
?>
<div class="splash-container">
    <div class="card">
        <div class="card-header text-center">Login</div>
        <div class="card-body">
            <form id="form1" method="post">
                <div class="form-group">
                    <div class="form-group">
                        <input type="text" name="txtadminname" value='<?php echo @$txtadminname ?>' id="inputadminname" class="form-control" placeholder="Kullanıcı Adı" required autofocus>
                 
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="adminpass" required name="txtadminpass">
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" ID="ckbHatirla" name="ckbHatirla"/>
                            Beni hatırla
                        </label>
                        <br>
                        <?php
                        
                        if ($_POST) {
                            
                            $sorgu = $baglanti->prepare("select adminpass from admin where adminname=:adminname");
                            $sorgu->execute(array('adminname' => htmlspecialchars($txtadminname)));
                            $sonuc = $sorgu->fetch();

                            if (md5("56" . $txtadminpass . "23") == $sonuc["adminpass"]) {
                                $_SESSION["Oturum"] = "6789"; 
                                $_SESSION["adminname"] = $txtadminname;

                                if (isset($_POST["ckbHatirla"])) {
                                    setcookie("cerez", md5("aa" . $txtadminname . "bb"), time() + (60 * 60 * 24 * 7));
                                }
                                header("location:indexx.php"); 
                            } else {
                                
                                echo "Kullanıcı adı veya adminpass yanlış!";
                            }
                        }
                        ?>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Giriş"/>
            </form>

        </div>
    </div>
</div>

    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>

    
</div>
<a href="https://www.facebook.com/Binotnet-446051389498171/?modal=admin_todo_tour"><img id="resim1" src="butonlar/face.png"/></a>
<a href="https://twitter.com/binotnet"><img id="resim2" src="butonlar/twit.png"/></a>
<a href="hakkimizda.php"><img id="resim3" src="butonlar/hakkımızda.png"/></a>
<a href="iletisim.php"><img id="resim4" src="butonlar/iletişim.png"/></a>
</div>
</body>
</html>