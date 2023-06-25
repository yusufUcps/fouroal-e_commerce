<?php
include "confiq.php";

if (!$koneksi) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$kb           = "";
$gambar       = "";
$nama         = "";
$perusahaan   = "";
$jenis        = "";
$stok         = "";
$harga        = "";
$sukses       = "";
$error        = "";
$gambar1      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $kb         = $_GET['kb'];
    $sql4       = "select * from barang where kb = '$kb'";
    $q4         = mysqli_query($koneksi,$sql4);
    $r          = mysqli_fetch_assoc($q4);
    unlink("img/$r[gambar]"); 
    if($q4){
        $sql6       = "delete from barang where kb = '$kb'";
        $q6         = mysqli_query($koneksi,$sql6);
        if($q6){
            $sukses = "Berhasil hapus data";
        }
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $kb         = $_GET['kb'];
    $sql1       = "select * from barang where kb = '$kb'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_assoc($q1); 
    $kb1         = $r1['kb'];
    $kb         = $r1['kb'];
    $gambar1     = $r1['gambar'];
    $nama       = $r1['nama'];
    $perusahaan = $r1['perusahaan'];
    $jenis      = $r1['jenis'];
    $harga      = $r1['harga'];
    $stok       = $r1['stok'];

    if ($kb == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $gambar = $_FILES['gambar']['name'];
    $kb         = $_POST['kb'];
    $nama       = $_POST['nama'];
    $perusahaan = $_POST['perusahaan'];
    $jenis      = $_POST['jenis'];
    $harga      = $_POST['harga'];
    $stok       = $_POST['stok'];


    if ($kb && $nama && $perusahaan && $jenis && $stok && $harga && ($gambar||$gambar1)) {
        if ($op == 'edit') { //untuk update
            if($gambar){
            unlink("img/$r1[gambar]");
            $sql2       = "update barang set kb='$kb',gambar='$gambar',nama='$nama',perusahaan='$perusahaan',jenis='$jenis',stok='$stok',harga='$harga' where kb ='$kb1'";
            $q1         = mysqli_query($koneksi, $sql2);
            $s    = move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
                if ($q1 && $s) {
                    $sukses = "Data berhasil diupdate";
                } else {
                    $error  = "Data gagal diupdate";
                }
            }else{
            $sql2       = "update barang set kb='$kb',gambar='$gambar1',nama='$nama',perusahaan='$perusahaan',jenis='$jenis',stok='$stok',harga='$harga' where kb ='$kb1'";
            $q1         = mysqli_query($koneksi, $sql2);
                if ($q1) {
                    $sukses = "Data berhasil diupdate";
                } else {
                    $error  = "Data gagal diupdate";
                }
            }
        } else { //untuk insert
            $sql1   = "insert into barang(kb,gambar,nama,perusahaan,jenis,stok,harga) values ('$kb','$gambar','$nama','$perusahaan','$jenis','$stok','$harga')";
            $q1     = mysqli_query($koneksi, $sql1);
            $s    = move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$_FILES['gambar']['name']);
            if ($q1 && $s) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>