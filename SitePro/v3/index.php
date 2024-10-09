<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    if(isset($_GET['page'])) {
    $currentPageId = $_GET['page'];
    }
?>

    <header class="bandeau_haut">
    <h1 class="titre">Nathan Crincket</h1>

    <?php
        renderMenuToHTML($currentPageId);
    ?>
    </header>

    <main>
        <?php
            $pageToInclude = $currentPageId . ".php";
            if(is_readable($pageToInclude))
            require_once($pageToInclude);
            else
            require_once("error.php");
        ?>
    </main>

<?php
    require_once("template_footer.php");
?>