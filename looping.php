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

*{margin:0;padding:0;box-sizing:border-box;}

body{
    font-family:'Poppins',sans-serif;
    background:#f1faee;
}

/* NAVBAR SAMA PERSIS */
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

.login-btn{
    padding:8px 20px;
    background:var(--dark);
    color:white;
    border-radius:30px;
}

/* SECTION */
.section{
    padding:120px 60px 60px;
}

.section h2{
    text-align:center;
    margin-bottom:30px;
    color:var(--dark);
}

/* TABLE STYLE */
.table-container{
    overflow-x:auto;
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
    border-radius:15px;
    overflow:hidden;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

th{
    background:var(--dark);
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #ddd;
}

/* ZEBRA */
tr:nth-child(even){
    background:#f1faee;
}

/* HOVER */
tr:hover{
    background:#d8f3dc;
}

/* FOOTER */
footer{
    background:var(--dark);
    color:white;
    text-align:center;
    padding:20px;
    margin-top:40px;
}
</style>
</head>

<body>

<!-- NAVBAR -->
<nav>
    <h2>Afifa's Corner</h2>
    <div>
        <a href="index.php">Home</a>
        <a href="looping.php">Looping</a>
        <a href="login.html" class="login-btn">Login</a>
    </div>
</nav>

<!-- CONTENT -->
<div class="section">
    <h2>📚 Tabel Belajar PHP (Hari 1 - 1000)</h2>

    <div class="table-container">
        <table>
            <tr>
                <th>No</th>
                <th>Keterangan</th>
            </tr>

            <?php
            for ($i = 1; $i <= 1000; $i++) {
                echo "<tr>
                        <td>$i</td>
                        <td>Ini adalah hari ke-$i belajar PHP</td>
                      </tr>";
            }
            ?>

        </table>
    </div>
</div>

<footer>
© 2026 | Afifa's Corner Digital Library
</footer>

</body>
</html>
