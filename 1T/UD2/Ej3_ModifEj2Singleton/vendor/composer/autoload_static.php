<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1b9dfffdca40e991264f98063dd83f7
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Ferran\\App\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ferran\\App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita1b9dfffdca40e991264f98063dd83f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1b9dfffdca40e991264f98063dd83f7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita1b9dfffdca40e991264f98063dd83f7::$classMap;

        }, null, ClassLoader::class);
    }
}
