<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit017b8c3198e2eff5c222c51e178119f6
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vivek\\Secqure\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vivek\\Secqure\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'ValidateToken' => __DIR__ . '/..' . '/secqure/validatetoken/lib/ValidateToken.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit017b8c3198e2eff5c222c51e178119f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit017b8c3198e2eff5c222c51e178119f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit017b8c3198e2eff5c222c51e178119f6::$classMap;

        }, null, ClassLoader::class);
    }
}
