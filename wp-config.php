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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J hx~h +r?cpg@/sJ~1F^sB+2@I^?;)J3$-[Xqt]uU$ R%nw*#SLz.O#@z57U+]z' );
define( 'SECURE_AUTH_KEY',  ']|Ocv@V&?Uj&_v7*HoltNo]R+X$[:?9/gs#6w*38am3Sz/_9f9K;_a5m90B{|Z1y' );
define( 'LOGGED_IN_KEY',    '*u0Vc>rddU-yOSF&#znvi;;uLOAvs43R1!VYu3]d{G$vK&:EfgW(vI6Y+jU!Mvsg' );
define( 'NONCE_KEY',        '7t2<EW5<]cD!(f6@X8R5UB`Ns^kZ]xov?~8~p+/t>paN|WB=9-agI|-OXL0<f{%&' );
define( 'AUTH_SALT',        'l5Ok2QE~v{WWgj$dB*T5<DW+5]$LD)p@EvF_M8GU4/[Eb.L5U{J;DW+D+/qIFO#`' );
define( 'SECURE_AUTH_SALT', 'MK@cva_s4K~Bn{:{]%.wiUBSo4Cig8-2n.bINMLe5!@h9</C]Bh6(BVYEkLBHph{' );
define( 'LOGGED_IN_SALT',   'H<>>t&QYw4?#=/}CIx|SaGc1zb/E?{/~%*Atx~x`qmRpFrUn{1V2/%_;;<m^sttI' );
define( 'NONCE_SALT',       '.5D&Kmysnt!{`4Z}d;/vWSZ8G@_8iV/OFeSQ*Kn+>e^HPmjW(z+N&7Ju,nv/fk T' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
