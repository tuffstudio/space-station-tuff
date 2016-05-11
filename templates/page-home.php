<?php
    use Roots\Sage\Platform;

    $page_id = $post->ID;
    $art_of_valuation_url = get_option('art_of_valuation_url');
    $video_path = CFS()->get('ss_video_path', $page_id);
    $bg_path = CFS()->get('ss_mobile_static_image', $page_id);

    $is_desktop = Platform\is_desktop();
?>
<section class="main-banner" <?php if($bg_path != '') : ?> style="background-image: url('<?= $bg_path; ?>');" <?php endif; ?>>
    <?php if($is_desktop) : ?>
        <?php include('components/spinner.php') ?>
        <div class="main-banner__video">
            <video id="homepage-video" class="" src="<?= $video_path; ?>" loop autoplay preload="true" muted="true"></video>
        </div>
    <?php endif; ?>

    <div class="moving-box js-moving-box">
        <div class="moving-box__element moving-box__content">
            <p class="moving-box__title">THE ART OF VALUATION</p>
            <p class="moving-box__text">
                <?php // TODO: Remember to replace lorem text with correct one ?>
                Ta nobit quam, to amniet que ficipidus nam as quislinerercst
            </p>
            <a href="<?= $art_of_valuation_url; ?>" class="btn btn--primary">Download now</a>
        </div>
        <div class="moving-box__element moving-box__border"></div>
    </div>
</section>

<?php
    include('components/case-studies.php');
    include('homepage/properties.php');
    include('homepage/magazine.php');
    include('homepage/stay-in-touch.php');
?>
