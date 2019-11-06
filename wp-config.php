<?php
/**
 * WordPress基础配置文件。
 *
 * 这个文件被安装程序用于自动生成wp-config.php配置文件，
 * 您可以不使用网站，您需要手动复制这个文件，
 * 并重命名为“wp-config.php”，然后填入相关信息。
 *
 * 本文件包含以下配置选项：
 *
 * * MySQL设置
 * * 密钥
 * * 数据库表名前缀
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/zh-cn:%E7%BC%96%E8%BE%91_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL 设置 - 具体信息来自您正在使用的主机 ** //
/** WordPress数据库的名称 */
define( 'DB_NAME', 'wordpress' );

/** MySQL数据库用户名 */
define( 'DB_USER', 'root' );

/** MySQL数据库密码 */
define( 'DB_PASSWORD', 'root123' );

/** MySQL主机 */
define( 'DB_HOST', 'localhost' );

/** 创建数据表时默认的文字编码 */
define( 'DB_CHARSET', 'utf8mb4' );

/** 数据库整理类型。如不确定请勿更改 */
define( 'DB_COLLATE', '' );

/**#@+
 * 身份认证密钥与盐。
 *
 * 修改为任意独一无二的字串！
 * 或者直接访问{@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org密钥生成服务}
 * 任何修改都会导致所有cookies失效，所有用户将必须重新登录。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'u$}DZQ];qq#Q9R_;U*<-gerlrXf6g^o0f-iXK$q7m8Uv[YLoB86.Gjf.ZxMY5wUY' );
define( 'SECURE_AUTH_KEY',  'r8^EK:ERr8=Y&1GZE3qG1p.w^m.py!~d2W:9*_h(6R^P@EPQE5Y{ /fsR! XaZn%' );
define( 'LOGGED_IN_KEY',    'Mg3sH>!t[HgO7Ungvo<!;yx<5ra&IEUsr*${b$0KM|hx3sE[x.^# Q*5c-a(e</d' );
define( 'NONCE_KEY',        'XzxY}c@P?=8k W.^-OZes$U-2%p[MYOG2ET ~?J-d4D|M?H8%nf)JA^5hSC&mgGg' );
define( 'AUTH_SALT',        'BjYULCC[hlZIRy!H,P>o8u?LP{B|t-qY7RJT9h^QZk&]E4FHr.F!4WPv#C=~T2l ' );
define( 'SECURE_AUTH_SALT', 'dMIK`~]ml2>uDU<:C@SIAWW(lgkQZsHL[?~Vhb3+V=8&(Z}ajD[Q5oj7bkOhR!KX' );
define( 'LOGGED_IN_SALT',   '_L.b+j3rA{ $<$DmvF;>ls_vo9A-QQbg}*d,yK#m[#J9FSvfolk+gLJW3Zs<ho[M' );
define( 'NONCE_SALT',       '&{ }DOBP9dYVl#@,>7lX_vLu5;F!YGRvYr&j$;!DCVz4#LKg,vp93>W(?cyK&BYA' );

/**#@-*/

/**
 * WordPress数据表前缀。
 *
 * 如果您有在同一数据库内安装多个WordPress的需求，请为每个WordPress设置
 * 不同的数据表前缀。前缀名只能为数字、字母加下划线。
 */
$table_prefix = 'wp_';

/**
 * 开发者专用：WordPress调试模式。
 *
 * 将这个值改为true，WordPress将显示所有用于开发的提示。
 * 强烈建议插件开发者在开发环境中启用WP_DEBUG。
 *
 * 要获取其他能用于调试的信息，请访问Codex。
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* 好了！请不要再继续编辑。请保存本文件。使用愉快！ */

/** WordPress目录的绝对路径。 */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** 设置WordPress变量和包含文件。 */
require_once( ABSPATH . 'wp-settings.php' );
