<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Contactez un Commercial - Gestion de Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #8a2be2;
      --accent: #6c1bb1;
      --glass-bg: rgba(255, 255, 255, 0.15);
      --text-color: #ffffff;
      --card-blur: 20px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: linear-gradient(135deg, #0f0c29, #302b63, #24243e);
      color: var(--text-color);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background-color: transparent;
      backdrop-filter: blur(10px);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 10px rgba(0,0,0,0.2);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 600;
      color: var(--primary);
    }

    .back-link {
      color: #fff;
      text-decoration: none;
      font-size: 1rem;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: color 0.3s ease;
    }

    .back-link:hover {
      color: var(--primary);
    }

    .container {
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .content {
      background: var(--glass-bg);
      backdrop-filter: blur(var(--card-blur));
      border-radius: 20px;
      padding: 3rem 2.5rem;
      max-width: 700px;
      width: 100%;
      box-shadow: 0 8px 32px rgba(0,0,0,0.3);
      color: #fff;
    }

    .content h1 {
      font-size: 2.2rem;
      margin-bottom: 1rem;
      color: var(--primary);
    }

    .content p {
      margin-bottom: 2rem;
      line-height: 1.7;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #eee;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 0.9rem 1rem;
      border: none;
      border-radius: 10px;
      background: rgba(255, 255, 255, 0.1);
      color: #fff;
      font-size: 1rem;
      transition: all 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      background: rgba(255, 255, 255, 0.2);
    }

    .submit-button {
      background-color: var(--primary);
      color: white;
      border: none;
      padding: 1rem 2rem;
      font-size: 1rem;
      font-weight: 600;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s ease, background-color 0.3s;
    }

    .submit-button:hover {
      background-color: var(--accent);
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 2rem;
      font-size: 0.9rem;
      color: #aaa;
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
    }

    footer a:hover {
      color: #fff;
    }

    @media (max-width: 768px) {
      .content {
        padding: 2rem 1.5rem;
      }

      header {
        flex-direction: column;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo"><i class="fas fa-boxes-stacked"></i> Gestion de Commandes</div>
    <a href="index.php" class="back-link">
      <i class="fas fa-arrow-left"></i> Accueil
    </a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Contactez un Commercial</h1>
      <p>Besoin d’un devis, d’un partenariat ou d’un échange avec notre équipe ? Laissez-nous vos coordonnées, on vous répondra en un éclair.</p>

      <form action="contactez_commercial.php" method="POST">
        <div class="form-group">
          <label for="name">Nom Complet</label>
          <input type="text" id="name" name="name" required />
        </div>

        <div class="form-group">
          <label for="email">Adresse Email</label>
          <input type="email" id="email" name="email" required />
        </div>

        <div class="form-group">
          <label for="phone">Numéro de Téléphone</label>
          <input type="tel" id="phone" name="phone" />
        </div>

        <div class="form-group">
          <label for="company">Nom de l'Entreprise</label>
          <input type="text" id="company" name="company" />
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="5" required></textarea>
        </div>

        <button type="submit" class="submit-button">Envoyer la Demande</button>
      </form>
    </div>
  </div>

  <footer>
    &copy; 2025 Gestion de Commandes. Tous droits réservés. | <a href="contactez_commercial.php">Nous contacter</a>
  </footer>
</body>
</html>
