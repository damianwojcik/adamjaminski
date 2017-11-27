<?php
    $galleries_background = get_field('galleries_background', 'option');
    $galleries_title = get_field('galleries_title', 'option');
    $galleries_link = get_field('galleries_link', 'option');
?>

<div class="b-lazy section section--galleries" data-src="<?php echo $galleries_background['url']; ?>">

    <h1 class="offscreen">Galerie wydarzeń</h1>

    <a href="<?php echo $galleries_link; ?>" class="wrap">

        <div class="wrap__inner">

            <span class="wrap__icon flaticon-landscape-representing-photo-archive"></span>

            <h2 class="wrap__title"><?php echo $galleries_title; ?></h2>

        </div>
        <!-- /.wrap__inner -->

    </a>
    <!-- /.wrap -->

</div>
<!-- /.section section-galleries -->