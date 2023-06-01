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
define( 'DB_NAME', 'alura-intercambios' );

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
define( 'AUTH_KEY',         'B!8^,8QvZ.X*BYtFxHc2vd!-99xXv&ClvDHI~H8DXF8]65=&2e`erT!^slo4fUZ:' );
define( 'SECURE_AUTH_KEY',  'Q@W8{j(u,t_bM[SQI9dHulp@rOmM+L+`96uX]-*xpS:_1ISEtAwc-MsL;1<wO2oD' );
define( 'LOGGED_IN_KEY',    'v4;vcHCiV<]qS_2AEgP,-4diQBuzm3t_j=<%5,A6SVs~B?oq0]ugm+($ fqc,IAl' );
define( 'NONCE_KEY',        'q>mn<X{k|!DB=[4KFqGncv<m8RRlSy=fh79<qx(~SZbcJ9HDmxRT<9BBw=n_{&v>' );
define( 'AUTH_SALT',        ':$9H=2tu9t2wu^YV ,^o4@!h^6(8G<(n!liw_NFrJ_LiVEW%s+skz!UHK.5q$<)z' );
define( 'SECURE_AUTH_SALT', 's=M&OMrD1WGO).AUb_hR 8:QB2x>x[Mt+]Z9fUty[n0~UzP<@rFu*M6=@(#;7B}K' );
define( 'LOGGED_IN_SALT',   'e34K7ud%]`i-3eBcSU[3sq[|XfTag(f[lZtv--rfBgM>NEzrhIlTf7AM3QD7ux}*' );
define( 'NONCE_SALT',       ']e h[M+3b0fC` Hu#:xgK<GPPP5*bGzi!dou=g&A)HY`(G(7oECmOrCo1UT!*9gq' );

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
