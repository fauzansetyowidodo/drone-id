<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea184a6d713335b6bf6d82794c07f89f
{
    public static $files = array (
        '7922819bf4af27365cc0876ea19bddae' => __DIR__ . '/../..' . '/includes/helper-functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'WooLentorBlocks\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'WooLentorBlocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitea184a6d713335b6bf6d82794c07f89f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitea184a6d713335b6bf6d82794c07f89f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitea184a6d713335b6bf6d82794c07f89f::$classMap;

        }, null, ClassLoader::class);
    }
}
