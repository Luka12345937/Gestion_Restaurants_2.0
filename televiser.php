<!DOCTYPE html>
<html lang="fr" data-theme="light">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>📁 Téléverser des Fichiers – Néo Commandes</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #00ffe7;
      --secondary: #290d62;
      --dark-bg: #10141c;
      --light-bg: #f2f4f8;
      --light-text: #0e0e0e;
      --dark-text: #e0e0e0;
      --accent: #9c27b0;
      --transition: all 0.3s ease;
      font-size: 16px;
    }

    [data-theme="dark"] {
      --bg: var(--dark-bg);
      --text: var(--dark-text);
    }

    [data-theme="light"] {
      --bg: var(--light-bg);
      --text: var(--light-text);
    }

    body {
      font-family: 'Orbitron', sans-serif;
      background-color: var(--bg);
      color: var(--text);
      margin: 0;
      transition: var(--transition);
    }

    header {
      background: linear-gradient(90deg, var(--secondary), var(--accent));
      padding: 1rem 2rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.3);
    }

    .logo {
      font-size: 1.5rem;
      letter-spacing: 2px;
    }

    .theme-toggle {
      cursor: pointer;
      font-size: 1.2rem;
      transition: transform 0.3s;
    }

    .theme-toggle:hover {
      transform: scale(1.2);
    }

    .container {
      max-width: 900px;
      margin: 3rem auto;
      padding: 2rem;
      background: rgba(255,255,255,0.02);
      border-radius: 1rem;
      box-shadow: 0 0 30px rgba(0, 255, 255, 0.1);
      backdrop-filter: blur(10px);
    }

    .upload-area {
      border: 2px dashed var(--primary);
      padding: 3rem 2rem;
      border-radius: 1rem;
      text-align: center;
      cursor: pointer;
      transition: var(--transition);
      position: relative;
    }

    .upload-area:hover {
      background-color: rgba(255, 255, 255, 0.05);
    }

    .upload-area i {
      font-size: 4rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .upload-area input[type="file"] {
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      opacity: 0;
      cursor: pointer;
    }

    .uploaded-files {
      margin-top: 2rem;
    }

    .uploaded-files ul {
      list-style: none;
      padding: 0;
    }

    .uploaded-files li {
      background: rgba(0, 255, 255, 0.05);
      margin-bottom: 1rem;
      padding: 1rem;
      border-radius: 0.5rem;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: var(--transition);
    }

    .uploaded-files a {
      color: var(--primary);
      text-decoration: none;
    }

    footer {
      text-align: center;
      margin-top: 3rem;
      padding: 2rem;
      font-size: 0.9rem;
    }

    .back-link {
      color: white;
      text-decoration: none;
      display: flex;
      gap: 8px;
      align-items: center;
    }

    .back-link:hover {
      opacity: 0.8;
    }

    @media (max-width: 768px) {
      header {
        flex-direction: column;
        gap: 1rem;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">🌐 Néo Commandes</div>
    <div style="display: flex; gap: 20px;">
      <a href="index.php" class="back-link"><i class="fas fa-arrow-left"></i> Retour</a>
      <div class="theme-toggle" id="themeToggle" title="Changer de thème">
        🌓
      </div>
    </div>
  </header>

  <div class="container">
    <h1 style="text-align:center;">🚀 Téléversement Intelligent</h1>
    <p style="text-align:center;">Glissez-déposez vos fichiers dans l’espace ci-dessous ou cliquez pour parcourir.</p>

    <div class="upload-area" id="uploadArea">
      <i class="fas fa-cloud-upload-alt"></i>
      <p><strong>Déposez vos fichiers ici ou cliquez pour explorer</strong></p>
      <input type="file" id="fileInput" multiple>
    </div>

    <div class="uploaded-files">
      <h2>📂 Vos Fichiers</h2>
      <ul id="fileList"></ul>
    </div>
  </div>

  <footer>
    <p>&copy; 4025 Néo Commandes™ | <a href="#">Téléverser</a></p>
  </footer>

  <script>
    const themeToggle = document.getElementById("themeToggle");
    const html = document.documentElement;

    themeToggle.addEventListener("click", () => {
      const theme = html.getAttribute("data-theme");
      html.setAttribute("data-theme", theme === "light" ? "dark" : "light");
    });

    const uploadArea = document.getElementById("uploadArea");
    const fileInput = document.getElementById("fileInput");
    const fileList = document.getElementById("fileList");

    uploadArea.addEventListener("dragover", (e) => {
      e.preventDefault();
      uploadArea.style.borderColor = "#00ffe7aa";
    });

    uploadArea.addEventListener("dragleave", () => {
      uploadArea.style.borderColor = "#00ffe7";
    });

    uploadArea.addEventListener("drop", (e) => {
      e.preventDefault();
      handleFiles(e.dataTransfer.files);
    });

    fileInput.addEventListener("change", () => {
      handleFiles(fileInput.files);
    });

    function handleFiles(files) {
      for (const file of files) {
        const li = document.createElement("li");
        li.textContent = file.name;
        const link = document.createElement("a");
        link.textContent = "📥 Télécharger";
        link.href = URL.createObjectURL(file);
        link.download = file.name;
        li.appendChild(link);
        fileList.appendChild(li);
      }
    }
  </script>
</body>
</html>
