<?php
    $commercial_fields = CFS()->get(false, $post->ID);
    $content = $post->post_content;
    $content = apply_filters('the_content', $content);
?>

<section class="section--background-space">
    <div class="container">
        <h1 class="headline--main headline--white">
            <?= $commercial_fields['sp_commercial_headline'] ?>
        </h1>
        <article class="text-description text-description--letter text-description--white text-description--space blackbook__first">
            <?= $content ?>
        </article>

        <h2 class="headline--main headline--main--secondary headline--white">
            Black Book <strong>The advantages</strong>
        </h2>
        <article class="text-description text-description--white text-description--space">
            We've been doing this for decades. We've sold hundreds of remarkable properties without advertising and know
            how to handle the complexity of such specialist sales. Because Black Book only handles properties worth over 1m you'll
            know your sale is in the right hands.
            We produce a brochure for your property that reflects its worth, not only to the buyer but to you. We carefully
            and dicreetly contact potential buyers, then take care of the sale. You'll know they're the right person because we use a profiling
            system to match them to your property, so you can be sure that whoever we introduce is serious.

            It's a subtle way to do business but it's also one that works.
        </article>
    </div>
</section>
