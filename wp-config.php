<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'Q@%yU;WLNZlWNayxN*u*):Ui]`gX4cZ<lMqERY3?};,j-]dNPGjU?5^Y>{}Q,oJV' );
define( 'SECURE_AUTH_KEY',  'THC^zui;&P/Nt-m7>,wx9yuCp_xSv.foAMYMB<d2~7[ZuDwa{I#gl^3~D9|rz1,V' );
define( 'LOGGED_IN_KEY',    'X-}iPOAl^ctX9|p0/}_d)#I@Y>SZ_AuMqw}>vUwD3HymbrZ,HPIye!UTq%W|SLX9' );
define( 'NONCE_KEY',        'ujr6v=^wmHbF1@wY}MKPmDrK4S9@wf j>c-RF&}+kq]`&u$4l5WC}NhK-D8?Z9B.' );
define( 'AUTH_SALT',        '~w>utCN]G`$zj.ack3eca10oZe)MNwXu){xN!*}NP:OI]AWsI/,%#HUt^XX^O>&}' );
define( 'SECURE_AUTH_SALT', '7JGh+L=@Cu8<W(aUEnwy-JS<L,h/m3rk-q[:Hm>lt@oh#FJn6y5Vt}5{PgX)8,/s' );
define( 'LOGGED_IN_SALT',   'D~<{U!%jRKV%=E9)uhzrogS,t0Qu~sGF i:KIN5r 3V&GnwS|d;-AlC*D<CW=LMR' );
define( 'NONCE_SALT',       '^a!ik[dCLcEaZIrXRO[E|IED&PmTPB>qU<%W/h&D{h9+</3JeW_ILGxk_1lEr+zg' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define("WP_DEBUG_LOG", true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
