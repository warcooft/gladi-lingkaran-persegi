<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84d58997b3823b2287221ec234d5cab0
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Gladi\\LingkaranPersegi\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Gladi\\LingkaranPersegi\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit84d58997b3823b2287221ec234d5cab0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit84d58997b3823b2287221ec234d5cab0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit84d58997b3823b2287221ec234d5cab0::$classMap;

        }, null, ClassLoader::class);
    }
}
