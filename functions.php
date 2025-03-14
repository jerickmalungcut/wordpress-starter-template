<?php
// Define constants for the theme directory URI and path
define('TUT_THEME_DIR_URI', get_template_directory_uri()); // URL to the theme directory
define('TUT_THEME_DIR', get_template_directory()); // File system path to the theme directory



// Create a class for the theme
class Tutorial_Theme {
    // Singleton instance variable
    private static $instance = null;

    // Private constructor to prevent direct instantiation
    private function __construct() {
        
        // Hook into WordPress to enqueue styles
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);

        // Include additional PHP files
        include TUT_THEME_DIR . '/includes/categories.php';
    }

    // Method to enqueue styles
    public function enqueue_styles() {
        // Enqueue the main stylesheet (style.css)
        wp_enqueue_style('tutorial-style', get_stylesheet_uri());

         // Enqueue Tailwind CSS
        wp_enqueue_style(
            'tailwind-style', // Handle
            TUT_THEME_DIR_URI . '/dist/output.css', // Path to Tailwind CSS
            array(), // Dependencies
            '1.0' // Version
        );
    }

    // Singleton pattern: Get the instance of the class
    public static function get_instance() {
        // If no instance exists, create one
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

// Instantiate the theme class
Tutorial_Theme::get_instance();