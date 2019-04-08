<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8d9a86d7eab048d70ad2c7dc88be799
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Binthec\\TestPkg\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Binthec\\TestPkg\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Binthec\\TestPkg\\Clap' => __DIR__ . '/../..' . '/src/Clap.php',
        'Binthec\\TestPkg\\Facades\\ClapFacade' => __DIR__ . '/../..' . '/src/Facades/ClapFacade.php',
        'Binthec\\TestPkg\\Providers\\ClapServiceProvider' => __DIR__ . '/../..' . '/src/Providers/ClapServiceProvider.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8d9a86d7eab048d70ad2c7dc88be799::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8d9a86d7eab048d70ad2c7dc88be799::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita8d9a86d7eab048d70ad2c7dc88be799::$classMap;

        }, null, ClassLoader::class);
    }
}
