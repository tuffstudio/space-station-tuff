<?php
    $contact_fields = CFS() -> get(false, $post->ID);
    $first_contact_phone_trimmed = str_replace(' ', '', $contact_fields['first_office_phone_number']);
    $second_contact_phone_trimmed = str_replace(' ', '', $contact_fields['second_office_phone_number']);
?>

<section class="section contact-section">
    <div class="container">
        <div class="grid grid--full ">
            <div class="grid__item u--align-center">
                <h1 class="contact__headline u--text-uppercase">
                    <span class="contact__city">London</span><!--
                    --><span class="contact__info contact__weather js-contact-weather"></span><!--
                    --><span class="contact__info contact__time js-contact-time"></span>
                </h1>
            </div>
            <div class="grid__item tablet--one-half u--align-center">
                <div id="first" class="contact__office js-office">
                    <h2 class="contact__office-name u--text-uppercase "><?= $contact_fields['first_office_name']; ?></h2>
                    <a class="contact__office-link contact__office-phone" href="tel:<?= $first_contact_phone_trimmed; ?>"><?= $contact_fields['first_office_phone_number']; ?></a>
                    <a class="contact__office-link u--text-uppercase " href="mailto:<?= $contact_fields['first_office_email']; ?>"><?= $contact_fields['first_office_email']; ?></a>
                    <p class="contact__office-address u--text-uppercase "><?= $contact_fields['first_office_address']; ?></p>
                    <a href="#map" data-target="first" class="link--italic js-change-pin">View on map</a>
                </div>
            </div><!--
            --><div class="grid__item tablet--one-half u--align-center">
                <div id="second" class="contact__office js-office">
                    <h2 class="contact__office-name u--text-uppercase "><?= $contact_fields['second_office_name']; ?></h2>
                    <a class="contact__office-link contact__office-phone" href="tel:<?= $second_contact_phone_trimmed; ?>"><?= $contact_fields['second_office_phone_number']; ?></a>
                    <a class="contact__office-link u--text-uppercase" href="mailto:<?= $contact_fields['second_office_email']; ?>"><?= $contact_fields['second_office_email']; ?></a>
                    <p class="contact__office-address u--text-uppercase"><?= $contact_fields['second_office_address']; ?></p>
                    <a href="#map" data-target="second" class="link--italic js-change-pin">View on map</a>
                </div>
            </div>
            <div class="grid__item u--align-center">
                <div class="btn-container">
                    <a href="<?= get_home_url(); ?>/?s=" class="btn btn--brand">
                        view properties
                    </a>
                    <a href="<?= get_home_url(); ?>" class="btn btn--submit">
                        book a valuation
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
