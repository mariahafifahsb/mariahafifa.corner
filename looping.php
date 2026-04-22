<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Tabel Looping - Afifa's Corner</title>

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
}

/* NAVBAR */
.navbar{
    position:fixed;
    top:0;
    width:100%;
    display:flex;
    justify-content:space-between;
    padding:15px 5%;
    background:#3e1f1f;
    color:white;
}

.nav-links a{
    text-decoration:none;
    margin:0 10px;
    color:white;
}

/* CONTENT */
.section{
    padding:120px 5% 60px;
}

h2{
    text-align:center;
    margin-bottom:30px;
    color:#3e1f1f;
}

/* TABLE */
table{
    width:100%;
    border-collapse:collapse;
    background:#fffaf7;
    border-radius:10px;
    overflow:hidden;
    box-shadow:0 5px 15px rgba(0,0,0,0.05);
}

th{
    background:#3e1f1f;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #f1dede;
    color:#555;
}

/* ZEBRA */
tr:nth-child(even){
    background:#fdf2f2;
}

/* HOVER */
tr:hover{
    background:#ffeaea;
}
</style>
</head>

<body>

<div class="navbar">
    <div><b>Afifa's Corner</b></div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="looping.php">Looping</a>
    </div>
</div>

<div class="section">
    <h2>📚 Tabel Belajar PHP (1 - 1000)</h2>

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

</body>
</html>
