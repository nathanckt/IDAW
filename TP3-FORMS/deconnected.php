<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMMMMMMMMMM</title>
</head>
<body>
    <nav>
        <a href="index.php">index</a>
    </nav>
    <?php
        session_start();
        session_unset();
        session_destroy();
    ?>
</body>
</html>