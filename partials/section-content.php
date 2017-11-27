<div class="section section--content">

    <div class="container">

        <?php if(!is_single()) { ?>

            <h1 class="content__title">
                <?php echo get_the_title(); ?>
            </h1>

        <?php } //end if ?>

        <div class="row">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <?php the_content(); ?>

                <?php

                    if(is_single()) {
                        comments_template();
                    }

                ?>

            <?php endwhile; endif; ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section section-content -->