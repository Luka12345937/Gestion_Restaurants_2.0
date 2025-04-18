<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En Savoir Plus - Gestion de Commandes</title>
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

        .info-sections {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .info-section {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
        }

        .info-section h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .info-section ul {
            list-style: disc;
            margin-left: 2rem;
            margin-bottom: 1rem;
        }

        .info-section ul li {
            margin-bottom: 0.5rem;
        }

        .cta-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
            margin-top: 1rem;
        }

        .cta-button:hover {
            background-color: var(--secondary-color);
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
            <h1>En Savoir Plus</h1>
            <p>Découvrez qui nous sommes, ce qui nous motive et comment notre solution peut transformer votre manière de gérer les commandes.</p>

            <div class="info-sections">
                <div class="info-section">
                    <h2>Notre Mission</h2>
                    <p>Nous nous engageons à fournir des outils innovants et intuitifs pour simplifier la gestion des commandes et améliorer la productivité des entreprises. Notre mission est de vous aider à vous concentrer sur ce qui compte vraiment : la croissance de votre activité.</p>
                </div>

                <div class="info-section">
                    <h2>Pourquoi Nous Choisir ?</h2>
                    <ul>
                        <li><strong>Facilité d'Utilisation :</strong> Une interface intuitive pour une prise en main rapide.</li>
                        <li><strong>Personnalisation :</strong> Adaptez l'application à vos besoins spécifiques.</li>
                        <li><strong>Support Client :</strong> Une équipe dédiée pour vous accompagner à chaque étape.</li>
                        <li><strong>Sécurité :</strong> Protection avancée de vos données pour une tranquillité d'esprit.</li>
                    </ul>
                </div>

                <div class="info-section">
                    <h2>Témoignages</h2>
                    <p>"Grâce à leur solution, nous avons pu réduire nos délais de traitement des commandes de 30%. Un outil indispensable pour notre entreprise!"</p>
                    <p>- <strong>Jean Dupont, PDG de EcoTech</strong></p>
                </div>

                <div class="info-section">
                    <h2>Prêt à Commencer ?</h2>
                    <p>Rejoignez des centaines d'entreprises qui ont déjà transformé leur gestion des commandes avec notre solution.</p>
                    <a href="Commencer_Maintenant.php" class="cta-button">Commencer Maintenant</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="savoir_plus.php">En Savoir Plus</a></p>
    </footer>
</body>
</html>
