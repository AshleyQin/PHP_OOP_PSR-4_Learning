<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit774f6bc1a9d46f6c54c84c4caff03dc5
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'products\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'products\\' => 
        array (
            0 => __DIR__ . '/../..' . '/resources/products',
        ),
    );

    public static $classMap = array (
        'products\\Dish' => __DIR__ . '/../..' . '/resources/products/Dish.php',
        'products\\Fiddle' => __DIR__ . '/../..' . '/resources/products/Fiddle.php',
        'products\\Product' => __DIR__ . '/../..' . '/resources/products/Product.php',
        'products\\Spoon' => __DIR__ . '/../..' . '/resources/products/Spoon.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit774f6bc1a9d46f6c54c84c4caff03dc5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit774f6bc1a9d46f6c54c84c4caff03dc5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit774f6bc1a9d46f6c54c84c4caff03dc5::$classMap;

        }, null, ClassLoader::class);
    }
}
