<?php
    $categories = get_categories();
?>

<div class="canvas__navigation js-sticky">
    <img class="canvas__title-img canvas__title-img--small" src="<?php echo get_template_directory_uri(); ?>/dist/images/canvas-headline.png" alt="nav-title" />
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
        <li class="canvas__categories-item">
            <a href="<?= get_post_type_archive_link('address-book'); ?>">Address book</a>
        </li>
    </ul>
</div>
