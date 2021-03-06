<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcda6a9e3af4e6bf384d421441cce16a5
{
    public static $classMap = array (
        'Animals' => __DIR__ . '/../..' . '/classes/Animals.php',
        'CapuchinMonke' => __DIR__ . '/../..' . '/classes/CapuchinMonke.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Croc' => __DIR__ . '/../..' . '/classes/Croc.php',
        'Mungus' => __DIR__ . '/../..' . '/classes/Mungus.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitcda6a9e3af4e6bf384d421441cce16a5::$classMap;

        }, null, ClassLoader::class);
    }
}
