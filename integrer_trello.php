<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🌌 Intégration Trello - Commandes 4040</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #00BFFF;
      --secondary-color: #0099cc;
      --background-gradient: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
      --glass: rgba(255, 255, 255, 0.1);
      --text-color: #f0f0f0;
      --border-glow: rgba(255, 255, 255, 0.2);
      --shadow: rgba(0, 0, 0, 0.5);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
      background: var(--background-gradient);
      color: var(--text-color);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      animation: fadeIn 1s ease-in;
    }

    header {
      background: rgba(0, 0, 0, 0.6);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      backdrop-filter: blur(8px);
      border-bottom: 1px solid var(--border-glow);
      box-shadow: 0 2px 10px var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 800;
      color: var(--primary-color);
      text-shadow: 0 0 10px var(--primary-color);
    }

    .back-link {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: all 0.3s ease;
      font-weight: 600;
    }

    .back-link:hover {
      opacity: 0.7;
      transform: translateX(-3px);
    }

    .container {
      flex: 1;
      padding: 3rem 1.5rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      background: var(--glass);
      border-radius: 20px;
      padding: 3rem;
      box-shadow: 0 8px 32px var(--shadow);
      backdrop-filter: blur(15px);
      border: 1px solid var(--border-glow);
      max-width: 700px;
      width: 100%;
      animation: fadeUp 1s ease-in;
    }

    h1 {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
      text-shadow: 0 0 6px var(--primary-color);
    }

    p {
      margin-bottom: 2rem;
      font-size: 1rem;
      opacity: 0.85;
    }

    .integration-steps h2 {
      color: var(--secondary-color);
      font-size: 1.6rem;
      margin-bottom: 1rem;
    }

    .integration-steps ol {
      margin-left: 1.5rem;
      margin-bottom: 2rem;
    }

    .integration-steps li {
      margin-bottom: 1rem;
      line-height: 1.5;
    }

    .cta-button {
      background-color: var(--primary-color);
      padding: 1rem 2rem;
      border: none;
      border-radius: 50px;
      font-weight: bold;
      color: white;
      text-decoration: none;
      box-shadow: 0 5px 20px var(--primary-color);
      transition: all 0.3s ease;
    }

    .cta-button:hover {
      background-color: var(--secondary-color);
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 2rem;
      font-size: 0.9rem;
      opacity: 0.7;
    }

    footer a {
      color: var(--primary-color);
      text-decoration: none;
      font-weight: 500;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @keyframes fadeUp {
      0% {
        opacity: 0;
        transform: translateY(20px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @media (max-width: 768px) {
      .content {
        padding: 2rem 1.5rem;
      }

      h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🧠 Gestion 4040</div>
    <a href="index.php" class="back-link">
      <i class="fas fa-arrow-left"></i> Retour Accueil
    </a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Connexion à Trello</h1>
      <p>Synchronisez vos commandes avec Trello et gérez vos projets comme un IA du futur.</p>

      <div class="integration-steps">
        <h2>🚀 Étapes d'Intégration</h2>
        <ol>
          <li><strong>Créez une App Trello</strong> : Rendez-vous sur <a href="https://trello.com/app-key" target="_blank">Trello App Key</a> pour récupérer votre clé API.</li>
          <li><strong>Configurez les autorisations</strong> : Autorisez notre plateforme à accéder à vos tableaux.</li>
          <li><strong>Connectez votre compte</strong> : Entrez votre clé API et votre token personnel.</li>
          <li><strong>Synchronisez</strong> : Choisissez les éléments à relier à notre système de commandes.</li>
        </ol>

        <a href="integration.php" class="cta-button">🔗 Lancer l'Intégration</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 4040 Gestion Quantique. Tous droits réservés. | <a href="integrer_trello.php">Trello</a></p>
  </footer>
</body>
</html>
