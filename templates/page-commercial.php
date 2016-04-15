
<?php
    include('commercial/informations.php');
    $page_id = $post->ID;
?>

<div class="bg--slant ">
    <?php include('components/case-studies.php'); ?>
</div>

<?php
    if ($page_id == 74) {
        include('commercial/properies.php');
    }
    include('homepage/stay-in-touch.php');
?>
