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
define( 'DB_NAME', "alexmarq_alp_75343" );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', "alexmarq_alp-73248" );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', "pegk#3Ui~a]ZP}1y" );

/** Nome do host do MySQL */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'vXQq}+KyJjylB~-<wDU~Ma(lIg4{XlI|zC:yH>ExIhn:&p4%?**{8>MBn#&;M=AP' );
define( 'SECURE_AUTH_KEY',  'DyExKq56#lgpyD./AGY5v~-t1D&x<b]QZ&2u6Y?r:usX[fvzy3*|.rNd59A.`EWT' );
define( 'LOGGED_IN_KEY',    '%{^%>vax xm5tuhM(T2^Y`;_rSzXJe{5AZJe;^8qw!!!HY, #nf7D5&+vw5@XhTU' );
define( 'NONCE_KEY',        '^9aV0x-;*TP?p$gzzx|a-&6u}NhbE9Z;+pb+LZB,Z+Ko27+/?9A0:ZJ7XB7mV>MQ' );
define( 'AUTH_SALT',        '}6av{)_oEO.2k)Ok;|S2-g%f *$7JQ;zd#p@PM|Hmy]=8n]*9OPFn1ElJju]<b]7' );
define( 'SECURE_AUTH_SALT', '&A[c~~ukMy7.z4Ot[MN1,>S0S8[qAp?zB):KF{$.d6j1_XfLh?]a?4Q)pyLS&G^|' );
define( 'LOGGED_IN_SALT',   '+a&MKe (DM|}D14S?MKT`YL2.u `$e5Lqd:y) $Zp8e`JwW| Tu6$VR1sj{~eVLY' );
define( 'NONCE_SALT',       'm2%teb_Txv}=29XbMh9b:}4_34mr8N4L(b@M_9l3OB~p`~#tZ0Z`& 3(dJNFU)[Z' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'mkd7_';

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
