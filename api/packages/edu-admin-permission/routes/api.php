<?php

$api =app(\Dingo\Api\Routing\Router::class);
$api->version('v1',function ($api){
    $api->post('users',[
        'uses'=> '\Edu\Permission\Http\Api\Controllers\AdminUserController@store'

    ]);
});
