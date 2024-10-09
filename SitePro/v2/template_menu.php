<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="projets.php">Mes Projets</a></li>
        <li><a href="infos-techniques.php">Infos Techniques </a></li>
    </ul>
</nav> -->

<?php
    function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'index' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets')
        );
        // ...
        foreach($mymenu as $pageId => $pageParameters) {
            if($pageId === "index"){
            echo "<nav class='menu'>
                <ul>
                    <li><a href='index.php' class='currrentpage'>Accueil</a></li>
                    <li><a href='cv.php'>Cv</a></li>
                    <li><a href='projets.php'>Mes Projets</a></li> 
                </ul>
            </nav>"; 
            }
        }
    }
?>