<header class="navigation">
    <div class="navigation__container">
        <div class="grid">
            <div class="grid__item desktop--one-fifth">
                <a class="navigation__brand-link" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
            </div><!--
            --><div class="grid__item desktop--four-fifths navigation-primary js-primary-nav">
                <nav>
                    <?php
                    if (has_nav_menu('primary_navigation')) :
                        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navigation-menu']);
                    endif;
                    ?>

                    <?php
                        // TODO: Add favourites-box--has-properties if properties saved
                    ?>
                    <div class="favourites-box js-favourites-box">
                        <div class="favourites-box__trigger js-favourites-box-trigger">
                            <svg version="1.1" class="favourites-box__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="23.886px" height="22.815px" viewBox="247.274 242.936 23.886 22.815"
                                enable-background="new 247.274 242.936 23.886 22.815" xml:space="preserve">
                                <polygon class="favourites-box__icon" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                    259.217,243.936 262.599,250.788 270.16,251.887 264.688,257.221 265.98,264.751 259.217,261.195 252.454,264.751 253.746,257.221
                                    248.274,251.887 255.835,250.788 "/>
                            </svg>
                        </div>
                        <aside class="favourites-box__content">
                            <h3 class="headline--middle">Saved properties</h3>
                            <div class="grid grid--middle">
                                <?php
                                    $i = 0;
                                    while($i < 5):
                                ?>
                                <div class="grid__item two-fifths">
                                    <img src="<?= get_template_directory_uri(); ?>/dist/images/masonry_small_placeholder.jpg" alt="" class="img--responsive favourites-box__img">
                                </div><!--
                                --><div class="grid__item three-fifths">
                                    <div class="favourites-box__information">
                                        <h3 class="favourites-box__title">Camden road, e15</h3>
                                        <p class="favourites-box__price">114,905 pa</p>
                                    </div>
                                </div>
                                <?php
                                        $i++;
                                    endwhile;
                                ?>
                            </div>
                        </aside>
                        <div class="favourites-box__overlay js-favourites-box-close"></div>
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
