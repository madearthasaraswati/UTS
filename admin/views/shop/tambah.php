<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<h4>Tambah Data</h4>
<hr>
<form action="index.php?mod=kuliner&page=save" method="POST" enctype="multipart/form-data">

    <div class="col-lg-md-6">
    <div class="form-group">
    <label for="">Nama Barang</label>
        <input type="text" name="nama_brg" required class="form-control" id="" value="<?=(isset($_POST['nama_brg']))?$_POST['nama_brg']:'';?>">
        <input type="hidden" name="id_brg" class="form-control" id="" value="<?=(isset($_POST['id_brg']))?$_POST['id_brg']:'';?>">
        
    </div>
     <div class="col-lg-md-6">
    <div class="form-group">
    <label for="">Harga</label>
        <input type="text" name="harga" required class="form-control" id="" value="<?=(isset($_POST['harga']))?$_POST['harga']:'';?>">
        <input type="hidden" name="id_brg" class="form-control" id="" value="<?=(isset($_POST['id_brg']))?$_POST['id_brg']:'';?>">
      
    </div>
     <div class="col-lg-md-6">
    <div class="form-group">
    <label for="">Id Paket</label>
        <input type="text" name="id_paket" required class="form-control" id="" value="<?=(isset($_POST['id_paket']))?$_POST['id_paket']:'';?>">
        <input type="hidden" name="id_brg" class="form-control" id="" value="<?=(isset($_POST['id_brg']))?$_POST['id_brg']:'';?>">
        <input type="hidden" name="photo_old" class="form-control" id="" value="<?=(isset($_POST['photo']))?$_POST['photo']:'';?>">
    </div>
    <div class="form-group">
        <label for="">Photo</label>
        <img src="../media/<?=$_POST['photo']?>" width="50">
        <input type="file" name="fileToUpload" class="form-control">
        <span class="text-danger"><?=(isset($err['fileToUpload']))?$err['fileToUpload']:'';?></span>
    </div>

    <div class="form-group">
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
    </div>

    </div>
    

</form>
