<?php
/**
 * @package ParadiseIMDB
 */

namespace Inc;

final class Init
{
    public static function get_services()
    {
        return [
            Core\Enqueue::class,
            PostTypes\TestM::class,
            PostTypes\Person1::class,
            MetaBoxs\PersonInfo::class,
        ];
    }
    
    /**
     * register_services
     *
     * @return void
     */
    public static function register_services()
    {
        foreach( self::get_services() as $class) {
            $service = self::instantiate( $class );
            if( method_exists( $service, 'register') ) {
                $service->register();
            }
        }  
    }
    
    /**
     * instantiate
     *
     * @param  class $class class from the services array
     * @return class  instance
     */
    private static function instantiate( $class )
    {
        return new $class();
    }
}