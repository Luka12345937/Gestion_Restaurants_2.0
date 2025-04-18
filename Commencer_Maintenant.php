<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commencer Maintenant - Gestion de Commandes</title>
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

        .steps {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            gap: 2rem;
            padding: 4rem 2rem;
        }

        .step-card {
            background-color: var(--card-background);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            text-align: center;
            flex: 1 1 300px;
            transition: transform 0.3s;
        }

        .step-card:hover {
            transform: translateY(-10px);
        }

        .step-card i {
            font-size: 3rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .step-card h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
        }

        .step-card p {
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

            .steps {
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
        <h1>Commencer Maintenant</h1>
        <p>Rejoignez des milliers d'entreprises qui ont déjà transformé leur gestion des commandes avec notre solution. Inscrivez-vous dès aujourd'hui et commencez à optimiser vos processus.</p>
        <a href="#steps" class="cta-button">Découvrir les Étapes</a>
    </section>

    <section class="steps" id="steps">
        <div class="step-card">
            <i class="fas fa-user-plus"></i>
            <h2>Étape 1 : Inscription</h2>
            <p>Créez votre compte en quelques minutes. C'est simple et gratuit.</p>
        </div>

        <div class="step-card">
            <i class="fas fa-cogs"></i>
            <h2>Étape 2 : Configuration</h2>
            <p>Personnalisez l'application selon vos besoins et importez vos données existantes.</p>
        </div>

        <div class="step-card">
            <i class="fas fa-rocket"></i>
            <h2>Étape 3 : Lancement</h2>
            <p>Commencez à utiliser l'application et optimisez vos commandes dès aujourd'hui.</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="Commencer_Maintenant.php">Commencer Maintenant</a></p>
    </footer>
</body>
</html>
