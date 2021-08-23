<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'site' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1N#T.(<tnK=toK/|:l9cHh]!pD?6+I#2y-w<|aS`9P9^L}B`1K4=()zH@%D}H?}&' );
define( 'SECURE_AUTH_KEY',  ';huehDS5Gw$yYPjIqVpD};~Ws6?$9f>ws!UU$7 }(_!U$t=.1CDAN%5U&&&wzEB3' );
define( 'LOGGED_IN_KEY',    '8-]#~Qy/p{vt>/oMQOdRmRFW.5X;})xg4 76)}q[sxFg9$L;AEM6_{5R}RA{DaIj' );
define( 'NONCE_KEY',        'B1+a2oFnsXBQ=P%3s3;`A>.q3wiX=b_<?)^X%C3~1]`_t}lrd{Rla)b}/#]![mvo' );
define( 'AUTH_SALT',        '_&1%@:3yCm(mKqA5dj5/{Eg77#QL#u0P>b!yULX%o{:EP6Ulz]CWR*(Y1Qg7~${(' );
define( 'SECURE_AUTH_SALT', 'je 6+(OU{m/P%+&T2gdw{_fJ%SM`|t;p7unE>+!7>@+<<H0~uVQ?d~3`yRY6:A(S' );
define( 'LOGGED_IN_SALT',   '=x-ecE#l5y=P|IbYsfjw9pJ0ZzZm_sL}2_R},T3YCL1Jy/bAAk_%s>PN#6b+f2CJ' );
define( 'NONCE_SALT',       '<lwaBgb[We:qW)Y1P4ssFU1s4qu9&cv0P6xt]Q,5QYEOU)*_ Ib`Tu*L3_>|a4{b' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
