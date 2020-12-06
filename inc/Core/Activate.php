<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc\Core;

class Activate
{
    public static function activate()
    {
        flush_rewrite_rules();
    }
}