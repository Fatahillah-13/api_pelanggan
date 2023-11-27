<?php
include "koneksimysql.php";
header('content-type : application/json');

$email=$_POST['email'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$kota=$_POST['kota'];
$provinsi=$_POST['provinsi'];
$telp=$_POST['telp'];
$kodepos=$_POST['kodepos'];

$getresult=0;
$message="";

$sql="update tbl_pelanggan set nama='".$nama."',
alamat='".$alamat."',
kota='".$kota."',
provinsi='".$provinsi."',
telp='".$telp."',
kodepos='".$kodepos."'
where email='".$email."' ";

$hasil=mysqli_query($conn,$sql);
if ($hasil) {
    $getresult=1;
    $message="Simpan Berhasil";
}else {
    $getresult=0;
    $message="Simpan Gagal : ".mysqli_error($conn);
}

echo json_encode(array('result'=>$getresult,'message'=>$message));
