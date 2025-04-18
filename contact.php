<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact | Neo-Commandes 4040</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <style>
    :root {
      --primary: #0ff;
      --secondary: #09f;
      --background: #121212;
      --card-bg: #1e1e1e;
      --text: #e0e0e0;
      --input-bg: #2a2a2a;
      --accent: #00ffd5;
      --hover: #00aaff;
      --shadow: rgba(0, 255, 255, 0.2);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: var(--background);
      color: var(--text);
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    header {
      background: linear-gradient(to right, var(--primary), var(--secondary));
      color: #000;
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 0 15px var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      letter-spacing: 1px;
    }

    .back-link {
      color: #000;
      text-decoration: none;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: transform 0.3s ease;
    }

    .back-link:hover {
      transform: scale(1.05);
    }

    .container {
      flex: 1;
      max-width: 1200px;
      margin: 2rem auto;
      padding: 1rem;
    }

    .content {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      background: var(--card-bg);
      border-radius: 15px;
      box-shadow: 0 0 15px var(--shadow);
      padding: 2rem;
    }

    .contact-info, .contact-form {
      flex: 1 1 400px;
    }

    .contact-info h1 {
      font-size: 2.5rem;
      margin-bottom: 1.2rem;
      color: var(--primary);
    }

    .contact-info p {
      margin-bottom: 1rem;
      font-size: 1.1rem;
    }

    .info-item {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 1rem;
    }

    .info-item i {
      color: var(--accent);
      font-size: 1.3rem;
    }

    .contact-form h2 {
      font-size: 1.8rem;
      margin-bottom: 1.5rem;
      color: var(--hover);
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 0.9rem;
      border: none;
      border-radius: 8px;
      background: var(--input-bg);
      color: white;
      font-size: 1rem;
      transition: border 0.3s ease;
    }

    .form-group input:focus,
    .form-group textarea:focus {
      outline: none;
      border: 1px solid var(--accent);
    }

    .submit-button {
      background: var(--accent);
      color: #000;
      padding: 1rem 2rem;
      border: none;
      border-radius: 8px;
      font-size: 1rem;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.3s ease;
    }

    .submit-button:hover {
      background: var(--hover);
      transform: scale(1.03);
    }

    footer {
      text-align: center;
      padding: 2rem 1rem;
      background: #1a1a1a;
      color: #777;
      font-size: 0.95rem;
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
      transition: color 0.3s;
    }

    footer a:hover {
      color: var(--hover);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }

      .content {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo"><i class="fas fa-cubes"></i> NeoCommandes 4040</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour</a>
  </header>

  <div class="container">
    <div class="content">
      <div class="contact-info">
        <h1>Contactez-Nous</h1>
        <p>Une question ? Une suggestion ? L’équipe est là pour vous répondre, 24h/galaxie !</p>
        <div class="info-item">
          <i class="fas fa-map-marker-alt"></i>
          <p>Station Orbitale 123, Secteur Paris-Nexus</p>
        </div>
        <div class="info-item">
          <i class="fas fa-envelope"></i>
          <p><a href="mailto:contact@neo4040.ai">contact@neo4040.ai</a></p>
        </div>
        <div class="info-item">
          <i class="fas fa-phone"></i>
          <p>+33 9 88 77 66 55</p>
        </div>
      </div>

      <div class="contact-form">
        <h2>Envoyer un Message Interstellaire</h2>
        <form action="contact.php" method="POST">
          <div class="form-group">
            <label for="name">Nom Complet</label>
            <input type="text" id="name" name="name" required />
          </div>
          <div class="form-group">
            <label for="email">Adresse Email</label>
            <input type="email" id="email" name="email" required />
          </div>
          <div class="form-group">
            <label for="subject">Sujet</label>
            <input type="text" id="subject" name="subject" required />
          </div>
          <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="submit-button">Transmettre</button>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 4040 NeoCommandes. Tous droits stellaires réservés. | <a href="contact.php">Contact</a></p>
  </footer>
</body>
</html>
