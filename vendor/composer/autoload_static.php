<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit00f0dcf17c480517842d7b077858fc25
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HardG\\BuddyPress120URLPolyfills\\' => 32,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HardG\\BuddyPress120URLPolyfills\\' => 
        array (
            0 => __DIR__ . '/..' . '/hard-g/buddypress-12.0-url-polyfills/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit00f0dcf17c480517842d7b077858fc25::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit00f0dcf17c480517842d7b077858fc25::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
