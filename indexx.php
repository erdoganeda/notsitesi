<?php
include('inc/header.php'); 
include('inc/fonk.php'); 
?>
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
<style>
#frmsil{
float:left;
}
  table {
   width: 100%;
   color: black;
   font-family: calibri;
   font-size: 15px;
   text-align: left;
     } 
  th {
   background-color: #588c7e;
   color: white;
    }
    a:link {text-decoration: none;}
input{
    border:3px solid #588c7e;
    border-radius:5px;
    height:50px;
    width:20%;
    margin:15px;
      }   
      #sil{
          width:100px;
      }  
  tr:nth-child(even) {background-color: #f2f2f2}
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
    <br>
    <h3>ÜYELER</h3>
    <input type="text" name="text" id="text">
        <form id="frmsil"action="#" method="post" >
        <input id="sil"name="sbmt" width="50px" type="submit" value="Sil" >
         </form>
        <?php
         if($_SERVER['REQUEST_METHOD']=="POST")
         {
          if(isset($_POST["sbmt"]))
          {
    $username=$_POST["text"];

    $database_connection = new PDO("mysql:host=localhost;dbname=pdo_test;charset=utf8","root","");
    $affected_rows = $database_connection->exec("DELETE FROM user WHERE Username='".$username."'");
    $database_connection = null; 
    echo $affected_rows;}
}
?>

    <table>
 <tr>
  <th>Id</th> 
  <th>Username</th> 
  <th>Password</th>
  <th>Email</th>
  <th>Tel</th>
 </tr>
 
<?php
$conn = mysqli_connect("localhost", "root", "", "binotnet");
 
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Userid,Username,Userpass,Usermail,Usertel FROM user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Userid"]. "</td><td>" . $row["Username"] . "</td><td>". $row["Userpass"]. "</td><td>". $row["Usermail"]. "</td><td>". $row["Usertel"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
    <div class="container">      
        <div class="col-md-6">
            <div class="text-center">
            
     
            <br>
            <hr width="1000" size="90px"/> 
                
                <a class="btn btn-danger" href="cikis.php">Çıkış YAP</a>            
            </div>
            <br/>
        </div>
        <div class="col-md-6">
         <div class="card">
            <a class="btn btn-success" href="uyeol.php">Kullanıcı Ekle</a> 
            <br>
            <br>
            <h2>ADMİNLER</h2>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <th>ID</th>
                            <th>Kullanıcı Adı</th>
                            <th>Düzenle</th>
                            <th>Sil</th>
                        </thead>
                        <tbody>
                       

                            <?php
            $sorgu = $baglanti->prepare("Select * from admin"); 
            $sorgu->execute();
            while ($sonuc = $sorgu->fetch()) {   
                ?>
                <tr>
                    <td><?=$sonuc['id']?></td>
                    <td><?=$sonuc['adminname']?></td>
                    <td><a href="kullaniciGuncelle.php?id=<?= $sonuc["id"] ?>"><img height="25" width="25" src="img/duzenle.png"/></a></td>    
                    <td>

                    </a>
                    <a data-toggle="modal" href="#" data-target="#sil<?php echo $sonuc["id"] ?>">
                        <img height="25" width="25" src="img/sil.png"/></a>
                        
                        <div class="modal fade" id="sil<?php echo $sonuc["id"] ?>" tabindexxx="-1" role="dialog"
                            aria-labelledby="myModalLabel">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">adminname sil</h4>
                                        </div>
                                        <div class="modal-body">
                                            <h2 style="color: red; text-align: center">Önemli Uyarı !</h2>

                                            <h4 style="text-align: center"><b><?php echo $sonuc["adminname"] ?><br></b> Adlı
                                            kişiyi silmek istediğinizden emin misiniz?</h4>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                                                Vazgeç
                                            </button>
                                            <a href="adminnamesil.php?sayfa=admin&id=<?= $sonuc["id"] ?>" class="btn btn-danger">Sil</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </td>
                        </div>
                        
   
                        <?php
        } 
        ?>
   </tr>
</tbody>
</table>
</div>                   
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
<?php
include('inc/footer.php'); 
?>


 </div>   
</div>
</div>
</body>
</html>
