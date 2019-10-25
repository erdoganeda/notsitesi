<?php
include('inc/header.php'); 
include('inc/fonk.php');  

$sorgu = $baglanti->prepare("SELECT * FROM admin Where id=:id");

$sorgu->execute(['id' => (int)$_GET["id"]]);
    $sonuc = $sorgu->fetch();
    ?>
    <div class="container">
    	<div class="row">
    		<div class="col-md-6">
    			<ol class="breadcrumb">
    				<li class="breadcrumb-item">
    					<a href="admin.php">Admin</a>
    				</li>
    				<li class="breadcrumb-item active">Kullanıcı Düzenle</li>
    			</ol>
    			<div class="card mb-3">

    				<div class="card-body">

    					<form method="post" action="" enctype="multipart/form-data">

    						<div class="form-group">
    							<label>Kullanıcı Adı</label>
    							<input required type="text" value="<?= $sonuc["adminname"] ?>" class="form-control" name="adminname"
    							placeholder="Kullanıcı Adınızı Girin">
    						</div>

    						<div class="form-group">
    							<label>Yeni adminpass</label>
    							<input required type="text" class="form-control" name="adminpass"
    							placeholder="Yeni adminpass">
    						</div>
    						<div class="form-group">
    							<label>adminpass Tekrar</label>
    							<input required type="text" class="form-control" name="adminpasstekrar"
    							placeholder="adminpass Tekrar">
    						</div>


    						<div class="form-group">
    							<button type="submit" class="btn btn-primary">Güncelle</button>
    							<script type="text/javascript" src="js/sweetalert.min.js"></script>

    							<?php
    							
if ($_POST) { 

    $adminname = $_POST['adminname'];
    $adminpass = md5('56' . $_POST['adminpass'] . '23');  
    
    $adminpasstekrar = md5('56' . $_POST['adminpasstekrar'] . '23');   
    $hata = "";


    
    if ($adminname <> "" && $adminpass <> "" && $hata == "") { 
      
    	$satir = [
    		'id' => $_GET['id'],            
    		'adminname' => $adminname,
    		'adminpass' => $adminpass, 


    	];

    	if ($adminpass == $adminpasstekrar && $adminpass != '' && $adminname != '') {


    		$sql = "UPDATE admin SET adminname=:adminname,adminpass=:adminpass WHERE id=:id;";
    		$durum = $baglanti->prepare($sql)->execute($satir);

    		if ($durum) {
    			echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "admin.php"});

    			</script>';
            
    		} 
    	}
    	else {
            echo '<script>swal("Hata","Hatalı, Lütfen Bilgilerinizi doğru girdiğinizden emin olunuz.","error");</script>'; // id bulunamadıysa veya sorguda hata varsa hata yazdırıyoruz.
        }
    }
    if ($hata != "") {
    	echo '<script>swal("Hata","' . $hata . '","error");</script>'; 
    }
}

?>
</div>




</form>


</div>
</div>
</div>
</div>
</div>

<?php
include('inc/footer.php'); // Footerımzı bağlıyoruz
?>