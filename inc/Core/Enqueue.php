<?php
/**
 * @package ParadiseIMDB
 */

 namespace Inc\Core;

 class Enqueue 
 {
    public function register()
    {
        add_action('admin_enqueue_scripts', [$this, 'admin_scripts']);
    }

    public function admin_scripts()
    {
        wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">');
        wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js', 
            [], '5.0', true );
    }
 }