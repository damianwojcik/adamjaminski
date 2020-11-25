<?php

if( have_rows('section_hero') ):

    while ( have_rows('section_hero') ) : the_row();

        $photo = get_sub_field('photo');
        $headline = get_sub_field('headline');;
        $content = get_sub_field('content');
        $button_txt = get_sub_field('button_txt');
        $button_link = get_sub_field('button_link');
        if( empty($button_link) ){ $button_link = '#'; }

?>

        <div class="section section--hero">

            <div class="container">

                <div class="row">

                    <div class="col col-7">

                        <?php if( ( !empty($photo) ) ): ?>

                            <img class="img-person" src="<?php echo $photo['sizes']['medium_large']; ?>" alt="<?php echo $photo['alt']; ?>">

                        <?php endif; ?>

                    </div>
                    <!-- /.col-7-->

                    <div class="col col-5">

                        <div class="wrap">

                            <?php if( ( !empty($headline) ) ): ?>

                                <h2><?php echo $headline; ?></h2>

                            <?php endif; ?>

                            <?php if( ( !empty($content) ) ): ?>

                                <p>
                                    <?php echo $content; ?>
                                </p>

                            <?php endif; ?>

                            <?php if( ( !empty($button_txt) ) ): ?>

                                <a href="<?php echo $button_link; ?>" class="btn btn-white"><?php echo $button_txt; ?></a>

                            <?php endif; ?>

                        </div>
                        <!-- /.wrap-->

                    </div>
                    <!-- /.col-7-->

                </div>
                <!-- /.row-->

            </div>
            <!-- /.container-->

        </div>
        <!-- /.section section-hero -->

<?php

    endwhile;

else :

    // no rows found

endif;

?>