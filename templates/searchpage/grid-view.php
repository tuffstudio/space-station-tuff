<?php
    $post_title = $post->title;
?>
<div class="single-result">
    <a href="#" class="masonry__link">
        <div class="single-result__image">
            <!-- <img src="<?= get_template_directory_uri() ?>/dist/images/property_img.jpg" alt="" /> -->
            <img src="http://lorempicsum.com/up/350/200/<?php echo(rand(1,6)); ?>" alt="">
        </div>
        <div class="single-result__info">
            <div class="masonry__tile-border"></div>
            <p class="masonry__tile-category">Commercial: <span>Rent</span></p>
            <h3 class="masonry__tile-title">Stratford High Street, e15</h3>
            <p class="masonry__tile-price">114,905 pa</p>
            <p class="masonry__tile-desc masonry__tile-desc--big">610sqm UNIT</p>
        </div>
    </a>
</div>
