<?php
    // Example video url
    $video_url = "https://s3.amazonaws.com/propertybase-clients/00D24000000d8IIEAY/a0C24000004W90P/p1a0hthjeimpq8j72qq1j4g13rd2/test.iphone4.m4v";
?>

<section id="video" class="property__panel property__panel--video js-property-panel">
    <video
        class="video--box video-js vjs-default-skin"
        src="<?= $video_url; ?>"
        controls preload="auto"
        data-setup="{}"
    >
        Your browser does nor support video tag.
    </video>
</section>
