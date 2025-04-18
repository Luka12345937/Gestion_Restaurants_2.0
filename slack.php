<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🔗 Intégration Slack - Gestion de Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #4A154B;
      --secondary-color: #6E1E74;
      --accent-color: #ECB22E;
      --background: #f3f0f5;
      --glass-bg: rgba(255, 255, 255, 0.8);
      --border-radius: 16px;
      --shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: linear-gradient(to right, #f3f0f5, #eae6ed);
      color: #2d2d2d;
      line-height: 1.6;
      min-height: 100vh;
    }

    header {
      background-color: var(--primary-color);
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow);
    }

    header .logo {
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    header .back-link {
      color: white;
      text-decoration: none;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: opacity 0.3s ease;
    }

    header .back-link:hover {
      opacity: 0.8;
    }

    .container {
      max-width: 960px;
      margin: 2rem auto;
      padding: 2rem;
    }

    .content {
      background: var(--glass-bg);
      backdrop-filter: blur(12px);
      padding: 2.5rem;
      border-radius: var(--border-radius);
      box-shadow: var(--shadow);
      text-align: center;
      transition: transform 0.3s ease;
    }

    .content:hover {
      transform: translateY(-2px);
    }

    .content h1 {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    .content p {
      font-size: 1.1rem;
      color: #444;
      margin-bottom: 2rem;
    }

    .integration-steps {
      text-align: left;
      margin-top: 1rem;
    }

    .integration-steps h2 {
      font-size: 1.7rem;
      color: var(--secondary-color);
      margin-bottom: 1rem;
    }

    .integration-steps ol {
      padding-left: 2rem;
      margin-bottom: 2rem;
    }

    .integration-steps li {
      margin-bottom: 1rem;
      font-size: 1rem;
    }

    .integration-steps a {
      color: var(--primary-color);
      text-decoration: underline;
    }

    .cta-button {
      background: var(--primary-color);
      color: white;
      padding: 0.9rem 2rem;
      border-radius: 12px;
      text-decoration: none;
      font-weight: 600;
      font-size: 1rem;
      display: inline-block;
      transition: background 0.3s ease;
      box-shadow: 0 4px 14px rgba(0,0,0,0.1);
    }

    .cta-button:hover {
      background: var(--secondary-color);
    }

    footer {
      margin-top: 3rem;
      text-align: center;
      font-size: 0.9rem;
      color: #888;
      padding: 2rem;
    }

    footer a {
      color: var(--primary-color);
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }

      .content {
        padding: 1.5rem;
      }

      .content h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo"><i class="fab fa-slack"></i> Gestion de Commandes</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour à l'Accueil</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Intégrer Slack</h1>
      <p>Connectez Slack pour recevoir des notifications en temps réel et booster votre productivité d’équipe. Voici comment procéder :</p>

      <div class="integration-steps">
        <h2>🚀 Étapes d'Intégration</h2>
        <ol>
          <li><strong>Créer une application Slack</strong> : <a href="https://api.slack.com/apps" target="_blank">Slack API</a>.</li>
          <li><strong>Configurer les autorisations</strong> : Messages, canaux, etc.</li>
          <li><strong>Générer un token OAuth</strong> pour l’authentification.</li>
          <li><strong>Connecter votre compte Slack</strong> à notre plateforme.</li>
          <li><strong>Choisir les canaux</strong> souhaités pour recevoir les alertes.</li>
        </ol>
        <a href="integration.php" class="cta-button">Commencer l'Intégration</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Gestion de Commandes • <a href="slack.php">Page Slack</a></p>
  </footer>

</body>
</html>
