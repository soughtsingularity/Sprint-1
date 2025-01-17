<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c50d81a7874d2180e4629554a9e02d5
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Brick\\Math\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Brick\\Math\\' => 
        array (
            0 => __DIR__ . '/..' . '/brick/math/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c50d81a7874d2180e4629554a9e02d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c50d81a7874d2180e4629554a9e02d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c50d81a7874d2180e4629554a9e02d5::$classMap;

        }, null, ClassLoader::class);
    }
}
