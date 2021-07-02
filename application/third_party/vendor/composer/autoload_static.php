<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2e10daa6eaf6179fb9aefa4dc5700c8a
{
    public static $files = array (
        '7e9bd612cc444b3eed788ebbe46263a0' => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src/autoload.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpOffice\\PhpWord\\' => 18,
        ),
        'L' => 
        array (
            'Laminas\\ZendFrameworkBridge\\' => 28,
            'Laminas\\Escaper\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpOffice\\PhpWord\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpoffice/phpword/src/PhpWord',
        ),
        'Laminas\\ZendFrameworkBridge\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-zendframework-bridge/src',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2e10daa6eaf6179fb9aefa4dc5700c8a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2e10daa6eaf6179fb9aefa4dc5700c8a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2e10daa6eaf6179fb9aefa4dc5700c8a::$classMap;

        }, null, ClassLoader::class);
    }
}