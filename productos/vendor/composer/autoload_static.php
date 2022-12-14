<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit322789f7e6114df29ab47715e2cd8f71
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Dowar\\Productos\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Dowar\\Productos\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit322789f7e6114df29ab47715e2cd8f71::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit322789f7e6114df29ab47715e2cd8f71::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit322789f7e6114df29ab47715e2cd8f71::$classMap;

        }, null, ClassLoader::class);
    }
}
