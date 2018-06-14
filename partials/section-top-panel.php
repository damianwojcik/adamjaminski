<?php
    $logo = get_field('logo', 'option');
?>

<div class="section section--top-panel">

    <div class="container">

        <div class="row">

            <h1 class="site-logo">

                <a href="<?= SITE_URL; ?>">
                    <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
                    Adam Jamiński
                </a>

            </h1>
            <!-- /.site-logo-->

            <nav class="primary-nav">

                <h2 class="offscreen">Nawigacja strony</h2>

                <button class="js-toggle-nav">

                    <span class="js-toggle-nav__line"></span>

                    Otwórz nawigację

                </button>
                <!-- /.js-toggle-nav-->

                <?php wp_nav_menu( array(
                    'menu'   => 'Menu główne',
                    'menu_class' => 'primary-nav__menu',
                    'container' => false
                ) ) ?>

                <?php if( have_rows('social_media', 'option') ): ?>

                    <ul class="primary-nav__socials">

                        <?php while( have_rows('social_media', 'option') ): the_row(); ?>

                            <li><a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener"><span class="<?php the_sub_field('icon'); ?>"></span></a></li>

                        <?php endwhile; ?>

                    </ul>

                <?php endif; ?>

                <button class="js-search-link">

                    <span class="flaticon-musica-searcher"></span>

                </button>

            </nav>
            <!-- /.primary-nav-->

        </div>
        <!-- /.row-->

    </div>
    <!-- /.container-->

</div>
<!-- /.section section-top-panel -->