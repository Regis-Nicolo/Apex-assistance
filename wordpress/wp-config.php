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
define('AUTH_KEY',         ':O0o.GHX l)%mW- Rt~uz|GjFUC189WAQ^}/J?p3e<Xdn,jIB2<iHnq%a?gG&l)?');
define('SECURE_AUTH_KEY',  'ebF+/M!aE)D5UJPty#.VWLr+]j~ 9-Ew2frZPmO$:>?BzY,,Y>Fe:<^u0#FE1Aba');
define('LOGGED_IN_KEY',    'R;C/|.m3npHU;>?I6_0.A!P/9N++DI )NVSZw!HjkDK!LpF>!Vd^$P-FVV6(.![S');
define('NONCE_KEY',        'FtA,_k0pECpfQAx(x64,#s?7!FuXB:zzD=->b~i[`!NUG&n9LT=s=2;{qF*pu`sh');
define('AUTH_SALT',        'S,3M)u(F$}+E<z> ~X/L8IjKQ$os_F%Ri%)+{(=i3}p:zm8Jpn i,?_clF7Nho20');
define('SECURE_AUTH_SALT', 'Zg<]pV*p]a<%Uit`/UsH.(p35fJhcDYSQ%Q^mtPLt9<Fe)&!s0sxi}l}voRF$w)/');
define('LOGGED_IN_SALT',   'xuBNlc0c#*Uj&9S(kDPr;@(g!lV6U#W6e}%)~;+6a/^;;-~).@Jj.}8<XeHkK@ls');
define('NONCE_SALT',       'AY^,h4C ;Tg)j 9d;=<t%i+yh3 eRkIzS,s9A6E@#eKsU;@^dWnC55,3m..#*E,0');
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

/**Pour travailler en local.*/
define('FS_METHOD', 'direct');