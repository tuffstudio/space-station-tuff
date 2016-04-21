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

                    <div class="user-box js-user-box">
                        <div class="user-box__trigger js-user-box-trigger">
                            <svg version="1.1" class="user-box__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="23.886px" height="22.815px" viewBox="247.274 242.936 23.886 22.815"
                                enable-background="new 247.274 242.936 23.886 22.815" xml:space="preserve">
                            <polygon class="user-box__icon" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                259.217,243.936 262.599,250.788 270.16,251.887 264.688,257.221 265.98,264.751 259.217,261.195 252.454,264.751 253.746,257.221
                                248.274,251.887 255.835,250.788 "/>
                            </svg>
                        </div>
                        <div class="user-box__content">
                            <h3 class="masonry__tile-title">User box</h3>
                            <ul>
                                <li>Example text</li>
                                <li>Second text</li>
                                <li>Lorem ipsum</li>
                                <li>nummy nibh eui</li>
                                <li>Lorem ipsum</li>
                                <li>ipsum dolor sit am</li>
                            </ul>
                        </div>
                        <div class="user-box__overlay js-user-box-close"></div>
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
