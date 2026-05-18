<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Register</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
body{
    font-family:'Poppins',sans-serif;
    display:flex;
    justify-content:center;
    align-items:center;
    height:100vh;
    background:linear-gradient(#e6fff5,#fff);
}

.box{
    background:linear-gradient(#52b788,#40916c);
    padding:30px;
    border-radius:15px;
    width:350px;
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
    padding:10px;
    background:#1b4332;
    color:white;
    border:none;
    border-radius:10px;
}

.pesan{ text-align:center; margin-top:10px; }
</style>
</head>

<body>

<div class="box">
<h2>Register</h2>

<form method="POST">
<input type="text" name="username" placeholder="Username" required>
<input type="password" name="password" placeholder="Password" required>
<button name="daftar">Daftar</button>
</form>

<?php
if(isset($_POST['daftar'])){
    $user = $_POST['username'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);

    mysqli_query($conn,"INSERT INTO users VALUES('', '$user','$pass')");
    echo "<div class='pesan'>Registrasi berhasil! <a href='login.php' style='color:#d8f3dc;'>Login</a></div>";
}
?>

</div>

</body>
</html>
