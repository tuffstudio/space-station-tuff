<?php
    // Example video url
    $video_url = $item->media->videos->video->url;
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
