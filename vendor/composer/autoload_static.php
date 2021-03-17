<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitff732994afe09287a48aff9b86760a84
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DankiCode\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DankiCode\\' => 
        array (
            0 => __DIR__ . '/../..' . '/DankiCode',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitff732994afe09287a48aff9b86760a84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitff732994afe09287a48aff9b86760a84::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitff732994afe09287a48aff9b86760a84::$classMap;

        }, null, ClassLoader::class);
    }
}
