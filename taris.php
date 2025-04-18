<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tarifs - Gestion de Commandes</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #7f5af0;
      --secondary-color: #6246ea;
      --accent-color: #2cb67d;
      --bg-light: #f0f4ff;
      --bg-dark: #16161a;
      --card-light: #ffffffcc;
      --card-dark: #1f1f1f99;
      --text-light: #000;
      --text-dark: #f0f0f0;
      --shadow: rgba(0, 0, 0, 0.1);
      --transition: 0.3s ease-in-out;
    }

    @media (prefers-color-scheme: dark) {
      body {
        background-color: var(--bg-dark);
        color: var(--text-dark);
      }
      .pricing-card {
        background-color: var(--card-dark);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.4);
      }
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Outfit', sans-serif;
    }

    body {
      background-color: var(--bg-light);
      color: var(--text-light);
      transition: background-color var(--transition), color var(--transition);
    }

    header {
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
      color: white;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 12px var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 700;
      letter-spacing: 1px;
    }

    .back-link {
      color: white;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
      transition: opacity var(--transition);
    }

    .back-link:hover {
      opacity: 0.7;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 2rem;
    }

    .content {
      background: rgba(255, 255, 255, 0.2);
      backdrop-filter: blur(20px);
      border-radius: 16px;
      padding: 2.5rem;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      animation: fadeIn 1s ease-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .content h1 {
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      color: var(--primary-color);
    }

    .content p {
      font-size: 1.1rem;
      margin-bottom: 2rem;
      line-height: 1.6;
    }

    .pricing-plans {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .pricing-card {
      background-color: var(--card-light);
      border-radius: 20px;
      padding: 2rem;
      text-align: center;
      transition: transform var(--transition), box-shadow var(--transition);
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.05);
    }

    .pricing-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    }

    .pricing-card h2 {
      font-size: 1.7rem;
      margin-bottom: 1rem;
      color: var(--secondary-color);
    }

    .price {
      font-size: 2.5rem;
      color: var(--primary-color);
      margin: 1rem 0;
    }

    .price sub {
      font-size: 1rem;
      color: #888;
    }

    .pricing-card ul {
      list-style: none;
      margin: 1rem 0 2rem;
    }

    .pricing-card ul li {
      margin: 0.5rem 0;
    }

    .cta-button {
      background-color: var(--accent-color);
      color: white;
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color var(--transition), transform var(--transition);
    }

    .cta-button:hover {
      background-color: #25a36f;
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 2rem 1rem;
      font-size: 0.9rem;
      color: #777;
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
        gap: 1rem;
      }
      .content {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

<header>
  <div class="logo"><i class="fas fa-boxes-stacked"></i> Gestion de Commandes</div>
  <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour à l'Accueil</a>
</header>

<main class="container">
  <section class="content">
    <h1>Nos Tarifs</h1>
    <p>Choisissez une formule adaptée à votre activité. Flexibles et puissantes, nos offres vous aident à croître sans limites.</p>

    <div class="pricing-plans">
      <div class="pricing-card">
        <h2>Basique</h2>
        <p class="price">19<sub>€/mois</sub></p>
        <ul>
          <li>10 utilisateurs</li>
          <li>Stockage 10 Go</li>
          <li>Support par e-mail</li>
        </ul>
        <a href="plans.php" class="cta-button">Choisir</a>
      </div>

      <div class="pricing-card">
        <h2>Professionnel</h2>
        <p class="price">49<sub>€/mois</sub></p>
        <ul>
          <li>50 utilisateurs</li>
          <li>Stockage 50 Go</li>
          <li>Support email + téléphone</li>
        </ul>
        <a href="plans.php" class="cta-button">Choisir</a>
      </div>

      <div class="pricing-card">
        <h2>Entreprise</h2>
        <p class="price">99<sub>€/mois</sub></p>
        <ul>
          <li>Utilisateurs illimités</li>
          <li>Stockage 200 Go</li>
          <li>Support prioritaire 24/7</li>
        </ul>
        <a href="#" class="cta-button">Choisir</a>
      </div>
    </div>
  </section>
</main>

<footer>
  <p>&copy; 2025 Gestion de Commandes. Tous droits réservés. | <a href="tarifs.php">Voir les tarifs</a></p>
</footer>

</body>
</html>
