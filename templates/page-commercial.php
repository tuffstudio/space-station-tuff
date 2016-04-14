
<?php
    include('commercial/informations.php');

    $case_study_category_id = get_the_category()[0]->term_id;
?>

<div class="bg--slant <?= $case_study_category_id ? '' : 'section--top-small-space'?>">

    <?php
        if ($case_study_category_id) {
            include('components/case-studies.php');
        }
    ?>

</div>

<?php
    if ($case_study_category_id == 74) {
        include('commercial/properies.php');
    }
    include('homepage/stay-in-touch.php');
?>
