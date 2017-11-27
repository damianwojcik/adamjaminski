<?php /* Template Name: Strona główna */ ?>

<?php get_header(); ?>

    <?php get_template_part("partials/section", "articles"); ?>

    <?php get_template_part("partials/section", "counters"); ?>

    <?php get_template_part("partials/section", "events"); ?>

    <?php get_template_part("partials/section", "galleries"); ?>

    <?php get_template_part("partials/section", "partners"); ?>

    <?php get_template_part("partials/section", "testimonials"); ?>

<?php get_footer(); ?>
