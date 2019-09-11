<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18ecee720caffa1b6aafa2b24cbadd17
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\Finder\\' => 25,
        ),
        'G' => 
        array (
            'Gregwar\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Gregwar\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha/src/Gregwar',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18ecee720caffa1b6aafa2b24cbadd17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18ecee720caffa1b6aafa2b24cbadd17::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
