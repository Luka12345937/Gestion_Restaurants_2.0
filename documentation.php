<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>📘 Documentation - Commandes 40XX</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #0f0f35;
      --accent: #00ffcc;
      --glass-bg: rgba(255, 255, 255, 0.05);
      --text-light: #eee;
      --text-muted: #aaa;
      --border-radius: 20px;
      --shadow: 0 8px 20px rgba(0, 255, 204, 0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #0a0a23, #1a1a40);
      color: var(--text-light);
      line-height: 1.6;
    }

    header {
      background: var(--primary);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid var(--accent);
      position: sticky;
      top: 0;
      z-index: 100;
    }

    header .logo {
      font-family: 'Orbitron', sans-serif;
      font-size: 1.8rem;
      color: var(--accent);
    }

    header .back-link {
      text-decoration: none;
      color: var(--text-light);
      font-weight: bold;
      transition: all 0.3s;
    }

    header .back-link:hover {
      color: var(--accent);
    }

    .container {
      display: grid;
      grid-template-columns: 280px 1fr;
      gap: 2rem;
      padding: 2rem;
      max-width: 1400px;
      margin: auto;
    }

    .sidebar {
      background: var(--glass-bg);
      backdrop-filter: blur(8px);
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 1.5rem;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
    }

    .sidebar h2 {
      font-size: 1.2rem;
      margin-bottom: 1rem;
      color: var(--accent);
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin-bottom: 0.75rem;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: var(--text-light);
      padding: 0.5rem 1rem;
      border-radius: 10px;
      display: block;
      transition: background 0.3s, color 0.3s;
    }

    .sidebar ul li a:hover,
    .sidebar ul li a.active {
      background: var(--accent);
      color: #000;
    }

    .content {
      background: var(--glass-bg);
      padding: 2rem;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
      backdrop-filter: blur(10px);
    }

    .content h1, .content h2 {
      font-family: 'Orbitron', sans-serif;
      color: var(--accent);
    }

    .content h1 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
    }

    .content h2 {
      font-size: 1.5rem;
      margin-top: 2rem;
      margin-bottom: 1rem;
    }

    .content p, .content ul, .content code {
      color: var(--text-muted);
    }

    .content ul {
      margin-left: 1.5rem;
      margin-bottom: 1rem;
    }

    .content code {
      background-color: rgba(0, 255, 204, 0.1);
      padding: 0.2rem 0.6rem;
      border-radius: 5px;
      font-family: 'Courier New', Courier, monospace;
    }

    footer {
      text-align: center;
      padding: 2rem;
      margin-top: 3rem;
      color: var(--text-muted);
      border-top: 1px solid rgba(255,255,255,0.1);
    }

    footer a {
      color: var(--accent);
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      .container {
        grid-template-columns: 1fr;
      }

      .sidebar {
        margin-bottom: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🛒 Gestion Commandes 40XX</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour</a>
  </header>

  <div class="container">
    <aside class="sidebar">
      <h2>📑 Navigation</h2>
      <ul>
        <li><a href="#introduction" class="active">Introduction</a></li>
        <li><a href="#installation">Installation</a></li>
        <li><a href="#configuration">Configuration</a></li>
        <li><a href="#utilisation">Utilisation</a></li>
        <li><a href="#api">API</a></li>
        <li><a href="#faq">FAQ</a></li>
      </ul>
    </aside>

    <main class="content">
      <h1 id="introduction">🚀 Introduction</h1>
      <p>Bienvenue dans le futur de la gestion de commandes. Cette documentation vous guide dans l'installation, la configuration et l'utilisation de notre système hyper-intelligent.</p>

      <h2 id="installation">🛠️ Installation</h2>
      <ul>
        <li>Clonez le dépôt : <code>git clone https://github.com/votre-repo.git</code></li>
        <li>Installez les dépendances : <code>composer install</code></li>
        <li>Configurez votre environnement via <code>.env</code></li>
      </ul>

      <h2 id="configuration">⚙️ Configuration</h2>
      <p>Personnalisez les options dans <code>config.php</code> :</p>
      <ul>
        <li>Nom de l'application</li>
        <li>Clé API sécurisée</li>
        <li>Paramètres de messagerie</li>
      </ul>

      <h2 id="utilisation">📊 Utilisation</h2>
      <p>Accessible via navigateur, le système propose :</p>
      <ul>
        <li>Gestion intelligente des commandes</li>
        <li>Analyse comportementale des clients</li>
        <li>Tableaux de bord prédictifs</li>
      </ul>

      <h2 id="api">📡 API</h2>
      <p>Exemple de requête :</p>
      <code>GET /api/commandes</code>

      <h2 id="faq">❓ FAQ</h2>
      <p><strong>Q :</strong> Comment réinitialiser mon mot de passe ?<br />
        <strong>R :</strong> Cliquez sur "Mot de passe oublié" à la connexion.</p>

      <p><strong>Q :</strong> Comment contacter l'assistance ?<br />
        <strong>R :</strong> Utilisez notre module de support intégré en temps réel.</p>
    </main>
  </div>

  <footer>
    &copy; 40XX Gestion de Commandes. IA-Powered. | <a href="documentation.php">Voir documentation</a>
  </footer>
</body>
</html>
