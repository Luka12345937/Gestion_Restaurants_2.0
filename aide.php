<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aide - Commandes 40ème Siècle</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <style>
    :root {
      --primary: #7f00ff;
      --secondary: #00c6ff;
      --bg: #0f0f1a;
      --text: #e0e0e0;
      --card: #1c1c2b;
      --shadow: rgba(0, 255, 255, 0.1);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: var(--bg);
      color: var(--text);
      line-height: 1.7;
      padding-bottom: 50px;
    }

    header {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: #fff;
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 0 15px var(--secondary);
    }

    .logo {
      font-size: 1.8rem;
      font-family: 'Orbitron', sans-serif;
      font-weight: 700;
      text-transform: uppercase;
    }

    .back-link {
      text-decoration: none;
      color: #fff;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: transform 0.3s;
    }

    .back-link:hover {
      transform: translateX(-5px);
    }

    .container {
      max-width: 1000px;
      margin: 3rem auto;
      padding: 0 1rem;
    }

    .content {
      background-color: var(--card);
      padding: 2.5rem;
      border-radius: 15px;
      box-shadow: 0 0 30px var(--shadow);
    }

    h1, h2 {
      font-family: 'Orbitron', sans-serif;
      color: var(--secondary);
      margin-bottom: 1rem;
    }

    h1 {
      font-size: 2.2rem;
    }

    h2 {
      font-size: 1.6rem;
      margin-top: 2rem;
    }

    p {
      margin-bottom: 1rem;
    }

    .faq {
      margin-top: 2rem;
    }

    .faq-item h3 {
      font-size: 1.2rem;
      background-color: #292940;
      padding: 1rem;
      border-radius: 10px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .faq-item h3:hover {
      background-color: var(--primary);
    }

    .faq-item p {
      display: none;
      padding: 1rem;
      background-color: #1e1e30;
      border-left: 4px solid var(--secondary);
      margin-top: 0.5rem;
      border-radius: 0 0 10px 10px;
    }

    .faq-item.active p {
      display: block;
      animation: fadeIn 0.4s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 0.5rem;
    }

    .form-group input,
    .form-group textarea {
      width: 100%;
      padding: 0.75rem;
      border-radius: 8px;
      border: none;
      background-color: #292940;
      color: #fff;
      font-size: 1rem;
    }

    .form-group textarea {
      resize: vertical;
    }

    .submit-button {
      background: linear-gradient(to right, var(--primary), var(--secondary));
      color: #fff;
      border: none;
      padding: 1rem 2.5rem;
      font-size: 1rem;
      font-weight: bold;
      border-radius: 50px;
      cursor: pointer;
      transition: background 0.4s ease;
    }

    .submit-button:hover {
      background: linear-gradient(to right, var(--secondary), var(--primary));
    }

    footer {
      margin-top: 4rem;
      text-align: center;
      color: #aaa;
    }

    footer a {
      color: var(--secondary);
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
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">Commande Galactique</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Centre d'Aide</h1>
      <p>Bienvenue dans le centre d’assistance galactique. Posez vos questions, on répond entre deux orbites.</p>

      <h2>FAQ Interstellaire</h2>
      <div class="faq">
        <div class="faq-item">
          <h3>🚀 Comment créer un compte ?</h3>
          <p>Cliquez sur “S’inscrire” depuis la page d’accueil, remplissez vos données. Un code interstellaire vous sera envoyé.</p>
        </div>
        <div class="faq-item">
          <h3>📦 Comment passer une commande ?</h3>
          <p>Connectez-vous, sélectionnez vos modules, et cliquez sur “Commander” depuis votre panier spatial.</p>
        </div>
        <div class="faq-item">
          <h3>🛰️ Comment suivre ma commande ?</h3>
          <p>Un lien de suivi hypergalactique vous est envoyé par comlink dès la validation.</p>
        </div>
      </div>

      <h2>Contactez l'Assistance</h2>
      <p>Besoin d’un contact direct ? Remplissez ce formulaire de liaison :</p>

      <form action="aide.php" method="POST">
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
        <button type="submit" class="submit-button">📨 Envoyer le Message</button>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; 4025 Centre Galactique de Commandes. Tous droits réservés. <a href="aide.php">Centre d’aide</a></p>
  </footer>

  <script>
    document.querySelectorAll('.faq-item h3').forEach(header => {
      header.addEventListener('click', () => {
        const parent = header.parentElement;
        parent.classList.toggle('active');
      });
    });
  </script>
</body>
</html>
