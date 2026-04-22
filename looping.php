<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Looping - Afifa's Corner</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
:root{
    --dark:#1b4332;
    --mid:#2d6a4f;
    --light:#d8f3dc;
    --accent:#52b788;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:'Poppins',sans-serif;
    background:linear-gradient(to bottom,#f1faee,#d8f3dc);
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
    margin-left:25px;
    text-decoration:none;
    color:var(--dark);
}

/* SECTION */
.section{
    padding:120px 60px 60px;
    text-align:center;
}

.section h2{
    font-family:'Playfair Display',serif;
    font-size:42px;
    color:var(--dark);
}

/* GARIS BAWAH */
.line{
    width:80px;
    height:3px;
    background:var(--accent);
    margin:10px auto 40px;
    border-radius:10px;
}

/* GRID */
.grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:25px;
}

/* CARD */
.card{
    background:#f8f9fa;
    padding:25px;
    border-radius:20px;
    box-shadow:0 10px 20px rgba(0,0,0,0.08);
    transition:0.3s;
}

.card:hover{
    transform:translateY(-8px);
    background:#e9f5db;
}

/* ICON */
.icon{
    font-size:24px;
    color:var(--mid);
    margin-bottom:10px;
}

/* TEXT */
.card h3{
    color:var(--dark);
    margin-bottom:5px;
}

.card p{
    font-size:13px;
    color:#555;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h2>Afifa's Corner</h2>
    <div>
        <a href="index.php">Home</a>
        <a href="#">Admin</a>
        <a href="#">Media</a>
        <a href="#">Profile</a>
        <a href="#">Event</a>
        <a href="looping.php">Looping</a>
    </div>
</nav>

<!-- CONTENT -->
<div class="section">
    <h2>Looping Belajar PHP</h2>
    <div class="line"></div>

    <div class="grid">
        <?php
        for ($i = 1; $i <= 1000; $i++) {
            echo "
            <div class='card'>
                <div class='icon'>
                    <i class='fa-solid fa-book-open'></i>
                </div>
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
