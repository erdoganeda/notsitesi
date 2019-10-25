 <?php 
    include('inc/header.php'); 
    include('inc/fonk.php'); 
    ?>
    <body>
     
        <div class="container">
            <div class="row">
                <div class="col-md-6">     
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Ana Sayfa</a>
                        </li>
                        <li class="breadcrumb-item active">Kullanıcı Ekle</li>
                    </ol>


                    <div class="card mb-3">

                        <div class="card-body">

                            <form method="post" action="" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input required type="text" class="form-control" name="adminname" placeholder="Kullanıcı Adınız">
                                </div>
                                <div class="form-group">
                                    <label>adminpass</label>
                                    <input required type="text" class="form-control" name="adminpass" placeholder="Yeni adminpass">
                                </div>
                                <div class="form-group">
                                    <label>adminpass</label>
                                    <input required type="text" class="form-control" name="adminpasstekrar" placeholder="adminpassyı Tekrar Giriniz">
                                </div>



                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Kaydet</button>
                                    <script type="text/javascript" src="js/sweetalert.min.js"></script>
                                    <?php
if ($_POST) { 

    $adminname = $_POST['adminname'];
    $adminpass = md5('56' . $_POST['adminpass'] . '23'); 
     
    $adminpasstekrar = md5('56' . $_POST['adminpasstekrar'] . '23');  
    $hata = "";  

    
    
    if ($adminname <> "" && $adminpass <> "" && $hata == "") { 
       
        $satir = [                       
            'adminname' => $adminname,
            'adminpass' => $adminpass, 

        ];

        if ($adminpass == $adminpasstekrar && $adminpass != '' && $adminname != '') {   

            $sql = "INSERT INTO admin SET adminname=:adminname, adminpass=:adminpass;";   
                
            $durum = $baglanti->prepare($sql)->execute($satir);

            if ($durum) {
                echo '<script>swal("Başarılı","Güncellendi","success").then((value)=>{ window.location.href = "indexx.php"}); </script>'; 
                               
            }
        }
        else {
            echo '<script>swal("Hata","Hatalı , Lütfen bilgilerinizi kontrol ediniz.","error");</script>'; 
           
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




</body>



<?php
include('inc/footer.php'); 
?>