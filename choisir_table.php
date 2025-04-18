<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Choisir une Table - Gestion IA 40ème siècle</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #00ffcc;
      --secondary: #005757;
      --dark-bg: #0e0f1a;
      --glass-bg: rgba(255, 255, 255, 0.08);
      --text-color: #e0e0e0;
      --danger: #ff4b5c;
      --shadow: 0 8px 24px rgba(0, 255, 204, 0.2);
      --radius: 1rem;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #050510, #0e0f1a);
      color: var(--text-color);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: var(--glass-bg);
      backdrop-filter: blur(10px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1rem 2rem;
      box-shadow: var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      color: var(--primary);
      font-weight: 700;
    }

    .back-link {
      color: var(--text-color);
      text-decoration: none;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: color 0.3s;
    }

    .back-link:hover {
      color: var(--primary);
    }

    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .content {
      background: var(--glass-bg);
      border-radius: var(--radius);
      padding: 2rem;
      max-width: 900px;
      width: 100%;
      box-shadow: var(--shadow);
      text-align: center;
    }

    .content h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--primary);
    }

    .content p {
      margin-bottom: 2rem;
      opacity: 0.8;
    }

    .table-layout {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(100px, 1fr));
      gap: 1rem;
    }

    .table {
      padding: 1rem;
      background: rgba(255, 255, 255, 0.05);
      border: 2px solid var(--primary);
      border-radius: var(--radius);
      cursor: pointer;
      transition: all 0.3s ease;
      position: relative;
      backdrop-filter: blur(6px);
    }

    .table:hover {
      transform: translateY(-5px);
      box-shadow: 0 0 12px var(--primary);
    }

    .table.occupied {
      background: var(--danger);
      border-color: var(--danger);
      cursor: not-allowed;
      opacity: 0.7;
    }

    .table.selected {
      background-color: var(--primary);
      color: #000;
    }

    .table-number {
      font-size: 1.8rem;
      font-weight: bold;
    }

    .table-status {
      font-size: 0.75rem;
      position: absolute;
      bottom: 8px;
      right: 10px;
    }

    .cta-button {
      margin-top: 2rem;
      display: inline-block;
      background: var(--primary);
      color: #000;
      padding: 0.9rem 2rem;
      font-weight: 600;
      border-radius: 50px;
      text-decoration: none;
      transition: background 0.3s ease;
      box-shadow: 0 4px 14px rgba(0, 255, 204, 0.3);
    }

    .cta-button:hover {
      background: var(--secondary);
      color: white;
    }

    footer {
      text-align: center;
      padding: 1.5rem;
      background: #0b0c16;
      color: #999;
      font-size: 0.9rem;
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
    }

    footer a:hover {
      color: white;
    }

    @media (max-width: 768px) {
      .content {
        padding: 1.2rem;
      }
      .table-layout {
        grid-template-columns: repeat(auto-fit, minmax(80px, 1fr));
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🧠 Gestion IA</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Accueil</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Choisir une Table</h1>
      <p>Sélectionnez une table disponible pour passer votre commande.</p>

      <div class="table-layout">
        <div class="table" data-table-id="1"><div class="table-number">1</div><div class="table-status">Disponible</div></div>
        <div class="table occupied" data-table-id="2"><div class="table-number">2</div><div class="table-status">Occupée</div></div>
        <div class="table" data-table-id="3"><div class="table-number">3</div><div class="table-status">Disponible</div></div>
        <div class="table" data-table-id="4"><div class="table-number">4</div><div class="table-status">Disponible</div></div>
        <div class="table" data-table-id="5"><div class="table-number">5</div><div class="table-status">Disponible</div></div>
        <div class="table occupied" data-table-id="6"><div class="table-number">6</div><div class="table-status">Occupée</div></div>
      </div>

      <a href="#" class="cta-button" id="confirm-selection">Confirmer la Sélection</a>
    </div>
  </div>

  <footer>
    <p>&copy; 4025 DeepSek x ChatGPT | <a href="choisir_table.php">Interface Tables</a></p>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const tables = document.querySelectorAll('.table:not(.occupied)');
      const confirmButton = document.getElementById('confirm-selection');
      let selectedTable = null;

      tables.forEach(table => {
        table.addEventListener('click', () => {
          if (selectedTable) {
            selectedTable.classList.remove('selected');
          }
          table.classList.add('selected');
          selectedTable = table;
        });
      });

      confirmButton.addEventListener('click', (e) => {
        e.preventDefault();
        if (selectedTable) {
          const tableId = selectedTable.dataset.tableId;
          alert(`🚀 Table ${tableId} sélectionnée avec succès !`);
          // Redirection possible ici
        } else {
          alert('❗Veuillez sélectionner une table disponible.');
        }
      });
    });
  </script>
</body>
</html>
