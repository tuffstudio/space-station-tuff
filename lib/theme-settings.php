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

    function facebook_url() {
        ?>
            <input type="text" name="facebook_url" id="facebook_url" value="<?php echo get_option('facebook_url'); ?>" /><br>
        <?php
    }

    function twitter_url() {
        ?>
            <input type="text" name="twitter_url" id="twitter_url" value="<?php echo get_option('twitter_url'); ?>" /><br>
        <?php
    }

    function instagram_url() {
        ?>
            <input type="text" name="instagram_url" id="instagram_url" value="<?php echo get_option('instagram_url'); ?>" /><br>
        <?php
    }

    function linkedin_url() {
        ?>
            <input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo get_option('linkedin_url'); ?>" /><br>
        <?php
    }

    function cookies_text() {
        ?>
            <textarea name="cookies_text" id="cookies_text" cols="70" rows="5"><?php echo get_option('cookies_text'); ?></textarea><br>
        <?php
    }

    function cookies_bg() {
        ?>
            <input type="text" name="cookies_bg" id="cookies_bg" value="<?php echo get_option('cookies_bg'); ?>"><br>
        <?php
    }


    function display_theme_panel_fields() {
    	add_settings_section("section", "All Settings", null, "theme-options");

        add_settings_field("art_of_valuation_url", "Art of valuation url", "art_of_valuation_url", "theme-options", "section");
        add_settings_field("facebook_url", "Facebook url", "facebook_url", "theme-options", "section");
        add_settings_field("twitter_url", "Twitter url", "twitter_url", "theme-options", "section");
        add_settings_field("instagram_url", "Instagram url", "instagram_url", "theme-options", "section");
        add_settings_field("linkedin_url", "LinkedIn url", "linkedin_url", "theme-options", "section");
        add_settings_field("cookies_text", "Cookies text", "cookies_text", "theme-options", "section");
        add_settings_field("cookies_bg", "Cookies background color", "cookies_bg", "theme-options", "section");

        register_setting("section", "art_of_valuation_url");
        register_setting("section", "facebook_url");
        register_setting("section", "twitter_url");
        register_setting("section", "instagram_url");
        register_setting("section", "linkedin_url");
        register_setting("section", "cookies_text");
        register_setting("section", "cookies_bg");
    }

    function add_theme_menu_item() {
    	add_menu_page("Theme Settings", "Theme Settings", "manage_options", "theme-panel", "theme_settings_page", 'dashicons-hammer', 99);
    }

    add_action("admin_init", "display_theme_panel_fields");
    add_action("admin_menu", "add_theme_menu_item");
