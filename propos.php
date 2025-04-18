<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>À Propos - Gestion de Commandes</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <style>
        :root {
            --primary-color: #6200EA;
            --secondary-color: #3700B3;
            --text-color: #333;
            --bg-color: #f5f5f5;
            --white: #fff;
            --shadow: rgba(0, 0, 0, 0.1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        header {
            background: var(--primary-color);
            color: var(--white);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo {
            font-size: 1.6rem;
            font-weight: bold;
        }

        .back-link {
            color: var(--white);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 1rem;
            transition: opacity 0.3s ease;
        }

        .back-link:hover {
            opacity: 0.8;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .content {
            background: var(--white);
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 12px var(--shadow);
            animation: fadeIn 0.6s ease-in-out;
        }

        .content h1, .content h2 {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .content p {
            margin-bottom: 1.5rem;
            font-size: 1rem;
            color: #444;
        }

        .team {
            display: flex;
            flex-wrap: wrap;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .team-member {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 4px 6px var(--shadow);
            text-align: center;
            padding: 1.5rem;
            flex: 1 1 calc(33.333% - 1rem);
            transition: transform 0.3s;
        }

        .team-member:hover {
            transform: translateY(-5px);
        }

        .team-member img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .team-member h3 {
            margin-bottom: 0.3rem;
            font-size: 1.2rem;
            color: var(--secondary-color);
        }

        .team-member p {
            color: #666;
            font-size: 0.95rem;
        }

        footer {
            text-align: center;
            padding: 2rem 1rem;
            font-size: 0.95rem;
            color: #666;
        }

        footer a {
            color: var(--primary-color);
            text-decoration: none;
        }

        footer a:hover {
            color: var(--secondary-color);
        }

        @media (max-width: 768px) {
            .team-member {
                flex: 1 1 100%;
            }

            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
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

    <main class="container">
        <section class="content">
            <h1>À Propos de Nous</h1>
            <p>Nous sommes une entreprise spécialisée dans la gestion de commandes pour les restaurants et commerces. Notre mission est de simplifier les processus et améliorer l'expérience client grâce à des solutions innovantes.</p>

            <h2>Notre Histoire</h2>
            <p>Fondée en 2015, notre entreprise est née de la volonté d'aider les commerçants à surmonter les défis du quotidien. Nous avons développé des outils puissants et intuitifs qui ont déjà servi des centaines d'entreprises.</p>

            <h2>Notre Équipe</h2>
            <div class="team">
                <div class="team-member">
                    <img src="assets/img/team/jean.jpg" alt="Portrait de Jean Dupont" />
                    <h3>Jean Dupont</h3>
                    <p>Fondateur & CEO</p>
                </div>
                <div class="team-member">
                    <img src="assets/img/team/marie.jpg" alt="Portrait de Marie Curie" />
                    <h3>Marie Curie</h3>
                    <p>Directrice Technique</p>
                </div>
                <div class="team-member">
                    <img src="assets/img/team/pierre.jpg" alt="Portrait de Pierre Martin" />
                    <h3>Pierre Martin</h3>
                    <p>Responsable Marketing</p>
                </div>
            </div>

            <h2>Nos Valeurs</h2>
            <p>Nous croyons en l'innovation, l'intégrité et l'excellence. Nous plaçons l'humain au cœur de notre démarche et nous nous engageons à offrir des solutions qui ont un réel impact positif.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Gestion de Commandes. Tous droits réservés. | <a href="propos.php">À Propos</a></p>
    </footer>
</body>
</html>
