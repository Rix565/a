<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb255e69aabcc4ce1856ef76950d338d
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
            0 => '/App',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb255e69aabcc4ce1856ef76950d338d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb255e69aabcc4ce1856ef76950d338d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb255e69aabcc4ce1856ef76950d338d::$classMap;

        }, null, ClassLoader::class);
    }
}