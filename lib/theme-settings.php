<?php

    function theme_settings_page() {
        ?>
            <div class="wrap">
                <h1>Theme Panel</h1>
                <form method="post" action="options.php">
                    <?php
                        settings_fields("section");
                        do_settings_sections("theme-options");
                        submit_button();
                    ?>
                </form>
            </div>
        <?php
    }

    function art_of_valuation_url() {
        ?>
            <input type="text" name="art_of_valuation_url" id="art_of_valuation_url" value="<?php echo get_option('art_of_valuation_url'); ?>" /><br>
            <span style="color: grey; font-size: 12px; margin-left: 2px;">e.x. http://google.com</span>
        <?php
    }


    function display_theme_panel_fields() {
    	add_settings_section("section", "All Settings", null, "theme-options");

        add_settings_field("art_of_valuation_url", "Art of valuation url", "art_of_valuation_url", "theme-options", "section");

        register_setting("section", "art_of_valuation_url");
    }

    function add_theme_menu_item() {
    	add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-panel", "theme_settings_page", 'dashicons-hammer', 99);
    }

    add_action("admin_init", "display_theme_panel_fields");
    add_action("admin_menu", "add_theme_menu_item");
