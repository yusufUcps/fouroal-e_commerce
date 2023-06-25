<!DOCTYPE html>
<html>
<head>
    <title>SAHABAT ANDA</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"></link>
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>


</head>
<body>
<?php
    include "crud.php";
?>
<div class="container-fluid">
    <div class="row flex-nowrap" >
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light" >
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-blue min-vh-100">
                    <span class="fs-5 d-none d-sm-inline text-blue">Menu</span>
                <br>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start nav-pills nav-fill" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">
                            <span class="ms-1 d-none d-sm-inline">Cetak</span>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a href="add.php" class="nav-link active" aria-current="page">
                            <span class="ms-5 d-none d-sm-inline">Tambah</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
        <div class="mx-auto">
            <h1 style="color: rgb(21, 21, 142);">SAHABAT ANDA</h1>
        <!-- untuk memasukkan data -->
        <div class="container">
        <div class="card mt-5">
            <div class="card-header text-white bg-primary">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                    <meta content ="1; url=add.php" http-equiv="refresh">
                <?php
                }
                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label for="kb" class="col-sm-2 col-form-label">Kode Barang</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kb" name="kb" value="<?php echo $kb ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="gambar" class="col-sm-2 col-form-label">Foto Produk</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $gambar?> required">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama Produk</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="perusahaan" class="col-sm-2 col-form-label">Nama Perusahaan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="perusahaan" name="perusahaan" value="<?php echo $perusahaan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jenis" class="col-sm-2 col-form-label">Jenis</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenis" id="jenis">
                                <option value="">- Pilih Jenis Barang -</option>
                                <option value="Makanan" <?php if ($jenis == "Makanan") echo "selected" ?>>Makanan</option>
                                <option value="Minuman" <?php if ($jenis == "Minuman") echo "selected" ?>>Minuman</option>
                                <option value="Obat" <?php if ($jenis == "Obat") echo "selected" ?>>Obat</option>
                                <option value="Perlengkapan" <?php if ($jenis == "Perlengkapan") echo "selected" ?>>Perlengkapan</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="stok" name="stok" value="<?php echo $stok ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="harga" name="harga" value="<?php echo $harga ?>">
                        </div>
                    </div>
                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary" />
                        <a href="add.php" class="btn btn-secondary">kembali</a>
                    </div>
                </form>
            </div>
        </div>
        </div>

    <div class="container">
    <div class="card mt-5">
            <div class="card-header text-white bg-primary">
                Data Barang
            </div>
            <div class="card-body">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Kode Barang</th>
                            <th scope="col">Foto Barang</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Perusahaan</th>
                            <th scope="col">Jenis</th>
                            <th scope="col">Stok</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from barang order by tanggal desc";
                        $q2     = mysqli_query($koneksi, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_assoc($q2)) {
                            $kb             = $r2['kb'];
                            $gambar         = $r2['gambar'];
                            $nama           = $r2['nama'];
                            $perusahaan     = $r2['perusahaan'];
                            $jenis          = $r2['jenis'];
                            $stok           = $r2['stok'];
                            $harga          = $r2['harga'];
                            $rupiah = "Rp " . number_format($harga,2,',','.');
                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $kb ?></td>
                                <td scope="row">
                                    <img width=75; height=75; src='./img/<?php echo $gambar ?>'>
                                </td>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $perusahaan ?></td>
                                <td scope="row"><?php echo $jenis ?></td>
                                <td scope="row"><?php echo $stok ?></td>
                                <td scope="row"><?php echo $rupiah ?></td>
                                <td scope="row">
                                    <a href="add.php?op=edit&kb=<?php echo $kb?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="add.php?op=delete&kb=<?php echo $kb?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>
            
        </div>
    </div>
</div>

<script>
$(document).ready( function () {
  var table = $('#example').DataTable( {
    pageLength : 5,
    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
  } )
} );


</script>
</body>
</html>
