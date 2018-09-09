<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit28a73f97b84e98cfe4f6effbb21ed210
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit28a73f97b84e98cfe4f6effbb21ed210::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit28a73f97b84e98cfe4f6effbb21ed210::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}