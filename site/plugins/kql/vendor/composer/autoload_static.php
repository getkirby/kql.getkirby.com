<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitce81ad819bd8a4fdf01799db40d8b86b
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Kirby\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Kirby\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
            1 => __DIR__ . '/..' . '/getkirby/composer-installer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Kirby\\ComposerInstaller\\CmsInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/CmsInstaller.php',
        'Kirby\\ComposerInstaller\\Installer' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Installer.php',
        'Kirby\\ComposerInstaller\\Plugin' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/Plugin.php',
        'Kirby\\ComposerInstaller\\PluginInstaller' => __DIR__ . '/..' . '/getkirby/composer-installer/src/ComposerInstaller/PluginInstaller.php',
        'Kirby\\Kql\\Help' => __DIR__ . '/../..' . '/src/Kql/Help.php',
        'Kirby\\Kql\\Interceptor' => __DIR__ . '/../..' . '/src/Kql/Interceptor.php',
        'Kirby\\Kql\\Interceptors\\Cms\\App' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/App.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Block' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Block.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Blocks' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Blocks.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Blueprint' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Blueprint.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Collection' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Collection.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Content' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Content.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Field' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Field.php',
        'Kirby\\Kql\\Interceptors\\Cms\\File' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/File.php',
        'Kirby\\Kql\\Interceptors\\Cms\\FileVersion' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/FileVersion.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Files' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Files.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Layout' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Layout.php',
        'Kirby\\Kql\\Interceptors\\Cms\\LayoutColumn' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/LayoutColumn.php',
        'Kirby\\Kql\\Interceptors\\Cms\\LayoutColumns' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/LayoutColumns.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Layouts' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Layouts.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Model' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Model.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Page' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Page.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Pages' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Pages.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Role' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Role.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Site' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Site.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Structure' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Structure.php',
        'Kirby\\Kql\\Interceptors\\Cms\\StructureObject' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/StructureObject.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Translation' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Translation.php',
        'Kirby\\Kql\\Interceptors\\Cms\\User' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/User.php',
        'Kirby\\Kql\\Interceptors\\Cms\\Users' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Cms/Users.php',
        'Kirby\\Kql\\Interceptors\\Interceptor' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Interceptor.php',
        'Kirby\\Kql\\Interceptors\\Toolkit\\Obj' => __DIR__ . '/../..' . '/src/Kql/Interceptors/Toolkit/Obj.php',
        'Kirby\\Kql\\Kql' => __DIR__ . '/../..' . '/src/Kql/Kql.php',
        'Kirby\\Kql\\Query' => __DIR__ . '/../..' . '/src/Kql/Query.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitce81ad819bd8a4fdf01799db40d8b86b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitce81ad819bd8a4fdf01799db40d8b86b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitce81ad819bd8a4fdf01799db40d8b86b::$classMap;

        }, null, ClassLoader::class);
    }
}
