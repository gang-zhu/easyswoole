<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita8adae3fc6e3e889845ab35c9b9fd855
{
    public static $files = array (
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'SuperClosure\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PhpParser\\' => 10,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'EasySwoole\\Validate\\' => 20,
            'EasySwoole\\Utility\\' => 19,
            'EasySwoole\\Trigger\\' => 19,
            'EasySwoole\\Task\\' => 16,
            'EasySwoole\\Spl\\Test\\' => 20,
            'EasySwoole\\Spl\\' => 15,
            'EasySwoole\\Log\\' => 15,
            'EasySwoole\\Http\\' => 16,
            'EasySwoole\\EasySwoole\\' => 22,
            'EasySwoole\\Config\\Test\\' => 23,
            'EasySwoole\\Config\\' => 18,
            'EasySwoole\\Component\\Tests\\' => 27,
            'EasySwoole\\Component\\' => 21,
            'EasySwoole\\Annotation\\Tests\\' => 28,
            'EasySwoole\\Annotation\\' => 22,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/superclosure/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'EasySwoole\\Validate\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/validate/src',
        ),
        'EasySwoole\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/utility/src',
        ),
        'EasySwoole\\Trigger\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/trigger/src',
        ),
        'EasySwoole\\Task\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/task/src',
        ),
        'EasySwoole\\Spl\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/spl/test',
        ),
        'EasySwoole\\Spl\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/spl/src',
        ),
        'EasySwoole\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/log/src',
        ),
        'EasySwoole\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/http/src',
        ),
        'EasySwoole\\EasySwoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/src',
        ),
        'EasySwoole\\Config\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/config/tests',
        ),
        'EasySwoole\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/config/src',
        ),
        'EasySwoole\\Component\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/component/Tests',
        ),
        'EasySwoole\\Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/component/src',
        ),
        'EasySwoole\\Annotation\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/annotation/tests',
        ),
        'EasySwoole\\Annotation\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/annotation/src',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita8adae3fc6e3e889845ab35c9b9fd855::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita8adae3fc6e3e889845ab35c9b9fd855::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
