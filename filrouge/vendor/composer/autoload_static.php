<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit273139132ff186444899ab30d5dd7033
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit273139132ff186444899ab30d5dd7033::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit273139132ff186444899ab30d5dd7033::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}