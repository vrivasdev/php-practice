<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74c108cc1d19829b8ee3760d9a89a739
{
    public static $classMap = array (
        'House' => __DIR__ . '/../..' . '/classes/house.class.php',
        'Person\\Person' => __DIR__ . '/../..' . '/classes/Person/person.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit74c108cc1d19829b8ee3760d9a89a739::$classMap;

        }, null, ClassLoader::class);
    }
}
