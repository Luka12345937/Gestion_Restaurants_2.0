<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Conditions d'Utilisation - Gestion de Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    :root {
      --primary: #5e35b1;
      --primary-dark: #4527a0;
      --accent: #03dac6;
      --bg: #f4f6fa;
      --text: #2e2e2e;
      --white: #fff;
      --shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
      --radius: 12px;
      --transition: 0.3s ease;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', 'Roboto', sans-serif;
      background-color: var(--bg);
      color: var(--text);
      line-height: 1.6;
      scroll-behavior: smooth;
    }

    header {
      background: var(--primary);
      color: var(--white);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow);
    }

    .logo {
      font-size: 1.6rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .back-link {
      color: var(--white);
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
      transition: opacity var(--transition);
    }

    .back-link:hover {
      opacity: 0.8;
    }

    .container {
      max-width: 1100px;
      margin: auto;
      padding: 2rem 1rem;
    }

    .content {
      background: var(--white);
      border-radius: var(--radius);
      padding: 2rem;
      box-shadow: var(--shadow);
      animation: fadeIn 0.6s ease-in-out;
    }

    .content h1 {
      font-size: 2.2rem;
      color: var(--primary);
      margin-bottom: 1.5rem;
    }

    .content h2 {
      font-size: 1.6rem;
      color: var(--primary-dark);
      margin-top: 1.5rem;
      margin-bottom: 0.75rem;
    }

    .content p {
      margin-bottom: 1rem;
    }

    .content ul {
      margin-left: 2rem;
      margin-bottom: 1rem;
      list-style: disc;
    }

    .content ul li {
      margin-bottom: 0.5rem;
    }

    a {
      color: var(--primary);
      text-decoration: none;
      transition: color var(--transition);
    }

    a:hover {
      color: var(--accent);
    }

    footer {
      text-align: center;
      padding: 2rem 1rem;
      font-size: 0.95rem;
      color: #777;
      background: #fff;
      box-shadow: inset 0 1px 0 #e0e0e0;
      margin-top: 3rem;
    }

    footer a {
      font-weight: 500;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }

      .content {
        padding: 1.2rem;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo"><i class="fas fa-boxes"></i> Gestion de Commandes</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour à l'Accueil</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Conditions d'Utilisation</h1>
      <p>Bienvenue sur notre plateforme de gestion de commandes. En accédant et en utilisant notre site, vous acceptez de respecter les conditions suivantes. Veuillez les lire attentivement.</p>

      <h2>1. Acceptation des Conditions</h2>
      <p>En accédant à ce site, vous acceptez d'être lié par ces conditions d'utilisation, toutes les lois et réglementations applicables, et convenez que vous êtes responsable du respect de toutes les lois locales applicables.</p>

      <h2>2. Utilisation du Site</h2>
      <p>L'utilisation de ce site est autorisée uniquement pour des transactions légitimes et conformes aux présentes conditions. Vous ne devez pas :</p>
      <ul>
        <li>Utiliser ce site à des fins illégales ou non autorisées.</li>
        <li>Perturber ou interférer avec le site ou ses serveurs.</li>
        <li>Tenter d'accéder de manière non autorisée à des parties sécurisées du site.</li>
      </ul>

      <h2>3. Propriété Intellectuelle</h2>
      <p>Tout le contenu de ce site, y compris les textes, graphiques, logos, icônes, images, clips audio, téléchargements numériques et logiciels, est la propriété de notre entreprise et est protégé par les lois internationales sur le droit d'auteur.</p>

      <h2>4. Limitation de Responsabilité</h2>
      <p>Nous ne serons pas responsables de tout dommage direct, indirect, incident, spécial, consécutif ou exemplaire, y compris, mais sans s'y limiter, les pertes de profits, de données ou autres pertes intangibles, résultant de l'utilisation ou de l'impossibilité d'utiliser le site.</p>

      <h2>5. Modifications des Conditions</h2>
      <p>Nous nous réservons le droit de modifier ces conditions à tout moment. Les modifications prendront effet immédiatement après leur publication sur le site. Votre utilisation continue du site après toute modification constitue votre acceptation des nouvelles conditions.</p>

      <h2>6. Contact</h2>
      <p>Pour toute question concernant ces conditions, veuillez nous contacter à :</p>
      <p><a href="mailto:contact@votreentreprise.com">contact@votreentreprise.com</a></p>
    </div>
  </div>

  <footer>
    &copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="condition.php">Conditions d'Utilisation</a>
  </footer>

</body>
</html>
