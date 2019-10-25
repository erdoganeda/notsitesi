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

  table {
 
   width: 100%;
   color: black;
   font-family: calibri;
   font-size: 25px;
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
    width:10%;
    margin:15px;
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
        <input type="text" name="text" id="text">
        <form action="#" method="post">
        <input id="sil"name="sbmt" type="submit" value="Sil" >&nbsp;&nbsp;
        
<input id="ekle"name="sbmt" type="submit" value="Ekle" >&nbsp;&nbsp;
        <input id="düzenle" type="button" value="Düzenle">
    </form>
        <?php
         if($_SERVER['REQUEST_METHOD']=="POST")
         {
          if(isset($_POST["sbmt"]))
          {
    $username=$_POST["text"];

    $database_connection = new PDO("mysql:host=localhost;dbname=pdo_test;charset=utf8","root","");
    $affected_rows = $database_connection->exec("DELETE FROM user WHERE Username='".$username."'");
    $database_connection = null; // Bağlantıyı sonlandır
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
  // Check connection
  if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT Userid,Username,Userpass,Usermail,Usertel FROM user";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
   // output data of each row
   while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["Userid"]. "</td><td>" . $row["Username"] . "</td><td>". $row["Userpass"]. "</td><td>". $row["Usermail"]. "</td><td>". $row["Usertel"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
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
