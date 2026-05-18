<?php 
session_start();
include "koneksi.php"; 
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(#e6fff5,#ffffff);
}

.login-box{
    background:linear-gradient(#52b788,#40916c);
    padding:35px;
    width:360px;
    border-radius:15px;
    color:white;
}

input{
    width:100%;
    padding:10px;
    margin:8px 0;
    border:none;
    border-radius:8px;
}

button{
    width:100%;
    padding:12px;
    background:#1b4332;
    color:white;
    border:none;
    border-radius:10px;
}

.pesan{ text-align:center; margin-top:10px; }
.sukses{ color:#d8f3dc; }
.gagal{ color:#ffccd5; }
.warning{ color:#ffe066; }
</style>
</head>

<body>

<div class="login-box">
<h2>Login</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button name="login">Masuk</button>
</form>

<?php
if(isset($_POST['login'])){

    $user = $_POST['username'];
    $pass = $_POST['password'];

    // 1. INPUT TIDAK LENGKAP
    if($user == "" || $pass == ""){
        echo "<div class='pesan warning'>Input tidak lengkap!</div>";
    } else {

        $data = mysqli_query($conn,"SELECT * FROM users WHERE username='$user'");
        $cek = mysqli_fetch_assoc($data);

        if($cek){
            // 2. LOGIN SUKSES
            if(password_verify($pass, $cek['password'])){
                $_SESSION['user'] = $user;
                echo "<div class='pesan sukses'>Login berhasil!</div>";
            } else {
                // 3. LOGIN GAGAL
                echo "<div class='pesan gagal'>Password salah!</div>";
            }
        } else {
            echo "<div class='pesan gagal'>Username tidak ditemukan!</div>";
        }
    }
}
?>

<div class="pesan">
Belum punya akun? <a href="register.php" style="color:#d8f3dc;">Register</a>
</div>

</div>

</body>
</html>
