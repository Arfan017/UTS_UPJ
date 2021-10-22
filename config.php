<?php
$host = 'sql102.epizy.com';
$username = 'epiz_30126610';
$password = 'jYc2hLEvWvD';
$bd = 'epiz_30126610_UTS';

$con = mysqli_connect($host, $username, $password, $bd);

if (mysqli_connect_errno()) {
    echo("Koneksi Gagal");
}
