<?php
include "koneksimysql.php";
header('content-type: application/json');

$email = $_POST['email'];
$nama = $_POST['nama'];
$password = $_POST['password'];

$getstatus = 0;
$getresult = 0;
$message = "";

$sql = "select * from tbl_pelanggan where email= '$email'";
$hasil = mysqli_query($conn, $sql);
if ($hasil = mysqli_fetch_object($hasil)) {
    # code...
    $getstatus = 0;
    $message = "User sudah ada";
} else {
    $sql = "insert into tbl_pelanggan(nama,email,password) values('$nama','$email',md5('$password'))";
    $hasil = mysqli_query($conn, $sql);
    if ($hasil) {
        $getresult = 1;
        $message = "Simpan berhasil";
    } else {
        $getresult = 0;
        $message = "Simpan Gagal : " . mysqli_error($conn);
    }
}

echo json_encode(array('status' => $getstatus, 'result' => $getresult, 'message' => $message));
