<?php

if( have_rows('section_counters') ):

    while ( have_rows('section_counters') ) : the_row();

        $title = get_sub_field('title');

?>

    <div class="section section--counters">

    <div class="container">

        <h1 class="section__title">
            <?php echo $title; ?>
        </h1>

        <div class="row">

            <?php

            if( have_rows('counter') ):

                while ( have_rows('counter') ) : the_row();

                    $icon = get_sub_field('icon');
                    $number = get_sub_field('number');
                    $number_span = get_sub_field('number_span');
                    $title = get_sub_field('title');

            ?>

                    <div class="col col-2">

                        <div class="counter">

                            <?php if( ( !empty($icon) ) ): ?>

                                <span class="counter__icon <?php echo $icon; ?>"></span>

                            <?php endif; ?>

                            <?php if( ( !empty($number) ) ): ?>

                                <span class="counter__title">
                                    <span class="js-countUp"><?php echo $number; ?></span>
                                    <?php if( ( !empty($number_span) ) ):
                                        echo $number_span;
                                    endif; ?>
                                </span>

                            <?php endif; ?>

                            <?php if( ( !empty($title) ) ): ?>

                                <span class="counter__description"><?php echo $title; ?></span>

                            <?php endif; ?>

                        </div>
                        <!-- /.counter -->

                    </div>
                    <!-- /.col col-3 -->

            <?php

                endwhile;

            else :

                // no rows found

            endif;

            ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    </div>
    <!-- /.section section-counters -->

<?php

    endwhile;

else :

    // no rows found

endif;

?>