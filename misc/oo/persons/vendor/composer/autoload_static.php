<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74a36758b7e408d1176d7527172fe417
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Acme\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Acme\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit74a36758b7e408d1176d7527172fe417::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74a36758b7e408d1176d7527172fe417::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
