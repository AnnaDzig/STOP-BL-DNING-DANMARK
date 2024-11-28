<?php
function stopbloedning_enqueue_styles() {
    // Enqueue the main stylesheet
    wp_enqueue_style('style', get_stylesheet_uri());
}

function stopbloedning_enqueue_scripts() {
    // Enqueue the main JavaScript file
    wp_enqueue_script('theme-scripts', get_template_directory_uri() . '/main.js', array(), null, true); 
}

function stopbloedning_customize_register($wp_customize) {
    // Add setting for hero background image
    $wp_customize->add_setting('hero_background_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw'
    ));

    // Add control for hero background image
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_background_image_control', array(
        'label' => __('Hero Background Image', 'stopbloedning'),
        'section' => 'title_tagline', 
        'settings' => 'hero_background_image'
    )));
}
add_action('customize_register', 'stopbloedning_customize_register');


// Hook the functions to the wp_enqueue_scripts action
add_action('wp_enqueue_scripts', 'stopbloedning_enqueue_styles');
add_action('wp_enqueue_scripts', 'stopbloedning_enqueue_scripts');

function stopbloedning_theme_setup() {
    // Add support for the title tag
    add_theme_support('title-tag');
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');
    // Register the main menu location
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'stopbloedning'),
    ));
}


// Hook the theme setup function to the after_setup_theme action
add_action('after_setup_theme', 'stopbloedning_theme_setup');
function enqueue_page_about_styles() {
    if (is_page_template('page-about.php')) {
        wp_enqueue_style('page-about-styles', get_template_directory_uri() . '/style-page-about.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_page_about_styles');

function enqueue_custom_stylesheets() {
    wp_register_style('page-contact-style', get_template_directory_uri() . '/style-page-contact.css', array(), filemtime(get_template_directory() . '/style-page-contact.css'), 'all');
    wp_enqueue_style('page-contact-style');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_stylesheets');


function handle_contact_form_submission() {
    // Check if all necessary fields are set
    if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
        $name = sanitize_text_field($_POST['name']);
        $email = sanitize_email($_POST['email']);
        $phone = sanitize_text_field($_POST['phone']);
        $message = sanitize_textarea_field($_POST['message']);

        $to = 'adzihota@gmail.com'; // Your email address
        $subject = 'New Contact Form Submission';
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
        $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $email);

        // Send the email
        if (wp_mail($to, $subject, $body, $headers)) {
            wp_redirect(home_url('/page-thank-you')); // Redirect to a thank-you page
            exit;
        } else {
            wp_redirect(home_url('/error')); // Redirect to an error page
            exit;
        }
    }
}

add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');


?>

