<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\Core;

class Deactivate 
{

    public static function deactivate()
    {
        flush_rewrite_rules();
    }
}