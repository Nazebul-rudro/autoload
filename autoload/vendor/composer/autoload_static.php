<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88a0e1a120e0f158c44e44f31fbad985
{
    public static $prefixLengthsPsr4 = array (
        'p' => 
        array (
            'pondit\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'pondit\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit88a0e1a120e0f158c44e44f31fbad985::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88a0e1a120e0f158c44e44f31fbad985::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88a0e1a120e0f158c44e44f31fbad985::$classMap;

        }, null, ClassLoader::class);
    }
}