<?php
    $cookies_text = get_option('cookies_text');
    $cookies_bg = get_option('cookies_bg');
?>
<div class="cookies-info js-cookies-bar js-cookies-close" style="background-color: <?= $cookies_bg; ?>;">
    <p class="cookies-info__body u--text-uppercase">
        <?= $cookies_text; ?>
    </p>
    <i class="icon icon-cancel cookies-info__close js-cookies-close"></i>
</div>
