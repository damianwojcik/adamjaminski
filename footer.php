<?php
    $logo_footer = get_field('logo_footer', 'option');
?>

<footer class="site-footer">

    <div class="container">

        <div class="row">

            <div class="col col-1">

                <h1 class="site-logo site-logo--footer">

                    <a href="<?= SITE_URL; ?>">
                        <img src="<?php echo $logo_footer['url']; ?>" alt="<?php echo $logo_footer['alt']; ?>">
                        Adam Jamiński
                    </a>

                </h1>
                <!-- /.site-logo-->

            </div>
            <!-- /.col col-1 -->

            <div class="col col-8">

                <nav class="footer-nav">

                    <h2 class="offscreen">Nawigacja stopki</h2>

                    <?php wp_nav_menu( array(
                        'menu'   => 'Menu główne',
                        'menu_class' => 'footer-nav__menu',
                        'container' => false
                    ) ) ?>

                </nav>
                <!-- /.footer-nav -->

            </div>
            <!-- /.col col-8 -->

            <div class="row row-mobile">

                <div class="col col-1">

                    <nav class="footer-nav">

                        <h2 class="offscreen">Social Media Stopka</h2>

                        <?php if( have_rows('social_media', 'option') ): ?>

                            <ul class="footer-nav__socials">

                                <?php while( have_rows('social_media', 'option') ): the_row(); ?>

                                    <li><a href="<?php the_sub_field('link'); ?>" target="_blank" rel="noopener"><span class="<?php the_sub_field('icon'); ?>"></span></a></li>

                                <?php endwhile; ?>

                            </ul>

                        <?php endif; ?>

                    </nav>
                    <!-- /.footer-nav -->

                </div>
                <!-- /.col col-1 -->

                <div class="col col-2">

                    <p class="copy">
                        <?php echo current_time('Y'); ?> &copy; <a href="http://damianwojcik.it" target="_blank" rel="noopener">damianwojcik.it</a>
                    </p>

                </div>
                <!-- /.col col-2 -->

            </div>
            <!-- /.row-mobile -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</footer>
<!-- /.site-footer -->

</div>
<!-- /.page-wrapper-->

<div class="modal modal-search">

    <div class="modal-search__wrapper">

        <?php dynamic_sidebar('search_panel'); ?>

    </div>
    <!-- /.modal-search__wrapper -->

    <button class="modal-search__close-button" type="button">
        <span aria-hidden="true">&times;</span>
    </button>

</div>
<!-- /.modal modal-search -->


<!-- End Document
================================================== -->

<?php wp_footer(); ?>
</body>
</html>