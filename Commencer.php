<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commencer - Gestion de Commandes</title>
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
            display: flex;
            flex-direction: column;
            min-height: 100vh;
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

        .hero {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            text-align: center;
            padding: 4rem 2rem;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 2rem;
        }

        .cta-button {
            background-color: white;
            color: var(--primary-color);
            padding: 1rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }

        .cta-button:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .features {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 4rem 2rem;
        }

        .feature-card {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            text-align: center;
            flex: 1 1 300px;
            transition: transform 0.3s;
        }

        .feature-card:hover {
            transform: translateY(-10px);
        }

        .feature-card i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .feature-card h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: #666;
        }

        footer {
            background-color: var(--primary-color);
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: auto;
        }

        footer a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        footer a:hover {
            color: var(--background-color);
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .features {
                flex-direction: column;
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

    <section class="hero">
        <h1>Bienvenue sur Notre Plateforme</h1>
        <p>Gérez vos commandes de manière efficace et intuitive. Que vous soyez un restaurant, un commerce ou une entreprise, notre solution est adaptée à vos besoins.</p>
        <a href="maintenants.php" class="cta-button">Commencer Maintenant</a>
    </section>

    <section class="features">
        <div class="feature-card">
            <i class="fas fa-tachometer-alt"></i>
            <h2>Tableau de Bord Intuitif</h2>
            <p>Un tableau de bord complet pour suivre toutes vos commandes en temps réel.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-shopping-cart"></i>
            <h2>Gestion des Commandes</h2>
            <p>Simplifiez la gestion des commandes avec des outils puissants et faciles à utiliser.</p>
        </div>
        <div class="feature-card">
            <i class="fas fa-chart-line"></i>
            <h2>Analyses Performantes</h2>
            <p>Obtenez des insights précieux pour optimiser vos opérations et augmenter vos ventes.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="commencer.php">Commencer</a></p>
    </footer>
</body>
</html>
