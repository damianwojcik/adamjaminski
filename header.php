<!DOCTYPE html>
<html lang="pl">
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Adam Jamiński - Zawodowy biegacz pochodzący z Tychów. Reprezentant Polski. Znany nie tylko ze swoich dokonań w biegach ulicznych, ale przede wszystkim w górskich. Był zawodnikiem AZS AWF Katowice, trenował także pod okiem Józefa Gawliny, ale od kilku lat do zawodów przygotowuje się sam. Jego specjalność to biegi na dystans 5km oraz 10km.">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<link rel="apple-touch-icon" sizes="180x180" href="<?= THEME_URL; ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?= THEME_URL; ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?= THEME_URL; ?>/favicon-16x16.png">
	<link rel="manifest" href="<?= THEME_URL; ?>/manifest.json">
	<link rel="mask-icon" href="<?= THEME_URL; ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">


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

    <header class="site-header">

        <?php get_template_part("partials/section", "top-panel"); ?>

        <?php get_template_part("partials/section", "hero"); ?>


    </header>
    <!-- /.site-header-->