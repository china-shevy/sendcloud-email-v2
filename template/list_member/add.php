<?php

/**
 * 示例:
 *
 * 'template_name' => array(
 *      'api_user' => 'xxx',
 *      'api_key' => 'xxx',             // 不建议在模板中设置api_key,请在config/config.php中统一设置
 *      'mail_list_addr' => 'example@example.com',
 *      'member_addr' => 'example1@example.com;example2@example.com',
 *      'name' => 'xxx;yyy;xxx',
 *      'vars' => '{%variable1%};{%variable2:100%}',
 *      'subscribed' => 'true',         // DEPRECATE! ('true'|'false')
 *      'upsert' => 'true'              // ('true'|'false')
 * ),
 * ...
 */
return array();