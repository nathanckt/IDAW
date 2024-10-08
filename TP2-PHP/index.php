<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Afficheur Heure
    </title>
</head>
<body>
    <h1>Horloge</h1>
    <p>L'heure actuelle est : 
        <?php 
        date_default_timezone_set("Europe/Paris");
        echo date("H:i:s");
        ?>
    </p>
    
    <h1>Concaténation</h1>
    <?php 
        $a = "Hello";
        $b = "World";
        $c = $a . $b;
        echo $c;
    ?>

    <h1>Instructions</h1>
    <?php 
        $a = 12;
        $b = 0;
        if($a){
            echo "a est vrai \n";
        }
        if(!$b){
            echo "b est faux \n";
        }
    ?>

    <?php 
        $a = 0;
        $b = 0;
        while($a != 10){
            echo $a;
            $a = $a + 1;
        }
    ?>

</body>
</html>