<?php
    $contact_fields = CFS() -> get(false, 259);
    $first_contact_phone_trimmed = str_replace(' ', '', $contact_fields['first_office_phone_number']);
    $second_contact_phone_trimmed = str_replace(' ', '', $contact_fields['second_office_phone_number']);
?>

<footer class="footer">
    <div class="container">
        <a href="<?= get_home_url(); ?>" class="footer__logo">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            	 width="45.218px" height="35.441px" viewBox="0 0 45.218 35.441" enable-background="new 0 0 45.218 35.441" xml:space="preserve">
                <path fill="#FFFFFF" d="M42.228,17.731l-19.233,5.255v-10.51L42.228,17.731z M43.336,28.758l-19.232-5.256l19.232-5.256V28.758z
                	 M22.995,34.526V24.016l19.233,5.256L22.995,34.526z M22.995,0.938l19.233,5.255l-19.233,5.257V0.938z M22.222,11.449L2.989,6.192
                	l19.233-5.255V11.449z M22.222,22.987L2.989,17.731l19.233-5.255V22.987z M22.222,34.526L2.989,29.271l19.233-5.255V34.526z
                	 M1.882,6.707l19.232,5.256L1.882,17.218V6.707z M45.218,6.192L22.66,0L1.105,5.905l0.004,12.086l20.006,5.511L0,29.271
                	l22.595,6.171l10.236-2.79l0.001,0.004l11.275-3.08V17.428l-20.003-5.465L45.218,6.192z"/>
            </svg>
            <span>
                Space station
            </span>
        </a>

        <div class="grid">
            <div class="grid__item tablet-small--one-half desktop--three-tenths">
                <div class="footer__contact">
                    <h4 class="footer__headline"><?= $contact_fields['first_office_name']; ?></h4>
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
                    <h4 class="footer__headline"><?= $contact_fields['second_office_name']; ?></h4>
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
