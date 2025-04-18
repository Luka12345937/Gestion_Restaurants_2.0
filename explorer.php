<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>🪐 Explorer | Interface Futuriste</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    :root {
      --primary: #8e44ad;
      --secondary: #2c3e50;
      --accent: #00f2ff;
      --bg: #121212;
      --card-bg: rgba(255, 255, 255, 0.05);
      --text: #f0f0f0;
      --glass: rgba(255, 255, 255, 0.08);
      --border: rgba(255, 255, 255, 0.2);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
    }

    body {
      background: var(--bg);
      color: var(--text);
      padding: 0;
      margin: 0;
    }

    header {
      background: var(--card-bg);
      backdrop-filter: blur(12px);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 2rem;
      border-bottom: 1px solid var(--border);
      box-shadow: 0 2px 10px rgba(0,0,0,0.4);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: var(--accent);
      text-shadow: 0 0 10px var(--accent);
    }

    .back-link {
      color: var(--accent);
      text-decoration: none;
      font-size: 1rem;
      transition: opacity 0.3s;
    }

    .back-link:hover {
      opacity: 0.7;
    }

    .container {
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .content {
      background: var(--card-bg);
      border-radius: 15px;
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
      backdrop-filter: blur(20px);
    }

    .content h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--accent);
      text-shadow: 0 0 5px var(--accent);
    }

    .content p {
      margin-bottom: 2rem;
      opacity: 0.85;
    }

    .file-explorer {
      border: 1px solid var(--border);
      border-radius: 10px;
      overflow: hidden;
      background: var(--glass);
    }

    .file-explorer .header {
      background: var(--secondary);
      color: white;
      padding: 1rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-weight: bold;
    }

    .file-explorer .files {
      padding: 1rem;
    }

    .files ul {
      list-style: none;
    }

    .files ul li {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.8rem 1rem;
      border-bottom: 1px solid var(--border);
      transition: background 0.3s, transform 0.2s;
    }

    .files ul li:hover {
      background: rgba(255,255,255,0.05);
      transform: scale(1.01);
    }

    .files ul li i {
      color: var(--accent);
      margin-right: 0.5rem;
    }

    .files ul li a {
      color: var(--text);
      text-decoration: none;
      flex: 1;
      font-weight: 500;
      transition: color 0.3s;
    }

    .files ul li a:hover {
      color: var(--accent);
    }

    .file-actions {
      display: flex;
      gap: 1rem;
    }

    .file-actions a {
      color: var(--accent);
      font-size: 1rem;
      transition: transform 0.2s;
    }

    .file-actions a:hover {
      transform: scale(1.2);
    }

    footer {
      text-align: center;
      color: #aaa;
      padding: 2rem;
      font-size: 0.9rem;
    }

    footer a {
      color: var(--accent);
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🧠 Gestion Futuriste</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Explorateur Galactique</h1>
      <p>Survolez et manipulez vos fichiers dans une interface ultra-sensorielle pensée pour l’ère post-humaine.</p>

      <div class="file-explorer">
        <div class="header">
          <div>📂 Explorateur de Fichiers</div>
          <div class="path">/univers/data/vault</div>
        </div>
        <div class="files">
          <ul>
            <li>
              <i class="fas fa-folder"></i>
              <a href="#">Dossier 1</a>
              <div class="file-actions">
                <a href="#"><i class="fas fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </div>
            </li>
            <li>
              <i class="fas fa-file-alt"></i>
              <a href="#">document.pdf</a>
              <div class="file-actions">
                <a href="#"><i class="fas fa-download"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </div>
            </li>
            <li>
              <i class="fas fa-image"></i>
              <a href="#">image.jpg</a>
              <div class="file-actions">
                <a href="#"><i class="fas fa-download"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </div>
            </li>
            <li>
              <i class="fas fa-folder"></i>
              <a href="#">Dossier 2</a>
              <div class="file-actions">
                <a href="#"><i class="fas fa-edit"></i></a>
                <a href="#"><i class="fas fa-trash"></i></a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <footer>
    &copy; 4025 | IA & Ordinateurs Unifiés - <a href="explorer.php">Accès rapide</a>
  </footer>
</body>
</html>
