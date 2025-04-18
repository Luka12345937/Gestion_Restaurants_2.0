<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients - Gestion de Commandes</title>
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

        .client-management {
            display: flex;
            gap: 2rem;
            flex-wrap: wrap;
        }

        .client-list {
            flex: 3;
            overflow-x: auto;
        }

        .client-form {
            flex: 1;
            min-width: 300px;
        }

        .client-table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--card-background);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px var(--shadow-color);
        }

        .client-table th, .client-table td {
            padding: 1rem;
            text-align: left;
        }

        .client-table th {
            background-color: var(--primary-color);
            color: white;
        }

        .client-table tbody tr:nth-child(even) {
            background-color: var(--background-color);
        }

        .client-table tbody tr:hover {
            background-color: #e0e0e0;
        }

        .client-table .actions {
            display: flex;
            gap: 0.5rem;
        }

        .client-table .actions a {
            color: var(--primary-color);
            text-decoration: none;
            transition: color 0.3s;
        }

        .client-table .actions a:hover {
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

        .form-group input {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
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
            width: 100%;
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
            }

            .client-management {
                flex-direction: column;
            }

            .client-form {
                min-width: 100%;
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
            <h1>Gestion des Clients</h1>
            <p>Gérez vos clients de manière efficace. Ajoutez, modifiez ou supprimez des clients ci-dessous.</p>

            <div class="client-management">
                <div class="client-list">
                    <table class="client-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Téléphone</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Jean Dupont</td>
                                <td>jean.dupont@example.com</td>
                                <td>+33 1 23 45 67 89</td>
                                <td class="actions">
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Marie Curie</td>
                                <td>marie.curie@example.com</td>
                                <td>+33 2 34 56 78 90</td>
                                <td class="actions">
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Pierre Martin</td>
                                <td>pierre.martin@example.com</td>
                                <td>+33 3 45 67 89 01</td>
                                <td class="actions">
                                    <a href="#"><i class="fas fa-edit"></i></a>
                                    <a href="#"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="client-form">
                    <h2>Ajouter un Client</h2>
                    <form>
                        <div class="form-group">
                            <label for="name">Nom Complet</label>
                            <input type="text" id="name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Adresse Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>

                        <div class="form-group">
                            <label for="phone">Numéro de Téléphone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>

                        <button type="submit" class="submit-button">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="clients.php">Clients</a></p>
    </footer>
</body>
</html>
