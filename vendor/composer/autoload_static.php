<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a16c4ba532e0c5f6bbd9c73b412485d
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'testproject\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'testproject\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a16c4ba532e0c5f6bbd9c73b412485d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a16c4ba532e0c5f6bbd9c73b412485d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0a16c4ba532e0c5f6bbd9c73b412485d::$classMap;

        }, null, ClassLoader::class);
    }
}
