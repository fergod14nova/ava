<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2911f2ab9e3ee6dfb78982d8eaacd949
{
    public static $files = array (
        'a646f7bae4dd4fd67ab108c06b98a7a9' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2911f2ab9e3ee6dfb78982d8eaacd949::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2911f2ab9e3ee6dfb78982d8eaacd949::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
