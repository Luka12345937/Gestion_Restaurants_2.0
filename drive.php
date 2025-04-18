<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>🌐 Gestion de Commandes - Google Drive</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #4285F4;
      --secondary: #1a73e8;
      --bg: #eaf0fa;
      --card-bg: rgba(255, 255, 255, 0.25);
      --blur-bg: blur(20px);
      --text: #222;
      --shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
      --radius: 20px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', 'Roboto', sans-serif;
    }

    body {
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
      scroll-behavior: smooth;
    }

    header {
      background: var(--primary);
      color: #fff;
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 600;
    }

    .back-link {
      color: #fff;
      text-decoration: none;
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
      transition: opacity 0.3s ease;
    }

    .back-link:hover {
      opacity: 0.8;
    }

    .container {
      max-width: 1280px;
      margin: auto;
      padding: 2rem;
    }

    .content {
      background: var(--card-bg);
      backdrop-filter: var(--blur-bg);
      border-radius: var(--radius);
      padding: 2rem;
      box-shadow: var(--shadow);
    }

    .content h1 {
      font-size: 2.4rem;
      margin-bottom: 1rem;
      color: var(--primary);
    }

    .content p {
      margin-bottom: 2rem;
      font-size: 1.1rem;
    }

    .drive-integration {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
    }

    .drive-card {
      flex: 1 1 300px;
      background: var(--card-bg);
      backdrop-filter: var(--blur-bg);
      padding: 2rem;
      border-radius: var(--radius);
      text-align: center;
      box-shadow: var(--shadow);
      transition: transform 0.4s ease, box-shadow 0.3s;
    }

    .drive-card:hover {
      transform: translateY(-10px);
      box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
    }

    .drive-card i {
      font-size: 3rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .drive-card h2 {
      font-size: 1.5rem;
      margin-bottom: 1rem;
      color: var(--secondary);
    }

    .drive-card p {
      color: #444;
      margin-bottom: 1.5rem;
    }

    .cta-button {
      display: inline-block;
      background: var(--primary);
      color: white;
      padding: 0.75rem 1.5rem;
      border: none;
      border-radius: 10px;
      text-decoration: none;
      font-weight: 600;
      transition: background-color 0.3s ease;
    }

    .cta-button:hover {
      background-color: var(--secondary);
    }

    .drive-preview {
      margin-top: 2rem;
      overflow: hidden;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .drive-preview iframe {
      width: 100%;
      height: 500px;
      border: none;
    }

    footer {
      text-align: center;
      padding: 2rem;
      margin-top: 3rem;
      color: #777;
      font-size: 0.95rem;
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
    }

    footer a:hover {
      color: var(--secondary);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
      }

      .drive-integration {
        flex-direction: column;
      }

      .content {
        padding: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">📦 Gestion de Commandes</div>
    <a href="index.php" class="back-link">
      <i class="fas fa-arrow-left"></i> Accueil
    </a>
  </header>

  <div class="container">
    <div class="content">
      <h1>🔗 Intégration Google Drive</h1>
      <p>Connectez votre compte Google Drive pour bénéficier d’une gestion avancée de fichiers : stockez, visualisez, téléversez et organisez tous vos documents à partir d’une seule interface intuitive.</p>

      <div class="drive-integration">
        <div class="drive-card">
          <i class="fab fa-google-drive"></i>
          <h2>Connecter</h2>
          <p>Liez votre compte Google Drive pour une intégration rapide et sécurisée.</p>
          <a href="login.php" class="cta-button">Connecter</a>
        </div>

        <div class="drive-card">
          <i class="fas fa-folder-open"></i>
          <h2>Explorer</h2>
          <p>Visualisez et gérez vos fichiers Drive directement dans cette interface IA.</p>
          <a href="explorer.php" class="cta-button">Explorer</a>
        </div>

        <div class="drive-card">
          <i class="fas fa-upload"></i>
          <h2>Téléverser</h2>
          <p>Ajoutez des fichiers dans votre Drive sans quitter l’application.</p>
          <a href="televiser.php" class="cta-button">Téléverser</a>
        </div>
      </div>

      <div class="drive-preview" id="drive-preview">
        <iframe src="https://drive.google.com/embeddedfolderview?id=VOTRE_ID_DOSSIER_DRIVE#grid"></iframe>
      </div>
    </div>
  </div>

  <footer>
    &copy; 3025 Gestion de Commandes IA. Interface propulsée par <a href="drive.php">Google Drive AI</a>.
  </footer>
</body>
</html>
