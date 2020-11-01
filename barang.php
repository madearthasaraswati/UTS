<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET['page']){
    case 'add':
        $content="views/shop/tambah.php";
        include_once 'views/template.php';
    break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            //validasi
            if(empty($_POST['nama_brg'])){
                $err['nama_brg']="Nama Pelanggan Wajib";
            }
            if(empty($_POST['harga'])){
                $err['harga']="Jenis Cucian Wajib";
            }
            if(!is_numeric($_POST['id_paket'])){
                $err['id_paket']="Paket Wajib Terisi";
            }

             //validasi data
            if(!empty($_FILES['fileToUpload']['name'])){
            $target_dir = "../media/";
$photo=basename($_FILES["fileToUpload"]["name"]);
$target_file = $target_dir . $photo;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




// Check if file already exists
if (file_exists($target_file)) {
    $err['fileToUpload']= "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1048576) {
    $err['fileToUpload']= "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    $err['fileToUpload']= "Sorry, only JPG, JPEG, PNG & GIF are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 1) {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    $_POST['photo']=$photo;
    if(isset($_POST['photo_old']) && $_POST['photo_old']!=''){
        unlink($target_dir.$_POST['photo_old']);
    }
  }
    else{
        $err['fileToUpload']= "Sorry, There was an error uploading file.";
    }
}
}
            if(!isset($err)){
                $id_pegawai=$_SESSION['login']['id'];
                if(!empty($_POST['id_brg'])){
                    //update
                    $sql="update barang set nama_brg='$_POST[nama_brg]',harga='$_POST[harga]', id_paket='$_POST[id_paket]',
                    id_pegawai='$_POST[id_pegawai]', photo='$_POST[photo]' where id_brg='$_POST[id_brg]'";
                }else{
                    //save
                    $sql = "INSERT INTO barang (nama_brg,harga,id_paket,id_pegawai,photo) 
                    VALUES ('$_POST[nama_brg]','$_POST[harga]','$_POST[id_paket]','$_POST[id_pegawai]','$_POST[photo]')";
                }
                    if ($conn->query($sql) === TRUE) {
                        header('Location: '.$con->site_url().'/admin/index.php?mod=barang');
                    } else {
                        $err['msg']= "Error: " . $sql . "<br>" . $conn->error;
                    }
            }
        }else{
            $err['msg']="tidak diijinkan";
        }
        if(isset($err)){
            $content="views/shop/tambah.php";
            include_once 'views/template.php';
        }
    break;
    case 'edit':
       $barang="SELECT * FROM barang WHERE id_brg='$_GET[id]'";
      $barang=$conn->query($barang);
      $_POST=$barang->fetch_assoc();
      
        $content="views/shop/tambah.php";
        include_once 'views/template.php'; 
        break;
    case 'delete';
        $barang ="delete from barang where id_brg='$_GET[id]'";
        $barang=$conn->query($barang);
        header('Location: '.$con->site_url().'/admin/index.php?mod=barang');
    break;
    default:
        $sql="SELECT * FROM barang";
        $barang=$conn->query($sql);
        $conn->close();
        $content="views/shop/tampil.php";
        include_once 'views/template.php';
}
?>