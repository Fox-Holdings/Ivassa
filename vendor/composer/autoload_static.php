<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9a302f6d0e5975f8db8c58e6b818969d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9a302f6d0e5975f8db8c58e6b818969d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9a302f6d0e5975f8db8c58e6b818969d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9a302f6d0e5975f8db8c58e6b818969d::$classMap;

        }, null, ClassLoader::class);
    }
}