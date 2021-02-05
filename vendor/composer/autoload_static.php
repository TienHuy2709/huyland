<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13b137ad2d87a05e39b529be13a8a07f
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HUYLAND\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HUYLAND\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13b137ad2d87a05e39b529be13a8a07f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13b137ad2d87a05e39b529be13a8a07f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit13b137ad2d87a05e39b529be13a8a07f::$classMap;

        }, null, ClassLoader::class);
    }
}
