<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>🗺️ Google Maps - Gestion Futuriste des Commandes</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&family=Roboto&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #00ffe1;
      --secondary: #0066ff;
      --bg-dark: #0e0f1a;
      --glass-bg: rgba(255, 255, 255, 0.05);
      --text-light: #e0e0e0;
      --shadow: rgba(0, 255, 255, 0.2);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Orbitron', sans-serif;
    }

    body {
      background-color: var(--bg-dark);
      color: var(--text-light);
      min-height: 100vh;
      display: flex;
      flex-direction: column;
    }

    header {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #000;
      box-shadow: 0 0 15px var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
      text-shadow: 0 0 10px var(--shadow);
    }

    .back-link {
      text-decoration: none;
      color: #000;
      font-weight: bold;
      display: flex;
      align-items: center;
      gap: 8px;
      transition: transform 0.3s ease;
    }

    .back-link:hover {
      transform: translateX(-5px);
    }

    .container {
      flex: 1;
      padding: 2rem;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      background: var(--glass-bg);
      backdrop-filter: blur(20px);
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 0 20px var(--shadow);
      max-width: 1000px;
      width: 100%;
      animation: fadeIn 1.2s ease-in-out;
    }

    .content h1 {
      color: var(--primary);
      font-size: 2.2rem;
      margin-bottom: 1rem;
      text-align: center;
    }

    .content p {
      font-size: 1.1rem;
      text-align: center;
      margin-bottom: 2rem;
      color: #aaa;
    }

    .map-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      border-radius: 12px;
      box-shadow: 0 0 15px var(--shadow);
      margin-bottom: 2rem;
    }

    .map-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 12px;
    }

    .map-controls {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
    }

    .map-controls input,
    .map-controls button {
      padding: 0.75rem 1.2rem;
      border-radius: 10px;
      border: none;
      font-size: 1rem;
      outline: none;
    }

    .map-controls input {
      flex: 1;
      min-width: 250px;
      background: #1f2235;
      color: white;
      border: 1px solid #555;
    }

    .map-controls button {
      background: var(--primary);
      color: black;
      font-weight: bold;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s ease;
    }

    .map-controls button:hover {
      background: var(--secondary);
      transform: scale(1.05);
    }

    footer {
      text-align: center;
      padding: 1rem;
      color: #888;
      font-size: 0.9rem;
    }

    footer a {
      color: var(--primary);
      text-decoration: none;
    }

    footer a:hover {
      color: var(--secondary);
    }

    @keyframes fadeIn {
      from {
        opacity: 0;
        transform: translateY(15px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @media (max-width: 768px) {
      .map-controls {
        flex-direction: column;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo"><i class="fas fa-robot"></i> Commandes AI</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>Carte Intergalactique</h1>
      <p>Visualisez les emplacements de vos commandes dans l'espace-temps. Entrez une adresse pour la localiser.</p>

      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608444!2d2.294481315607589!3d48.85837007928756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1633068835300!5m2!1sfr!2sfr" allowfullscreen loading="lazy"></iframe>
      </div>

      <div class="map-controls">
        <input type="text" id="address" placeholder="🛰️ Entrez une adresse galactique...">
        <button onclick="searchAddress()"><i class="fas fa-search-location"></i> Rechercher</button>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 4025 Deepsek AI & ChatGPT Universe | <a href="google-map.php">Accès carte</a></p>
  </footer>

  <script>
    function searchAddress() {
      const address = document.getElementById('address').value;
      if (address.trim()) {
        const mapIframe = document.querySelector('.map-container iframe');
        mapIframe.src = `https://www.google.com/maps/embed/v1/place?key=VOTRE_CLE_API_GOOGLE_MAPS&q=${encodeURIComponent(address)}`;
      } else {
        alert('🚨 Veuillez entrer une adresse galactique.');
      }
    }
  </script>
</body>
</html>
