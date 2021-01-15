<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5ec467ee16e1361f10e483c1920b383a
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5ec467ee16e1361f10e483c1920b383a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5ec467ee16e1361f10e483c1920b383a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5ec467ee16e1361f10e483c1920b383a::$classMap;

        }, null, ClassLoader::class);
    }
}
