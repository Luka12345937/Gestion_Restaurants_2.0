<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intégration Google - Gestion de Commandes</title>
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

        .google-services {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .service-card {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            text-align: center;
            transition: transform 0.3s;
        }

        .service-card:hover {
            transform: translateY(-5px);
        }

        .service-card i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .service-card h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .service-card p {
            color: #666;
            margin-bottom: 1.5rem;
        }

        .service-card .cta-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .service-card .cta-button:hover {
            background-color: var(--secondary-color);
        }

        .google-map {
            margin-top: 2rem;
            height: 400px;
            width: 100%;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px var(--shadow-color);
        }

        .google-map iframe {
            width: 100%;
            height: 100%;
            border: none;
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
            <h1>Intégration Google</h1>
            <p>Intégrez les services Google à notre plateforme pour une expérience encore plus fluide. Découvrez les options disponibles ci-dessous.</p>

            <div class="google-services">
                <div class="service-card">
                    <i class="fab fa-google-drive"></i>
                    <h2>Google Drive</h2>
                    <p>Stockez et partagez vos fichiers directement depuis notre plateforme.</p>
                    <a href="drive.php" class="cta-button">Connecter Google Drive</a>
                </div>

                <div class="service-card">
                    <i class="fas fa-map-marked-alt"></i>
                    <h2>Google Maps</h2>
                    <p>Visualisez et gérez les emplacements de vos commandes sur une carte interactive.</p>
                    <a href="google-map.php" class="cta-button">Voir la Carte</a>
                </div>

                <div class="service-card">
                    <i class="fab fa-google-calendar"></i>
                    <h2>Google Calendar</h2>
                    <p>Synchronisez vos événements et rappels avec Google Calendar.</p>
                    <a href="calendar.php" class="cta-button">Connecter Google Calendar</a>
                </div>
            </div>

            <div class="google-map" id="google-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608444!2d2.294481315607589!3d48.85837007928756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee380ef7e0!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1633068835300!5m2!1sfr!2sfr" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="google.php">Intégration Google</a></p>
    </footer>
</body>
</html>
