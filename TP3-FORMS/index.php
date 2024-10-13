<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php 
        if(isset($_POST['css'])){
            $styleChoisi = $_POST['css'];
            setcookie('style', $styleChoisi, time() + (84600 * 30));
            
            echo "<link rel='stylesheet' href='css/{$styleChoisi}.css' type='text/css' media='screen' title='default' charset='utf-8' />";
        }
        else {
            echo "<link rel='stylesheet' href='css/style1.css' type='text/css' media='screen' title='default' charset='utf-8' />";
        }
    ?>
    
    <title>FORMMMMMMMMMM</title>
</head>
<body>
    <?php 
        session_start();
        if(isset($_SESSION['var'])){
            $login = $_SESSION['var'];
            echo "<h1>Bienvenu ".$login."</h1>";
        }
    ?>
    <nav>
        <a href="login.php">page login</a>
    </nav>
    <form id="style_form" action="index.php" method="POST">
        <select name="css">
            <option value="style1">style1</option>
            <option value="style2">style2</option>
        </select>
        <input type="submit" value="Appliquer" />
    </form>
    <a href="deconnected.php">se déconnecter</a>
</body>
</html>