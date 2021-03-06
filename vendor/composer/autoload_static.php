<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a7652e8ff38adc7842f4ad3b54e1b65
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Model\\' => 6,
        ),
        'C' => 
        array (
            'Controller\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Model\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Model',
        ),
        'Controller\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Controller',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0a7652e8ff38adc7842f4ad3b54e1b65::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0a7652e8ff38adc7842f4ad3b54e1b65::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
