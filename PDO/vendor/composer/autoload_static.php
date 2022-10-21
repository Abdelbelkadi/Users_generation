<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bf83ea6d8ad91774e2405cfe3a79c23
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit2bf83ea6d8ad91774e2405cfe3a79c23::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit2bf83ea6d8ad91774e2405cfe3a79c23::$classMap;

        }, null, ClassLoader::class);
    }
}
