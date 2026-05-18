<?php include "koneksi.php"; ?>

<style>
body{
    font-family:Poppins;
    background:linear-gradient(#e6fff5,#fff);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:white;
    padding:30px;
    border-radius:20px;
    width:350px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border-radius:10px;
    border:1px solid #ccc;
}

button{
    width:100%;
    padding:10px;
    background:#40916c;
    color:white;
    border:none;
    border-radius:20px;
}
</style>

<div class="box">
<h2>Tambah Anggota</h2>

<form method="POST">
<input type="text" name="nama" placeholder="Nama">
<input type="text" name="email" placeholder="Email">
<input type="text" name="no_hp" placeholder="No HP">

<button name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn,"INSERT INTO anggota VALUES(
        '',
        '$_POST[nama]',
        '$_POST[email]',
        '$_POST[no_hp]'
    )");

    echo "Berhasil! <a href='anggota.php'>Kembali</a>";
}
?>
</div>
