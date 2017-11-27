<?php
    $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
    $title = get_the_title();
    $date = get_the_date();
    $category = get_the_category();
    $category_name = $category[0]->name;

?>

<div class="b-lazy section section--title" data-src="<?php echo $image[0]; ?>">

    <div class="container">

        <div class="row">

            <article class="article article--single">

                <div class="article__wrapper">

                    <h5 class="article__tag
                        <?php if($category_name == 'Artykuły') {
                            echo 'article__tag--navy';
                        } else if($category_name == 'Blog') {
                            echo 'article__tag--aqua';
                        } else {
                            echo 'article__tag--navy';
                        }?>
                    ">
                        <?php echo $category_name; ?>
                    </h5>

                    <time datetime="<?php echo get_the_date('c'); ?>" class="article__date">
                        <?php echo $date; ?>
                    </time>

                </div>
                <!-- /.article__wrap -->

                <h2 class="article__title">
                    <?php echo $title; ?>
                </h2>

                <h5>Tagi:</h5>

                <?php the_tags( '<ul class="article__tags"><li>', '</li><li>', '</li></ul>' ); ?>

            </article>
            <!-- /.article article-single -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section section-title -->