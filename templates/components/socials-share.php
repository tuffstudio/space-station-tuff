<?php
    $page_url = urlencode(get_permalink());
    $page_title = urlencode(get_the_title());

    $facebook_share = 'https://www.facebook.com/sharer/sharer.php?u=' . $page_url . '&title=' . $page_title . '&display=popup';
    $twitter_share = 'http://twitter.com/intent/tweet?status=' . $page_title . '+' . $page_url;
    $linkedin_share = 'http://www.linkedin.com/shareArticle?mini=true&url=' . $page_url . '&title=' . $page_title;
?>

<div class="socials">
    <script
        type="text/javascript"
        async defer
        src="https://assets.pinterest.com/js/pinit.js"
        data-pin-hover="true"
        data-pin-tall="true">
    </script>
    <div class="socials__container js-share-container">
        <span class="socials__button socials__share u--text-uppercase js-share-title">Share</span>
        <ul class="socials__list">
            <li class="socials__list-item">
                <a href="<?= $facebook_share; ?>" class="js-share-btn" onclick="return !window.open(this.href, 'Facebook', 'width=640,height=580')">
                    <span class="icon icon-facebook"></span>
                </a>
            </li>
            <li class="socials__list-item">
                <a href="<?= $twitter_share; ?>" class="js-share-btn" onclick="return !window.open(this.href, 'Twitter', 'width=640,height=380')">
                    <span class="icon icon-twitter"></span>
                </a>
            </li>
            <li class="socials__list-item">
                <a class="js-share-btn" data-pin-do="buttonBookmark" data-pin-custom="true" data-pin-log="button_pinit_bookmarklet" href="https://pl.pinterest.com/pin/create/button/">
                    <span class="icon icon-pinterest"></span>
                </a>
            </li>
            <li class="socials__list-item">
                <a href="mailto:?subject=<?php the_title(); ?>" class="js-share-btn"><span class="icon icon-email"></span></a>
            </li>
        </ul>
        <span class="socials__button socials__thanks u--text-uppercase">Thanks!</span>
    </div>
</div>
