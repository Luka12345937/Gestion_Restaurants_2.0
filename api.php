<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>API Futuriste - Commandes IA</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #7f5af0;
      --secondary: #2cb67d;
      --background: #0f0f1b;
      --card-bg: rgba(255, 255, 255, 0.05);
      --glass-border: rgba(255, 255, 255, 0.1);
      --text: #f2f2f2;
      --subtext: #a1a1aa;
      --radius: 16px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Outfit', sans-serif;
    }

    body {
      background: var(--background);
      color: var(--text);
      line-height: 1.8;
      padding: 0;
      overflow-x: hidden;
    }

    header {
      background: var(--primary);
      padding: 1.5rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 4px 30px rgba(0,0,0,0.2);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: 600;
    }

    .back-link {
      color: white;
      text-decoration: none;
      font-weight: 500;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .back-link:hover {
      transform: translateX(-3px);
      opacity: 0.85;
    }

    .container {
      max-width: 1100px;
      margin: 3rem auto;
      padding: 0 1rem;
    }

    .content {
      background: var(--card-bg);
      border: 1px solid var(--glass-border);
      backdrop-filter: blur(12px);
      border-radius: var(--radius);
      padding: 2rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .content h1 {
      font-size: 2.2rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .content p {
      margin-bottom: 2rem;
      color: var(--subtext);
    }

    .api-section {
      margin-bottom: 3rem;
    }

    .api-section h2 {
      font-size: 1.5rem;
      color: var(--secondary);
      margin-bottom: 1rem;
      border-bottom: 2px solid var(--primary);
      padding-bottom: 0.5rem;
    }

    .api-endpoint {
      background-color: rgba(255, 255, 255, 0.025);
      border-left: 4px solid var(--primary);
      padding: 1.5rem;
      border-radius: var(--radius);
      margin-bottom: 2rem;
    }

    .api-endpoint h3 {
      font-size: 1.25rem;
      color: var(--primary);
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    .api-endpoint code {
      background: #1e1e2f;
      padding: 0.3rem 0.6rem;
      border-radius: 6px;
      font-family: monospace;
      color: #e0e0e0;
      font-size: 0.95rem;
    }

    .params h4 {
      font-size: 1rem;
      margin-top: 1rem;
      color: var(--secondary);
    }

    .params ul {
      list-style: disc;
      padding-left: 1.5rem;
      margin-top: 0.5rem;
    }

    .response {
      background: #1e1e2f;
      color: #d1d1d1;
      padding: 1rem;
      border-radius: 8px;
      font-family: monospace;
      overflow-x: auto;
      font-size: 0.95rem;
      margin-top: 1rem;
    }

    footer {
      text-align: center;
      margin-top: 4rem;
      padding: 2rem;
      font-size: 0.9rem;
      color: #888;
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
        align-items: flex-start;
        gap: 1rem;
      }

      .content {
        padding: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo"><i class="fas fa-cubes"></i> Commandes API</div>
    <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Accueil</a>
  </header>

  <div class="container">
    <div class="content">
      <h1>📘 Documentation API</h1>
      <p>Cette API vous permet d'intégrer un système de gestion de commandes de manière sécurisée et rapide. Utilisez les endpoints suivants pour interagir avec les données.</p>

      <div class="api-section">
        <h2>🔐 Authentification</h2>
        <p>Ajoutez le token dans l'en-tête <code>Authorization</code> :</p>
        <code>Authorization: Bearer VOTRE_JETON</code>
      </div>

      <div class="api-section">
        <h2>🔁 Endpoints</h2>

        <div class="api-endpoint">
          <h3><i class="fas fa-download"></i> <code>GET /api/commandes</code></h3>
          <p>Obtenir toutes les commandes</p>
          <div class="params">
            <h4>Paramètres :</h4>
            <ul>
              <li><code>page</code> : Numéro de page (par défaut : 1)</li>
              <li><code>limit</code> : Résultats par page (défaut : 10)</li>
            </ul>
          </div>
          <div class="response">
<pre>{
  "data": [
    { "id": 1, "client": "Jean Dupont", "total": 150 },
    { "id": 2, "client": "Marie Curie", "total": 200 }
  ],
  "pagination": { "total": 50, "page": 1, "limit": 10 }
}</pre>
          </div>
        </div>

        <div class="api-endpoint">
          <h3><i class="fas fa-plus"></i> <code>POST /api/commandes</code></h3>
          <p>Créer une commande</p>
          <div class="params">
            <h4>Corps JSON :</h4>
<pre>{
  "client": "Pierre Martin",
  "items": [
    { "product_id": 1, "quantity": 2 },
    { "product_id": 3, "quantity": 1 }
  ]
}</pre>
          </div>
          <div class="response">
<pre>{
  "id": 3,
  "client": "Pierre Martin",
  "total": 300,
  "status": "created"
}</pre>
          </div>
        </div>

        <div class="api-endpoint">
          <h3><i class="fas fa-sync"></i> <code>PUT /api/commandes/{id}</code></h3>
          <p>Modifier une commande existante</p>
<pre>{
  "client": "Pierre Martin",
  "status": "delivered"
}</pre>
          <div class="response">
<pre>{
  "id": 3,
  "client": "Pierre Martin",
  "total": 300,
  "status": "delivered"
}</pre>
          </div>
        </div>

        <div class="api-endpoint">
          <h3><i class="fas fa-trash"></i> <code>DELETE /api/commandes/{id}</code></h3>
          <p>Supprimer une commande</p>
          <div class="response">
<pre>{
  "message": "Commande supprimée avec succès"
}</pre>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    &copy; 4025 Gestion IA | <a href="api.php">API Doc</a>
  </footer>
</body>
</html>
