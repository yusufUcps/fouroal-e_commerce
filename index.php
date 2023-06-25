<!DOCTYPE html>
<html>

<head>
    <title>SAHABAT ANDA</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.4.0/css/responsive.bootstrap5.min.css"></link>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css"></link>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.4.0/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <style>
        .buttons-pdf {
            width:70px;
        }
        .buttons-print {
            width:70px;
        }
        .buttons-excel {
            width:70px;
        }
        .buttons-colvis
        {
            float:right;
        }
        td,th,tr{
                text-align: center;
                vertical-align: middle;
        }
    </style>
</head>
<body>
<?php
    include "confiq.php";
?>
<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-light">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-blue min-vh-100">
                    <span class="fs-5 d-none d-sm-inline text-blue">Menu</span>
                <br>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start nav-pills nav-fill" id="menu">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link active" aria-current="page">
                            <span class="ms-5 d-none d-sm-inline">Cetak</span>
                        </a>
                    </li>
                    <br>
                    <li>
                        <a href="add.php" class="nav-link">
                            <span class="ms-1 d-none d-sm-inline">Tambah</span></a>
                    </li>
                </ul>
                <hr>
            </div>
        </div>
        <div class="col py-3">
        <div class="mx-auto">
        <h1 style="color: rgb(21, 21, 142);">SAHABAT ANDA</h1>
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
            <div class="cek1"></div>
            <h1 class="display-4" style="padding-bottom: 10px;text-align: center;">Penyimpanan</h1>
                <table id="example" class="table table-bordered table-striped table-light dt-responsive nowrap" style="width:100%">
                <thead >
                <tr ><th>NO</th><th>Kode Barang</th><th>Foto Barang</th><th>Nama Barang</th><th>Nama Perusahaan</th><th>jenis</th><th>Stok</th><th>Harga</th></tr>
                </thead>
                <tbody>
                <?php
                    $k = mysqli_query($koneksi, "SELECT * from barang");
                    $no=1;
                    foreach ($k as $row){
                        $harga = $row['harga'];
                        $rupiah = "Rp " . number_format($harga,2,',','.');
                        echo "<tr>
                            <td>$no</td>
                            <td>".$row['kb']."</td>
                            <td>
                            <img width=75; height=75; src='./img/".$row['gambar']."'>
                            </td>
                            <td>".$row['nama']."</td>
                            <td>".$row['perusahaan']."</td>
                            <td>".$row['jenis']."</td>
                            <td>".$row['stok']."</td>
                            <td>".$rupiah."</td>
                            </tr>";
                        $no++;
                    }
                    ?>
                </tbody>
                </table>
                <div class="cek"></div>
            </div>
        </div>
    </div>
            
        </div>
    </div>
</div>
    
<script>
$(document).ready(function() {
    $('#example').DataTable( {
    dom: 'B<"clear">lfrtip',
    buttons: [ 'print','pdf', 'excel', 'colvis' ],
    pageLength : 5,
    lengthMenu: [[5, 10, 15, 20], [5, 10, 15, 20]]
} );
$('.buttons-pdf').detach().prependTo('.cek')
$('.buttons-excel').detach().prependTo('.cek')
$('.buttons-print').detach().prependTo('.cek')
$('.buttons-colvis').detach().prependTo('.cek1')
} );


</script>
</body>
</html>
