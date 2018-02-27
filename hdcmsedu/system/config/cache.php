<?php
return [
    /*
    |--------------------------------------------------------------------------
    | 缓存驱动
    |--------------------------------------------------------------------------
    |
    | 驱动类型包括:file memcache redis mysql等
    | memcache、redis需要自行安装服务器软
    | mysql缓存需要创建数据表
    */
    'driver'   => 'file',

    /*
    |--------------------------------------------------------------------------
    | 文件缓存
    |--------------------------------------------------------------------------
    |
    | 缓存驱动为file即文件类型缓存时,设置用于缓存数据的目录
    */
    'file'     => [
        'dir' => 'storage/cache',
    ],

    /*
    |--------------------------------------------------------------------------
    | memcache缓存
    |--------------------------------------------------------------------------
    |
    | 多个服务器时设置二维数组进行配置
    */
    'memcache' => [
        'host' => '127.0.0.1',
        'port' => 11211,
    ],

    /*
    |--------------------------------------------------------------------------
    | redis缓存
    |--------------------------------------------------------------------------
    |
    | 多个服务器时设置二维数组进行配置
    */
    'redis'    => [
        'host'     => '127.0.0.1',
        'port'     => 6379,
        'password' => '',
        'database' => 0,
    ],

    /*
    |--------------------------------------------------------------------------
    | mysql缓存
    |--------------------------------------------------------------------------
    |
    | 可以使用命令创建缓存表 php hd table:cache
    */
    'mysql'    => [
        'table' => 'cache',
    ],
];