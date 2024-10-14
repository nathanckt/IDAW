<?php
    require_once('config.php');

    $connectionString = "mysql:host=". _MYSQL_HOST;

    if(defined('_MYSQL_PORT'))
        $connectionString .= ";port=". _MYSQL_PORT;
    
    $connectionString .= ";dbname=" . _MYSQL_DBNAME;
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
    
    $pdo = NULL;
    try {
    $pdo = new PDO($connectionString,_MYSQL_USER,_MYSQL_PASSWORD,$options);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch (PDOException $erreur) {
    echo 'Erreur : '.$erreur->getMessage();
    }

    $request = $pdo->prepare("select * from users");
    $request->execute();

    $resultat = $request->fetchAll(PDO::FETCH_ASSOC);

    // TODO: add your code here
    // retrieve data from database using fetch(PDO::FETCH_OBJ) and
    // display them in HTML array
    $name = '';
    $mail = '';

    if (isset($_POST['name']) && isset($_POST['mail'])) {
        $name = trim($_POST['name']); 
        $mail = trim($_POST['mail']);

        if (!empty($name) && !empty($mail)) {
            $requestInsert = $pdo->prepare("INSERT INTO `users` (`name`, `email`) VALUES (:name, :mail)");

            $requestInsert->execute([
                ':name' => $name,
                ':mail' => $mail
            ]);

            header('Location: ' . $_SERVER['PHP_SELF']);
            exit;
        } else {
            $error_message = "Le nom et l'email ne peuvent pas être vides.";
        }
    }


    /*** close the database connection ***/
    $pdo = null;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des utilisateurs</title>
</head>
<body>

<h2>Tableau des utilisateurs</h2>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>X</th>
            <th>X</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($resultat as $row): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><a href="modifier.php?id=<?php echo $row['id']; ?>&name=<?php echo $row['name']; ?>&mail=<?php echo $row['email']; ?>">modifier</a></td>
            <td><a href="delete.php?id=<?php echo $row['id']; ?>">supprimer</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<form id="login_form" action="users.php" method="POST">
        <table>
            <tr>
                <th>Name :</th>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <th>Mail :</th>
                <td><input type="mail" name="mail"></td>
            </tr>
            <tr>
                <th></th>
                <td><input type="submit" value="Add" /></td>
            </tr>
        </table>
    </form>

</body>
</html>