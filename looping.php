<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Looping</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body{
            font-family: 'Segoe UI', sans-serif;
            background: #fafafa;
            color: #333;
        }

        /* NAVBAR SIMPLE */
        .navbar{
            position:fixed;
            top:0;
            width:100%;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 5%;
            background:white;
            box-shadow:0 2px 10px rgba(0,0,0,0.05);
            z-index:1000;
        }

        .nav-links a{
            text-decoration:none;
            margin:0 10px;
            color:#333;
            font-size:14px;
            transition:0.3s;
        }

        .nav-links a:hover{
            color:#999;
        }

        /* SECTION */
        .section{
            padding:120px 5% 60px;
            text-align:center;
        }

        .section h2{
            font-size:28px;
            margin-bottom:40px;
        }

        /* GRID */
        .grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(180px,1fr));
            gap:20px;
        }

        /* CARD */
        .card{
            background:white;
            padding:20px;
            border-radius:15px;
            transition:0.3s;
            box-shadow:0 5px 15px rgba(0,0,0,0.05);
        }

        /* HOVER */
        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 15px 30px rgba(0,0,0,0.1);
        }

        .card h3{
            font-size:18px;
            margin-bottom:5px;
        }

        .card p{
            font-size:13px;
            color:#777;
        }

    </style>
</head>
<body>

<!-- NAVBAR -->
<div class="navbar">
    <div><b>MariahAfifa</b></div>
    <div class="nav-links">
        <a href="index.php">Home</a>
        <a href="looping.php">Looping</a>
    </div>
</div>

<!-- CONTENT -->
<div class="section">
    <h2>Looping Belajar PHP</h2>

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
