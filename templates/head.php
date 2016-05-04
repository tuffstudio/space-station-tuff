<?php
    $favicons_path = get_template_directory_uri() . '/dist/images/favicons';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $favicons_path; ?>/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $favicons_path; ?>/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $favicons_path; ?>/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $favicons_path; ?>/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $favicons_path; ?>/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $favicons_path; ?>/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $favicons_path; ?>/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $favicons_path; ?>/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $favicons_path; ?>/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $favicons_path; ?>/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $favicons_path; ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $favicons_path; ?>/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $favicons_path; ?>/favicon-16x16.png">
    <link rel="icon" type="image/png" href="<?= $favicons_path; ?>/favicon.ico">
    <link rel="manifest" href="<?= $favicons_path; ?>/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $favicons_path; ?>/mstile-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
</head>
