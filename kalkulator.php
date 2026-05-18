<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kalkulator PHP - Afifa</title>

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
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .card h2 {
      margin-bottom: 20px;
      text-align: center;
    }

    label {
      font-size: 14px;
      font-weight: 500;
    }

    input, select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      margin-bottom: 15px;
      border-radius: 8px;
      border: none;
      outline: none;
    }

    input:focus, select:focus {
      box-shadow: 0 0 0 2px #95d5b2;
    }

    button {
      width: 100%;
      padding: 12px;
      background: #1b4332;
      color: white;
      border: none;
      border-radius: 10px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    button:hover {
      background: #081c15;
      transform: scale(1.03);
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
      <a href="#">Home</a>
      <a href="#">About</a>
    </nav>
  </header>

  <main>
    <div class="card">
      <h2>Kalkulator Sederhana</h2>

      <form action="kalkulator-hasil.php" method="POST">

        <label>Bilangan 1</label>
        <input type="number" name="angka1" required>

        <label>Bilangan 2</label>
        <input type="number" name="angka2" required>

        <label>Operasi</label>
        <select name="operator">
          <option value="tambah">Tambah (+)</option>
          <option value="kurang">Kurang (-)</option>
          <option value="kali">Kali (×)</option>
          <option value="bagi">Bagi (÷)</option>
        </select>

        <button type="submit" name="hitung">Hitung Sekarang</button>

      </form>
    </div>
  </main>

  <footer>
    © 2026 Afifa's Project | Kalkulator PHP
  </footer>

</body>
</html>
