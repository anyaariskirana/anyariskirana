<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Formulir Pengunjung| Anya Riskirana</title>
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
      background-image: url('https://images.unsplash.com/photo-1508780709619-79562169bc64?auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      color: #2f4f4f;
    }

    header {
      background-color: rgba(34, 139, 34, 0.9); /* ForestGreen with opacity */
      padding: 1rem 2rem;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header .nav a {
      margin-left: 1rem;
      color: #fff;
      text-decoration: none;
    }

    .container {
      max-width: 700px;
      margin: 3rem auto;
      background-color: rgba(255, 255, 255, 0.95);
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 100, 0, 0.4);
    }

    h2 {
      text-align: center;
      color: #2e8b57;
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      margin-top: 1rem;
      font-weight: bold;
    }

    input, select, textarea {
      width: 100%;
      padding: 0.6rem;
      margin-top: 0.3rem;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    button {
      display: block;
      width: 100%;
      padding: 0.8rem;
      margin-top: 2rem;
      background-color: #228b22;
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
    }

    button:hover {
      background-color: #006400;
    }

    @media (max-width: 768px) {
      .container {
        margin: 1rem;
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div><strong>🌲 Alifiahfa's Library</strong></div>
    <div class="nav">
      <a href="#">🏠 Homepage</a>
      <a href="#">ℹ️ About Us</a>
      <a href="#">✉️ Contact Us</a>
      <a href="#">💻 Output PHP</a>
    </div>
  </header>

  <div class="container">
    <h2>Data Pengunjung</h2>
    <form action="formulir_pengunjung.php" method="POST">
      <label for="nama">Nama</label>
      <input type="text" id="nama" name="nama" required>

      <label for="nipnim">NIP/NIM</label>
      <input type="text" id="nipnim" name="nipnim" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="telepon">Telepon</label>
      <input type="tel" id="telepon" name="telepon">

      <label for="jk">Jenis Kelamin</label>
      <select id="jk" name="jk" required>
        <option value="">Pilih</option>
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
      </select>

      <label for="jenis_pengunjung">Jenis Pengunjung</label>
      <select id="jenis_pengunjung" name="jenis_pengunjung" required>
        <option value="">Pilih</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="Dosen">Dosen</option>
        <option value="Umum">Umum</option>
      </select>

      <label for="alamat">Alamat</label>
      <textarea id="alamat" name="alamat" rows="3"></textarea>

      <button type="submit">Kirim Data</button>
    </form>
  </div>
  <div class="footer">
    &copy; 2025 Perpustakaan Anya Riskirana | Semua Hak Dilindungi
  </div>

</body>
</html>



