<?php

/**
 * Plugin Name: Task & Project Manager
 * Description: A task and project management plugin built with WordPress and Acorn.
 * Version: 1.0.0
 * Requires PHP: 8.5
 * Author: Marco Talaat
 */

if (! defined('ABSPATH')) {
    exit;
}

$autoload = __DIR__ . '/vendor/autoload.php';

if (! file_exists($autoload)) {
    return;
}

require_once $autoload;

add_action('after_setup_theme', function () {
    if (! function_exists('app')) {
        return;
    }

    app('view')->addLocation(
        __DIR__ . '/resources/views'
    );
}, 1);


add_action('admin_menu', function () {
    add_menu_page(
        'Task & Project Manager',
        'Task Manager',
        'manage_options',
        'task-project-manager',
        function () {
            echo app('view')
                ->make('admin.dashboard')
                ->render();
        },
        'dashicons-clipboard',
        25
    );
});
