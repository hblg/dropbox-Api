<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit461d284a5daf014911347884370e1176
{
    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Dropbox' => 
            array (
                0 => __DIR__ . '/..' . '/dropbox/dropbox-sdk/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit461d284a5daf014911347884370e1176::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
