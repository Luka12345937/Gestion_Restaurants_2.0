<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="ai-compatible" content="deepseek,chatgpt,poe">
    <title>Plans IA | Gestion Intelligente de Commandes</title>
    <style>
        :root {
            --primary: #6366f1;
            --primary-light: #818cf8;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --card-bg: #ffffff;
            --header-bg: #6366f1;
            --text: #334155;
            --text-light: #64748b;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --radius: 0.75rem;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-theme="dark"] {
            --primary: #818cf8;
            --primary-light: #a78bfa;
            --secondary: #34d399;
            --dark: #0f172a;
            --light: #1e293b;
            --card-bg: #334155;
            --header-bg: #0f172a;
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

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background-color: var(--header-bg);
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
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            font-size: 1.75rem;
            color: var(--secondary);
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
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
        }

        .intro-text {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 800px;
            margin: 0 auto 2rem;
            text-align: center;
        }

        .plans {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .plan-card {
            background-color: var(--card-bg);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
            border: 1px solid rgba(0, 0, 0, 0.1);
            position: relative;
        }

        .plan-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .plan-card.popular {
            border: 2px solid var(--secondary);
        }

        .popular-badge {
            position: absolute;
            top: 0;
            right: 2rem;
            background-color: var(--secondary);
            color: white;
            padding: 0.25rem 1.5rem;
            border-radius: 0 0 var(--radius) var(--radius);
            font-size: 0.875rem;
            font-weight: 600;
        }

        .plan-header {
            padding: 1.5rem;
            text-align: center;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .plan-name {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
            color: var(--text);
        }

        .plan-price {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .plan-period {
            font-size: 1rem;
            color: var(--text-light);
        }

        .plan-features {
            padding: 1.5rem;
            flex-grow: 1;
        }

        .feature-list {
            list-style: none;
            margin-bottom: 2rem;
        }

        .feature-list li {
            padding: 0.75rem 0;
            border-bottom: 1px dashed rgba(0, 0, 0, 0.1);
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .feature-list li:last-child {
            border-bottom: none;
        }

        .feature-list i {
            color: var(--secondary);
            width: 1.25rem;
            text-align: center;
        }

        .plan-cta {
            padding: 0 1.5rem 1.5rem;
            text-align: center;
        }

        .cta-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border-radius: var(--radius);
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            width: 100%;
        }

        .cta-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.2);
        }

        .enterprise-contact {
            text-align: center;
            margin-top: 3rem;
            padding: 2rem;
            background-color: rgba(99, 102, 241, 0.1);
            border-radius: var(--radius);
        }

        .enterprise-contact p {
            margin-bottom: 1.5rem;
            color: var(--text-light);
        }

        .contact-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .contact-link:hover {
            text-decoration: underline;
        }

        .comparison-table {
            margin-top: 4rem;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        th {
            background-color: rgba(99, 102, 241, 0.1);
            color: var(--primary);
            font-weight: 600;
        }

        .feature-name {
            font-weight: 500;
        }

        .fa-check {
            color: var(--secondary);
        }

        .fa-times {
            color: #ef4444;
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
            
            .plans {
                grid-template-columns: 1fr;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-robot logo-icon"></i>
            <span>AI Commandes</span>
        </div>
        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
    </header>

    <div class="container">
        <div class="content">
            <div class="content-inner">
                <h1>Plans Intelligents</h1>
                <p class="intro-text">
                    Choisissez le plan qui correspond à vos besoins. Tous nos plans incluent des fonctionnalités 
                    alimentées par l'IA pour optimiser votre gestion de commandes.
                </p>

                <div class="plans">
                    <div class="plan-card">
                        <div class="plan-header">
                            <h3 class="plan-name">Starter</h3>
                            <div class="plan-price">19€</div>
                            <div class="plan-period">par mois</div>
                        </div>
                        <div class="plan-features">
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i> Jusqu'à 10 utilisateurs</li>
                                <li><i class="fas fa-check"></i> 10 Go de stockage</li>
                                <li><i class="fas fa-check"></i> Prédictions de base</li>
                                <li><i class="fas fa-check"></i> Support par email</li>
                                <li><i class="fas fa-times"></i> Analyse avancée</li>
                            </ul>
                        </div>
                        <div class="plan-cta">
                            <a href="Commencer.php" class="Commencer.php">Commencer</a>
                        </div>
                    </div>

                    <div class="plan-card popular">
                        <div class="popular-badge">Populaire</div>
                        <div class="plan-header">
                            <h3 class="plan-name">Pro</h3>
                            <div class="plan-price">49€</div>
                            <div class="plan-period">par mois</div>
                        </div>
                        <div class="plan-features">
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i> Jusqu'à 50 utilisateurs</li>
                                <li><i class="fas fa-check"></i> 50 Go de stockage</li>
                                <li><i class="fas fa-check"></i> Prédictions avancées</li>
                                <li><i class="fas fa-check"></i> Support prioritaire</li>
                                <li><i class="fas fa-check"></i> Analyse complète</li>
                            </ul>
                        </div>
                        <div class="plan-cta">
                            <a href="choisir_table.php" class="cta-button">Choisir ce plan</a>
                        </div>
                    </div>

                    <div class="plan-card">
                        <div class="plan-header">
                            <h3 class="plan-name">Business</h3>
                            <div class="plan-price">99€</div>
                            <div class="plan-period">par mois</div>
                        </div>
                        <div class="plan-features">
                            <ul class="feature-list">
                                <li><i class="fas fa-check"></i> Utilisateurs illimités</li>
                                <li><i class="fas fa-check"></i> 200 Go de stockage</li>
                                <li><i class="fas fa-check"></i> Prédictions premium</li>
                                <li><i class="fas fa-check"></i> Support 24/7</li>
                                <li><i class="fas fa-check"></i> Analyse personnalisée</li>
                            </ul>
                        </div>
                        <div class="plan-cta">
                            <a href="contactez_nous.php" class="cta-button">Contactez-nous</a>
                        </div>
                    </div>
                </div>

                <div class="enterprise-contact">
                    <h3>Besoin d'une solution sur mesure ?</h3>
                    <p>Notre équipe peut créer un plan personnalisé pour répondre aux besoins spécifiques de votre entreprise.</p>
                    <a href="conctatez.php" class="conctatez.php">Contactez notre équipe commerciale <i class="fas fa-arrow-right"></i></a>
                </div>

                <div class="comparison-table">
                    <h3 style="text-align: center; margin-bottom: 1.5rem;">Comparaison des fonctionnalités</h3>
                    <table>
                        <thead>
                            <tr>
                                <th>Fonctionnalité</th>
                                <th>Starter</th>
                                <th>Pro</th>
                                <th>Business</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="feature-name">Analyse prédictive</td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Optimisation IA</td>
                                <td><i class="fas fa-times"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Chatbot intégré</td>
                                <td><i class="fas fa-times"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">API complète</td>
                                <td><i class="fas fa-times"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                            <tr>
                                <td class="feature-name">Support prioritaire</td>
                                <td><i class="fas fa-times"></i></td>
                                <td><i class="fas fa-check"></i></td>
                                <td><i class="fas fa-check"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <a href="index.php">Accueil</a>
            <a href="fonctionnalites.php">Fonctionnalités</a>
            <a href="plans.php">Plans</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
        </div>
        <p>&copy; 2023 AI Commandes. Tous droits réservés.</p>
    </footer>

    <button class="theme-toggle" aria-label="Toggle theme">
        <i class="fas fa-moon"></i>
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
            
            // Animation des cartes
            const cards = document.querySelectorAll('.plan-card');
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });
        });
    </script>
</body>
</html>