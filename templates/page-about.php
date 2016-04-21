<div class="background--skew">
    <?php include 'commercial/informations.php'; ?>
</div>

<section class="section section--between-skew is-hidden js-section-reveal">
    <?php
        $heritage_fields = CFS()->get(false, $post->ID);
        $title = $heritage_fields['ss_heritage_title'];
        $content = $heritage_fields['ss_heritage_content'];
    ?>
    <div class="container">
        <h1 class="headline--main">
            <strong><?= $title; ?></strong>
        </h1>
        <article class="text-description">
            <?= $content; ?>
        </article>
    </div>
</section>

<div class="background--skew">
    <?php include 'components/case-studies.php'; ?>
</div>

<?php include 'about-us/team-members.php'; ?>

<?php include 'homepage/stay-in-touch.php'; ?>
