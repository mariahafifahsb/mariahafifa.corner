<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Kalkulator - Afifa</title>

  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(180deg, #e6fff5, #ffffff);
      color: #1b4332;
    }

    /* HEADER */
    header {
      background: linear-gradient(90deg, #2d6a4f, #40916c);
      padding: 20px 5%;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    header h1 {
      font-size: 22px;
      font-weight: 700;
    }

    nav a {
      text-decoration: none;
      color: #d8f3dc;
      margin-left: 15px;
      font-size: 14px;
      padding: 6px 10px;
      border-radius: 6px;
      transition: 0.3s;
    }

    nav a:hover {
      background: rgba(255,255,255,0.2);
      color: white;
    }

    /* MAIN */
    main {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 20px;
    }

    .card {
      background: linear-gradient(180deg, #52b788, #40916c);
      padding: 30px;
      border-radius: 15px;
      width: 100%;
      max-width: 420px;
      color: white;
      box-shadow: 0 8px 25px rgba(0,0,0,0.15);
      animation: fadeIn 0.6s ease;
      text-align: left;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .card h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    .result {
      font-size: 18px;
      margin-top: 15px;
      font-weight: 600;
    }

    .highlight {
      color: #ffeb3b;
    }

    hr {
      border: 0.5px solid rgba(255,255,255,0.3);
      margin: 15px 0;
    }

    .back-btn {
      display: inline-block;
      margin-top: 15px;
      text-decoration: none;
      color: #d8f3dc;
      font-size: 14px;
      transition: 0.3s;
    }

    .back-btn:hover {
      color: white;
      text-decoration: underline;
    }

    /* FOOTER */
    footer {
      background: linear-gradient(90deg, #2d6a4f, #40916c);
      text-align: center;
      padding: 20px;
      font-size: 13px;
      color: #d8f3dc;
    }

    /* RESPONSIVE */
    @media (max-width: 500px) {
      .card {
        padding: 20px;
      }
    }
  </style>
</head>

<body>

  <header>
    <h1>Kalkulator PHP</h1>
    <nav>
      <a href="kalkulator.php">Home</a>
    </nav>
  </header>

  <main>
    <div class="card">
      <h2>Hasil Perhitungan</h2>

      <?php
      if (!isset($_POST['hitung'])) {
          echo "<script>window.location.href='kalkulator.php';</script>";
          exit;
      }

      $bil1 = $_POST['angka1'];
      $bil2 = $_POST['angka2'];
      $operasi = $_POST['operator'];
      $hasil = 0;
      $tanda = "";

      if ($operasi == "tambah") {
          $hasil = $bil1 + $bil2;
          $tanda = "+";
      } elseif ($operasi == "kurang") {
          $hasil = $bil1 - $bil2;
          $tanda = "-";
      } elseif ($operasi == "kali") {
          $hasil = $bil1 * $bil2;
          $tanda = "×";
      } elseif ($operasi == "bagi") {
          if ($bil2 != 0) {
              $hasil = $bil1 / $bil2;
              $tanda = "÷";
          } else {
              $hasil = "Error (Tidak bisa dibagi 0)";
              $tanda = "÷";
          }
      }

      echo "Bilangan 1 : $bil1 <br>";
      echo "Bilangan 2 : $bil2 <br>";
      echo "Operasi : " . ucfirst($operasi) . "<br>";
      ?>

      <hr>

      <div class="result">
        Hasil: 
        <?php echo "$bil1 $tanda $bil2 = <span class='highlight'>$hasil</span>"; ?>
      </div>

      <a href="kalkulator.php" class="back-btn">← Kembali Hitung</a>

    </div>
  </main>

  <footer>
    © 2026 Afifa's Project | Kalkulator PHP
  </footer>

</body>
</html>
