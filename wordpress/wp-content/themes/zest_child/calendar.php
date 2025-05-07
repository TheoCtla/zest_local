<?php
/*
Template Name: Calendrier Rendez-vous
*/

get_header(); ?>

<main id="main" class="site-main">
    <section class="calendar-section">
        <h1>Calendrier des disponibilités</h1>
        <?php echo do_shortcode('[calendrier_google]'); ?>
    </section>
</main>

<?php get_footer(); ?>