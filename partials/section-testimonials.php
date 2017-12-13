<?php
    $testimonials = get_field('testimonial', 'option');

    if( $testimonials ):

        $rand_key = array_rand($testimonials, 1);
        $random_testimonial = $testimonials[$rand_key];

?>

    <div class="section section--testimonials">

        <div class="mask"></div>

        <video class="b-lazy" muted loop autoplay playsinline poster="<?= THEME_URL; ?>/assets/img/run2.jpg">
			<source data-src="<?= THEME_URL; ?>/assets/img/run2e.mp4" type="video/mp4">
			<source data-src="<?= THEME_URL; ?>/assets/img/run2.webm" type="video/webm">
		</video>

        <h1 class="offscreen">Cytaty</h1>

        <div class="container">

            <div class="row">

                <blockquote class="blockquote">

                    <p class="blockquote__text">
                        <?php echo $random_testimonial["testimonial_content"]; ?>
                    </p>

                    <?php if( ( !empty($random_testimonial["testimonial_author"]) ) ): ?>

                        <span class="blockquote__author">
                            <?php echo $random_testimonial["testimonial_author"]; ?>
                        </span>

                    <?php endif; ?>

                </blockquote>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section section-testimonials -->

<?php endif; ?>