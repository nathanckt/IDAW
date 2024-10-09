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
            'accueil' => array( 'Accueil' ),
            'cv' => array( 'Cv' ),
            'projets' => array('Mes Projets'),
            'contact' => array('Contact')
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
            echo "<li><a href='http://localhost:8888/IDAW/SitePro/v3/index.php?page={$pageId}' $class>$title</a></li>";
        }

        // Fin de la navigation
        echo "  </ul>
            </nav>";
    }
?>