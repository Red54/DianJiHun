<?php
/** 
 * WordPress 基础配置文件。
 *
 * 本文件包含以下配置选项：MySQL 设置、数据库表名前缀、密钥、
 * WordPress 语言设定以及 ABSPATH。如需更多信息，请访问
 * {@link http://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 * 编辑 wp-config.php} Codex 页面。MySQL 设置具体信息请咨询您的空间提供商。
 *
 * 这个文件用在于安装程序自动生成 wp-config.php 配置文件，
 * 您可以手动复制这个文件，并重命名为“wp-config.php”，然后输入相关信息。
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress 数据库的名称 */
define('DB_NAME', 'djh');

/** MySQL 数据库用户名 */
define('DB_USER', 'root');

/** MySQL 数据库密码 */
define('DB_PASSWORD', 'sdju19532013');

/** MySQL 主机 */
define('DB_HOST', 'localhost');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8');

/** 数据库整理类型。如不确定请勿更改 */
define('DB_COLLATE', '');

/**#@+
 * 身份认证密匙设定。
 *
 * 您可以随意写一些字符
 * 或者直接访问 {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org 私钥生成服务}，
 * 任何修改都会导致 cookie 失效，所有用户必须重新登录。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'BS5QjE+ dcMXQd?7&5ppE%l)rYi(xSy0RfmVt>o>+;%p=nj{ZFx.0Gw/7LvTkJFh');
define('SECURE_AUTH_KEY',  '@A UL[`hL6jKVJFI#-BaH7k`JkZ=?T+pN5s1*I;Nc$}0v~r+R)|a1I+I)=(T,#6I');
define('LOGGED_IN_KEY',    '$+P-_D~e Sql6-V>T0bL3ImP,r8EzGL$7g-0>X5NeNxN]cwHzV+OzjfN6{V9i-r|');
define('NONCE_KEY',        '^ha|5,SVNQ$+VdPLSSS+@>t`X+t+-n78+#g@z~hjPFP!U.GrbCVrm+!hQ^Wq>=Qb');
define('AUTH_SALT',        'C+-fKq/}GBUd^enE`[~4EA@{%At!Q;P-:|$2P.tR-p.L]-aw;6JC#8g#?U{FyyOt');
define('SECURE_AUTH_SALT', 'krG[yci;ZNVU_zyk^D<._0PX--;[8gXDh2J*Gi<`K:_qnz*;)pf l$2!YbmHVK+;');
define('LOGGED_IN_SALT',   'ZLm{wjT|?buVb|2aL<SY7|m=Bl8f$u+=}F5Z`Ys4<UifuZRkShP-wvaX@liT5XBH');
define('NONCE_SALT',       'fePbU*$O{Wg-9@pR2><SuDWf*KQ:]l#Q0p{{E#>W$yNDrz>%jLeDS~Wh(jw5.gqe');

/**#@-*/

/**
 * WordPress 数据表前缀。
 *
 * 如果您有在同一数据库内安装多个 WordPress 的需求，请为每个 WordPress 设置不同的数据表前缀。
 * 前缀名只能为数字、字母加下划线。
 */
$table_prefix  = 'wp_';

/**
 * WordPress 语言设置，中文版本默认为中文。
 *
 * 本项设定能够让 WordPress 显示您需要的语言。
 * wp-content/languages 内应放置同名的 .mo 语言文件。
 * 要使用 WordPress 简体中文界面，只需填入 zh_CN。
 */
define('WPLANG', 'zh_CN');

/**
 * 开发者专用：WordPress 调试模式。
 *
 * 将这个值改为“true”，WordPress 将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用本功能。
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress 目录的绝对路径。 */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** 设置 WordPress 变量和包含文件。 */
require_once(ABSPATH . 'wp-settings.php');
