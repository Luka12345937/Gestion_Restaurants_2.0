/restaurant-management-app
│
├── /public
│   ├── index.php
│   ├── assets/
│   │   ├── css/
│   │   │   └── styles.css
│   │   ├── js/
│   │   │   └── main.js
│   │   └── img/
│   │       └── logo.png
│
├── /src
│   ├── /Controllers
│   │   ├── UserController.php
│   │   ├── DishController.php
│   │   ├── OrderController.php
│   │   └── ...
│   ├── /Models
│   │   ├── User.php
│   │   ├── Dish.php
│   │   ├── Order.php
│   │   └── ...
│   ├── /Core
│   │   ├── Database.php
│   │   ├── Request.php
│   │   ├── Response.php
│   │   ├── Validator.php
│   │   └── Authentication.php
│   └── /Views
│       ├── users/
│       │   ├── index.php
│       │   ├── create.php
│       │   └── edit.php
│       ├── dishes/
│       │   ├── index.php
│       │   ├── create.php
│       │   └── edit.php
│       └── ...
│
├── /vendor (pour les dépendances PHP comme Composer)
├── .env (variables d'environnement)
└── README.md
git clone https://github.com/votre-utilisateur/restaurant-management-app.git
cd restaurant-management-app
composer install
php -S localhost:8000 -t public
