<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit145951837093ccad09b2f61a4332764d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPatterns\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPatterns\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit145951837093ccad09b2f61a4332764d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit145951837093ccad09b2f61a4332764d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit145951837093ccad09b2f61a4332764d::$classMap;

        }, null, ClassLoader::class);
    }
}
