<?php
/*-----------------------------------------------------------------
！！！！警告！！！！
以下为系统文件，请勿修改
-----------------------------------------------------------------*/

// 不能非法包含或直接执行
defined('IN_GINKGO') or exit('Access denied');

/*-------------------------通用-------------------------*/
return array(
    'Access denied'                     => '拒绝访问',
    'Token'                             => '表单令牌',
    'Close'                             => '关闭',
    'Cancel'                            => '取消',
    'Confirm'                           => '确定',
    'Back'                              => '返回',
    'Show'                              => '查看',
    'Input error'                       => '输入错误，请检查！',
    'Unknown'                           => '未知',
    'Save'                              => '保存',
    'Saving'                            => '正在保存 ...',
    'Checking'                          => '正在检查 ...',
    'You do not have permission'        => '您没有权限',
    'Site name'                         => '站点名称',
    'Count of per page'                 => '每页显示数',
    'Date format'                       => '日期格式',
    'Short date format'                 => '短日期格式',
    'Time format'                       => '时间格式',
    'Short time format'                 => '短时间格式',
    'Access token expiration time'      => '访问口令存活期',
    'Refresh token expiration time'     => '刷新口令存活期',
    'Validation token expiration time'  => '验证链接有效期',
    'Allow registration'                => '允许注册',
    'Allow'                             => '允许',
    'Forbid'                            => '禁止',
    'On'                                => '开启',
    'Off'                               => '关闭',
    'Yes'                               => '是',
    'No'                                => '否',
    'Subject'                           => '主题',
    'Content'                           => '内容',
    'Require email'                     => '强制输入邮箱',
    'Allow duplicate email'             => '允许邮箱重复',
    'Allow login by email'              => '使用邮箱登录、读取',
    'Need to verify the email'          => '验证邮箱激活用户',
    'Allowed emails'                    => '允许注册的邮箱',
    'Banned emails'                     => '禁止注册的邮箱',
    'Banned names'                      => '禁止注册的用户名',
    'Client'                            => '客户端消息',
    'Server'                            => '服务器消息',
    'Client &amp; Server'               => '客户端和服务器消息',
    'Secure type'                       => '加密方式',
    'Need to enable the relevant TLS'   => '需启用 TLS 支持',
    'SMTP Host'                         => 'SMTP 服务器',
    'Host port'                         => '服务器端口',
    'Server authentication'             => '服务器认证',
    'Database'                          => '数据库名称',
    'Database host'                     => '数据库服务器',
    'Database set successful'           => '数据库设置成功',
    'Database set failed'               => '数据库设置失败',
    'Check for updates successful'      => '检查更新成功',
    'Check for updates failed'          => '检查更新失败',
    'Prefix'                            => '数据表前缀',
    'Send method'                       => '发送方式',
    'Sendmail via PHP function'         => '通过 PHP 函数的 sendmail 发送',
    'Need to configure <code>sendmail</code> service' => '需要配置 <code>sendmail</code> 服务',
    'Charset'                           => '字符编码',
    'Username'                          => '用户名',
    'Password'                          => '密码',
    'From'                              => '发件人',
    'Reply'                             => '回复地址',
    'Email'                             => '邮箱',
    'Name'                              => '名字',
    'Template'                          => '模板',
    'Timezone'                          => '时区',
    '{:attr} require'                   => '{:attr} 是必需的',
    '{:attr} must be numeric'           => '{:attr} 必须为数字',
    '{:attr} not a valid url'           => '{:attr} 格式不合法',
    '{:value} Minutes'                  => '{:value} 分钟',
    '{:value} Days'                     => '{:value} 天',
    'Set successfully'                  => '设置成功',
    'Set failed'                        => '设置失败',
    'Confirm registration'              => '确认注册',
    'Update mailbox'                    => '更换邮箱',
    'Forgot password'                   => '找回密码',
    'Version'                           => '版本号',
    'Issues time'                       => '发布时间',
    'Installation time'                 => '安装时间',
    'Download'                          => '下载',
    'Announcement'                      => '公告',
    'Current version'                   => '当前安装的版本',
    'Latest version'                    => '最新版本',
    'Your version is the latest!'       => '您的版本是最新的！',
    'Note'                              => '备注',
    'Please select'                     => '请选择',

    'Upgrade data'                  => '升级数据',
    'Upgrade'                       => '升级',
    'Confirm upgrade'               => '确认升级',

    'Submitting'                        => '提交中',

    'Create table'                      => '创建数据表',
    'Create table successfully'         => '创建成功',
    'Create table failed'               => '创建失败',

    'Create index'                      => '创建索引',
    'Create index successfully'         => '创建成功',
    'Create index failed'               => '创建失败',

    'Create view'                       => '创建视图',
    'Create view successfully'          => '创建成功',
    'Create view failed'                => '创建失败',

    'Rename table'                      => '重命名数据表',
    'Rename table successfully'         => '重命名成功',
    'Rename table failed'               => '重命名失败',
    'No need to rename table'           => '无需重命名',

    'Update table'                      => '更新数据表',
    'Update table successfully'         => '更新成功',
    'Update table failed'               => '更新失败',
    'No need to update table'           => '无需更新',

    'Copy table'                        => '复制数据表',
    'Copy table successfully'           => '复制成功',
    'Copy table failed'                 => '复制失败',

    'Drop fields'                      => '丢弃字段',
    'Drop fields successfully'         => '丢弃成功',
    'Drop fields failed'               => '丢弃失败',
    'No need to drop fields'           => '无需丢弃',

    'Content support <code>HTML</code>'                                                 => '内容支持 <code>HTML</code>',
    '<code>{:site_name}</code> will be replaced with "Site name"'                       => '<code>{:site_name}</code> 将被替换为 "站点名称"',
    '<code>{:user_name}</code> will be replaced with "Username"'                        => '<code>{:user_name}</code> 将被替换为 "用户名"',
    '<code>{:user_mail}</code> will be replaced with "Email"'                           => '<code>{:user_mail}</code> 将被替换为 "邮箱"',
    '<code>{:user_mail_new}</code> will be replaced with "New mailbox"'                 => '<code>{:user_mail_new}</code> 将被替换为 "新邮箱"',
    '<code>{:verify_url}</code> will be replaced with "Verify link"'                    => '<code>{:verify_url}</code> 将被替换为 "验证链接"',

    'Check for updated module being disabled'                                           => '检查更新模块被禁用',
    'There are new versions, this is the latest version of the issues and help.'        => '有新版本可供升级，下面是最新版本的发布和更新帮助。',
    'Select or type days'                                                            => '选择或填入天数',
    'Select or type minutes'                                                         => '选择或填入分钟',
    'Select or type the format parameter of the <code>date</code> function'          => '选择或输入 <code>date</code> 函数的格式参数',
    'Need to enable related SSL, such as: <code>OpenSSL</code>'                         => '需启用 SSL 支持，如：<code>OpenSSL</code> 等',
    'Turning on this, the email will be required and cannot be duplicated'              => '开启此项将强制输入邮箱并且邮箱不能重复',
    'Turning on this, you need to verify the email when you register or replace it'     => '注册或更换邮箱均需要验证',
    'For multiple domain, please use <kbd>|</kbd> to separate, fill in the domain, such as: <code>@hotmail.com</code>'       => '多个域名请使用 <kbd>|</kbd> 分隔，只填域名部分，如 <code>@hotmail.com</code>',
    'For multiple username, please use <kbd>|</kbd> to separate, use wildcard <kbd>*</kbd> such as: <code>*master*</code>'   => '多个用户名请使用 <kbd>|</kbd> 分隔，可使用通配符 <kbd>*</kbd>，如 <code>*master*</code>',

    'Warning! Please backup the data before upgrading.' => '警告！请在升级之前备份数据。',
);
