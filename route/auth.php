<?php
/**
 * 登陆后路由
 *
 * User: selden
 * Date: 2017/3/26
 * Time: 下午3:23
 */
return [
    // 新增方案
    '/plan/store'=>'PlanController@store',

    // 方案列表
    '/plan/list'=>'PlanController@index',

    // 方案详情
    '/plan'=>'PlanController@show',

    // 新增命令
    '/cron/store'=>'CrontabController@store',

    // 删除命令
    '/cron/destroy'=>'CrontabController@destroy',

    // 删除方案
    '/plan/destroy'=>'PlanController@destroy',

    // 编辑命令
    '/cron/edit'=>'CrontabController@edit',

    // 编辑方案
    '/plan/edit'=>'PlanController@edit',

    // 命令详情
    '/cron/show'=>'CrontabController@show',
];