<?php
    require_once('config.php');

    $id = '';
    $name = '';
    $mail = '';
    $error_message = '';

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

    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $name = $_GET['name'];
        $mail = $_GET['mail'];
    }

    if (isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['id'])) {
        $name = trim($_POST['name']);
        $mail = trim($_POST['mail']);
        $id = $_POST['id']; 

        if (!empty($name) && !empty($mail)) {
            $requestUpdate = $pdo->prepare("UPDATE `users` SET `name` = :name, `email` = :mail WHERE `id` = :id");
            $requestUpdate->execute([
                ':name' => $name,
                ':mail' => $mail,
                ':id' => $id
            ]);

            header('Location: users.php');
            exit;
        } else {
            $error_message = "Le nom et l'email ne peuvent pas être vides.";
        }
    }

    $pdo = null;

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'utilisateur</title>
</head>
<body>

<h2>Modifier l'utilisateur</h2>

<?php if (!empty($error_message)) { echo '<p style="color:red;">' . $error_message . '</p>'; } ?>

<form id="edit_form" action="modifier.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <table>
        <tr>
            <th>Name :</th>
            <td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>"></td>
        </tr>
        <tr>
            <th>Mail :</th>
            <td><input type="mail" name="mail" value="<?php echo htmlspecialchars($mail); ?>"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit" value="Update" /></td>
        </tr>
    </table>
</form>

</body>
</html>
