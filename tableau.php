<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="ai-compatible" content="deepseek,chatgpt,poe">
  <title>Dashboard IA | Gestion Intelligente</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #7c3aed;
      --primary-light: #8b5cf6;
      --accent: #10b981;
      --accent-light: #34d399;
      --bg: #f8fafc;
      --card-bg: #ffffff;
      --text: #1e293b;
      --text-light: #64748b;
      --radius: 12px;
      --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
      --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    [data-theme="dark"] {
      --primary: #8b5cf6;
      --primary-light: #a78bfa;
      --accent: #34d399;
      --accent-light: #6ee7b7;
      --bg: #0f172a;
      --card-bg: #1e293b;
      --text: #e2e8f0;
      --text-light: #94a3b8;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background-color: var(--bg);
      color: var(--text);
      transition: var(--transition);
    }

    .dashboard {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      width: 280px;
      background: var(--primary);
      color: white;
      padding: 2rem 1rem;
      transition: width 0.3s;
      position: relative;
      z-index: 100;
      box-shadow: var(--shadow-lg);
    }

    .sidebar.collapsed {
      width: 80px;
    }

    .sidebar-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 2rem;
      padding: 0 0.5rem;
    }

    .sidebar-header h2 {
      font-size: 1.5rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      gap: 0.75rem;
      transition: opacity 0.3s;
    }

    .sidebar.collapsed .sidebar-header h2 {
      opacity: 0;
    }

    .logo-icon {
      color: var(--accent);
    }

    .toggle-btn {
      background: var(--accent);
      color: white;
      border: none;
      border-radius: 50%;
      width: 32px;
      height: 32px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: var(--transition);
    }

    .toggle-btn:hover {
      transform: rotate(180deg);
      background: var(--accent-light);
    }

    .sidebar ul {
      list-style: none;
    }

    .sidebar ul li {
      margin: 0.5rem 0;
    }

    .sidebar ul li a {
      text-decoration: none;
      color: white;
      display: flex;
      align-items: center;
      padding: 0.75rem;
      border-radius: var(--radius);
      transition: var(--transition);
    }

    .sidebar ul li a:hover,
    .sidebar ul li.active a {
      background-color: var(--accent);
      transform: translateX(5px);
    }

    .sidebar ul li i {
      margin-right: 1rem;
      font-size: 1.2rem;
      width: 24px;
      text-align: center;
    }

    .sidebar ul li span {
      transition: opacity 0.3s;
    }

    .sidebar.collapsed ul li span {
      opacity: 0;
    }

    .main-content {
      flex: 1;
      padding: 2rem;
      transition: var(--transition);
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }

    .header h1 {
      font-size: 1.75rem;
      font-weight: 700;
      background: linear-gradient(to right, var(--primary), var(--accent));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .user-menu {
      display: flex;
      align-items: center;
      gap: 1rem;
    }

    .user-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: var(--primary);
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 600;
    }

    .metrics {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 1.5rem;
      margin-bottom: 2rem;
    }

    .metric-card {
      background-color: var(--card-bg);
      padding: 1.5rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
      transition: var(--transition);
      position: relative;
      overflow: hidden;
    }

    .metric-card::after {
      content: "";
      position: absolute;
      top: 0;
      right: 0;
      width: 100px;
      height: 100px;
      background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
      opacity: 0.1;
    }

    .metric-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-lg);
    }

    .metric-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
      background: linear-gradient(to right, var(--primary), var(--accent));
      -webkit-background-clip: text;
      background-clip: text;
      color: transparent;
    }

    .metric-card h3 {
      font-size: 1rem;
      color: var(--text-light);
      margin-bottom: 0.5rem;
      font-weight: 500;
    }

    .metric-value {
      font-size: 1.75rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    .metric-change {
      font-size: 0.875rem;
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    .metric-change.positive {
      color: var(--accent);
    }

    .metric-change.negative {
      color: #ef4444;
    }

    .data-section {
      display: grid;
      grid-template-columns: 1fr;
      gap: 1.5rem;
    }

    @media (min-width: 1200px) {
      .data-section {
        grid-template-columns: 2fr 1fr;
      }
    }

    .data-card {
      background-color: var(--card-bg);
      padding: 1.5rem;
      border-radius: var(--radius);
      box-shadow: var(--shadow);
    }

    .card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 1.5rem;
    }

    .card-header h2 {
      font-size: 1.25rem;
      font-weight: 600;
    }

    .card-header .view-all {
      color: var(--primary);
      text-decoration: none;
      font-size: 0.875rem;
      font-weight: 500;
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    .card-header .view-all:hover {
      text-decoration: underline;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    table th {
      font-weight: 600;
      color: var(--text-light);
      text-transform: uppercase;
      font-size: 0.75rem;
      letter-spacing: 0.05em;
    }

    table tr:last-child td {
      border-bottom: none;
    }

    .status {
      display: inline-flex;
      align-items: center;
      padding: 0.25rem 0.75rem;
      border-radius: 999px;
      font-size: 0.75rem;
      font-weight: 500;
    }

    .status.delivered {
      background-color: rgba(16, 185, 129, 0.1);
      color: var(--accent);
    }

    .status.pending {
      background-color: rgba(234, 179, 8, 0.1);
      color: #d97706;
    }

    .status.cancelled {
      background-color: rgba(239, 68, 68, 0.1);
      color: #ef4444;
    }

    .quick-stats {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      gap: 1rem;
    }

    .stat-item {
      background-color: rgba(123, 97, 255, 0.1);
      padding: 1rem;
      border-radius: var(--radius);
      text-align: center;
    }

    .stat-item h3 {
      font-size: 0.875rem;
      color: var(--text-light);
      margin-bottom: 0.5rem;
    }

    .stat-item p {
      font-size: 1.25rem;
      font-weight: 600;
    }

    .theme-toggle {
      position: fixed;
      bottom: 2rem;
      right: 2rem;
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      background-color: var(--primary);
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      border: none;
      cursor: pointer;
      box-shadow: var(--shadow-lg);
      transition: var(--transition);
      z-index: 50;
    }

    .theme-toggle:hover {
      transform: scale(1.1);
    }

    .ai-assistant {
      position: fixed;
      bottom: 6rem;
      right: 2rem;
      width: 3rem;
      height: 3rem;
      border-radius: 50%;
      background: linear-gradient(to right, var(--primary), var(--accent));
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      border: none;
      cursor: pointer;
      box-shadow: var(--shadow-lg);
      transition: var(--transition);
      z-index: 50;
    }

    .ai-assistant:hover {
      transform: scale(1.1);
    }

    @media (max-width: 768px) {
      .sidebar {
        position: fixed;
        left: -280px;
        height: 100vh;
        z-index: 1000;
      }

      .sidebar.active {
        left: 0;
      }

      .sidebar.collapsed {
        left: -80px;
      }

      .toggle-btn {
        position: fixed;
        top: 1rem;
        left: 1rem;
        z-index: 1001;
      }

      .main-content {
        padding: 1rem;
        margin-left: 0;
      }

      .header h1 {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <div class="dashboard">
    <div class="sidebar" id="sidebar">
      <div class="sidebar-header">
        <h2><i class="fas fa-robot logo-icon"></i><span>AI Commandes</span></h2>
        <button class="toggle-btn" id="sidebar-toggle">
          <i class="fas fa-bars"></i>
        </button>
      </div>
      <ul>
        <li class="active"><a href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
        <li><a href="plats.php"><i class="fas fa-utensils"></i><span>Plats</span></a></li>
        <li><a href="commande.php"><i class="fas fa-shopping-cart"></i><span>Commandes</span></a></li>
        <li><a href="clients.php"><i class="fas fa-users"></i><span>Clients</span></a></li>
        <li><a href="anaytics.php"><i class="fas fa-chart-line"></i><span>Analytics</span></a></li>
        <li><a href="parametres.php"><i class="fas fa-cog"></i><span>Paramètres</span></a></li>
        <li><a href="index.php"><i class="fas fa-home"></i><span>Retour Accueil</span></a></li>
      </ul>
    </div>

    <div class="main-content">
      <div class="header">
        <h1>Tableau de Bord Intelligent</h1>
        <div class="user-menu">
          <div class="user-avatar">AD</div>
        </div>
      </div>

      <div class="metrics">
        <div class="metric-card">
          <i class="fas fa-shopping-cart metric-icon"></i>
          <h3>Commandes aujourd'hui</h3>
          <p class="metric-value">42</p>
          <p class="metric-change positive">
            <i class="fas fa-arrow-up"></i> 12% vs hier
          </p>
        </div>
        <div class="metric-card">
          <i class="fas fa-dollar-sign metric-icon"></i>
          <h3>Revenus</h3>
          <p class="metric-value">€1,850</p>
          <p class="metric-change positive">
            <i class="fas fa-arrow-up"></i> 8% vs semaine dernière
          </p>
        </div>
        <div class="metric-card">
          <i class="fas fa-utensils metric-icon"></i>
          <h3>Plats populaires</h3>
          <p class="metric-value">Pizza IA</p>
          <p class="metric-change">15 commandes</p>
        </div>
        <div class="metric-card">
          <i class="fas fa-users metric-icon"></i>
          <h3>Nouveaux clients</h3>
          <p class="metric-value">7</p>
          <p class="metric-change negative">
            <i class="fas fa-arrow-down"></i> 3% vs hier
          </p>
        </div>
      </div>

      <div class="data-section">
        <div class="data-card">
          <div class="card-header">
            <h2>Dernières Commandes</h2>
            <a href="voir_tout.php" class="view-all">Voir tout <i class="fas fa-chevron-right"></i></a>
          </div>
          <table>
            <thead>
              <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Statut</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>#1001</td>
                <td>Jean Dupont</td>
                <td>10:45 AM</td>
                <td>€42.50</td>
                <td><span class="status delivered">Livré</span></td>
              </tr>
              <tr>
                <td>#1002</td>
                <td>Marie Curie</td>
                <td>11:20 AM</td>
                <td>€35.00</td>
                <td><span class="status pending">En cours</span></td>
              </tr>
              <tr>
                <td>#1003</td>
                <td>Pierre Durand</td>
                <td>12:15 PM</td>
                <td>€28.75</td>
                <td><span class="status delivered">Livré</span></td>
              </tr>
              <tr>
                <td>#1004</td>
                <td>Sophie Martin</td>
                <td>01:30 PM</td>
                <td>€52.00</td>
                <td><span class="status cancelled">Annulé</span></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="data-card">
          <div class="card-header">
            <h2>Statistiques Rapides</h2>
          </div>
          <div class="quick-stats">
            <div class="stat-item">
              <h3>Commandes ce mois</h3>
              <p>342</p>
            </div>
            <div class="stat-item">
              <h3>Taux de complétion</h3>
              <p>92%</p>
            </div>
            <div class="stat-item">
              <h3>Panier moyen</h3>
              <p>€38.50</p>
            </div>
            <div class="stat-item">
              <h3>Clients actifs</h3>
              <p>127</p>
            </div>
          </div>
          <div style="margin-top: 1.5rem;">
            <h3 style="font-size: 0.875rem; color: var(--text-light); margin-bottom: 0.5rem;">Recommandation IA</h3>
            <p style="background-color: rgba(16, 185, 129, 0.1); padding: 1rem; border-radius: var(--radius);">
              <i class="fas fa-lightbulb" style="color: var(--accent); margin-right: 0.5rem;"></i>
              Augmentez votre stock de "Pizza IA" - prévision de demande +25% demain
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <button class="theme-toggle" aria-label="Toggle theme">
    <i class="fas fa-moon"></i>
  </button>

  <button class="ai-assistant" aria-label="AI Assistant">
    <i class="fas fa-robot"></i>
  </button>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      // Gestion du thème
      const themeToggle = document.querySelector('.theme-toggle');
      const html = document.documentElement;
      
      // Vérifier les préférences système ou le localStorage
      const savedTheme = localStorage.getItem('theme') || 
                        (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
      html.setAttribute('data-theme', savedTheme);
      
      themeToggle.addEventListener('click', () => {
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        
        // Changer l'icône
        themeToggle.innerHTML = newTheme === 'dark' ? 
          '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
      });
      
      // Gestion de la sidebar
      const toggleBtn = document.getElementById('sidebar-toggle');
      const sidebar = document.getElementById('sidebar');
      
      toggleBtn.addEventListener('click', () => {
        sidebar.classList.toggle('collapsed');
      });
      
      // Assistant IA
      const aiAssistant = document.querySelector('.ai-assistant');
      aiAssistant.addEventListener('click', () => {
        alert("Assistant IA: Que puis-je faire pour vous?\n\n1. Générer un rapport\n2. Analyser les tendances\n3. Optimiser les stocks");
      });
      
      // Adaptation mobile
      function handleMobileView() {
        if (window.innerWidth <= 768) {
          sidebar.classList.remove('collapsed');
          sidebar.classList.remove('active');
          toggleBtn.style.display = 'flex';
        } else {
          toggleBtn.style.display = 'none';
        }
      }
      
      window.addEventListener('resize', handleMobileView);
      handleMobileView();
      
      toggleBtn.addEventListener('click', () => {
        if (window.innerWidth <= 768) {
          sidebar.classList.toggle('active');
        } else {
          sidebar.classList.toggle('collapsed');
        }
      });
    });
  </script>
</body>
</html>