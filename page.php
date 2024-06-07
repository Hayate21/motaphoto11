

<?php get_header(); ?>  <!-- Inclut le fichier d'en-tête du thème (header.php) -->

<main id="main" class="site-main" role="main">  <!-- Définir la section principale du contenu de la page -->

    <!-- Boucle WordPress pour afficher le contenu de la page -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>  <!-- Vérifie s'il y a des posts à afficher et itère sur chacun d'eux -->

            <h1><?php the_title(); ?></h1>  <!-- Affiche le titre du post ou de la page -->
            <section class="container">  <!-- Définir une section avec la classe "container" -->
                <?php the_content(); ?>  <!-- Affiche le contenu du post ou de la page -->
            </section>

    <?php endwhile; endif; ?>  <!-- Termine la boucle et la condition -->

</main>  <!-- Ferme la balise de la section principale -->

<?php get_footer(); ?>  <!-- Inclut le fichier de pied de page du thème (footer.php) -->
