<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc28d34832b54c86c87310a2f8a3121ed
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Neo\\AcessandoBancoDeDadosPdoCrudComPdo\\' => 39,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Neo\\AcessandoBancoDeDadosPdoCrudComPdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc28d34832b54c86c87310a2f8a3121ed::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc28d34832b54c86c87310a2f8a3121ed::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc28d34832b54c86c87310a2f8a3121ed::$classMap;

        }, null, ClassLoader::class);
    }
}