<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Apex');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'facesimplon');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'IJGV|TQ%Lg%p_PZ5B]47SCsLvY#~`7khNkF{OpFeQlr{flYaQkfY%ra+;0@aNh0e');
define('SECURE_AUTH_KEY',  'VX_PzS_D18#-Z&6d2`,vv?A-AcGOwKUdjy9~322SHf:e:i^@C052H%9}UofLA:j.');
define('LOGGED_IN_KEY',    'W8GOt@o<n~8Tf-`FYD3Z(UW4!7}rpO_Crr*1>LzZP_i16stNJ{VeC$n[QT&WOQup');
define('NONCE_KEY',        '_/MhAL6S|m$5,}54IHzxMb~fB/jffn{YGNGuL1^^=+[o!$A9:-,s1y4|cJ@IB@-Q');
define('AUTH_SALT',        ' KXBY$ExoCcpfy-ecc*aR&Df+:%<>t_VSk9VXXTJTl~d-S36eY_ok%DWGC/PD;u^');
define('SECURE_AUTH_SALT', '`8o0[E;O[kxyp`u@6fUgHv +%Hged<%FS393pu%X3tr(PFl{T6aB=X&eQ.X(kVg.');
define('LOGGED_IN_SALT',   '0$/`w*;.oe7_Q8<`:w--mJbM @0uz!g K 5}JE.M,7cJ.H>0kjVDgL}`STF!I3+|');
define('NONCE_SALT',       '%i}nz<+0t9<mw(ECWZMmsH4WBcJoL?wb8;8}9q>9bfS_PE;4OIq$t6FtqWr}B(jc');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
/** Travailler en local**/
define('FS_METHOD', 'direct');
