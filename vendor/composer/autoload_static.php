<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitea788ca48403f6f56ea9d9ba8ec1d07e
{
    public static $classMap = array (
        'ComposerAutoloaderInitea788ca48403f6f56ea9d9ba8ec1d07e' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitea788ca48403f6f56ea9d9ba8ec1d07e' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Controllers\\Posts\\PostsController' => __DIR__ . '/../..' . '/controllers/posts/PostsController.php',
        'Controllers\\Users\\UsersController' => __DIR__ . '/../..' . '/controllers/users/UsersController.php',
        'Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitea788ca48403f6f56ea9d9ba8ec1d07e::$classMap;

        }, null, ClassLoader::class);
    }
}
