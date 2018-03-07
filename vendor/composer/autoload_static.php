<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbac2d98228c32d611c27c326a446ed60
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbac2d98228c32d611c27c326a446ed60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbac2d98228c32d611c27c326a446ed60::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
