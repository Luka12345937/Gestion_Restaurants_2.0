<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionnalités - Gestion de Commandes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6200EA;
            --secondary-color: #3700B3;
            --text-color: #333;
            --background-color: #f5f5f5;
            --card-background: #ffffff;
            --shadow-color: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }

        header .back-link {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: opacity 0.3s;
        }

        header .back-link:hover {
            opacity: 0.8;
        }

        .content {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            margin-top: 2rem;
        }

        .content h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .content p {
            margin-bottom: 2rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            text-align: center;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-5px);
        }

        .feature-card i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .feature-card h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .feature-card p {
            color: #666;
        }

        footer {
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            color: #666;
        }

        footer a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: var(--secondary-color);
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
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
        <div class="logo">Gestion de Commandes</div>
        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Retour à l'Accueil
        </a>
    </header>

    <div class="container">
        <div class="content">
            <h1>Fonctionnalités</h1>
            <p>Découvrez les fonctionnalités puissantes et intuitives de notre application de gestion de commandes. Conçue pour simplifier vos opérations quotidiennes, elle vous offre un contrôle total sur vos processus.</p>

            <div class="features-grid">
                <div class="feature-card">
                    <i class="fas fa-shopping-cart"></i>
                    <h2>Gestion des Commandes</h2>
                    <p>Créez, gérez et suivez vos commandes en temps réel avec une interface intuitive.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-users"></i>
                    <h2>Gestion des Clients</h2>
                    <p>Centralisez les informations de vos clients et suivez leur historique de commandes.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-chart-line"></i>
                    <h2>Analyses et Rapports</h2>
                    <p>Obtenez des insights précieux avec des rapports détaillés et des analyses en temps réel.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-cogs"></i>
                    <h2>Personnalisation</h2>
                    <p>Adaptez l'application à vos besoins avec des options de personnalisation avancées.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-shield-alt"></i>
                    <h2>Sécurité</h2>
                    <p>Protégez vos données avec des mesures de sécurité robustes et des sauvegardes automatiques.</p>
                </div>

                <div class="feature-card">
                    <i class="fas fa-mobile-alt"></i>
                    <h2>Accessibilité Mobile</h2>
                    <p>Accédez à votre application depuis n'importe où grâce à une interface responsive et mobile-friendly.</p>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="fonctionnalites.php">Fonctionnalités</a></p>
    </footer>
</body>
</html>
