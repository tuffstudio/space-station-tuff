<div class="background--skew background--skew-commercial">
    <?php
        include('commercial/informations.php');
        $page_id = $post->ID;

        include('components/case-studies.php');
    ?>
</div>

<?php
    if ($page_id == 74) {
        include('commercial/properties.php');
    }
    include('homepage/stay-in-touch.php');
?>
