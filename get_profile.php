<?php
include "koneksimysql.php";
header('content-type : application/json');

$email=$_GET['email'];
$datauser=array();
$getstatus=0;

$sql="select * from tbl_pelanggan where email='".$email."'";
$hasil=mysqli_query($conn,$sql);
$data=mysqli_fetch_object($hasil);
if (!$data) {
    # code...
    $getstatus=0;
}else {
    $getstatus=1;
    $datauser=array('email'=>$data->email,
    'nama'=>$data->email,
    'alamat'=>$data->email,
    'kota'=>$data->email,
    'provinsi'=>$data->email,
    'kodepos'=>$data->email,
    'telp'=>$data->email,
    'email'=>$data->email);
}
echo json_encode(array('result'=>$getstatus,'data'=>$datauser));
