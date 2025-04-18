<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="ai-compatible" content="deepseek,chatgpt,poe">
    <title>Analytics IA | Gestion Intelligente</title>
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
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
            transition: var(--transition);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            color: var(--accent);
        }

        .back-link {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            background-color: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .back-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(-3px);
        }

        .content {
            background-color: var(--card-bg);
            padding: 2.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
        }

        .content::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
            opacity: 0.1;
            z-index: 0;
        }

        .content-inner {
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .page-description {
            color: var(--text-light);
            margin-bottom: 2rem;
            max-width: 800px;
        }

        .analytics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .analytics-card {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            position: relative;
            overflow: hidden;
        }

        .analytics-card::after {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
            opacity: 0.1;
        }

        .analytics-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .card-icon {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .card-title {
            font-size: 1.25rem;
            color: var(--text-light);
            margin-bottom: 0.5rem;
            font-weight: 500;
        }

        .card-value {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .card-change {
            font-size: 0.875rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        .card-change.positive {
            color: var(--accent);
        }

        .card-change.negative {
            color: #ef4444;
        }

        .chart-container {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-bottom: 2rem;
        }

        .chart-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .chart-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .chart-selector {
            display: flex;
            gap: 0.5rem;
        }

        .chart-btn {
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            background-color: var(--bg);
            border: none;
            cursor: pointer;
            transition: var(--transition);
            font-size: 0.875rem;
            color: var(--text);
        }

        .chart-btn.active {
            background-color: var(--primary);
            color: white;
        }

        .chart {
            height: 350px;
            width: 100%;
            position: relative;
        }

        .chart-placeholder {
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, var(--bg) 25%, rgba(123, 97, 255, 0.1) 50%, var(--bg) 75%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
            border-radius: var(--radius);
        }

        @keyframes shimmer {
            0% { background-position: 200% 0; }
            100% { background-position: -200% 0; }
        }

        .ai-insights {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-top: 2rem;
        }

        .insights-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .insights-header h2 {
            font-size: 1.5rem;
            font-weight: 600;
        }

        .insights-header i {
            color: var(--accent);
            font-size: 1.5rem;
        }

        .insight-item {
            padding: 1rem;
            border-left: 3px solid var(--accent);
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: 0 var(--radius) var(--radius) 0;
            margin-bottom: 1rem;
        }

        .insight-item h3 {
            font-size: 1rem;
            margin-bottom: 0.5rem;
            color: var(--text);
        }

        .insight-item p {
            color: var(--text-light);
            font-size: 0.875rem;
        }

        .insight-actions {
            display: flex;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .insight-btn {
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            background-color: rgba(123, 97, 255, 0.1);
            color: var(--primary);
            border: none;
            cursor: pointer;
            font-size: 0.75rem;
            transition: var(--transition);
        }

        .insight-btn:hover {
            background-color: rgba(123, 97, 255, 0.2);
        }

        footer {
            text-align: center;
            padding: 3rem 2rem 2rem;
            margin-top: 4rem;
            color: var(--text-light);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .footer-links a {
            color: var(--text);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
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
            header {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .content {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .analytics-grid {
                grid-template-columns: 1fr;
            }
            
            .chart-selector {
                flex-wrap: wrap;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-robot logo-icon"></i>
            <span>AI Analytics</span>
        </div>
        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
    </header>

    <div class="container">
        <div class="content">
            <div class="content-inner">
                <h1>Analytics Intelligents</h1>
                <p class="page-description">
                    Visualisez et analysez vos données avec notre système alimenté par l'IA. 
                    Découvrez des insights actionnables pour optimiser votre activité.
                </p>

                <div class="analytics-grid">
                    <div class="analytics-card">
                        <i class="fas fa-shopping-cart card-icon"></i>
                        <h3 class="card-title">Commandes ce mois</h3>
                        <p class="card-value">1,248</p>
                        <p class="card-change positive">
                            <i class="fas fa-arrow-up"></i> 12% vs mois dernier
                        </p>
                    </div>
                    <div class="analytics-card">
                        <i class="fas fa-dollar-sign card-icon"></i>
                        <h3 class="card-title">Revenus</h3>
                        <p class="card-value">€52,380</p>
                        <p class="card-change positive">
                            <i class="fas fa-arrow-up"></i> 8% vs mois dernier
                        </p>
                    </div>
                    <div class="analytics-card">
                        <i class="fas fa-users card-icon"></i>
                        <h3 class="card-title">Nouveaux clients</h3>
                        <p class="card-value">87</p>
                        <p class="card-change negative">
                            <i class="fas fa-arrow-down"></i> 5% vs mois dernier
                        </p>
                    </div>
                    <div class="analytics-card">
                        <i class="fas fa-percentage card-icon"></i>
                        <h3 class="card-title">Taux de conversion</h3>
                        <p class="card-value">8.7%</p>
                        <p class="card-change positive">
                            <i class="fas fa-arrow-up"></i> 1.2% vs mois dernier
                        </p>
                    </div>
                </div>

                <div class="chart-container">
                    <div class="chart-header">
                        <h2>Performance des Commandes</h2>
                        <div class="chart-selector">
                            <button class="chart-btn active">Mensuel</button>
                            <button class="chart-btn">Hebdomadaire</button>
                            <button class="chart-btn">Quotidien</button>
                        </div>
                    </div>
                    <div class="chart">
                        <canvas id="ordersChart"></canvas>
                    </div>
                </div>

                <div class="ai-insights">
                    <div class="insights-header">
                        <i class="fas fa-lightbulb"></i>
                        <h2>Insights IA</h2>
                    </div>
                    <div class="insight-item">
                        <h3>Heures de pointe détectées</h3>
                        <p>Vos commandes augmentent de 35% entre 18h et 20h. Envisagez d'augmenter votre personnel pendant ces heures pour améliorer le service.</p>
                        <div class="insight-actions">
                            <button class="insight-btn">Planifier du personnel</button>
                            <button class="insight-btn">Voir les détails</button>
                        </div>
                    </div>
                    <div class="insight-item">
                        <h3>Produit sous-performant</h3>
                        <p>La "Salade César" a un taux de commande 20% inférieur à la moyenne. Envisagez une promotion ou une amélioration de la recette.</p>
                        <div class="insight-actions">
                            <button class="insight-btn">Créer une promotion</button>
                            <button class="insight-btn">Analyser les avis</button>
                        </div>
                    </div>
                    <div class="insight-item">
                        <h3>Opportunité de fidélisation</h3>
                        <p>Les clients qui commandent plus de 3 fois représentent 45% de vos revenus. Envisagez un programme de fidélité pour augmenter la rétention.</p>
                        <div class="insight-actions">
                            <button class="insight-btn">Créer un programme</button>
                            <button class="insight-btn">Segmenter les clients</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <a href="index.php">Accueil</a>
            <a href="tableau.php">Dashboard</a>
            <a href="commande.php">Commandes</a>
            <a href="analytics.php">Analytics</a>
            <a href="parametres.php">Paramètres</a>
        </div>
        <p>&copy; 2023 AI Analytics. Tous droits réservés.</p>
    </footer>

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
            
            // Assistant IA
            const aiAssistant = document.querySelector('.ai-assistant');
            aiAssistant.addEventListener('click', () => {
                alert("Assistant IA: Comment puis-je vous aider?\n\n1. Générer un rapport\n2. Analyser les tendances\n3. Optimiser les opérations");
            });
            
            // Chart.js configuration
            const ctx = document.getElementById('ordersChart').getContext('2d');
            const chart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'],
                    datasets: [{
                        label: 'Commandes',
                        data: [850, 920, 1020, 1150, 1200, 1350, 1420, 1300, 1250, 1320, 1400, 1550],
                        backgroundColor: [
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(16, 185, 129, 0.7)',
                            'rgba(16, 185, 129, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)',
                            'rgba(123, 97, 255, 0.7)'
                        ],
                        borderColor: [
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)',
                            'rgba(123, 97, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    },
                    plugins: {
                        legend: {
                            display: false
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleFont: {
                                size: 14,
                                weight: 'bold'
                            },
                            bodyFont: {
                                size: 12
                            }
                        }
                    }
                }
            });
            
            // Chart selector buttons
            const chartBtns = document.querySelectorAll('.chart-btn');
            chartBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    chartBtns.forEach(b => b.classList.remove('active'));
                    btn.classList.add('active');
                    
                    // Ici vous pourriez mettre à jour les données du graphique
                    // en fonction de la période sélectionnée
                });
            });
        });
    </script>
</body>
</html>