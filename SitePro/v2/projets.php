<?php 
    require_once("template_header.php");
?>
    <header>
        <h1>MES PROJETS</h1>
        <?php
            require_once("template_menu.php");
            renderMenuToHTML('projets');
        ?>
    </header>
    <main>
        <section class="projets">
            <h2 >Projets WEB</h2>
            <div class="projet">
                <h2 class="experience__title">CVCA Energies</h2>
                <p class="experience__text">Lors d'un stage d'une durée de 12 semaines pendant mon cursus à IMT Nord Europe, j'ai réalisé un site pour l'entreprise CVCA Energies.</p>
                <a href="https://cvca-energies.netlify.app" target="_blank"><img src="assets/screen-cvca.png" alt="Capture d'écran du site CVCA" class="projet__image"></a>
            </div>
            <div class="projet">
                <h2 class="experience__title">GALA IMT Nord Europe</h2>
                <p class="experience__text">Dans le cadre de mon mandat dans l'association GALA IMT Nord Europe, j'ai pu reprendre le site déjà réalisé et l'adapter à notre thème.</p>
                <a href="https://gala.etu.imt-nord-europe.fr" target="_blank"><img src="assets/screen-gala.png" alt="Capture d'écran du site CVCA" class="projet__image"></a>
            </div>
        </section>
    </main>
<?php
    require_once("template_footer.php");
?>