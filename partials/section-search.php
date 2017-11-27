<div class="section section--content">

    <div class="container">

        <h1 class="content__title">Wyszukiwanie</h1>

        <div class="row">

            <?php if ( have_posts() ) :

                while ( have_posts() ) : the_post();

                    $title = get_the_title();

            ?>

                    <?php if( !empty($title) ): ?>

                        <a href="<?php the_permalink(); ?>"><?php echo $title; ?></a> <br />

                    <?php endif; ?>

            <?php
                endwhile;

                else : ?>

                <p>Przepraszamy nie znaleziono żadnych wyników spełniających kryteria wyszukiwania. Popraw wyszukiwaną frazę lub wróć na <a href="<?= SITE_URL; ?>">stronę główną</a>.</p>

            <?php endif; ?>


        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

</div>
<!-- /.section section-content -->