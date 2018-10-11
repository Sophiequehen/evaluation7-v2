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
define('DB_NAME', 'eval_cms');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'simplon');

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
define('AUTH_KEY',         'TwQ%7b7XkQwR,No=a?PJ2/`HNmu=`SA9xlD>3P9a) )e<b^2~%:]`Jb$Rq!W(t^N');
define('SECURE_AUTH_KEY',  'j=((:J@qW%g:W3 O!gaN9GHTR={invS/C >g%v%OHiBR0I_;%&9|{l1Ru^|r E!p');
define('LOGGED_IN_KEY',    'Xn;x>K+McGK`28pCrizD^$*nBxJi-k61`cutcAldykEXAo gjXB;bh_%breb3W+-');
define('NONCE_KEY',        'eF^pG:A^K`Tns@|VPstk%{|JQ@9Yy(E(Jlj^7Pl`-bc+XQ2;O$&|Zm1qRdsJHz]o');
define('AUTH_SALT',        'B],.)3]^1lRRfk/o?/SKS+Icxkg,~j>;tkC7C=,Byg3j&E~WMd2vbtDIJ_1#U jJ');
define('SECURE_AUTH_SALT', 'N|h14u,p;ZaE#BKGM6St:BV%N%;D5}@a2qG:5Fy`OBC}DP6kt8Mr8T@:I| 1ek:{');
define('LOGGED_IN_SALT',   'mzjtbxsy-EMI&u@hoC`ra8y/~=jbF{NfqV4U$Z8nRx/(P_M,z1Dk*,9L9!Up|8=F');
define('NONCE_SALT',       'f yWY0K4JL9Bd%*8oy]j&RHtF<  #ntyuY0=&eA1.@x/rj)m1~?hIk}iBr$`_W6@');
/**#@-*/

/**
* Préfixe de base de données pour les tables de WordPress.
*
* Vous pouvez installer plusieurs WordPress sur une seule base de données
* si vous leur donnez chacune un préfixe unique.
* N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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