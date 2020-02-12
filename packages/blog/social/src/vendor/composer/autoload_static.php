<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11a9ecb8540d16b7a11e38838bf532e7
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Blog\\Social\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Blog\\Social\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit11a9ecb8540d16b7a11e38838bf532e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11a9ecb8540d16b7a11e38838bf532e7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
