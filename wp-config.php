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
define( 'DB_NAME', 'teste_rest_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wp_user' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'z@D$#=nZa*:S~*Q:)oOUV.Gtf?D2~dyfj}_*xIT,tLXvkhe*{O-e;Pa/4~YCmfa0' );
define( 'SECURE_AUTH_KEY',  'ZkE9(,9uz,@*zEN&v,6JnYiAdfDmFXy0:0&^CbPMHTX*K~{d63!WPu5-=C][{N(0' );
define( 'LOGGED_IN_KEY',    '~*/<2HoIM-8$xkNmc(_[Oz6>g4kgT<Y7c.L%~-7iyJox$++%-2|Xa&2kduy~|,dj' );
define( 'NONCE_KEY',        'o|$J.>D9Dzb.u:5N_O3PC-/)GB*0qWA:%4*`.@<EHpT(y/dY+.T4IoK|C29U00N<' );
define( 'AUTH_SALT',        ']gheKB+Qo4pv_ge{`S#2cNiO|;l*_+W0Z*gq.r%Zpm}X.##8^AgJ5d&Ap2,3vT3J' );
define( 'SECURE_AUTH_SALT', 'tBN>&DuOWCT(E~{iysVC:Ge_%g7tD^_$k}K]jYs3@kK@bnoDN_-:3~|1F1NOBB/J' );
define( 'LOGGED_IN_SALT',   'Nq_`d3+o<Rrk@-q!}O-Diqa9_aY6*eolA+C ^J[1-E/&C,Q<DXK4Y6C4>q&*o|| ' );
define( 'NONCE_SALT',       'sM;EWLPaD[ov*%9Xp#Da@aO,#bu1&|vAJU]tX&A3e]Tchy%[cm*SPs7t/MBj&ef^' );

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
