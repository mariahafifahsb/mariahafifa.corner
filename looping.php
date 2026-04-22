<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Looping Tabel - Afifa's Corner</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins&display=swap" rel="stylesheet">

<style>
:root{
    --dark:#1b4332;
    --mid:#2d6a4f;
    --light:#d8f3dc;
}

body{
    font-family:'Poppins',sans-serif;
    background:#f1faee;
    margin:0;
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
}

nav h2{
    font-family:'Playfair Display',serif;
    color:var(--dark);
}

/* CONTENT */
.section{
    padding:120px 60px;
}

.section h2{
    text-align:center;
    color:var(--dark);
    margin-bottom:30px;
}

/* TABLE */
.table-container{
    max-height:500px;
    overflow-y:auto;
    border-radius:15px;
    box-shadow:0 10px 25px rgba(0,0,0,0.1);
}

table{
    width:100%;
    border-collapse:collapse;
    background:white;
}

th{
    position:sticky;
    top:0;
    background:var(--dark);
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #eee;
}

/* ZEBRA */
tr:nth-child(even){
    background:var(--light);
}

/* HOVER */
tr:hover{
    background:#b7e4c7;
}
</style>
</head>

<body>

<nav>
    <h2>Afifa's Corner</h2>
</nav>

<div class="section">
    <h2>📚 Tabel Belajar PHP (1 - 1000)</h2>

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

</body>
</html>
