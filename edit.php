<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Modifier Utilisateur - IA Commandes 4040</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <style>
    :root {
      --primary: #00ffe7;
      --secondary: #ff6ec4;
      --text-light: #ffffff;
      --text-dark: #111;
      --background-light: #f2f2f2;
      --background-dark: #111827;
      --card-light: rgba(255, 255, 255, 0.7);
      --card-dark: rgba(17, 24, 39, 0.7);
      --shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      --transition-speed: 0.3s;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background-color: var(--background-light);
      color: var(--text-dark);
      transition: background-color var(--transition-speed), color var(--transition-speed);
    }

    body.dark-mode {
      background-color: var(--background-dark);
      color: var(--text-light);
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 1.5rem 2rem;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      color: white;
      box-shadow: var(--shadow);
    }

    .logo {
      font-size: 1.8rem;
      font-weight: bold;
    }

    .back-link {
      text-decoration: none;
      color: white;
      display: flex;
      align-items: center;
      gap: 0.5rem;
      transition: opacity var(--transition-speed);
    }

    .back-link:hover {
      opacity: 0.8;
    }

    .container {
      max-width: 700px;
      margin: 2rem auto;
      padding: 2rem;
      background-color: var(--card-light);
      border-radius: 20px;
      box-shadow: var(--shadow);
      backdrop-filter: blur(10px);
      transition: background-color var(--transition-speed);
    }

    body.dark-mode .container {
      background-color: var(--card-dark);
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      background: linear-gradient(45deg, var(--primary), var(--secondary));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .form-group {
      margin-bottom: 1.5rem;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
    }

    input, select {
      width: 100%;
      padding: 0.8rem;
      border: none;
      border-radius: 10px;
      font-size: 1rem;
      background-color: #eee;
      transition: all var(--transition-speed);
    }

    body.dark-mode input, 
    body.dark-mode select {
      background-color: #333;
      color: #fff;
    }

    input:focus, select:focus {
      outline: 2px solid var(--primary);
    }

    .submit-button {
      background: linear-gradient(to right, var(--primary), var(--secondary));
      color: white;
      border: none;
      padding: 1rem;
      width: 100%;
      font-size: 1.1rem;
      font-weight: bold;
      border-radius: 10px;
      cursor: pointer;
      transition: transform 0.2s ease;
    }

    .submit-button:hover {
      transform: scale(1.02);
    }

    .error-message {
      color: #ff5b5b;
      font-size: 0.9rem;
      margin-top: 0.5rem;
    }

    .footer {
      text-align: center;
      margin-top: 3rem;
      padding: 2rem;
      font-size: 0.9rem;
      color: #888;
    }

    .theme-toggle {
      cursor: pointer;
      font-size: 1.2rem;
      color: white;
      background: none;
      border: none;
      transition: transform var(--transition-speed);
    }

    .theme-toggle:hover {
      transform: rotate(20deg);
    }

    @media (max-width: 768px) {
      .header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
      }

      .container {
        padding: 1rem;
        margin: 1rem;
      }
    }
  </style>
</head>
<body>
  <header class="header">
    <div class="logo">🛸 Gestion 4040</div>
    <a href="index.php" class="back-link">
      <i class="fas fa-arrow-left"></i> Retour
    </a>
    <button class="theme-toggle" id="themeToggle" title="Changer le thème"><i class="fas fa-moon"></i></button>
  </header>

  <div class="container">
    <h1>Modifier Utilisateur</h1>
    <form action="edit.php" method="POST">
      <div class="form-group">
        <label for="username">Nom d'Utilisateur</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username'] ?? ''); ?>" required>
        <?php if (isset($errors['username'])): ?>
          <div class="error-message"><?php echo $errors['username']; ?></div>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="email">Adresse Email</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email'] ?? ''); ?>" required>
        <?php if (isset($errors['email'])): ?>
          <div class="error-message"><?php echo $errors['email']; ?></div>
        <?php endif; ?>
      </div>

      <div class="form-group">
        <label for="role">Rôle</label>
        <select id="role" name="role" required>
          <option value="admin" <?php echo ($user['role'] ?? '') === 'admin' ? 'selected' : ''; ?>>Administrateur</option>
          <option value="user" <?php echo ($user['role'] ?? '') === 'user' ? 'selected' : ''; ?>>Utilisateur</option>
        </select>
        <?php if (isset($errors['role'])): ?>
          <div class="error-message"><?php echo $errors['role']; ?></div>
        <?php endif; ?>
      </div>

      <button type="submit" class="submit-button">✨ Enregistrer</button>
    </form>
  </div>

  <footer class="footer">
    &copy; 4040 Commandes IA. Codé par Deepsek & ChatGPT. | <a href="edit.php" style="color: var(--primary);">Modifier</a>
  </footer>

  <script>
    const toggleBtn = document.getElementById('themeToggle');
    toggleBtn.addEventListener('click', () => {
      document.body.classList.toggle('dark-mode');
      const icon = toggleBtn.querySelector('i');
      icon.classList.toggle('fa-moon');
      icon.classList.toggle('fa-sun');
    });
  </script>
</body>
</html>
