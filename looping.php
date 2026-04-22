<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Looping - Afifa's Corner</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
:root{
    --dark:#1b4332;
    --mid:#2d6a4f;
    --light:#95d5b2;
    --accent:#52b788;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(135deg,#1b4332,#2d6a4f);
}

/* NAVBAR */
nav{
    position:fixed;
    width:100%;
    padding:20px 60px;
    display:flex;
    justify-content:space-between;
    background:white;
    box-shadow:0 2px 10px rgba(0,0,0,0.1);
    z-index:1000;
}

nav h2{
    font-family:'Playfair Display',serif;
    color:var(--dark);
}

nav a{
    text-decoration:none;
    margin-left:25px;
    color:var(--dark);
    font-weight:500;
}

nav a:hover{
    color:var(--accent);
}

/* SECTION */
.section{
    padding:120px 60px 60px;
    text-align:center;
}

.section h2{
    color:white;
    font-size:40px;
    margin-bottom:40px;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:25px;
}

/* CARD */
.card{
    background:#ffffff;
    padding:25px;
    border-radius:20px;
    transition:0.3s;
    box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

.card:hover{
    transform:translateY(-8px);
    background:#d8f3dc;
}

/* TEXT */
.card h3{
    color:var(--dark);
    margin-bottom:5px;
}

.card p{
    color:var(--mid);
    font-size:14px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h2>Afifa's Corner</h2>
    <div>
        <a href="index.php">Home</a>
        <a href="#">Koleksi</a>
        <a href="#">About Us</a>
        <a href="#">Admin</a>
        <a href="looping.php">Looping</a>
    </div>
</nav>

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
