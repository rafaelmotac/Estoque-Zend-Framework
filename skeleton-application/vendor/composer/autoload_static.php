<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfdef4a926eac4e6ef79407634c764f95
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zend\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zend\\' => 
        array (
            0 => __DIR__ . '/..' . '/zendframework/zendframework/library/Zend',
        ),
    );

    public static $prefixesPsr0 = array (
        'Z' => 
        array (
            'ZendXml\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zendxml/library',
            ),
            'ZendDiagnostics\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zenddiagnostics/src',
            ),
            'ZendDiagnosticsTest\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zenddiagnostics/tests',
            ),
            'ZFTool\\' => 
            array (
                0 => __DIR__ . '/..' . '/zendframework/zftool/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfdef4a926eac4e6ef79407634c764f95::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfdef4a926eac4e6ef79407634c764f95::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitfdef4a926eac4e6ef79407634c764f95::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}