<?php
$galleries_array = get_posts(
    array(
        'posts_per_page' => -1,
        'post_type' => 'galeria',
    )
);
?>

<div class="section section--content">

    <div class="container">

        <h1 class="content__title"><?php echo get_the_title(); ?></h1>

        <div class="row">

            <?php foreach($galleries_array as $gallery){

                $images = get_field('gallery', $gallery->ID);
                $image = wp_get_attachment_image_src(get_post_thumbnail_id($gallery->ID), 'medium_large');

                if( $images ) {

            ?>

                <div class="gallery">

                    <a href="<?php echo get_permalink( $gallery->ID ); ?>" class="gallery__link">

                        <div class="gallery__thumb">

                            <img class="b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo $image[0]; ?>" alt="<?php echo $gallery->post_title; ?>">

                        </div>

                        <h2 class="gallery__title"><?php echo $gallery->post_title; ?></h2>

                    </a>
                    <!-- /.gallery__link -->

                    <div class="gallery__items">

                        <?php foreach ($images as $image){ ?>

                            <a href="<?php echo $image['url']; ?>"></a>

                        <?php } // end foreach ?>

                    </div>
                    <!-- /.gallery__items -->

                </div>
                <!-- /.gallery -->

                <?php } // end if ?>

            <?php } // end foreach ?>

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section section-content -->