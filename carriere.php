<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrières - Gestion de Commandes</title>
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
            margin-bottom: 1rem;
        }

        .job-listings {
            margin-top: 2rem;
        }

        .job-card {
            background-color: var(--card-background);
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            margin-bottom: 1.5rem;
            transition: transform 0.3s;
        }

        .job-card:hover {
            transform: translateY(-5px);
        }

        .job-card h2 {
            font-size: 1.5rem;
            color: var(--secondary-color);
            margin-bottom: 1rem;
        }

        .job-card .location {
            color: #666;
            margin-bottom: 1rem;
        }

        .job-card .description {
            margin-bottom: 1rem;
        }

        .job-card .apply-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .job-card .apply-button:hover {
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
            <h1>Rejoignez Notre Équipe</h1>
            <p>Nous recherchons des talents passionnés pour nous aider à repousser les limites de la gestion de commandes. Découvrez nos opportunités de carrière et postulez dès aujourd'hui !</p>

            <div class="job-listings">
                <div class="job-card">
                    <h2>Développeur Full Stack</h2>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Paris, France (Télétravail possible)</p>
                    <p class="description">Nous cherchons un développeur Full Stack expérimenté pour rejoindre notre équipe technique. Vous travaillerez sur des projets innovants et collaborerez avec des professionnels talentueux.</p>
                    <a href="postule.php" class="apply-button">Postuler</a>
                </div>

                <div class="job-card">
                    <h2>Responsable Marketing Digital</h2>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Lyon, France</p>
                    <p class="description">Nous recherchons un responsable marketing digital pour développer et mettre en œuvre des stratégies de marketing en ligne. Vous aurez un rôle clé dans la croissance de notre marque.</p>
                    <a href="postule.php" class="apply-button">Postuler</a>
                </div>

                <div class="job-card">
                    <h2>Support Client</h2>
                    <p class="location"><i class="fas fa-map-marker-alt"></i> Télétravail</p>
                    <p class="description">Nous cherchons un agent de support client pour aider nos utilisateurs à tirer le meilleur parti de notre plateforme. Vous serez le premier point de contact pour nos clients.</p>
                    <a href="postule.php" class="apply-button">Postuler</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="carriere.php">Carrières</a></p>
    </footer>
</body>
</html>
