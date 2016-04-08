<?php
    $categories = get_categories();
?>

<div class="canvas__navigation js-sticky">
    <ul class="canvas__categories-menu">
        <li class="canvas__categories-item">
            <a href="/canvas-magazine">all</a>
        </li>

        <?php
            foreach ($categories as $category) :
                $name = $category->name;
                $link = get_category_link($category->cat_ID);
        ?>
            <li class="canvas__categories-item">
                <a href="<?php echo $link; ?>"><?php echo $name; ?></a>
            </li>
        <?php endforeach; ?>
    </ul><!--
    --><div class="canvas__business-nav">
        <h3 class="canvas__business-directory">Business directory</h3>
        <ul class="canvas__business-menu">
            <li>Category 1</li>
            <li>Category 2</li>
            <li>Category 3</li>
            <li>Category 4</li>
            <li>Category 5</li>
        </ul>
    </div>
</div>
