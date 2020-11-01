<script src="https://kit.fontawesome.com/c333d3440e.js" crossorigin="anonymous"></script>
<div class="row">
    <div class="pull-left">
        <br>
        <h4>Daftar Barang</h4>
    </div>
    <br>
    <div class="pull-right">
        <a href="index.php?mod=barang&page=add">
        <button class="btn btn-primary" >add</button>
    </a>
    </div>
</div>
<div class="row">
    <table class="table">
        <thead>
            <tr>
            <td>No</td>
            <td>Nama Barang </td><td>Harga</td><td>Id Paket</td><td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            <?php if($barang != NULL){
                $no=1;
                foreach($barang as $row){?>
                <tr>
                    <td><?=$no;?></td><td><?=$row['nama_brg'] ?></td><td><?=$row['harga'];?></td><td><?=$row['id_paket'];?></td>
                    <td>
                        <a href="index.php?mod=barang&page=edit&id=<?=($row["id_brg"])?>"><i class="fa fa-pencil"></i></a>
                        <a href="index.php?mod=barang&page=delete&id=<?=($row["id_brg"])?>"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
           <?php $no++; }
            }?>
        </tbody>
    </table>
</div>