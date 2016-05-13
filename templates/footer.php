<?php
    $contact_fields = CFS() -> get(false, 259);
    $first_contact_phone_trimmed = str_replace(' ', '', $contact_fields['first_office_phone_number']);
    $second_contact_phone_trimmed = str_replace(' ', '', $contact_fields['second_office_phone_number']);
?>

<footer class="footer">
    <div class="container">
        <a href="<?= get_home_url(); ?>" class="footer__logo">
            <img src="<?= get_template_directory_uri(); ?>/dist/images/logo-animated.gif" alt="Spacestation">
            <span>
                Space station
            </span>
        </a>

        <div class="grid">
            <div class="grid__item tablet-small--one-half desktop--three-tenths">
                <div class="footer__contact">
                    <h4 class="u--text-uppercase"><?= $contact_fields['first_office_name']; ?></h4>
                    <a class="footer--link footer__telephone" href="tel:<?= $first_contact_phone_trimmed; ?>"><?= $contact_fields['first_office_phone_number']; ?></a>
                    <a class="footer--link footer__email" href="mailto:<?= $contact_fields['first_office_email']; ?>"><?= $contact_fields['first_office_email']; ?></a>
                    <span class="footer--link footer__address"><?= $contact_fields['first_office_address']; ?></span>
                    <a href="/contact" class="footer__view-map link--italic">
                        view map
                    </a>
                </div>
            </div><!--
            --><div class="grid__item tablet-small--one-half desktop--three-tenths">
                <div class="footer__contact">
                    <h4 class="u--text-uppercase"><?= $contact_fields['second_office_name']; ?></h4>
                    <a class="footer--link footer__telephone" href="tel:<?= $second_contact_phone_trimmed; ?>"><?= $contact_fields['second_office_phone_number']; ?></a>
                    <a class="footer--link footer__email" href="mailto:<?= $contact_fields['second_office_email']; ?>"><?= $contact_fields['second_office_email']; ?></a>
                    <span class="footer--link footer__address"><?= $contact_fields['second_office_address']; ?></span>
                    <a href="/contact" class="footer__view-map link--italic">
                        view map
                    </a>
                </div>
            </div><!--
            --><div class="grid__item phone--hide desktop--show desktop--four-tenths">
                <?php
                    if (has_nav_menu('footer_navigation')) :
                        wp_nav_menu(array('theme_location' => 'footer_navigation', 'menu_class' => 'footer__nav'));
                    endif;
                ?>
            </div>
        </div>

        <div class="footer__social">
            <?php include 'components/socials.php'; ?>
        </div>

        <div class="grid">
            <div class="grid__item tablet--one-half desktop--six-tenths footer__copyright">
                Spacestation &copy; 2016 Design and development by&nbsp;<a href="http://www.matchboxpublishing.com/" class="link--standard ">Matchbox</a>
            </div><!--
            --><div class="grid__item phone--hide tablet--show tablet--one-half desktop--four-tenths">
                <?php
                    if (has_nav_menu('secondary_footer_navigation')) :
                        wp_nav_menu(array('theme_location' => 'secondary_footer_navigation', 'menu_class' => 'secondary-footer__nav'));
                    endif;
                ?>
            </div>
        </div>

    </div>
</footer>
<div class="btn-to-top js-to-top"></div>
