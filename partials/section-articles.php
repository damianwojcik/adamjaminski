<?php

    $args = array(
        'posts_per_page'   => 3,
        'category_name'    => 'blog',
        'orderby'          => 'date',
    );

    $posts_array = get_posts( $args );

    if($posts_array) {

?>
        <div class="section section--articles">

            <div class="container">

                <h1 class="section__title">
                    Nowości
                </h1>

                <div class="row">

                    <?php
                        foreach ($posts_array as $post) {
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium_large');
                            $title = get_the_title();
                            $content = $post->post_content;
                            $category = get_the_category();
                            $category_name = $category[0]->name;
                            $trimmed_content = wp_trim_words( $content, 75 );
                            $date = get_the_date();

                    ?>

                        <div class="col col-4">

                            <article class="article article-home">

                                <a href="<?php echo get_permalink( $post->ID ); ?>">

                                    <div class="article__tile">

                                        <div class="article__thumb">
                                            <div class="b-lazy article__img" data-src="<?php echo $image[0]; ?>"></div>
                                        </div>

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

                                    </div>
                                    <!--/.article__tile -->

                                    <time datetime="<?php echo get_the_date('c'); ?>" class="article__date">
                                        <?php echo $date; ?>
                                    </time>

                                    <div class="article__wrap">

                                        <h2 class="article__title">
                                            <?php echo $title; ?>
                                        </h2>

                                        <p class="article__content">
                                            <?php echo $trimmed_content; ?>
                                        </p>

                                    </div>
                                    <!--/.article__wrap -->

                                    <span class="btn btn-navy">Czytaj więcej</span>

                                </a>

                            </article>
                            <!-- /.article article-home -->

                        </div>
                        <!-- /.col col-4 -->

                    <?php
                        }//end foreach
                    ?>

                </div>
                <!-- /.row -->

            </div>
            <!-- /.container -->

        </div>
        <!-- /.section section-articles -->

<?php
    } // end if

    wp_reset_query();
?>