<?php
    $content = $post->post_content;
    $content = apply_filters('the_content', $content);
?>

<section class="section">
    <div class="container">
        <h1 class="title--main">
            <?php the_title(); ?>
        </h1>
        <div class="canvas-post__post page-content">
            <?= $content; ?>
        </div>
    </div>
</section>

<?php include 'homepage/stay-in-touch.php'; ?>
