<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Calendrier Galactique - Gestion de Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <style>
    :root {
      --primary-color: #00f0ff;
      --secondary-color: #0077ff;
      --background-light: #f5f5f5;
      --background-dark: #0d1117;
      --card-bg-light: #ffffff;
      --card-bg-dark: #1e222a;
      --text-light: #1c1c1c;
      --text-dark: #e1e1e1;
      --neon-glow: 0 0 10px rgba(0, 240, 255, 0.8);
      --transition: 0.3s ease-in-out;
    }

    [data-theme="dark"] {
      --background-color: var(--background-dark);
      --text-color: var(--text-dark);
      --card-background: var(--card-bg-dark);
    }

    [data-theme="light"] {
      --background-color: var(--background-light);
      --text-color: var(--text-light);
      --card-background: var(--card-bg-light);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Roboto, sans-serif;
    }

    body {
      background: var(--background-color);
      color: var(--text-color);
      line-height: 1.7;
      transition: background var(--transition), color var(--transition);
    }

    .container {
      max-width: 900px;
      margin: auto;
      padding: 2rem;
    }

    header {
      background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
      padding: 1.5rem 2rem;
      color: white;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 3px solid rgba(255, 255, 255, 0.1);
      box-shadow: var(--neon-glow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      text-shadow: 0 0 8px #00f0ff;
    }

    .back-link {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: opacity var(--transition);
    }

    .back-link:hover {
      opacity: 0.8;
    }

    .content {
      background: var(--card-background);
      border-radius: 12px;
      padding: 2rem;
      box-shadow: 0 0 20px rgba(0, 240, 255, 0.05);
      margin-top: 2rem;
      text-align: center;
    }

    .content h1 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      color: var(--primary-color);
      text-shadow: var(--neon-glow);
    }

    .integration-steps {
      text-align: left;
      max-width: 650px;
      margin: 0 auto;
    }

    .integration-steps h2 {
      font-size: 1.6rem;
      margin-bottom: 1rem;
      color: var(--secondary-color);
    }

    .integration-steps ol {
      margin-left: 1.5rem;
    }

    .integration-steps li {
      margin-bottom: 1rem;
      line-height: 1.6;
    }

    .cta-button {
      display: inline-block;
      margin-top: 1rem;
      background: var(--primary-color);
      color: white;
      padding: 0.9rem 2rem;
      border-radius: 8px;
      font-weight: bold;
      text-decoration: none;
      box-shadow: var(--neon-glow);
      transition: transform 0.3s, box-shadow 0.3s;
    }

    .cta-button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px rgba(0, 240, 255, 0.9);
    }

    .calendar-preview {
      margin-top: 2rem;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 0 20px rgba(0, 240, 255, 0.1);
    }

    .calendar-preview iframe {
      width: 100%;
      height: 450px;
      border: none;
    }

    footer {
      text-align: center;
      margin-top: 3rem;
      padding: 1.5rem;
      font-size: 0.9rem;
      color: var(--text-color);
    }

    footer a {
      color: var(--primary-color);
      text-decoration: none;
      transition: color var(--transition);
    }

    footer a:hover {
      color: var(--secondary-color);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
      }

      .content {
        padding: 1.2rem;
      }

      .calendar-preview iframe {
        height: 300px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🪐 Gestion de Commandes</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Accueil</a>
  </header>

  <main class="container">
    <section class="content">
      <h1>Intégration du Calendrier Universel</h1>
      <p>Connectez votre calendrier (Google, Outlook, etc.) à notre système galactique pour une synchronisation avancée de vos tâches interplanétaires.</p>

      <div class="integration-steps">
        <h2>Instructions d’Intégration</h2>
        <ol>
          <li><strong>Créer une application calendrier</strong> : via <a href="https://console.developers.google.com" target="_blank">Google Cloud Console</a></li>
          <li><strong>Activer l’API Calendar</strong> et générer les identifiants</li>
          <li><strong>Définir les autorisations OAuth</strong> requises</li>
          <li><strong>Récupérer le token d’accès</strong> OAuth</li>
          <li><strong>Connecter le compte</strong> et tester la synchronisation</li>
        </ol>
        <a href="commencer.php" class="cta-button">🚀 Commencer</a>
      </div>

      <div class="calendar-preview">
        <iframe src="https://calendar.google.com/calendar/embed?src=votre-calendrier-id&ctz=UTC"></iframe>
      </div>
    </section>
  </main>

  <footer>
    &copy; 3025 Gestion de Commandes Galactique. <a href="calendar.php">Configurer Calendrier</a>
  </footer>
</body>
</html>
