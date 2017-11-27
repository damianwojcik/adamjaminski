<?php
    if ( has_post_thumbnail( $_post->ID ) ) {
        $about_img = get_the_post_thumbnail_url( $_post->ID, 'full' );
    }
?>

<div class="section section--content">

    <div class="container">

        <h1 class="content__title"><?php echo get_the_title(); ?></h1>

        <div class="row">

            <div class="col col-4">

                <img class="b-lazy about-img" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $about_img; ?>" alt="About Image">

            </div>
            <!-- /.col col-4 -->

            <div class="col col-8">

                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; endif; ?>

            </div>
            <!-- /.col col-8 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section section-content -->