<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Ujikom 2025 + Vue.js</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      min-height: 100vh;
      margin: 0;
      padding: 2rem;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .header {
      text-align: center;
      margin-bottom: 2rem;
    }

    .logo {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .subtitle {
      font-size: 1.2rem;
      opacity: 0.9;
      margin-bottom: 2rem;
    }

    .vue-section {
      background: rgba(255, 255, 255, 0.1);
      border-radius: 12px;
      padding: 2rem;
      margin-bottom: 2rem;
    }

    .links {
      display: flex;
      gap: 1rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .link {
      background: rgba(255, 255, 255, 0.15);
      padding: 0.75rem 1.5rem;
      border-radius: 8px;
      text-decoration: none;
      color: white;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .link:hover {
      background: rgba(255, 255, 255, 0.25);
      transform: translateY(-2px);
    }
  </style>
</head>

<body>
  <div id="app">
    <div class="container">
      <div class="header">
        <h1 class="logo">Laravel + Vue.js</h1>
        <p class="subtitle">Ujikom 2025 - SMKN 1 Ciamis - Muhammad Fikri Haikal</p>
      </div>

      <div class="vue-section">
        <h2 style="margin-bottom: 1rem; font-size: 1.5rem;">🎉 Vue.js Component Demo</h2>
        <example-component></example-component>
      </div>

      <div style="text-align: center;">
        <h3 style="margin-bottom: 1rem;">🚀 Development Stack</h3>
        <div class="links">
          <a href="https://laravel.com/docs" class="link">Laravel Docs</a>
          <a href="https://vuejs.org/" class="link">Vue.js Docs</a>
          <a href="https://tailwindcss.com/" class="link">Tailwind CSS</a>
          <a href="https://vitejs.dev/" class="link">Vite</a>
          <a href="https://github.com/fikrihaikal17/ujikom-2025-smkn1ciamis" class="link">GitHub</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>