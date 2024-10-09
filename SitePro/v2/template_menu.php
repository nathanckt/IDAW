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

        echo "<nav class='menu'>
            <ul>";

        foreach ($mymenu as $pageId => $pageTitle) {
            $title = $pageTitle[0];
            if($pageId === $currentPageId){
                $class = 'id="currentpage" ';
            } 
            else {
                $class = ' ';
            }
            echo "<li><a href='{$pageId}.php' $class>$title</a></li>";
        }

        // Fin de la navigation
        echo "  </ul>
            </nav>";
    }
?>