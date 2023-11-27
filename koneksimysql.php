<?php
define('host','localhost');
define('user','root');
define('password','');
define('database','android3');

$conn = mysqli_connect(host,user,password, database);
if (!$conn) {
    # code...
    echo "Koneksi Gagal : ".mysqli_connect_error();
    exit();
}
