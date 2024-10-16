<?php 
    require_once("template_header.php");
?>
    <header>
        <h1>MON CV</h1>
        <?php
            require_once("template_menu.php");
            renderMenuToHTML('cv');
        ?>
    </header>
    <main>
        <section class="intro">
            <h2 class="intro__title">Introduction</h2>
            <p class="intro__text">Actuellement étudiant en deuxième année du cycle ingénieur généraliste à IMT Nord Europe (anciennement Mines de Douai). Je suis à la recherche d’un stage dans le domaine du développement web d’une durée de 16 semaines à compter du 7 avril 2025.</p>
        </section>
        <section class="experiences">
            <h2 class="experiences__title">Experiences Professionnelles</h2>
            <div class="experience">
                <h3 class="experience__title">Stagiaire : Développeur Web</h3>
                <p class="experience__entreprise">CVCA Energies</p>
                <p class="experience__date">Mai 2024 - Août 2024</p>
                <p class="experience__text">Création d’un site internet pour l’entreprise “from scratch”.</p>
                <p class="experience__text">Réalisation d’une maquette sur Figma et développement en HTML / CSS / JS.</p>
                <p class="experience__text">Gestion d’un backoffice (Strapi) et mise en ligne (OVH Serveur)</p>
                <p class="experience__text">Gestion d’un projet en autonomie complète.</p>
            </div>
            <div class="experience">
                <h3 class="experience__title">Stagiaire : Animation 3D</h3>
                <p class="experience__entreprise">Couach CNC</p>
                <p class="experience__date">Mai 2023 - Août 2023</p>
                <p class="experience__text">Création d’une vidéo marketing à partir de modélisation 3D.</p>
                <p class="experience__text">Rédaction d’un document de reprise </p>
                <p class="experience__text">Utilisation du logiciel Keyshot (Rendu et Animation 3D)</p>
            </div>
            <h2 class="experiences__title">Experiences Associatives</h2>
            <div class="experience">
                <h3 class="experience__title">Secretaire</h3>
                <p class="experience__entreprise">Gala IMT Nord Europe</p>
                <p class="experience__date">Avril 2024 - Avril 2025</p>
                <p class="experience__text">Gestion d'une équipe de 80 personnes</p>
                <p class="experience__text">Organisation d'un évènement rassemblant plus de 1200 personnes à Lille Grand Palais</p>
                <p class="experience__text">Réalisation de compte rendu et de tableaux excel</p>
            </div>
            <div class="experience">
                <h3 class="experience__title">Responsable Communication</h3>
                <p class="experience__entreprise">CAPA IMT Nord Europe</p>
                <p class="experience__date">Avril 2024 - Octobre 2024</p>
                <p class="experience__text">Réalisation de visuels de communication pour trois semaines d'intégration</p>
                <p class="experience__text">Création d'une identité visuel avec une charte graphique et un merch (sweats, t-shirts, shorts)</p>
                <p class="experience__text">Gestion d'une équipe de 8 personnes aux compétences diverses</p>
            </div>
        </section>
    </main>
<?php
    require_once("template_footer.php");
?>