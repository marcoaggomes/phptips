<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b07486e2633ad0b15cc4b45a29928a7
{
    public static $files = array (
        '8ae204c534241f4814292db9e3563d62' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b07486e2633ad0b15cc4b45a29928a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b07486e2633ad0b15cc4b45a29928a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b07486e2633ad0b15cc4b45a29928a7::$classMap;

        }, null, ClassLoader::class);
    }
}
