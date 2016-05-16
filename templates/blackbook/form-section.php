<?php
    $page_fields = CFS()->get(false, $post->ID);
    $paragraph = $page_fields['ss_blackbook_next_step_paragraph'];
    $telephone = str_replace(' ', '', $page_fields['ss_blackbook_telephone']);
    $email = $page_fields['ss_blackbook_mail'];
?>

<div id="newsletter" class="anchor"></div>
<section class="section the-next-step js-section-reveal">
    <h3>The next step</h3>
    <p class="paragraph--default">
        <?= $paragraph; ?>
    </p>
    <p class="paragraph--default">
        Call us an <a href="tel:<?= $telephone; ?>"><?= $page_fields['ss_blackbook_telephone'];?></a> or email <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
    </p>
    <div class="container">
        <!--[if lte IE 8]> <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script> <![endif]-->
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
        <script> hbspt.forms.create({ css: '', portalId: '497842', formId: 'e5d366c4-8cda-4c9a-aacb-5156774d6c49' });</script>
    </div>
</section>
