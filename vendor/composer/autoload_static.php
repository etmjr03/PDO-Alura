<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc7d8e9fdb2f90f7a4083b2571e0bc12
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitdc7d8e9fdb2f90f7a4083b2571e0bc12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitdc7d8e9fdb2f90f7a4083b2571e0bc12::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitdc7d8e9fdb2f90f7a4083b2571e0bc12::$classMap;

        }, null, ClassLoader::class);
    }
}
