<?php
    $categories = get_categories();
?>

<div class="canvas__navigation js-sticky">
    <a href="<?= get_permalink(97); ?>" class="canvas__logo js-canvas-animation">
        <img class="canvas__title-img canvas__title-img--small" src="<?php echo get_template_directory_uri(); ?>/dist/images/canvas-headline.png" alt="nav-title" />
    </a>
    <ul class="canvas__categories-menu">
        <?php
            foreach ($categories as $category) :
                $name = $category->name;
                $link = get_category_link($category->cat_ID);
        ?>
            <li class="canvas__categories-item">
                <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
            </li>
        <?php endforeach; ?>
        <li class="canvas__categories-item <?php  if (is_post_type_archive('address-book')) echo 'is-active'; ?>">
            <a href="<?= get_post_type_archive_link('address-book'); ?>">Address book </a>
        </li>
    </ul>
</div>
