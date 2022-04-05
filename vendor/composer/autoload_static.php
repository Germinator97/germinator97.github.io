<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3181daf7dacda33cf3c8431e61eeefbe
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3181daf7dacda33cf3c8431e61eeefbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3181daf7dacda33cf3c8431e61eeefbe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3181daf7dacda33cf3c8431e61eeefbe::$classMap;

        }, null, ClassLoader::class);
    }
}
