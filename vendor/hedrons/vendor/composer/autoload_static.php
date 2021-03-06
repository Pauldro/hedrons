<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf05a4f7cf50f7b200247cf2fc06debc2
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hedrons\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hedrons\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Hedrons\\ComicVineAPI' => __DIR__ . '/../..' . '/src/ComicVineAPI.class.php',
        'Hedrons\\TMDBapi' => __DIR__ . '/../..' . '/src/TMDB.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf05a4f7cf50f7b200247cf2fc06debc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf05a4f7cf50f7b200247cf2fc06debc2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf05a4f7cf50f7b200247cf2fc06debc2::$classMap;

        }, null, ClassLoader::class);
    }
}
