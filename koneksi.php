<?php
$host = "sql107.infinityfree.com";
$user = "if0_41745486";
$pass = "x2VTFPHhKwunA9";
$db   = "if0_41745486_mariahafifa"; 

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
