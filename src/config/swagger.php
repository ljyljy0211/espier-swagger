<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Swagger文档存储地址
    |--------------------------------------------------------------------------
    */

    'storage_dir' => env('SWAGGER_STORAGE_DIR', 'apidocs'),

    /*
    |--------------------------------------------------------------------------
    | Swagger UI 路由访问地址
    |--------------------------------------------------------------------------
    */

    'router' => env('SWAGGER_DOCS_ROUTER', 'api-doc.html'),
];
