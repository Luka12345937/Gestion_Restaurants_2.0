<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paramètres - Gestion de Commandes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #6200EA;
            --secondary-color: #3700B3;
            --text-color: #333;
            --background-color-light: #f5f5f5;
            --background-color-dark: #121212;
            --card-background: #ffffff;
            --shadow-color: rgba(0, 0, 0, 0.1);
            --button-transition: background-color 0.3s ease, transform 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: var(--background-color-light);
            color: var(--text-color);
            line-height: 1.6;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        body.dark-mode {
            background-color: var(--background-color-dark);
            color: #fff;
        }

        .container {
            max-width: 800px;
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
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow-color);
            transition: background-color 0.3s ease;
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
            transition: box-shadow 0.3s ease;
        }

        .content h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
        }

        .content p {
            margin-bottom: 2rem;
        }

        .settings-section {
            margin-bottom: 2rem;
        }

        .settings-section h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: var(--secondary-color);
            border-bottom: 2px solid var(--primary-color);
            padding-bottom: 0.5rem;
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
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
            transition: border-color 0.3s ease;
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            border-color: var(--primary-color);
        }

        .save-button {
            background-color: var(--primary-color);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: var(--button-transition);
        }

        .save-button:hover {
            background-color: var(--secondary-color);
            transform: scale(1.05);
        }

        footer {
            text-align: center;
            padding: 2rem;
            margin-top: 2rem;
            color: #666;
            transition: color 0.3s ease;
        }

        footer a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s ease;
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

        /* Dark Mode toggle button */
        .dark-mode-toggle {
            padding: 0.5rem 1rem;
            background-color: var(--secondary-color);
            color: white;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .dark-mode-toggle:hover {
            background-color: var(--primary-color);
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Gestion de Commandes</div>
        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Retour à l'Accueil
        </a>
        <button class="dark-mode-toggle" onclick="toggleDarkMode()">Mode Sombre</button>
    </header>

    <div class="container">
        <div class="content">
            <h1>Paramètres</h1>
            <p>Personnalisez vos paramètres pour une expérience optimale. Modifiez vos informations personnelles, préférences et autres paramètres ci-dessous.</p>

            <div class="settings-section">
                <h2>Informations Personnelles</h2>
                <form>
                    <div class="form-group">
                        <label for="name">Nom Complet</label>
                        <input type="text" id="name" name="name" value="Jean Dupont">
                    </div>

                    <div class="form-group">
                        <label for="email">Adresse Email</label>
                        <input type="email" id="email" name="email" value="jean.dupont@example.com">
                    </div>

                    <div class="form-group">
                        <label for="phone">Numéro de Téléphone</label>
                        <input type="tel" id="phone" name="phone" value="+33 1 23 45 67 89">
                    </div>
                </form>
            </div>

            <div class="settings-section">
                <h2>Préférences</h2>
                <form>
                    <div class="form-group">
                        <label for="language">Langue</label>
                        <select id="language" name="language">
                            <option value="fr" selected>Français</option>
                            <option value="en">English</option>
                            <option value="es">Español</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="theme">Thème</label>
                        <select id="theme" name="theme">
                            <option value="light" selected>Clair</option>
                            <option value="dark">Sombre</option>
                        </select>
                    </div>
                </form>
            </div>

            <div class="settings-section">
                <h2>Sécurité</h2>
                <form>
                    <div class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password" id="password" name="password" placeholder="••••••••">
                    </div>

                    <div class="form-group">
                        <label for="confirm-password">Confirmer le Mot de Passe</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="••••••••">
                    </div>
                </form>
            </div>

            <button type="submit" class="save-button">Enregistrer les Modifications</button>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="parametres.php">Paramètres</a></p>
    </footer>

    <script>
        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
        }
    </script>
</body>
</html>
