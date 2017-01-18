<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

//不能非法包含或直接执行
if (!defined("IN_BAIGO")) {
    exit("Access Denied");
}

require(BG_PATH_INC . "common.inc.php"); //通用

$arr_set = array(
    "base"      => true,
    "ssin"      => true, //启用会话
    "db"        => true, //连接数据库
    "dsp_type"  => "result",
);
fn_chkPHP($arr_set);

require(BG_PATH_FUNC . "init.func.php"); //初始化
fn_init($arr_set);

$ctrl_seccode = new CONTROL_MISC_REQUEST_SECCODE("result"); //初始化验证对象

$ctrl_seccode->ctrl_chk(); //验证