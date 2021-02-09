<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// Limit post revisions
define('WP_POST_REVISIONS', 3 );

// Change auto-revision interval
define('AUTOSAVE_INTERVAL', 360);

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wp2021' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'PGgx;i8U@iINb}Ker+%xPKV2D%Sr8jT$WUl68pw~^!]0{y:A+Xet_uj0[pU}gY G' );
define( 'SECURE_AUTH_KEY',  '>JkXk>+IvvWK(Gxge0m``ccN*=~0fKnww$CyCwZD=BrgF7?>{KGF[Sn0ulWQLmF@' );
define( 'LOGGED_IN_KEY',    ':(mZSMh)*[vV83Ga$+W <.c)y%/)PlpJKc%8Oq1VD(/;hdD};1F*UdLVBcr6l uN' );
define( 'NONCE_KEY',        'H0?:/d_Dzn6!@0)xus>kpxLGP_vo|Zpg9-#.uUFw3Niwf0/]uWe{w5/X<TOg7EV%' );
define( 'AUTH_SALT',        '|$4_uQiQ-E`EP5+n{jtfV);Z@JFQmLtu >la<b[~S+~xj4P+)t1]X!&*ia[bClEI' );
define( 'SECURE_AUTH_SALT', 'H0uwv91 wrRgK:HL{0T}a!-!mHnYmTy+rZ @/wyH[eFaYuVsa;`Q 8`z,an6V538' );
define( 'LOGGED_IN_SALT',   'zZ* !BUs[p/3ej[DE40ayy.qTN4Ey +zkOl/B5`AAd-[U8!x$?CGaGft4E7lxvvG' );
define( 'NONCE_SALT',       ':Zcq`%E#At1jWmVc4A<-,#kE>_x~8_u]Pn&C7Ml>)D<SG[V*!~5IC6StLxL&6R?:' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp2021_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
