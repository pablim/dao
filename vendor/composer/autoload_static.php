<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5683466edcd9fc72fecf81a674e3861b
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'phputils\\' => 9,
            'pablovf\\model\\tests\\' => 20,
            'pablovf\\model\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'phputils\\' => 
        array (
            0 => __DIR__ . '/..' . '/pablovf/phputils',
        ),
        'pablovf\\model\\tests\\' => 
        array (
            0 => __DIR__ . '/../..' . '/tests',
        ),
        'pablovf\\model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5683466edcd9fc72fecf81a674e3861b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5683466edcd9fc72fecf81a674e3861b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
