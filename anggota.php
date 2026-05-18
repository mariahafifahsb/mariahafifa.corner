<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Anggota</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(180deg,#e6fff5,#ffffff);
    margin:0;
}

/* HEADER */
header{
    padding:20px 40px;
    font-weight:bold;
    font-size:20px;
    color:#1b4332;
}

/* CONTAINER */
.container{
    padding:40px;
}

/* TITLE */
h2{
    color:#1b4332;
}

/* BUTTON */
.btn{
    background:linear-gradient(135deg,#52b788,#40916c);
    color:white;
    padding:10px 20px;
    border-radius:25px;
    text-decoration:none;
}

/* CARD */
.card{
    background:white;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
    margin-top:20px;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
}

th{
    background:#40916c;
    color:white;
    padding:12px;
}

td{
    padding:12px;
    border-bottom:1px solid #eee;
}

/* BUTTON HAPUS */
.hapus{
    background:#d00000;
    color:white;
    padding:6px 12px;
    border-radius:10px;
    text-decoration:none;
}
</style>

</head>

<body>

<header>Mariah Afifa Library</header>

<div class="container">
<h2>Data Anggota</h2>

<a href="tambah.php" class="btn">+ Tambah Anggota</a>

<div class="card">
<table>
<tr>
<th>No</th>
<th>Nama</th>
<th>Email</th>
<th>No HP</th>
<th>Aksi</th>
</tr>

<?php
$no=1;
$data = mysqli_query($conn,"SELECT * FROM anggota");

while($d = mysqli_fetch_assoc($data)){
?>

<tr>
<td><?= $no++; ?></td>
<td><?= $d['nama']; ?></td>
<td><?= $d['email']; ?></td>
<td><?= $d['no_hp']; ?></td>
<td>
<a href="hapus.php?id=<?= $d['id']; ?>" class="hapus" onclick="return confirm('Hapus data?')">Hapus</a>
</td>
</tr>

<?php } ?>

</table>
</div>
</div>

</body>
</html>
