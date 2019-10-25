<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LOGIN </title>

   
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">      
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
        <style>

    
    
    </style>


</head>

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
                        <input type="password" id="inputPassword" class="form-control" placeholder="parola" required name="txtadminpass">
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
                              
                                echo "Kullanıcı adı veya parola yanlış!";
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
</body>

</html>
