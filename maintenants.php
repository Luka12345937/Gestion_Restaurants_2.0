<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maintenance - Gestion de Commandes</title>
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
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        header {
            position: absolute;
            top: 20px;
            left: 20px;
        }

        header .back-link {
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 5px;
            font-size: 1.2rem;
            transition: color 0.3s;
        }

        header .back-link:hover {
            color: var(--secondary-color);
        }

        .maintenance-container {
            background-color: var(--card-background);
            padding: 3rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            max-width: 600px;
            width: 90%;
        }

        .maintenance-container h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--primary-color);
        }

        .maintenance-container p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
        }

        .maintenance-container .icon {
            font-size: 4rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
        }

        .maintenance-container .cta-button {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .maintenance-container .cta-button:hover {
            background-color: var(--secondary-color);
        }

        footer {
            position: absolute;
            bottom: 20px;
            width: 100%;
            text-align: center;
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
            .maintenance-container {
                padding: 2rem;
            }

            .maintenance-container h1 {
                font-size: 2rem;
            }

            .maintenance-container p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Retour à l'Accueil
        </a>
    </header>

    <div class="maintenance-container">
        <i class="fas fa-tools icon"></i>
        <h1>Site en Maintenance</h1>
        <p>Nous sommes actuellement en maintenance pour améliorer votre expérience. Veuillez revenir bientôt!</p>
        <a href="index.php" class="cta-button">Retour à l'Accueil</a>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="maintenance.php">Maintenance</a></p>
    </footer>
</body>
</html>
