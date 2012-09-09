<?php

function anchor_option_page_capability( $capability ) {
    return 'edit_theme_options';
}
add_filter( 'option_page_capability_anchor_options', 'anchor_option_page_capability' );

function anchor_theme_options_add_page() {
    $theme_page = add_theme_page(
        __( 'Theme Options', 'anchor' ),
        __( 'Theme Options', 'anchor' ),
        'edit_theme_options',
        'theme_options',
        'anchor_theme_options_render_page'
    );

    if ( ! $theme_page )
        return;
}
add_action( 'admin_menu', 'anchor_theme_options_add_page' );

function anchor_theme_options_render_page() {
    ?>
    <div class="wrap">
        <?php screen_icon(); ?>
        <?php $theme_name = function_exists( 'wp_get_theme' ) ? wp_get_theme() : get_current_theme(); ?>
        <h2><?php printf( __( '%s Theme Options', 'anchor' ), $theme_name ); ?></h2>
        <?php settings_errors(); ?>

        <form method="post" action="options.php">
            <?php
                settings_fields( 'anchor_options' );
                do_settings_sections( 'theme_options' );
                submit_button();
            ?>
        </form>
    </div>
    <?php
}

function anchor_theme_options_init() {

    register_setting(
        'anchor_options',
        'anchor_theme_options'
    );

    // Register our settings field group
    add_settings_section(
        'general', // Unique identifier for the settings section
        '', // Section title (we don't want one)
        '__return_false', // Section callback (we don't want anything)
        'theme_options' // Menu slug, used to uniquely identify the page;
    );

    // Register our individual settings fields
    add_settings_field(
        'twitter_account',  // Unique identifier for the field for this section
        __( 'Twitter account', 'anchor' ), // Setting field label
        'anchor_settings_field_twitter_account', // Function that renders the settings field
        'theme_options', // Menu slug, used to uniquely identify the page;
        'general' // Settings section. Same as the first argument in the add_settings_section() above
    );
}
add_action( 'admin_init', 'anchor_theme_options_init' );

function anchor_settings_field_twitter_account() {
    $options = anchor_get_theme_options();
    ?>
    <div class="layout">
    <label class="description">
        @<input type="text" name="anchor_theme_options[twitter_account]" value="<?php echo esc_attr( $options['twitter_account'] ); ?>" />
    </label>
    </div>
    <?php
}

function anchor_get_theme_options() {
    return get_option( 'anchor_theme_options', anchor_get_default_theme_options() );
}

function anchor_get_default_theme_options() {
    $default_theme_options = array(
        'twitter_account' => 'username'
    );
    return apply_filters( 'anchor_default_theme_options', $default_theme_options );
}