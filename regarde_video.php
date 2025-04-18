<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Visionnaire IA - Regarder la Vidéo</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet"/>
  <style>
    :root {
      --primary: #00e5ff;
      --secondary: #6200ea;
      --bg-color: #0f0f1c;
      --glass-bg: rgba(255, 255, 255, 0.05);
      --border-color: rgba(255, 255, 255, 0.1);
      --text-light: #f1f1f1;
      --text-muted: #aaa;
      --glow: 0 0 15px rgba(0, 229, 255, 0.6);
      --radius: 20px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: var(--bg-color);
      color: var(--text-light);
      line-height: 1.6;
      overflow-x: hidden;
    }

    header {
      background: var(--glass-bg);
      border-bottom: 1px solid var(--border-color);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      backdrop-filter: blur(10px);
      box-shadow: var(--glow);
    }

    header .logo {
      font-size: 1.8rem;
      font-weight: bold;
      color: var(--primary);
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    header .back-link {
      color: var(--text-light);
      text-decoration: none;
      font-weight: 500;
      transition: 0.3s ease;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    header .back-link:hover {
      color: var(--primary);
      transform: translateX(-4px);
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .content {
      background: var(--glass-bg);
      border: 1px solid var(--border-color);
      border-radius: var(--radius);
      padding: 2rem;
      backdrop-filter: blur(12px);
      box-shadow: var(--glow);
      transition: 0.4s;
    }

    .content:hover {
      transform: scale(1.01);
    }

    .content h1 {
      font-size: 2.5rem;
      color: var(--primary);
      margin-bottom: 1.5rem;
    }

    .video-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      border-radius: var(--radius);
      box-shadow: 0 0 12px rgba(0, 229, 255, 0.2);
      margin-bottom: 2rem;
    }

    .video-container iframe {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      border: none;
    }

    .video-description h2 {
      font-size: 1.8rem;
      color: var(--secondary);
      margin-bottom: 1rem;
    }

    .video-description p {
      color: var(--text-muted);
      font-size: 1.1rem;
    }

    footer {
      text-align: center;
      padding: 2rem 1rem;
      margin-top: 3rem;
      color: var(--text-muted);
      border-top: 1px solid var(--border-color);
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
      transition: 0.3s;
    }

    footer a:hover {
      color: var(--secondary);
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
      }

      .content {
        padding: 1rem;
      }

      .content h1 {
        font-size: 2rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">⚡ DeepSek IA</div>
    <a href="index.php" class="back-link">
      <i class="fas fa-arrow-left"></i> Retour à l'accueil
    </a>
  </header>

  <main class="container">
    <section class="content">
      <h1>Regarder la Vidéo</h1>
      <div class="video-container">
        <iframe src="https://www.youtube.com/embed/VOTRE_ID_VIDEO" allowfullscreen></iframe>
      </div>
      <div class="video-description">
        <h2>Titre de la Vidéo</h2>
        <p>
          Découvrez les secrets d'utilisation de notre plateforme en toute simplicité. Cette vidéo immersive vous montre comment tirer parti de chaque fonction, avec une interface guidée par l'IA du futur.
        </p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2025 Visionnaire IA. Propulsé par Deepsek & ChatGPT | <a href="regarde_video.php">Regarder la Vidéo</a></p>
  </footer>
</body>
</html>
