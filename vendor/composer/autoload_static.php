<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit76516354c1da428b913d39ad86ddf545
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit76516354c1da428b913d39ad86ddf545::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit76516354c1da428b913d39ad86ddf545::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit76516354c1da428b913d39ad86ddf545::$classMap;

        }, null, ClassLoader::class);
    }
}
