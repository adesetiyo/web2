<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitce814fd156dd1bf13dcf8be1028fb89f
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitce814fd156dd1bf13dcf8be1028fb89f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitce814fd156dd1bf13dcf8be1028fb89f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitce814fd156dd1bf13dcf8be1028fb89f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
