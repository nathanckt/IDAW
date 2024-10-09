<?php 
    require_once("template_header.php");
?>
    <header>
        <h1>ACCUEIL</h1>
        <?php
            require_once("template_menu.php");
            renderMenuToHTML('index');
        ?>
    </header>
    <main>
        <section class="hero">
            <div class="hero__text">
                <h2 class="hero__text--title">Nathan Crincket</h2>
                <p class="hero__text--content">Je suis étudiant en 2e année à IMT Nord Europe.</p>
                <p class="hero__text--content">Actuellement à la recherche d'un stage d'une durée de 16 semaines à partir du 7 avril dans le domaine du développement web.</p>
            </div>
            <div class="hero__photo">
                <img src="assets/photo-cv.png" alt="Photo de Nathan Crincket">
            </div>
        </section>
    </main>
<?php
    require_once("template_footer.php");
?>