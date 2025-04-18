<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tutoriels – Gestion de Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto&display=swap" rel="stylesheet" />
  <style>
    :root {
      --color-bg: #0f0f1a;
      --color-primary: #7f00ff;
      --color-secondary: #00e5ff;
      --color-text: #e0e0e0;
      --card-glass: rgba(255, 255, 255, 0.05);
      --shadow: rgba(0, 0, 0, 0.4);
      --border-glow: rgba(127, 0, 255, 0.3);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background: var(--color-bg);
      color: var(--color-text);
      line-height: 1.7;
      padding-bottom: 3rem;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 2rem;
      background: linear-gradient(to right, var(--color-primary), var(--color-secondary));
      color: #fff;
      box-shadow: 0 2px 8px var(--shadow);
    }

    .logo {
      font-family: 'Orbitron', sans-serif;
      font-size: 1.7rem;
      letter-spacing: 2px;
    }

    .back-link {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: opacity 0.3s;
    }

    .back-link:hover {
      opacity: 0.7;
    }

    .container {
      max-width: 1400px;
      margin: auto;
      padding: 2rem;
    }

    .content {
      background: var(--card-glass);
      border: 1px solid var(--border-glow);
      border-radius: 15px;
      padding: 2.5rem;
      box-shadow: 0 8px 20px var(--shadow);
      backdrop-filter: blur(10px);
      animation: fadeIn 1s ease-in-out;
    }

    .content h1 {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: var(--color-secondary);
    }

    .content p {
      margin-bottom: 2rem;
      color: #ccc;
      max-width: 800px;
    }

    .tutorials {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 2rem;
    }

    .tutorial-card {
      background: var(--card-glass);
      border: 1px solid var(--border-glow);
      border-radius: 12px;
      padding: 1.5rem;
      transition: transform 0.4s ease, box-shadow 0.4s ease;
      backdrop-filter: blur(8px);
      box-shadow: 0 6px 12px var(--shadow);
    }

    .tutorial-card:hover {
      transform: translateY(-6px) scale(1.02);
      box-shadow: 0 12px 24px rgba(127, 0, 255, 0.4);
    }

    .tutorial-card img {
      width: 100%;
      border-radius: 8px;
      margin-bottom: 1rem;
    }

    .tutorial-card h2 {
      color: var(--color-primary);
      font-size: 1.3rem;
      margin-bottom: 0.5rem;
    }

    .tutorial-card p {
      font-size: 0.95rem;
      color: #bbb;
    }

    .tutorial-card a {
      display: inline-block;
      margin-top: 1rem;
      color: var(--color-secondary);
      font-weight: bold;
      text-decoration: none;
      transition: color 0.3s ease;
    }

    .tutorial-card a:hover {
      color: #ffffff;
      text-shadow: 0 0 8px var(--color-secondary);
    }

    footer {
      text-align: center;
      color: #888;
      font-size: 0.9rem;
      margin-top: 4rem;
    }

    footer a {
      color: var(--color-secondary);
      text-decoration: none;
      margin-left: 0.5rem;
      transition: color 0.3s;
    }

    footer a:hover {
      color: #fff;
      text-shadow: 0 0 6px var(--color-secondary);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        text-align: center;
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
    <div class="logo">Gestion de Commandes</div>
    <a href="index.php" class="back-link" aria-label="Retour à l'accueil">
      <i class="fas fa-arrow-left"></i> Accueil
    </a>
  </header>

  <main class="container">
    <section class="content" aria-labelledby="main-title">
      <h1 id="main-title">Tutoriels</h1>
      <p>Explorez nos guides interactifs pour maîtriser toutes les fonctionnalités de la plateforme, à votre rythme.</p>

      <div class="tutorials">
        <article class="tutorial-card">
          <img src="assets/img/tutorials/tutorial1.jpg" alt="Créer un compte" />
          <h2>Créer un Compte</h2>
          <p>Créez un compte en quelques clics et commencez à profiter de toutes les fonctionnalités.</p>
          <a href="regarde_video.php">🎥 Regarder</a>
        </article>

        <article class="tutorial-card">
          <img src="assets/img/tutorials/tutorial2.jpg" alt="Passer une commande" />
          <h2>Passer une Commande</h2>
          <p>Commandez facilement grâce à notre interface simple et rapide.</p>
          <a href="regarde_video.php">🎥 Regarder</a>
        </article>

        <article class="tutorial-card">
          <img src="assets/img/tutorials/tutorial3.jpg" alt="Gérer les commandes" />
          <h2>Gérer les Commandes</h2>
          <p>Suivez, modifiez ou annulez vos commandes depuis votre tableau de bord.</p>
          <a href="regarde_video.php">🎥 Regarder</a>
        </article>

        <article class="tutorial-card">
          <img src="assets/img/tutorials/tutorial4.jpg" alt="Personnaliser le profil" />
          <h2>Personnaliser Votre Profil</h2>
          <p>Ajoutez votre photo, mettez à jour vos infos, et créez une expérience unique.</p>
          <a href="regarde_video.php">🎥 Regarder</a>
        </article>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Gestion de Commandes. Tous droits réservés. | <a href="tutoriels.php">Voir plus</a></p>
  </footer>
</body>
</html>
