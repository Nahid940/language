<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit609b878757b7d9272587713993b6d542
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Language\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Language\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit609b878757b7d9272587713993b6d542::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit609b878757b7d9272587713993b6d542::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}