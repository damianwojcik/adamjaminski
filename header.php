<!DOCTYPE html>
<html lang="pl">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" href="<?= THEME_URL; ?>/favicon.ico" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <!-- HTML 5 SUPPORT
    ================================================== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="page-wrapper">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110071487-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-110071487-1');
</script>


    <header class="site-header">

        <?php get_template_part("partials/section", "top-panel"); ?>

        <?php get_template_part("partials/section", "hero"); ?>


    </header>
    <!-- /.site-header-->