<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Politique de Confidentialité | Gestion de Commandes</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <style>
    :root {
      --primary-color: #6C63FF;
      --secondary-color: #5145CD;
      --text-color: #333;
      --bg-color: #FAFAFA;
      --card-bg: #fff;
      --shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
      --radius: 12px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg-color);
      color: var(--text-color);
      line-height: 1.8;
    }

    header {
      background: var(--primary-color);
      color: #fff;
      padding: 1.2rem 2rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      box-shadow: var(--shadow);
    }

    .logo {
      font-size: 1.6rem;
      font-weight: 600;
    }

    .back-link {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      transition: opacity 0.3s;
      display: flex;
      align-items: center;
      gap: 6px;
    }

    .back-link:hover {
      opacity: 0.8;
    }

    .container {
      max-width: 960px;
      margin: 2rem auto;
      padding: 1.5rem;
    }

    .content {
      background: var(--card-bg);
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      padding: 2rem;
    }

    .content h1 {
      font-size: 2.2rem;
      color: var(--primary-color);
      margin-bottom: 1rem;
    }

    .content h2 {
      font-size: 1.4rem;
      margin: 1.8rem 0 1rem;
      color: var(--secondary-color);
    }

    .content p, .content ul {
      margin-bottom: 1rem;
      font-size: 1rem;
      color: #444;
    }

    .content ul {
      padding-left: 1.5rem;
    }

    .content ul li {
      margin-bottom: 0.5rem;
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
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
        gap: 0.8rem;
      }

      .container {
        padding: 1rem;
      }

      .content {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">Gestion de Commandes</div>
    <a href="index.php" class="back-link">
      <i class="fas fa-arrow-left"></i> Retour à l'accueil
    </a>
  </header>

  <main class="container">
    <section class="content">
      <h1>Politique de Confidentialité</h1>
      <p>Votre vie privée est notre priorité. Cette politique explique comment nous collectons, utilisons, protégeons et partageons vos données personnelles.</p>

      <h2>1. Informations Collectées</h2>
      <ul>
        <li><strong>Identité :</strong> Nom, adresse e-mail, téléphone, adresse postale.</li>
        <li><strong>Paiement :</strong> Détails de carte ou moyens de paiement.</li>
        <li><strong>Navigation :</strong> Pages visitées, durée, interactions.</li>
      </ul>

      <h2>2. Utilisation des Informations</h2>
      <ul>
        <li>Traiter vos commandes.</li>
        <li>Personnaliser votre expérience.</li>
        <li>Communiquer des mises à jour ou offres.</li>
      </ul>

      <h2>3. Partage des Informations</h2>
      <ul>
        <li>Partenaires de confiance pour la gestion du service.</li>
        <li>Obligations légales ou protections juridiques.</li>
      </ul>

      <h2>4. Sécurité des Données</h2>
      <p>Vos données sont protégées par des mesures techniques et organisationnelles rigoureuses.</p>

      <h2>5. Cookies</h2>
      <p>Les cookies aident à améliorer votre navigation. Vous pouvez les désactiver dans votre navigateur.</p>

      <h2>6. Vos Droits</h2>
      <p>Vous pouvez consulter, modifier ou supprimer vos données à tout moment. Contactez-nous via :</p>
      <p><a href="mailto:contact@votreentreprise.com">contact@votreentreprise.com</a></p>

      <h2>7. Modifications</h2>
      <p>Cette politique peut être mise à jour. Vérifiez-la régulièrement pour rester informé.</p>
    </section>
  </main>

  <footer>
    &copy; 2023 Gestion de Commandes. Tous droits réservés. |
    <a href="confidentialite.php">Politique de Confidentialité</a>
  </footer>

</body>
</html>
