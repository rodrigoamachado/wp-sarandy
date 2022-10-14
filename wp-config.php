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
define( 'DB_NAME', 'db_sarandy' );

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
define( 'AUTH_KEY',         'ZO|0JWcg]po1/Bnj2NW&SQ@Nb)V||CW/$6zX]Qt@Q29I;#KCBPPg7:N<DIw;R!V&' );
define( 'SECURE_AUTH_KEY',  'D@<VP 0;q/q70i%Bx#t^])OmFfX$tfe9/C^.G6zsFa@54$Z tthU`8s5@!Jb}`K1' );
define( 'LOGGED_IN_KEY',    'u1PRCUOfNt!(D$4/BOiYr+/S2{u+^L^*yPvX0g?}i2Y/T:P/Ln8SqJh+@+_Q%v~g' );
define( 'NONCE_KEY',        '|&i+A2Y|G&X@`aI[F$YWjgl*_tt3K{mQ~rrm=cH:CGMN*6Vf}m?1j%+?~<.Ae<Ns' );
define( 'AUTH_SALT',        'x.BU`#zM;#=o,L/y2yYv.jgbK:w}h>9UC>rV#XL@{xL7kThM^Xniu2G?g>PsLM&h' );
define( 'SECURE_AUTH_SALT', 'XHE%2.NoSmR@>DEHV R%gICp8_ ,Rbt3kPI%HNFOcIH[Cx2Xgv2;Z!}%-s^}rrP3' );
define( 'LOGGED_IN_SALT',   'W;f:gt<h|zxECamhIdA/rGF1*FRX|3u5h~w2)VAee=W@~%Lf[DXDkpB>>Rm7::(L' );
define( 'NONCE_SALT',       '%WJ^I<epG>iD=&nLtE|k@<bV7gd*_e%N^[yKZB*If!R=/#*Me9]ja1G:jaR-h=O(' );

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
