<div class="section section--content">

    <div class="container">

        <h1 class="content__title">
            <?php if(is_tag()) {
                single_tag_title('Tag: ');
            } else {
                echo Blog;
                if (is_date()) {
                    echo ': ';
                    single_month_title(' ');
                }
            }
            ?>
        </h1>

        <div class="row">

            <div class="col col-8">

                <?php if ( have_posts() ) :

                    while ( have_posts() ) : the_post();

                        $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
                        $title = get_the_title();
                        $date = get_the_date();
                        $comments_num = get_comments_number();
                        $comments_link = get_comments_link();
                        $content = get_the_content();
                        $trimmed_content = wp_trim_words( $content, 75 );
                        $category = get_the_category();
                        $category_name = $category[0]->name;

                    ?>

                        <article class="article article--archive">

                            <time datetime="<?php echo get_the_date('c'); ?>" class="article__date">
                                <?php echo $date; ?>
                            </time>

                            <a href="<?php echo $comments_link; ?>" class="article__comments">
                                <span><?php echo $comments_num; ?></span>
                                <span>Komentarzy</span>
                            </a>

                            <a href="<?php the_permalink(); ?>">

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

                            </a>

                            <div class="article__wrapper">

                                <h2 class="article__title">
                                    <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a>
                                </h2>

                                <h5>Tagi:</h5>

                                <?php the_tags( '<ul class="article__tags"><li>', '</li><li>', '</li></ul>' ); ?>

                                <p class="article__content">
                                    <?php echo $trimmed_content; ?>
                                </p>

                            </div>
                            <!--/.article__wrap -->

                            <a href="<?php the_permalink(); ?>" class="btn btn-navy">Czytaj więcej</a>

                        </article>
                        <!-- /.article article-archive -->

                    <?php endwhile; ?>

                    <span class="alignleft"><?php next_posts_link( 'Poprzednie' ); ?></span>
                    <span class="alignright"><?php previous_posts_link( 'Następne' ); ?></span>


                    <?php else : ?>

                        <p><?php _e('Przepraszamy, niestety nie znaleziono żadnych wpisów spełniających Twoje kryteria.'); ?></p>

                <?php endif; ?>

            </div>
            <!-- /.col col-8 -->

            <div class="col col-4">

                <aside class="sidebar sidebar--blog">

                    <h1 class="offscreen">Sidebar</h1>

                    <?php

                        $args = array( 'numberposts' => '5', 'category' => '2' );
                        $recent_posts = wp_get_recent_posts( $args );

                        if ($recent_posts) {

                    ?>

                        <h5>Najnowsze wpisy</h5>

                                <ul>

                                    <?php

                                            foreach( $recent_posts as $recent ){

                                                $dateformatstring = "d F Y";
												$unixtimestamp = strtotime($recent['post_date']);
												
                                                echo '<li>';
                                                echo '<span class="post-date">';
												echo date_i18n($dateformatstring, $unixtimestamp);
												echo '</span>';
                                                echo '<a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"] . '</a></li>';
                                            }

                                        } // end if

                                    ?>

                                </ul>

                    <?php dynamic_sidebar('blog_sidebar'); ?>

                </aside>

            </div>
            <!-- /.col col-4 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section section-content -->