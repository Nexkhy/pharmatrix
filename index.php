<?php
$standalone_page = ["login", "404", "signup"];

// Récupération et nettoyage de l'URL
$request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$request_uri = rtrim($request_uri, "/") ?: "/";
$routes = require "./routes/web.php";

// Vérification de l'existence de la route
if (array_key_exists($request_uri, $routes)) {
    $page = $routes[$request_uri];
} else {
    http_response_code(404);
    $page = "404";
}

// Sécurité : Valider le nom de la page
if (!preg_match('/^[a-zA-Z0-9_-]+$/', $page)) {
    http_response_code(400);
    $page = "404";
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "./views/components/head.php"; ?>
</head>
<body>

<?php if (in_array($page, $standalone_page)): ?>
    <!-- Page sans header/footer -->
    <?php include "./views/pages/{$page}.php"; ?>

<?php else: ?>
    <!-- Page avec header/footer -->
    <header>
        <?php include "./views/components/header.php"; ?>
    </header>

    <main class="main">
        <?php
            if ($page === '404') {
                echo '<h2>404 - Page non trouvée</h2>';
            } else {
                include "views/pages/{$page}.php";
            }
        ?>
    </main>

    <footer>
        <?php include "./views/components/footer.php"; ?>
    </footer>
<?php endif; ?>

</body>
</html>
