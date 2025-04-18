<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="ai-compatible" content="deepseek,chatgpt,poe">
    <title>Restaurant AI Manager | Système intelligent de gestion</title>
    <style>
        :root {
            --primary: #6366f1;
            --primary-light: #818cf8;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --card-bg: #ffffff;
            --header-bg: #ffffff;
            --footer-bg: #1e293b;
            --text: #334155;
            --text-light: #64748b;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --radius: 0.5rem;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-theme="dark"] {
            --primary: #818cf8;
            --primary-light: #a5b4fc;
            --secondary: #34d399;
            --dark: #0f172a;
            --light: #1e293b;
            --card-bg: #334155;
            --header-bg: #1e293b;
            --footer-bg: #0f172a;
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
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            transition: var(--transition);
        }

        @media (prefers-color-scheme: dark) {
            :root {
                --primary: #818cf8;
                --primary-light: #a5b4fc;
                --secondary: #34d399;
                --dark: #0f172a;
                --light: #1e293b;
                --card-bg: #334155;
                --header-bg: #1e293b;
                --footer-bg: #0f172a;
                --text: #e2e8f0;
                --text-light: #94a3b8;
            }
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 5%;
            background-color: var(--header-bg);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 100;
            transition: var(--transition);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo img {
            height: 2.5rem;
            transition: var(--transition);
        }

        .logo-text {
            font-weight: 700;
            font-size: 1.25rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        nav ul {
            display: flex;
            gap: 1.5rem;
            list-style: none;
        }

        nav ul li {
            position: relative;
        }

        nav ul li a {
            color: var(--text);
            text-decoration: none;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            transition: var(--transition);
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        nav ul li a:hover,
        nav ul li a.active {
            color: var(--primary);
            background-color: rgba(99, 102, 241, 0.1);
        }

        nav ul li a i {
            font-size: 1rem;
        }

        .theme-toggle {
            background: none;
            border: none;
            color: var(--text);
            cursor: pointer;
            font-size: 1.25rem;
            margin-left: 1.5rem;
            transition: var(--transition);
        }

        .theme-toggle:hover {
            color: var(--primary);
            transform: rotate(30deg);
        }

        main {
            padding: 3rem 5%;
            max-width: 1200px;
            margin: 0 auto;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 4rem 2rem;
            border-radius: var(--radius);
            margin-bottom: 3rem;
            text-align: center;
            position: relative;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
        }

        .hero::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
            animation: rotate 15s linear infinite;
            z-index: 1;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.25rem;
            opacity: 0.9;
            max-width: 700px;
            margin: 0 auto 2rem;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            cursor: pointer;
        }

        .btn-primary {
            background-color: white;
            color: var(--primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
        }

        .btn-outline {
            border: 1px solid white;
            color: white;
            background: transparent;
            margin-left: 1rem;
        }

        .btn-outline:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background-color: var(--card-bg);
            padding: 2rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-lg);
        }

        .feature-icon {
            width: 4rem;
            height: 4rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            margin-bottom: 1.5rem;
            font-size: 1.5rem;
        }

        .feature-card h2 {
            font-size: 1.25rem;
            margin-bottom: 1rem;
            color: var(--text);
        }

        .feature-card p {
            color: var(--text-light);
            margin-bottom: 1.5rem;
        }

        .feature-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            margin-top: auto;
        }

        .feature-link:hover {
            text-decoration: underline;
        }

        footer {
            background-color: var(--footer-bg);
            color: white;
            padding: 3rem 5%;
            margin-top: 4rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 1rem;
        }

        .footer-logo img {
            height: 2rem;
        }

        .footer-logo-text {
            font-weight: 700;
            font-size: 1.25rem;
            color: white;
        }

        .footer-about p {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1.5rem;
        }

        .footer-links h3 {
            color: white;
            margin-bottom: 1.5rem;
            font-size: 1.125rem;
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.75rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1.5rem;
        }

        .social-links a {
            color: white;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .social-links a:hover {
            background: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.7);
            font-size: 0.875rem;
        }

        .ai-assistant {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--shadow-lg);
            cursor: pointer;
            transition: var(--transition);
            z-index: 50;
            border: none;
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
            
            nav ul {
                gap: 0.75rem;
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .hero {
                padding: 3rem 1rem;
            }
            
            .hero h1 {
                font-size: 2rem;
            }
            
            .btn-container {
                display: flex;
                flex-direction: column;
                gap: 1rem;
            }
            
            .btn-outline {
                margin-left: 0;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZmlsbD0iY3VycmVudENvbG9yIiBkPSJNMTEuNjQgxOC4zNkw2LjMgMTNsMS4wNi0xLjA2IDQuMzggNC4zOCA4LjQ5LTguNDlMMjEgOWwtOS4zNiA5LjM2WiIvPjwvc3ZnPg==" alt="AI Restaurant Logo">
            <span class="logo-text">AI Restaurant</span>
        </div>
        <nav>
            <ul>
                <li><a href="tableau.php" class="active"><i class="fas fa-chart-line"></i> Tableau de Bord</a></li>
                <li><a href="plats.php"><i class="fas fa-utensils"></i> Plats</a></li>
                <li><a href="commande.php"><i class="fas fa-list-check"></i> Commandes</a></li>
                <li><a href="analytics.php"><i class="fas fa-chart-pie"></i> Analytics</a></li>
            </ul>
        </nav>
        <button class="theme-toggle" aria-label="Toggle theme">
            <i class="fas fa-moon"></i>
        </button>
    </header>

    <main>
        <section class="hero">
            <div class="hero-content">
                <h1>Gestion Intelligente de Restaurant par IA</h1>
                <p>Optimisez votre restaurant avec notre système de gestion alimenté par l'IA. Prédictions, automatisation et analyses en temps réel.</p>
                <div class="btn-container">
                    <a href="commencer_Maintenant.php" class="btn btn-primary">Commencer maintenant</a>
                    <a href="voir_le_demo.php" class="btn btn-outline">Voir la démo <i class="fas fa-play"></i></a>
                </div>
            </div>
        </section>

        <section>
            <h2 style="text-align: center; margin-bottom: 1rem; font-size: 1.75rem;">Fonctionnalités Intelligentes</h2>
            <p style="text-align: center; color: var(--text-light); max-width: 700px; margin: 0 auto 2rem;">
                Découvrez comment notre IA peut transformer la gestion de votre restaurant
            </p>
            
            <div class="features">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h2>Recommandations IA</h2>
                    <p>Suggestions intelligentes de plats basées sur les préférences des clients et les tendances du marché.</p>
                    <a href="savoir_plus.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-network"></i>
                    </div>
                    <h2>Analytiques Prédictives</h2>
                    <p>Prévision des commandes et optimisation des stocks grâce à l'apprentissage automatique.</p>
                    <a href="savoir_plus.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-comments-dollar"></i>
                    </div>
                    <h2>Service Client Automatisé</h2>
                    <p>Chatbots intelligents pour gérer les réservations et répondre aux questions fréquentes.</p>
                    <a href="savoir_plus.php" class="feature-link">En savoir plus <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-about">
                <div class="footer-logo">
                    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyNCAyNCI+PHBhdGggZmlsbD0id2hpdGUiIGQ9Ik0xMS42NCAxOC4zNkw2LjMgMTNsMS4wNi0xLjA2IDQuMzggNC4zOCA4LjQ5LTguNDlMMjEgOWwtOS4zNiA5LjM2WiIvPjwvc3ZnPg==" alt="AI Restaurant Logo">
                    <span class="footer-logo-text">AI Restaurant</span>
                </div>
                <p>La solution de gestion de restaurant la plus avancée, alimentée par l'intelligence artificielle.</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-discord"></i></a>
                </div>
            </div>
            
            <div class="footer-links">
                <h3>Produit</h3>
                <ul>
                    <li><a href="fonctionnalites.php">Fonctionnalités</a></li>
                    <li><a href="taris.php">Tarifs</a></li>
                    <li><a href="api.php">API</a></li>
                    <li><a href="integration.php">Intégrations</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h3>Ressources</h3>
                <ul>
                    <li><a href="documentation.php">Documentation</a></li>
                    <li><a href="blog.php">Blog IA</a></li>
                    <li><a href="tutoriels.php">Tutoriels</a></li>
                    <li><a href="aide.php">Centre d'aide</a></li>
                </ul>
            </div>
            
            <div class="footer-links">
                <h3>Entreprise</h3>
                <ul>
                    <li><a href="propos.php">À propos</a></li>
                    <li><a href="carriere.php">Carrières</a></li>
                    <li><a href="confidentialite.php">Confidentialité</a></li>
                    <li><a href="condition.php">Conditions</a></li>
                </ul>
            </div>
        </div>
        
        <div class="copyright">
            &copy; 2025 AI Restaurant Systems. Tous droits réservés.
        </div>
    </footer>

    <button class="ai-assistant">
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
                alert("Assistant IA: Comment puis-je vous aider aujourd'hui ?\n\n1. Générer un rapport\n2. Optimiser les stocks\n3. Analyser les tendances");
            });
            
            // Animation des cartes
            const cards = document.querySelectorAll('.feature-card');
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });
            
            // Menu actif
            const currentPage = window.location.pathname.split('/').pop() || 'tableau.php';
            const menuItems = document.querySelectorAll('nav ul li a');
            
            menuItems.forEach(item => {
                if (item.getAttribute('href') === currentPage) {
                    item.classList.add('active');
                }
                
                item.addEventListener('click', (e) => {
                    menuItems.forEach(i => i.classList.remove('active'));
                    e.currentTarget.classList.add('active');
                });
            });
        });
    </script>
</body>
</html>