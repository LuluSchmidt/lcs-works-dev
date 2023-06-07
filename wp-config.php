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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'lcsworks' );

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
define( 'AUTH_KEY',         'd|bf|+2|N%HWdnWw)5-37+D,]jQj?H%&b `>gZ,%;$y%B/z^>73p$dKAJs~~9#]O' );
define( 'SECURE_AUTH_KEY',  '-sr/Y3+rZ%F?tGCp!F%0pK;drKBzqcm(YiQ ia^s#Vr2q2G0S|3o4@QzhnNroqnX' );
define( 'LOGGED_IN_KEY',    'wR!9oe)r=1,AoFT=}F,+XTI[XS/V=Thd2AI05zyWa^<CQ+DkUy+Gl:1+e`}Yv4,s' );
define( 'NONCE_KEY',        '#Y~ZkwAg#^|/!Em#d>D{A<gU2TDR`D4RmjuvS[SX7)oon1kAm4Dt1yI++^sBbR-D' );
define( 'AUTH_SALT',        'E!{yQ|%8Z11T~+J5I/F#edb16]<SW&q9EQ6t&I#2-r#lcU3{<-5}yaZH)Q 89lrS' );
define( 'SECURE_AUTH_SALT', 'GFo %}y/.DfeX w,)6oU;HcjReE~$#&gJb{AmG;;a!AW|uqoHQ#DS5&-A1(%x~E>' );
define( 'LOGGED_IN_SALT',   'D@&4Ct9uac})^n`pwv-G?3vKrEf0D-D+VI~v^0VPFR732}JBl(%q(p*)3V?)}XW+' );
define( 'NONCE_SALT',       'Pbma1O1u<>zY-!0KCI[o-F%l7hY |lQ`HBa]/*}cy$vT4bw:o;c{hf8Ad)x1{=rg' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
