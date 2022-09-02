<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit05d1328f5b647caf200d3facd85a2eb8
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'shop\\' => 5,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'shop\\' => 
        array (
            0 => __DIR__ . '/..' . '/shop/core',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit05d1328f5b647caf200d3facd85a2eb8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit05d1328f5b647caf200d3facd85a2eb8::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit05d1328f5b647caf200d3facd85a2eb8::$classMap;

        }, null, ClassLoader::class);
    }
}
