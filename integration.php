<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>🧠 Intégration - Commandes 4040</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <style>
    :root {
      --primary: #9A00FF;
      --secondary: #0D0D2B;
      --accent: #0FF0FC;
      --text: #E0E0E0;
      --bg: #0A0A0A;
      --glass: rgba(255, 255, 255, 0.06);
      --blur: blur(14px);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: var(--bg);
      color: var(--text);
      font-family: 'Orbitron', sans-serif;
      overflow-x: hidden;
    }

    header {
      background: linear-gradient(145deg, var(--primary), var(--secondary));
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 3rem;
      box-shadow: 0 0 40px rgba(0, 0, 0, 0.5);
      z-index: 10;
      position: relative;
    }

    .logo {
      font-size: 1.8rem;
      color: white;
      letter-spacing: 2px;
      text-shadow: 0 0 10px var(--accent);
    }

    .back-link {
      color: var(--accent);
      text-decoration: none;
      font-weight: bold;
      display: flex;
      align-items: center;
      transition: transform 0.3s ease;
    }

    .back-link i {
      margin-right: 8px;
    }

    .back-link:hover {
      transform: scale(1.1);
    }

    .container {
      max-width: 1400px;
      margin: auto;
      padding: 2rem;
    }

    .content {
      background: var(--glass);
      backdrop-filter: var(--blur);
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 0 25px rgba(0,255,255,0.05);
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .content h1 {
      font-size: 2.8rem;
      color: var(--accent);
      margin-bottom: 1.2rem;
      text-shadow: 0 0 8px var(--accent);
      animation: pulse 2.5s infinite;
    }

    @keyframes pulse {
      0%, 100% { text-shadow: 0 0 8px var(--accent); }
      50% { text-shadow: 0 0 20px var(--accent); }
    }

    .content p {
      color: #ccc;
      margin-bottom: 2rem;
      font-size: 1.1rem;
    }

    .integration-options {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .integration-card {
      background: var(--glass);
      border: 1px solid rgba(255,255,255,0.1);
      padding: 2rem;
      border-radius: 1rem;
      text-align: center;
      transition: all 0.4s ease;
      backdrop-filter: var(--blur);
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.08);
    }

    .integration-card:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 0 40px var(--accent);
    }

    .integration-card i {
      font-size: 3rem;
      color: var(--accent);
      margin-bottom: 1rem;
    }

    .integration-card h2 {
      font-size: 1.6rem;
      color: var(--primary);
      margin-bottom: 0.5rem;
    }

    .integration-card p {
      color: #aaa;
      margin-bottom: 1.5rem;
    }

    .cta-button {
      background: linear-gradient(135deg, var(--primary), var(--accent));
      color: white;
      padding: 0.8rem 1.5rem;
      border-radius: 10px;
      text-decoration: none;
      font-weight: bold;
      transition: all 0.3s ease;
      box-shadow: 0 0 15px rgba(0, 255, 255, 0.2);
    }

    .cta-button:hover {
      background: linear-gradient(135deg, var(--accent), var(--primary));
      box-shadow: 0 0 20px var(--accent);
    }

    footer {
      text-align: center;
      margin-top: 3rem;
      padding: 2rem;
      font-size: 0.9rem;
      color: #888;
    }

    footer a {
      color: var(--accent);
      text-decoration: none;
    }

    footer a:hover {
      color: var(--primary);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }

      .content {
        padding: 2rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">⚙️ Commandes 4040</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Accueil</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>🔗 Intégration</h1>
      <p>Connectez notre système avec les plateformes stellaires. Vers une automatisation intergalactique.</p>

      <div class="integration-options">
        <div class="integration-card">
          <i class="fab fa-slack"></i>
          <h2>Slack</h2>
          <p>Recevez vos notifications en temps réel sur vos channels interstellaires.</p>
          <a href="slack.php" class="cta-button">Connecter Slack</a>
        </div>

        <div class="integration-card">
          <i class="fab fa-trello"></i>
          <h2>Trello</h2>
          <p>Organisez vos commandes dans l'univers fluide de Trello.</p>
          <a href="integrer_trello.php" class="cta-button">Connecter Trello</a>
        </div>

        <div class="integration-card">
          <i class="fab fa-google"></i>
          <h2>Google Workspace</h2>
          <p>Travaillez en orbite avec vos équipes via les outils de Google.</p>
          <a href="google.php" class="cta-button">Connecter Google</a>
        </div>

        <div class="integration-card">
          <i class="fas fa-cogs"></i>
          <h2>API Avancée</h2>
          <p>Une API quantique, prête pour les architectures dimensionnelles.</p>
          <a href="documentation.php" class="cta-button">Voir l'API</a>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 CommandeVerse. Tous droits réservés. | <a href="integration.php">Intégrations</a></p>
  </footer>
</body>
</html>
