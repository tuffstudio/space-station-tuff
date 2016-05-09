<?php
    $commercial_fields = CFS()->get(false, $post->ID);
    $content = $post->post_content;
    $content = apply_filters('the_content', $content);
?>

<section class="section--top-small-space container container--space">
    <h2 class="title--main">
        <?php the_title(); ?>
    </h2>
    <h1 class="headline--main">
        <?= $commercial_fields['sp_commercial_headline'] ?>
    </h1>
    <article class="paragraph--default">
        <?= $content ?>
    </article>
</section>

<?php
    include('book-valuation/form.php');
    include('components/case-studies.php');
    include('book-valuation/past-sales.php');
    include('homepage/stay-in-touch.php');
?>
