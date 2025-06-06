<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Tabel Perkalian & Kalkulator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to bottom right, #d0f0c0, #a8d5ba);
      min-height: 100vh;
      padding-bottom: 50px;
    }

    .container {
      margin-top: 60px;
      max-width: 960px;
    }

    .header {
      text-align: center;
      margin-bottom: 40px;
    }

    .header h2 {
      font-weight: 700;
      background: linear-gradient(to right, #2e7d32, #66bb6a);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .table thead th {
      background-color: #2e7d32;
      color: white;
      text-align: center;
    }

    .table-bordered td,
    .table-bordered th {
      text-align: center;
      vertical-align: middle;
    }

    .table tbody tr:hover {
      background-color: #c8e6c9;
      transition: 0.2s;
    }

    .calculator {
      background-color: #ffffff;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 0 15px rgba(34, 139, 34, 0.1);
      transition: 0.3s;
    }

    .calculator:hover {
      transform: scale(1.02);
    }

    .result {
      font-weight: bold;
      font-size: 1.4rem;
      margin-top: 20px;
      color: #2e7d32;
    }

    .btn-success {
      background: linear-gradient(to right, #388e3c, #66bb6a);
      border: none;
    }

    .btn-outline-success:hover {
      background-color: #2e7d32;
      color: #fff;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h2><i class="bi bi-grid-3x3-gap-fill me-2"></i>Tabel Perkalian 1–10</h2>
    </div>

    <div class="table-responsive">
      <table class="table table-bordered shadow-sm">
        <thead>
          <tr id="headerRow"></tr>
        </thead>
        <tbody id="tableBody"></tbody>
      </table>
    </div>

    <hr class="my-5" />

    <div class="calculator">
      <h4 class="mb-4 text-success">
        <i class="bi bi-calculator me-2"></i>Kalkulator Perkalian
      </h4>
      <form id="kalkulatorForm">
        <div class="row g-3 align-items-center">
          <div class="col-md-5">
            <input type="number" class="form-control" id="angka1" placeholder="Angka pertama" required />
          </div>
          <div class="col-md-2 text-center fs-4 fw-bold">×</div>
          <div class="col-md-5">
            <input type="number" class="form-control" id="angka2" placeholder="Angka kedua" required />
          </div>
        </div>
        <div class="text-center mt-4">
          <button type="submit" class="btn btn-success px-4">
            <i class="bi bi-check-circle me-1"></i> Hitung
          </button>
        </div>
      </form>
      <div id="hasil" class="result text-center"></div>
    </div>

    <div class="text-center mt-5">
      <a href="index.html" class="btn btn-outline-success">
        <i class="bi bi-arrow-left-circle"></i> Kembali ke Beranda
      </a>
    </div>
  </div>

  <script>
    // Header row
    const headerRow = document.getElementById("headerRow");
    headerRow.innerHTML =
      "<th>x</th>" +
      Array.from({ length: 10 }, (_, i) => `<th>${i + 1}</th>`).join("");

    // Table body
    const tbody = document.getElementById("tableBody");
    tbody.innerHTML = Array.from({ length: 10 }, (_, i) => {
      return (
        `<tr><th>${i + 1}</th>` +
        Array.from({ length: 10 }, (_, j) => `<td>${(i + 1) * (j + 1)}</td>`).join("") +
        "</tr>"
      );
    }).join("");

    // Kalkulator logic
    document.getElementById("kalkulatorForm").addEventListener("submit", function (e) {
      e.preventDefault();
      const a = parseFloat(document.getElementById("angka1").value);
      const b = parseFloat(document.getElementById("angka2").value);
      const hasil = a * b;
      document.getElementById("hasil").textContent = `${a} × ${b} = ${hasil}`;
    });
  </script>
</body>
  <footer>
    &copy; 2025 Perpustakaan Anya Riskirana | Semua Hak Dilindungi
  </footer>

</html>
