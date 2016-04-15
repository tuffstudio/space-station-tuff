<header class="navigation">
    <div class="navigation__container">
        <div class="grid">
            <div class="grid__item desktop--one-quarter">
                <a class="navigation__brand-link" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </div><!--
            --><div class="grid__item desktop--three-quarters navigation-primary js-primary-nav">
                <nav>
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation-menu']);
                    endif;
                    ?>

                    <div class="user-box">
                        <div class="user-box__trigger">
                            <i class="icon icon-heart"></i>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="navigation__trigger js-nav-trigger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>
