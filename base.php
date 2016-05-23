<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
    <?php get_template_part('templates/head'); ?>
    <body <?php body_class(); ?>>
        <!--[if IE]>
          <div class="alert alert-warning">
            <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
          </div>
        <![endif]-->
        <?php
          do_action('get_header');
          get_template_part('templates/header');
        ?>
        <div class="wrap" role="document">
            <div class="content">
                <main class="main">
                    <?php include Wrapper\template_path(); ?>
                </main><!-- /.main -->
            </div><!-- /.content -->
        </div><!-- /.wrap -->

        <script type="text/javascript">
            window.SS = window.SS || {};
            window.SS.settings = window.SS.settings || {};

            window.SS.settings.imagesPath = '<?= get_template_directory_uri(); ?>/dist/images/';
        </script>
        <!-- Start of Async HubSpot Analytics Code -->
        <script type="text/javascript">
        (function(d,s,i,r) {
        if (d.getElementById)
        {return;}
        var n=d.createElement(s),e=d.getElementsByTagName(s)0;
        n.id=i;n.src='//js.hs-analytics.net/analytics/'(Math.ceil(new Date()/r)*r)'/497842.js';
        e.parentNode.insertBefore(n, e);
        })(document,"script","hs-analytics",300000);
        </script>
        <!-- End of Async HubSpot Analytics Code -->
        <?php
            do_action('get_footer');
            get_template_part('templates/footer');
            wp_footer();
        ?>
    </body>
</html>
