<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Looping - Afifa's Corner</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f8f5f2;
    color:#333;
}

/* NAVBAR */
.navbar{
    position:fixed;
    top:0;
    width:100%;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 5%;
    background:#3e1f1f;
    color:white;
    z-index:1000;
}

.nav-links a{
    text-decoration:none;
    margin:0 10px;
    color:white;
    font-size:14px;
}

.nav-links a:hover{
    color:#ffd6d6;
}

/* SECTION */
.section{
    padding:120px 5% 60px;
    text-align:center;
}

.section h2{
    font-size:30px;
    margin-bottom:40px;
    color:#3e1f1f;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
    gap:20px;
}

/* CARD */
.card{
    background:#fffaf7;
    padding:20px;
    border-radius:20px;
    transition:0.3s;
    box-shadow:0 8px 20px rgba(0,0,0,0.05);
    border:1px solid #f1dede;
}

/* HOVER */
.card:hover{
    transform:translateY(-5px);
    box-shadow:0 15px 30px rgba(0,0,0,0.1);
}

.card h3{
    font-size:18px;
    color:#3e1f1f;
}

.card p{
    font-size:13px;
    color:#a67c7c;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>Afifa's Corner</b></div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="looping.php">Looping</a>
    </div>
</div>

<!-- CONTENT -->
<div class="section">
    <h2>📚 Looping Belajar PHP</h2>

    <div class="grid">
        <?php
        for ($i = 1; $i <= 1000; $i++) {
            echo "
            <div class='card'>
                <h3>Hari ke-$i</h3>
                <p>Belajar PHP</p>
            </div>
            ";
        }
        ?>
    </div>
</div>

</body>
</html>
