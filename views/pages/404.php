<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 - Page non trouvée</title>
  <link rel="stylesheet" href="../public/assets/css/error.css">
  <style>

  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <h2>desole, la page est introuvable</h2>
    <p>La page que vous cherchez n'existe pas .</p>
    <button onclick="retour()">Retour à l'accueil</button>
  </div>

  <script>
    function retour() {
      window.location.href = '/';
    }

   
  </script>
</body>
</html>
