<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Postuler - Gestion de Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #7F00FF;
      --secondary: #E100FF;
      --text: #ffffff;
      --bg: linear-gradient(135deg, #1e1e2f, #141426);
      --card-bg: rgba(255, 255, 255, 0.05);
      --glass-blur: blur(15px);
      --border-glow: 1px solid rgba(255, 255, 255, 0.2);
      --btn-hover: #9b30ff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    html, body {
      height: 100%;
      font-family: 'Roboto', sans-serif;
      background: var(--bg);
      color: var(--text);
    }

    header {
      background: linear-gradient(to right, var(--primary), var(--secondary));
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    .logo {
      font-family: 'Orbitron', sans-serif;
      font-size: 1.8rem;
      font-weight: 600;
    }

    .back-link {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.95rem;
      transition: 0.3s;
    }

    .back-link:hover {
      opacity: 0.8;
      transform: translateX(-2px);
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 2rem;
    }

    .content {
      width: 100%;
      max-width: 700px;
      background: var(--card-bg);
      backdrop-filter: var(--glass-blur);
      border-radius: 16px;
      padding: 2rem;
      border: var(--border-glow);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
    }

    .content h1 {
      font-family: 'Orbitron', sans-serif;
      font-size: 1.8rem;
      margin-bottom: 1.2rem;
      color: var(--primary);
    }

    .content p {
      margin-bottom: 1.8rem;
      font-size: 1rem;
      color: #ccc;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: bold;
      color: #bbb;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
      width: 100%;
      padding: 0.8rem;
      background: rgba(255, 255, 255, 0.1);
      border: var(--border-glow);
      border-radius: 8px;
      color: white;
      font-size: 1rem;
    }

    .form-group textarea {
      resize: vertical;
    }

    .submit-button {
      background: var(--primary);
      color: white;
      padding: 1rem 2rem;
      font-size: 1rem;
      border: none;
      border-radius: 30px;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(127, 0, 255, 0.4);
    }

    .submit-button:hover {
      background-color: var(--btn-hover);
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 2rem 1rem;
      font-size: 0.9rem;
      color: #aaa;
    }

    footer a {
      color: var(--secondary);
      text-decoration: none;
    }

    footer a:hover {
      text-decoration: underline;
    }

    @media screen and (max-width: 768px) {
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
      <i class="fas fa-arrow-left"></i> Retour à l'Accueil
    </a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Postuler à une Offre d'Emploi</h1>
      <p>Merci de votre intérêt pour rejoindre notre équipe. Veuillez remplir le formulaire ci-dessous.</p>

      <form action="postule.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
          <label for="name">Nom Complet</label>
          <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
          <label for="email">Adresse Email</label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
          <label for="phone">Numéro de Téléphone</label>
          <input type="tel" id="phone" name="phone">
        </div>

        <div class="form-group">
          <label for="position">Poste Candidaté</label>
          <select id="position" name="position" required>
            <option value="">Sélectionnez un poste</option>
            <option value="fullstack">Développeur Full Stack</option>
            <option value="marketing">Responsable Marketing Digital</option>
            <option value="support">Support Client</option>
          </select>
        </div>

        <div class="form-group">
          <label for="resume">CV (PDF ou Word)</label>
          <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
        </div>

        <div class="form-group">
          <label for="cover-letter">Lettre de Motivation</label>
          <textarea id="cover-letter" name="cover-letter" rows="5" required></textarea>
        </div>

        <button type="submit" class="submit-button">🚀 Soumettre la Candidature</button>
      </form>
    </div>
  </div>

  <footer>
    <p>&copy; 3025 Gestion de Commandes. Tous droits réservés. | <a href="postule.php">Postuler</a></p>
  </footer>
</body>
</html>
