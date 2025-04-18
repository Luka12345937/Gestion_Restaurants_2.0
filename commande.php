<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="ai-compatible" content="deepseek,chatgpt,poe">
    <title>Gestion IA des Commandes</title>
    <style>
        :root {
            --primary: #7c3aed;
            --primary-light: #8b5cf6;
            --accent: #10b981;
            --accent-light: #34d399;
            --bg: #f8fafc;
            --card-bg: #ffffff;
            --text: #1e293b;
            --text-light: #64748b;
            --radius: 12px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-theme="dark"] {
            --primary: #8b5cf6;
            --primary-light: #a78bfa;
            --accent: #34d399;
            --accent-light: #6ee7b7;
            --bg: #0f172a;
            --card-bg: #1e293b;
            --text: #e2e8f0;
            --text-light: #94a3b8;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
            line-height: 1.6;
            transition: var(--transition);
        }

        .container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background-color: var(--primary);
            color: white;
            padding: 1.5rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: var(--shadow);
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .logo-icon {
            color: var(--accent);
        }

        .back-link {
            color: white;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: var(--radius);
            background-color: rgba(255, 255, 255, 0.1);
            transition: var(--transition);
        }

        .back-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(-3px);
        }

        .content {
            background-color: var(--card-bg);
            padding: 2.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            margin-top: 2rem;
            position: relative;
            overflow: hidden;
        }

        .content::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, var(--primary-light) 0%, transparent 70%);
            opacity: 0.1;
            z-index: 0;
        }

        .content-inner {
            position: relative;
            z-index: 1;
        }

        h1 {
            font-size: 2rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--accent));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
        }

        .page-description {
            color: var(--text-light);
            margin-bottom: 2rem;
            max-width: 800px;
        }

        .order-management {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
        }

        @media (min-width: 1200px) {
            .order-management {
                grid-template-columns: 2fr 1fr;
            }
        }

        .order-list {
            overflow-x: auto;
        }

        .order-table {
            width: 100%;
            border-collapse: collapse;
            background-color: var(--card-bg);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .order-table th, .order-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        }

        .order-table th {
            background-color: var(--primary);
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.05em;
        }

        .order-table tr:last-child td {
            border-bottom: none;
        }

        .order-table tr:hover {
            background-color: rgba(0, 0, 0, 0.02);
        }

        .status {
            display: inline-flex;
            align-items: center;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .status.pending {
            background-color: rgba(234, 179, 8, 0.1);
            color: #d97706;
        }

        .status.delivered {
            background-color: rgba(16, 185, 129, 0.1);
            color: var(--accent);
        }

        .status.cancelled {
            background-color: rgba(239, 68, 68, 0.1);
            color: #ef4444;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            color: var(--primary);
            background: none;
            border: none;
            cursor: pointer;
            transition: var(--transition);
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }

        .action-btn:hover {
            background-color: rgba(123, 97, 255, 0.1);
            transform: scale(1.1);
        }

        .order-form-container {
            background-color: var(--card-bg);
            padding: 1.5rem;
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            position: sticky;
            top: 1rem;
        }

        .order-form-container h2 {
            font-size: 1.25rem;
            margin-bottom: 1.5rem;
            color: var(--text);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--text);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.75rem;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: var(--radius);
            font-size: 1rem;
            background-color: var(--bg);
            color: var(--text);
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group select:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 2px rgba(123, 97, 255, 0.2);
        }

        .submit-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
            width: 100%;
            padding: 1rem;
            background: linear-gradient(to right, var(--primary), var(--primary-light));
            color: white;
            border: none;
            border-radius: var(--radius);
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
        }

        .submit-button:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }

        .ai-suggestion {
            margin-top: 2rem;
            padding: 1rem;
            background-color: rgba(16, 185, 129, 0.1);
            border-radius: var(--radius);
            border-left: 4px solid var(--accent);
        }

        .ai-suggestion p {
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
            color: var(--text);
        }

        .ai-suggestion i {
            color: var(--accent);
            margin-top: 0.2rem;
        }

        footer {
            text-align: center;
            padding: 3rem 2rem 2rem;
            margin-top: 4rem;
            color: var(--text-light);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .footer-links a {
            color: var(--text);
            text-decoration: none;
            transition: var(--transition);
        }

        .footer-links a:hover {
            color: var(--primary);
        }

        .theme-toggle {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background-color: var(--primary);
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            z-index: 50;
        }

        .theme-toggle:hover {
            transform: scale(1.1);
        }

        .ai-assistant {
            position: fixed;
            bottom: 6rem;
            right: 2rem;
            width: 3rem;
            height: 3rem;
            border-radius: 50%;
            background: linear-gradient(to right, var(--primary), var(--accent));
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            border: none;
            cursor: pointer;
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
            z-index: 50;
        }

        .ai-assistant:hover {
            transform: scale(1.1);
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
            }
            
            header {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .content {
                padding: 1.5rem;
            }
            
            .order-form-container {
                position: static;
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <i class="fas fa-robot logo-icon"></i>
            <span>AI Commandes</span>
        </div>
        <a href="index.php" class="back-link">
            <i class="fas fa-arrow-left"></i> Retour à l'accueil
        </a>
    </header>

    <div class="container">
        <div class="content">
            <div class="content-inner">
                <h1>Gestion Intelligente des Commandes</h1>
                <p class="page-description">
                    Gérez et analysez vos commandes avec notre système alimenté par l'IA. 
                    Visualisez les tendances et optimisez votre processus de commande.
                </p>

                <div class="order-management">
                    <div class="order-list">
                        <table class="order-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client</th>
                                    <th>Date</th>
                                    <th>Total</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1001</td>
                                    <td>Jean Dupont</td>
                                    <td>2023-10-01</td>
                                    <td>150 €</td>
                                    <td><span class="status pending">En cours</span></td>
                                    <td class="actions">
                                        <button class="action-btn" title="Modifier"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn" title="Supprimer"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1002</td>
                                    <td>Marie Curie</td>
                                    <td>2023-10-02</td>
                                    <td>200 €</td>
                                    <td><span class="status delivered">Livrée</span></td>
                                    <td class="actions">
                                        <button class="action-btn" title="Modifier"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn" title="Supprimer"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1003</td>
                                    <td>Pierre Martin</td>
                                    <td>2023-10-03</td>
                                    <td>180 €</td>
                                    <td><span class="status cancelled">Annulée</span></td>
                                    <td class="actions">
                                        <button class="action-btn" title="Modifier"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn" title="Supprimer"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#1004</td>
                                    <td>Sophie Lambert</td>
                                    <td>2023-10-04</td>
                                    <td>225 €</td>
                                    <td><span class="status delivered">Livrée</span></td>
                                    <td class="actions">
                                        <button class="action-btn" title="Modifier"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn" title="Supprimer"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="ai-suggestion">
                            <p>
                                <i class="fas fa-lightbulb"></i>
                                <span>
                                    <strong>Recommandation IA :</strong> Les commandes du vendredi soir ont un taux de satisfaction 15% plus élevé. 
                                    Envisagez d'augmenter votre personnel pendant ces heures.
                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="order-form-container">
                        <h2>Ajouter une Commande</h2>
                        <form>
                            <div class="form-group">
                                <label for="client">Client</label>
                                <select id="client" name="client" required>
                                    <option value="">Sélectionnez un client</option>
                                    <option value="1">Jean Dupont</option>
                                    <option value="2">Marie Curie</option>
                                    <option value="3">Pierre Martin</option>
                                    <option value="4">Sophie Lambert</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date">Date</label>
                                <input type="datetime-local" id="date" name="date" required>
                            </div>

                            <div class="form-group">
                                <label for="total">Total (€)</label>
                                <input type="number" id="total" name="total" step="0.01" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Statut</label>
                                <select id="status" name="status" required>
                                    <option value="pending">En cours</option>
                                    <option value="delivered">Livrée</option>
                                    <option value="cancelled">Annulée</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="notes">Notes</label>
                                <textarea id="notes" name="notes" rows="3"></textarea>
                            </div>

                            <button type="submit" class="submit-button">
                                <i class="fas fa-plus"></i> Ajouter Commande
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <a href="index.php">Accueil</a>
            <a href="#">Fonctionnalités</a>
            <a href="#">Plans</a>
            <a href="commande.php">Commandes</a>
            <a href="#">Contact</a>
        </div>
        <p>&copy; 2023 AI Commandes. Tous droits réservés.</p>
    </footer>

    <button class="theme-toggle" aria-label="Toggle theme">
        <i class="fas fa-moon"></i>
    </button>

    <button class="ai-assistant" aria-label="AI Assistant">
        <i class="fas fa-robot"></i>
    </button>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Gestion du thème
            const themeToggle = document.querySelector('.theme-toggle');
            const html = document.documentElement;
            
            // Vérifier les préférences système ou le localStorage
            const savedTheme = localStorage.getItem('theme') || 
                              (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');
            html.setAttribute('data-theme', savedTheme);
            
            themeToggle.addEventListener('click', () => {
                const currentTheme = html.getAttribute('data-theme');
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                html.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
                
                // Changer l'icône
                themeToggle.innerHTML = newTheme === 'dark' ? 
                    '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
            });
            
            // Assistant IA
            const aiAssistant = document.querySelector('.ai-assistant');
            aiAssistant.addEventListener('click', () => {
                alert("Assistant IA: Comment puis-je vous aider?\n\n1. Prévoir les commandes\n2. Optimiser les stocks\n3. Analyser les tendances");
            });
        });
    </script>
</body>
</html>