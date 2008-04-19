<?php
/**
 * Internationalisation file for extension Configure.
 *
 * @addtogroup Extensions
 */

$messages = array();

$messages['en'] = array(
	'configure'                       => 'Configure the wiki',
	'configure-desc'                  => 'Allow authorised users to configure the wiki by a web-based interface',
	'configure-summary'               => 'This special page allow you to configure this wiki, see [http://www.mediawiki.org/wiki/Manual:Configuration_settings Configuration settings] for more information.',
	'configure-btn-save'              => 'Save settings',
	'configure-edit-old'              => 'Warning: you are editing an <strong>old</strong> version of the configuration.',
	'configure-error'                 => 'The configuration could not be saved',
	'configure-no-directory'          => 'The directory used to store the settings, <tt>$1</tt>, does not exist.
Please create it or change it to use this extension.',
	'configure-no-old'                => 'No old version of the configuration available',
	'configure-no-setup'              => 'You have to call <code>efConfigureSetup()</code> explicitly in your LocalSettings.php file to use this extension.',
	'configure-no-transwiki'          => 'You are not allowed to change settings in other wikis',
	'configure-old-versions'          => 'List of old versions of the configuration:',
	'configure-old-not-available'     => 'The old version of the settings you requested, $1, is not available',
	'configure-saved'                 => 'The configuration has been saved',
	'configure-section-general'       => 'General settings',
	'configure-section-paths'         => 'Paths',
	'configure-section-db'            => 'Database',
	'configure-section-db-notallowed' => 'You are not allowed to change the database settings.',
	'configure-section-email'         => 'E-mail',
	'configure-section-enotif'        => 'E-mail notification',
	'configure-section-localization'  => 'Localisation',
	'configure-section-html'          => 'HTML',
	'configure-section-debug'         => 'Debugging',
	'configure-section-profiling'     => 'Profiling',
	'configure-section-site'          => 'Site customisation',
	'configure-section-ajax'          => 'Ajax',
	'configure-section-namespaces'    => 'Namespaces',
	'configure-section-skin'          => 'Skins',
	'configure-section-category'      => 'Categories',
	'configure-section-cache'         => 'Cache',
	'configure-section-pcache'        => 'Parser cache',
	'configure-section-messagecache'  => 'Messages cache',
	'configure-section-memcached'     => 'Memcached',
	'configure-section-interwiki'     => 'Interwiki',
	'configure-section-access'        => 'Access',
	'configure-section-groups'        => 'Groups',
	'configure-section-block'         => 'Blocks',
	'configure-section-rates'         => 'Rate limits',
	'configure-section-proxy'         => 'Proxies',
	'configure-section-squid'         => 'Squids',
	'configure-section-cookie'        => 'Cookies',
	'configure-section-reduction'     => 'Reduction',
	'configure-section-upload'        => 'Upload',
	'configure-section-sharedupload'  => 'Shared upload',
	'configure-section-mime'          => 'MIME types',
	'configure-section-images'        => 'Images',
	'configure-section-svg'           => 'SVG',
	'configure-section-antivirus'     => 'Antivirus',
	'configure-section-parser'        => 'Parser',
	'configure-section-tex'           => 'TeX',
	'configure-section-tidy'          => 'Tidy',
	'configure-section-specialpages'  => 'Special pages',
	'configure-section-recentchanges' => 'Recent changes',
	'configure-section-users'         => 'Users',
	'configure-section-feed'          => 'Feed',
	'configure-section-job'           => 'Jobs',
	'configure-section-extension'     => 'Extensions',
	'configure-section-copyright'     => 'Copyright',
	'configure-section-htcp'          => 'HTCP multicast',
	'configure-section-misc'          => 'Miscellaneous',
	'configure-setting-not-available' => 'This setting is not available in this version of MediaWiki',
);

/** French (Français)
 * @author IAlex
 */
$messages['fr'] = array(
	'configure' => 'Configurer le wiki',
	'configure-desc' => 'Permet aux utilisateurs avec les permisssions adéquates de configurer le wiki via une page spéciale',
	'configure-summary' => 'Cette page spéciale vous permet de configurer ce wiki, voyez les [http://www.mediawiki.org/wiki/Manual:Configuration_settings/fr paramètres de configuration] pour plus d\'informations.',
	'configure-btn-save' => 'Savegarder les réglages',
	'configure-edit-old' => 'Attention : vous êtes en train de modifier une <strong>ancienne</strong> version de la configuration.',
	'configure-no-directory' => 'Le dosier utilisé pour sauver la configuration, <tt>$1</tt>, n\'existe pas, merci de le créer ou de le changer pour que cette extension fonctionne.',
	'configure-no-old' => 'Il n\'y pas d\'ancienne version de la configuration.',
	'configure-no-setup' => 'Vous devez explicitement appeller la fonction <code>efConfigureSetup()</code> dans votre fichier LocalSettings.php pour utiliser cette extension.',
	'configure-no-transwiki' => 'Vous n\'êtes pas autorisé à changer les réglages d\'autres wikis',
	'configure-old-not-available' => 'L\'ancienne version de la configuration que vous avez demandée, $1, n\'est pas disponible',
	'configure-old-versions' => 'Liste des anciennes version de la configuration :',
	'configure-error' => 'La configuration n\'a pu être sauvegardée',
	'configure-saved' => 'La configuration a été sauvegardée avec succès',
	'configure-section-general' => 'Réglages généraux',
	'configure-section-paths' => 'Chemins',
	'configure-section-db' => 'Base de données',
	'configure-section-db-notallowed' => 'Vous n\'êtes pas autorisé à changer les réglages de la base de données.',
	'configure-section-email' => 'Courriel',
	'configure-section-enotif' => 'Notification par courriel',
	'configure-section-localization' => 'Localisation',
	'configure-section-html' => 'Html',
	'configure-section-debug' => 'Debogage',
	'configure-section-profiling' => 'Profilage',
	'configure-section-site' => 'Personnalisation du site',
	'configure-section-ajax' => 'Ajax',
	'configure-section-namespaces' => 'Espaces de noms',
	'configure-section-skin' => 'Habillage',
	'configure-section-category' => 'Catégories',
	'configure-section-cache' => 'Cache',
	'configure-section-pcache' => 'Cache du parseur',
	'configure-section-messagecache' => 'Cache des messages',
	'configure-section-memcached' => 'Memcached',
	'configure-section-interwiki' => 'Interwiki',
	'configure-section-access' => 'Accès',
	'configure-section-groups' => 'Groupes',
	'configure-section-block' => 'Blocages',
	'configure-section-rates' => 'Limites',
	'configure-section-proxy' => 'Serveurs mandataires',
	'configure-section-squid' => 'Serveur squids',
	'configure-section-cookie' => 'Cookies',
	'configure-section-reduction' => 'Réduction',
	'configure-section-upload' => 'Téléchargements',
	'configure-section-sharedupload' => 'Téléchargements partagés',
	'configure-section-mime' => 'Types MIME',
	'configure-section-images' => 'Images',
	'configure-section-svg' => 'SVG',
	'configure-section-antivirus' => 'Antivirus',
	'configure-section-parser' => 'Parseur',
	'configure-section-tex' => 'TeX',
	'configure-section-tidy' => 'Tidy',
	'configure-section-specialpages' => 'Pages spéciales',
	'configure-section-recentchanges' => 'Modifications récentes',
	'configure-section-users' => 'Utilisateurs',
	'configure-section-feed' => 'Feed',
	'configure-section-job' => 'Travaux',
	'configure-section-extension' => 'Extensions',
	'configure-section-copyright' => 'Copyrights',
	'configure-section-htcp' => 'HTCP multicast',
	'configure-section-misc' => 'Autres',
	'configure-setting-not-available' => 'Ce paramètre n\'est pas disponible sur cette version de MediaWiki',
);
