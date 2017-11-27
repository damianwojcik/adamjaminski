<?php

    $title = get_field('section_events_title', 'option');
    $events = get_field('event', 'option');
    $order = array();

    if( $events ):

        foreach( $events as $i => $row ) {

            $order[ $i ] = new DateTime($row['date']);

        }

        array_multisort( $order, SORT_ASC, $events );

?>

    <div class="section section--events">

        <div class="container">

            <h1 class="section__title">
                <?php echo $title; ?>
            </h1>

            <div class="row">

                <div class="swiper-container">

                    <div class="swiper-wrapper">

                        <?php foreach($events as $event) {

                            $date = $event['date'];
                            $dateObj = new DateTime($date);
                            $title = $event['title'];
                            $description = $event['description'];
                            $link = $event['link'];
                            $dateStr = strtotime($date);
                            $now = new DateTime();

                            if($dateObj > $now) {

                        ?>

                            <div class="swiper-slide">

                                <div class="event">

                                    <?php if( ( !empty($link) ) ): ?>

                                        <a href="<?php echo $link; ?>" class="event__link" target="_blank">

                                    <?php endif; ?>

                                        <div class="event__date">

                                            <span class="event__day"><?php echo $dateObj->format('d'); ?></span>
                                            <span class="event__month"><?php echo date_i18n('M', $dateStr);?></span>

                                        </div>
                                        <!-- /.event__date -->

                                        <div class="event__meta">

                                            <?php if( ( !empty($title) ) ): ?>

                                                <h3 class="event__title"><?php echo $title; ?></h3>

                                            <?php endif; ?>

                                            <?php if( ( !empty($description) ) ): ?>

                                                <p class="event__description">
                                                    <?php echo $description; ?>
                                                </p>

                                            <?php endif; ?>

                                        </div>
                                        <!-- /.event__meta -->

                                    <?php if( ( !empty($link) ) ): ?>

                                        </a>

                                    <?php endif; ?>

                                </div>
                                <!-- /.event -->

                            </div>
                            <!-- /.swiper-slide -->

                        <?php } } //end foreach?>

                    </div>
                    <!-- /.swiper-wrapper -->

                    <div class="swiper-pagination"></div>

                </div>
                <!-- /.swiper-container -->

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container -->

    </div>
    <!-- /.section section-events -->

<?php endif; ?>