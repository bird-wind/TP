<?php
//配置文件
return [
    'template'  => [
        'type'               => 'think',
        //是否需要开启模版缓存,false为不开启,每次都会重新编译
        'tpl_cache'          => false,
        'taglib_begin'       => '<',
        'taglib_end'         => '>',

        //配置模版常量
        'tpl_replace_string' => [
            '__PUBLIC__' => '/static',
            '__VENDOR__' => '/static/vendor',
            '__SELF__'   => '/static/admin',
        ],
    ],
];