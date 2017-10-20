<?php
return [
    /*
    |--------------------------------------------------------------------------
    |  搜索配置 (包含IP及端口配置)
    |--------------------------------------------------------------------------
    |
    */
    'index_host'    => env('MXUSEARCH_INDEX_HOST', '127.0.0.1'),
    'search_host'   => env('MXUSEARCH_SEARCH_HOST', '127.0.0.1'),
    'index_port'    => env('MXUSEARCH_INDEX_PORT', '8383'),
    'search_port'   => env('MXUSEARCH_SEARCH_PORT', '8384'),
    'charset'       => 'utf-8',
    'project'       => 'mxu_publish',

    /*
    |--------------------------------------------------------------------------
    |  ini文件名称
    |--------------------------------------------------------------------------
    |
    */
    'ini_file_name' => env('MXUSEARCH_INI', 'mxusearch.ini'),
];