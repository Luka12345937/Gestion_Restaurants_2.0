<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="ai-compatible" content="deepseek,chatgpt,poe">
    <title>Blog IA | Gestion Intelligente de Commandes</title>
    <style>
        :root {
            --primary: #7c3aed;
            --primary-light: #8b5cf6;
            --secondary: #10b981;
            --dark: #1e293b;
            --light: #f8fafc;
            --card-bg: #ffffff;
            --header-bg: #7c3aed;
            --text: #334155;
            --text-light: #64748b;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
            --radius: 0.75rem;
            --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        [data-theme="dark"] {
            --primary: #8b5cf6;
            --primary-light: #a78bfa;
            --secondary: #34d399;
            --dark: #0f172a;
            --light: #1e293b;
            --card-bg: #334155;
            --header-bg: #0f172a;
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
            background-color: var(--light);
            color: var(--text);
            line-height: 1.6;
            transition: var(--transition);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        header {
            background-color: var(--header-bg);
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
            font-size: 1.75rem;
            color: var(--secondary);
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
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
        }

        .intro-text {
            font-size: 1.1rem;
            color: var(--text-light);
            max-width: 800px;
            margin-bottom: 2rem;
        }

        .blog-posts {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .blog-post {
            background-color: var(--card-bg);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
            transition: var(--transition);
            display: flex;
            flex-direction: column;
        }

        .blog-post:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-lg);
        }

        .post-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-bottom: 3px solid var(--primary);
        }

        .post-content {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .post-meta {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            margin-bottom: 0.75rem;
            font-size: 0.875rem;
            color: var(--text-light);
        }

        .post-category {
            background-color: var(--primary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 500;
        }

        .post-title {
            font-size: 1.375rem;
            margin-bottom: 1rem;
            color: var(--text);
            line-height: 1.3;
        }

        .post-excerpt {
            color: var(--text-light);
            margin-bottom: 1.5rem;
            flex-grow: 1;
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
            margin-top: auto;
        }

        .read-more:hover {
            color: var(--primary-light);
            gap: 0.75rem;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.75rem;
            margin-top: 3rem;
        }

        .page-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
            transition: var(--transition);
        }

        .page-link:hover, .page-link.active {
            background-color: var(--primary);
            color: white;
        }

        .page-link.disabled {
            opacity: 0.5;
            pointer-events: none;
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

        .ai-tag {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background-color: var(--secondary);
            color: white;
            padding: 0.25rem 0.75rem;
            border-radius: 999px;
            font-size: 0.75rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 0.25rem;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                gap: 1rem;
                padding: 1rem;
            }
            
            .content {
                padding: 1.5rem;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .blog-posts {
                grid-template-columns: 1fr;
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
                <h1>Blog Intelligence Artificielle</h1>
                <p class="intro-text">
                    Découvrez les dernières tendances en gestion de commandes alimentées par l'IA, 
                    des analyses approfondies et des conseils pratiques pour optimiser vos processus.
                </p>

                <div class="blog-posts">
                    <article class="blog-post">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiB2aWV3Qm94PSIwIDAgNjAwIDQwMCI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiM3YzNhZWQiLz48dGV4dCB4PSIzMDAiIHk9IjIwMCIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjI0IiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSI+T3B0aW1pc2F0aW9uIElBPC90ZXh0Pjwvc3ZnPg==" alt="Optimisation IA" class="post-image">
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">IA</span>
                                <span><i class="far fa-calendar-alt"></i> 15 Nov. 2023</span>
                                <span><i class="far fa-clock"></i> 5 min</span>
                            </div>
                            <h2 class="post-title">5 Algorithmes d'IA pour Optimiser vos Commandes</h2>
                            <p class="post-excerpt">
                                Découvrez comment les algorithmes de machine learning peuvent prédire les demandes, 
                                optimiser les stocks et automatiser vos processus de commandes.
                            </p>
                            <a href="#" class="read-more">
                                Lire l'article <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="ai-tag">
                            <i class="fas fa-bolt"></i> Powered by AI
                        </div>
                    </article>

                    <article class="blog-post">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiB2aWV3Qm94PSIwIDAgNjAwIDQwMCI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiMxMGI5ODEiLz48dGV4dCB4PSIzMDAiIHk9IjIwMCIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjI0IiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSI+UHJlZGljdGlvbnM8L3RleHQ+PC9zdmc+" alt="Prédictions IA" class="post-image">
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Analyse</span>
                                <span><i class="far fa-calendar-alt"></i> 2 Nov. 2023</span>
                                <span><i class="far fa-clock"></i> 7 min</span>
                            </div>
                            <h2 class="post-title">Prédictions 2024: L'IA dans la Gestion de Commandes</h2>
                            <p class="post-excerpt">
                                Les tendances émergentes en intelligence artificielle qui transformeront la gestion 
                                des commandes dans les prochaines années selon nos modèles prédictifs.
                            </p>
                            <a href="#" class="read-more">
                                Lire l'article <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="ai-tag">
                            <i class="fas fa-brain"></i> Deep Analysis
                        </div>
                    </article>

                    <article class="blog-post">
                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MDAiIGhlaWdodD0iNDAwIiB2aWV3Qm94PSIwIDAgNjAwIDQwMCI+PHJlY3Qgd2lkdGg9IjYwMCIgaGVpZ2h0PSI0MDAiIGZpbGw9IiM4YjVjZjYiLz48dGV4dCB4PSIzMDAiIHk9IjIwMCIgZm9udC1mYW1pbHk9IkFyaWFsIiBmb250LXNpemU9IjI0IiBmaWxsPSJ3aGl0ZSIgdGV4dC1hbmNob3I9Im1pZGRsZSIgZG9taW5hbnQtYmFzZWxpbmU9Im1pZGRsZSI+Q2hhdGJvdHM8L3RleHQ+PC9zdmc+" alt="Chatbots IA" class="post-image">
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="post-category">Automatisation</span>
                                <span><i class="far fa-calendar-alt"></i> 20 Oct. 2023</span>
                                <span><i class="far fa-clock"></i> 4 min</span>
                            </div>
                            <h2 class="post-title">Chatbots IA: Révolutionner le Service Client</h2>
                            <p class="post-excerpt">
                                Comment nos chatbots intelligents, basés sur GPT-4, réduisent de 40% le temps de 
                                traitement des commandes et améliorent la satisfaction client.
                            </p>
                            <a href="#" class="read-more">
                                Lire l'article <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="ai-tag">
                            <i class="fas fa-comment-dots"></i> NLP
                        </div>
                    </article>
                </div>

                <div class="pagination">
                    <a href="#" class="page-link active">1</a>
                    <a href="#" class="page-link">2</a>
                    <a href="#" class="page-link">3</a>
                    <a href="#" class="page-link">4</a>
                    <a href="#" class="page-link">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-links">
            <a href="index.php">Accueil</a>
            <a href="#">Fonctionnalités</a>
            <a href="taris.php">Tarifs</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
        </div>
        <p>&copy; 2023 AI Commandes. Tous droits réservés.</p>
    </footer>

    <button class="theme-toggle" aria-label="Toggle theme">
        <i class="fas fa-moon"></i>
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
            
            // Animation des cartes
            const cards = document.querySelectorAll('.blog-post');
            cards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    
                    card.style.setProperty('--mouse-x', `${x}px`);
                    card.style.setProperty('--mouse-y', `${y}px`);
                });
            });
        });
    </script>
</body>
</html>