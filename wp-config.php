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
 * le processus d’installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'maxtest');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '@Nb 9nKgK>`wGg:i@E%),kP4SQE+_LyWzlQJXm5&#=advEug2o[ETUXR`YT,.7LM');
define('SECURE_AUTH_KEY',  '%-/9>Yz[&_Ne0)a;GNOgGJTOVcD7K}sBL#*e>O7i%%uDef.[hmtc5R.4r,-X7r]R');
define('LOGGED_IN_KEY',    '@-npHVQt6t^`b!G:!K%vT8_o6|QfY[QjjwH`Y~YpW[?)YJRn D5g)=ZKFO+66NMe');
define('NONCE_KEY',        'Ige~jyZcMAiW?q,7$rwYkofSHc`<x$/| S{,AlZto2bwbb;XD> u7aEQ#50H)Y~b');
define('AUTH_SALT',        '>fR|6&Wlr@7IxN]jEK?SmRv{jp5,spk9OnhP8&?hEnR94!wcz8[yam@3pd^0%(1 ');
define('SECURE_AUTH_SALT', '+}Tx%@NWvYthDvr7gFtlw}&fT&ejpM_|IC:ub&%NvN`3V(gA5eao%w+`..T!FQL-');
define('LOGGED_IN_SALT',   'v.rfc5`[9.POIt)5T:ceQ+&$?%p%o==m0Eh%?[^U/T idmG_15&q)2h2<9fg2,(y');
define('NONCE_SALT',       'hV6$nxZI`&0{wxo2NDQ~dY8Y+6A^mG3;5i:V:/`59dTHx4`0iMp<A=rC=YGEB)G>');
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
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');