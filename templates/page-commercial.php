
<?php include('commercial/informations.php'); ?>

<div class="bg--slant">

    <?php
        $args_case_study = array(
            'post_type' => 'case-study',
            'post_status' => 'publish',
            'meta_key' => 'case_study_featured',
            'meta_value' => true,
            'category_name' => 'commercial'
        );

        include('components/case-studies.php');
    ?>

</div>

<?php
    include('commercial/properies.php');
    include('homepage/stay-in-touch.php');
?>
