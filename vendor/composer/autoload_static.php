<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1702a333bab3e5d7ae484d65c0b45a3f
{
    public static $prefixLengthsPsr4 = array (
        'i' => 
        array (
            'iamdual\\' => 8,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'iamdual\\' => 
        array (
            0 => __DIR__ . '/..' . '/iamdual/uploader/src',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1702a333bab3e5d7ae484d65c0b45a3f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1702a333bab3e5d7ae484d65c0b45a3f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
