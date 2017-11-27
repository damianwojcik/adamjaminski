<?php if( have_rows('partner', 'option') ): ?>

    <div class="section section--partners">

        <div class="container">

            <div class="row">

                <div class="col col-4">

                    <h1 class="section__title">
                        Partnerzy
                    </h1>

                </div>
                <!-- /.col col-4 -->

                <div class="col col-6">

                    <div class="swiper-container">

                        <div class="swiper-wrapper">

                            <?php while ( have_rows('partner', 'option') ) : the_row();

                                $logo = get_sub_field('logo');

                            ?>

                                <div class="swiper-slide">

                                    <a href="<?php the_sub_field('link'); ?>" target="_blank">

                                        <img class="swiper-lazy" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

                                    </a>

                                </div>
                                <!-- /.swiper-slide -->

                            <?php endwhile; ?>

                        </div>
                        <!-- /.swiper-wrapper -->

                    </div>
                    <!-- /.swiper-container -->

                </div>
                <!-- /.col col-6 -->

                <div class="col col-2">

                    <a href="<?php the_field('partners_button_link', 'option') ?>" class="btn btn-white">
                        <?php the_field('partners_button_txt', 'option') ?>
                    </a>

                </div>
                <!-- /.col col-2 -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section section-partners -->

<?php endif; ?>