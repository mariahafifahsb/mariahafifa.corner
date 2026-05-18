<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tambah Anggota</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(#e6fff5,#ffffff);
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
}

.box{
    background:white;
    padding:35px;
    width:400px;
    border-radius:20px;
    box-shadow:0 10px 20px rgba(0,0,0,0.1);
}

h2{
    color:#1b4332;
    text-align:center;
}

input{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ddd;
    border-radius:10px;
}

button{
    width:100%;
    padding:12px;
    border:none;
    border-radius:12px;
    background:#40916c;
    color:white;
    cursor:pointer;
}
</style>
</head>
<body>

<div class="box">
<h2>Tambah Anggota</h2>

<input type="text" id="nama" placeholder="Nama">
<input type="email" id="email" placeholder="Email">
<input type="text" id="hp" placeholder="No HP">

<button onclick="simpan()">Simpan</button>
</div>

<script>
function simpan(){
    let nama = document.getElementById("nama").value;
    let email = document.getElementById("email").value;
    let hp = document.getElementById("hp").value;

    if(nama=="" || email=="" || hp==""){
        alert("Input tidak lengkap!");
        return;
    }

    let anggota = JSON.parse(localStorage.getItem("anggota")) || [];

    anggota.push({nama,email,hp});

    localStorage.setItem("anggota",JSON.stringify(anggota));

    alert("Data berhasil ditambahkan!");
    window.location="data.html";
}
</script>

</body>
</html>
