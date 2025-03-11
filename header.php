<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="bg-gray-800 text-white">
        <div class="container mx-auto p-4">
            <div class="flex justify-between items-center">
                <div>
                    <h1 class="text-2xl font-bold"><?php bloginfo('name'); ?></h1>
                    <p class="text-sm"><?php bloginfo('description'); ?></p>
                </div>
                <nav>
                    <?php
                    
                    ?>
                </nav>
            </div>
        </div>
    </header>
