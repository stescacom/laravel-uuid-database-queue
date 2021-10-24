<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3250a61716d615ad9f4161a1c9c29add
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stescacom\\LaravelUuidDatabaseQueue\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stescacom\\LaravelUuidDatabaseQueue\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3250a61716d615ad9f4161a1c9c29add::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3250a61716d615ad9f4161a1c9c29add::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3250a61716d615ad9f4161a1c9c29add::$classMap;

        }, null, ClassLoader::class);
    }
}
