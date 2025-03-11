<?php
class Categories {
    private static $instance = null;

    private function __construct() {
        // Hook into WordPress to register categories
        add_action('init', [$this, 'register_categories']);
    }

    // Method to register custom categories
    public function register_categories() {
        // Example: Register a custom taxonomy
        register_taxonomy(
            'custom_category', // Taxonomy slug
            'post', // Post type
            array(
                'label' => __('Custom Categories'),
                'rewrite' => array('slug' => 'custom-category'),
                'hierarchical' => true,
            )
        );
    }

    // Test method
    public function test() {
        echo 'Hello, Tailwind CSS!';
    }

    // Singleton pattern: Get the instance of the class
    public static function get_instance() {
        if (null === self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}

Categories::get_instance();