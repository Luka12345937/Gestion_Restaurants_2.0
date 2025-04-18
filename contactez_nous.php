<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-Nous - Gestion de Commandes</title>
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
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .contact-info {
            flex: 1 1 300px;
        }

        .contact-info h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .contact-info p {
            margin-bottom: 1rem;
        }

        .contact-info .info-item {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 1rem;
        }

        .contact-info .info-item i {
            font-size: 1.2rem;
            color: var(--primary-color);
        }

        .contact-form {
            flex: 1 1 400px;
        }

        .contact-form h2 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: var(--secondary-color);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            resize: vertical;
        }

        .submit-button {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .submit-button:hover {
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

    <div class="container">
        <div class="content">
            <div class="contact-info">
                <h1>Contactez-Nous</h1>
                <p>N'hésitez pas à nous contacter pour toute question ou demande d'information. Notre équipe est à votre disposition pour vous aider.</p>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>123 Rue de l'Exemple, 75000 Paris, France</p>
                </div>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <p><a href="mailto:contact@votreentreprise.com">contact@votreentreprise.com</a></p>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <p>+33 1 23 45 67 89</p>
                </div>
            </div>

            <div class="contact-form">
                <h2>Envoyez-Nous un Message</h2>
                <form action="contactez_nous.php" method="POST">
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" id="name" name="name" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="submit-button">Envoyer le Message</button>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="contactez_nous.php">Contactez-Nous</a></p>
    </footer>
</body>
</html>
