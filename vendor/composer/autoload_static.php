<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit965be85f7a3530b1ac1627cfa81516ec
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'BeGateway\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'BeGateway\\' => 
        array (
            0 => __DIR__ . '/..' . '/begateway/begateway-api-php/lib/BeGateway',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit965be85f7a3530b1ac1627cfa81516ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit965be85f7a3530b1ac1627cfa81516ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}