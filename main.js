// main.js

document.addEventListener('DOMContentLoaded', () => {
    // Activation du menu actif
    const menuItems = document.querySelectorAll('.menu-item');
    const handleMenuClick = (item) => {
        menuItems.forEach(i => i.classList.remove('active'));
        item.classList.add('active');
    };

    menuItems.forEach(item => {
        item.addEventListener('click', () => handleMenuClick(item));
    });

    // Animations fluides pour les cartes de fonctionnalités
    const featureCards = document.querySelectorAll('.feature-card');
    featureCards.forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.transform = 'translateY(-10px)';
            card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.2)';
        });

        card.addEventListener('mouseout', () => {
            card.style.transform = 'translateY(0)';
            card.style.boxShadow = '0 4px 6px rgba(0, 0, 0, 0.1)';
        });
    });

    // Smooth scrolling pour les ancres
    const smoothScroll = (target) => {
        const element = document.querySelector(target);
        if (element) {
            element.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    };

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            e.preventDefault();
            smoothScroll(anchor.getAttribute('href'));
        });
    });

    // Effet de chargement progressif pour les images
    const lazyLoadImages = () => {
        const images = document.querySelectorAll('img[data-src]');
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const loadImage = (img) => {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
            img.classList.add('loaded');
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    loadImage(entry.target);
                    observer.unobserve(entry.target);
                }
            });
        }, options);

        images.forEach(img => observer.observe(img));
    };

    lazyLoadImages();

    // Mode sombre (Dark Mode)
    const toggleDarkMode = () => {
        document.body.classList.toggle('dark-mode');
        const isDarkMode = document.body.classList.contains('dark-mode');
        localStorage.setItem('dark-mode', isDarkMode);
    };

    const darkModeToggle = document.getElementById('dark-mode-toggle');
    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', toggleDarkMode);
    }

    const savedMode = localStorage.getItem('dark-mode');
    if (savedMode === 'true') {
        document.body.classList.add('dark-mode');
    }

    // Ajout des styles pour le mode sombre
    const styleSheet = document.createElement('style');
    styleSheet.innerHTML = `
        .dark-mode {
            --background-color: #121212;
            --text-color: #ffffff;
            --primary-color: #BB86FC;
            --secondary-color: #03DAC5;
        }
        .dark-mode .feature-card {
            background: #1e1e1e;
        }
        .dark-mode header {
            background: #1e1e1e;
        }
    `;
    document.head.appendChild(styleSheet);
});
