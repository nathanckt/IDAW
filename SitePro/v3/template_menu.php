<!-- <nav class="menu">
    <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="cv.php">Cv</a></li>
        <li><a href="projets.php">Mes Projets</a></li>
        <li><a href="infos-techniques.php">Infos Techniques </a></li>
    </ul>
</nav> -->

<?php
    function renderMenuToHTML($currentPageId, $lang) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
            // idPage titre
            'accueil' => array( 'Accueil','Home' ),
            'cv' => array( 'Cv','Resume' ),
            'projets' => array('Mes Projets', "My Projects"),
            'contact' => array('Contact', 'Contact')
        );

        echo "<nav class='menu'>
            <ul>";

        foreach ($mymenu as $pageId => $pageTitle) {
            if($lang === "en"){
                $title = $pageTitle[1];
            }
            else{
                $title = $pageTitle[0];
            }
            if($pageId === $currentPageId){
                $class = 'id="currentpage" ';
            } 
            else {
                $class = ' ';
            }
            echo "<li><a href='http://localhost:8888/IDAW/SitePro/v3/index.php?page={$pageId}&lang={$lang}' $class>$title</a></li>";
        }

        if($lang === "en"){
            echo "<li><a href='http://localhost:8888/IDAW/SitePro/v3/index.php?page={$currentPageId}&lang=fr' >French</a></li>";
        }
        if($lang === "fr"){
            echo "<li><a href='http://localhost:8888/IDAW/SitePro/v3/index.php?page={$currentPageId}&lang=en' >Anglais</a></li>";
        }

        // Fin de la navigation
        echo "  </ul>
            </nav>";
    }
?>