<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voir la Démo - Gestion de Commandes</title>
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
            border-bottom: 2px solid var(--secondary-color);
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
            border-radius: 15px;
            box-shadow: 0 4px 8px var(--shadow-color);
            margin-top: 2rem;
            text-align: center;
            transition: box-shadow 0.3s ease;
        }

        .content:hover {
            box-shadow: 0 6px 12px var(--shadow-color);
        }

        .content h1 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            font-weight: bold;
        }

        .content p {
            margin-bottom: 2rem;
            font-size: 1.2rem;
            color: #555;
        }

        .demo-video {
            position: relative;
            padding-bottom: 56.25%; /* Ratio 16:9 */
            height: 0;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            margin-bottom: 2rem;
        }

        .demo-video iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
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
            font-size: 1.1rem;
        }

        .cta-button:hover {
            background-color: var(--secondary-color);
        }

        footer {
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            color: #666;
            font-size: 0.9rem;
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
                text-align: center;
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
            <h1>Voir la Démo</h1>
            <p>Découvrez comment notre application peut simplifier votre gestion des commandes en regardant cette démonstration vidéo.</p>

            <div class="demo-video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/VOTRE_ID_VIDEO" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <a href="#" class="cta-button">Commencer Maintenant</a>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="voir_le_demo.php">Voir la Démo</a></p>
    </footer>
</body>
</html>
