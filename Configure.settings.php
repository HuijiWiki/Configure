<?php
if ( !defined( 'MEDIAWIKI' ) ) die();

/**
 * Array mapping all editable settings to their type.
 * These settings are in the same order as
 * http://www.mediawiki.org/wiki/Manual:Configuration_settings
 */
$settings = array(
# General
	'wgSitename' => 'text',
	'wgAppleTouchIcon' => 'text',
	'wgArticlePath' => 'text',
	'wgDiff3' => 'text',
	'wgFavicon' => 'text',
	'wgLogo' => 'text',
	'wgMathDirectory' => 'text',
	'wgMathPath' => 'text',
	'wgRedirectScript' => 'text',
	'wgScriptExtension' => 'text',
	'wgScriptPath' => 'text',
	'wgStyleDirectory' => 'text',
	'wgStylePath' => 'text',
#	'wgStyleSheetPath' => 'text',
	'wgTmpDirectory' => 'text',
	'wgUsePathInfo' => 'bool',
#	'wgUploadDirectory' => 'text',
	'wgUploadNavigationUrl' => 'text',
#	'wgUploadPath' => 'text',
	'wgVariantArticlePath' => 'text',
# Db
	'wgAllDBsAreLocalhost' => 'bool',
	'wgAlternateMaster' => 'array',
	'wgCheckDBSchema' => 'bool',
	'wgDBAvgStatusPoll' => 'int',
	'wgDBClusterTimeout' => 'int',
	'wgDBerrorLog' => 'text',
	'wgDBminWordLen' => 'int',
	'wgDBmwschema' => 'text',
	'wgDBmysql5' => 'bool',
	'wgDBprefix' => 'text',
#	'wgDBschema' => 'text',
	'wgDBservers' => 'array',
	'wgDBTableOptions' => 'text',
	'wgDBtransactions' => 'bool',
	'wgDBts2schema' => 'text',
	'wgDBtype' => array( 'mysql' => 'MySQL', 'postgres' => 'PostreSQL' ),
	'wgDefaultExternalStore' => 'array',
	'wgLBFactoryConf' => 'array',
	'wgLocalDatabases' => 'array',
	'wgMasterWaitTimeout' => 'int',
	'wgSearchType' => 'text',
	'wgSlaveLagCritical' => 'int',
	'wgSlaveLagWarning' => 'int',
	'wgExternalServers' => 'array',
# Email
	'wgEmailAuthentication' => 'bool',
	'wgEmergencyContact' => 'text',
	'wgEnableEmail' => 'bool',
	'wgEnableUserEmail' => 'bool',
	'wgNoReplyAddress' => 'text',
	'wgPasswordSender' => 'text',
	'wgSMTP' => 'array',
	'wgUserEmailUseReplyTo' => 'bool',
	'wgEnotifFromEditor' => 'bool',
	'wgEnotifImpersonal' => 'bool',
	'wgEnotifMaxRecips' => 'int',
	'wgEnotifMinorEdits' => 'bool',
	'wgEnotifRevealEditorAddress' => 'bool',
	'wgEnotifUseJobQ' => 'bool',
	'wgEnotifUserTalk' => 'bool',
	'wgEnotifWatchlist' => 'bool',
	'wgShowUpdatedMarker' => 'bool',
	'wgUsersNotifedOnAllChanges' => 'array',
	'wgUsersNotifiedOnAllChanges' => 'array',
# Localization
	'wgAmericanDates' => 'bool',
	'wgDisableLangConversion' => 'bool',
	'wgDocType' => 'text',
	'wgDTD' => 'text',
#	'wgEditEncoding' => 'text',
	'wgForceUIMsgAsContentMsg' => 'array',
#	'wgInputEncoding' => 'text',
	'wgInterwikiMagic' => 'bool',
	'wgLanguageCode' => 'lang',
	'wgLegacyEncoding' => 'text',
	'wgLocaltimezone' => 'text',
	'wgLocalTZoffset' => 'int',
	'wgLoginLanguageSelector' => 'bool',
	'wgMimeType' => 'text',
	'wgMsgCacheExpiry' => 'int',
#	'wgOutputEncoding' => 'text',
	'wgTranslateNumerals' => 'bool',
	'wgUseDatabaseMessages' => 'bool',
	'wgUseDynamicDates' => 'bool',
	'wgUseZhdaemon' => 'bool',
	'wgXhtmlDefaultNamespace' => 'text',
	'wgXhtmlNamespaces' => 'array',
	'wgZhdaemonHost' => 'text',
	'wgZhdaemonPort' => 'int',
# Debug
	'wgColorErrors' => 'bool',
	'wgDebugComments' => 'bool',
	'wgDebugDumpSql' => 'bool',
	'wgDebugLogFile' => 'text',
	'wgDebugLogGroups' => 'array',
	'wgDebugRawPage' => 'bool',
	'wgDebugRedirects' => 'bool',
	'wgLogQueries' => 'bool',
	'wgShowSQLErrors' => 'bool',
	'wgStatsMethod' => array( 'cache' => 'Cache', 'udp' => 'UDP', 0 => 'None' ),
	'wgDebugFunctionEntry' => 'bool',
	'wgDebugProfiling' => 'bool',
	'wgDebugSquid' => 'bool',
	'wgProfileCallTree' => 'bool',
	'wgProfileLimit' => 'int',
	'wgProfileOnly' => 'bool',
	'wgProfilePerHost' => 'bool',
	'wgProfileSampleRate' => 'int',
	'wgProfileToDatabase' => 'bool',
	'wgProfilerType' => 'text',
	'wgProfiling' => 'bool',
	'wgUDPProfilerHost' => 'text',
	'wgUDPProfilerPort' => 'int',
# Site custom
#	'wgAjaxExportList' => 'array',
	'wgAjaxSearch' => 'bool',
	'wgAjaxUploadDestCheck' => 'bool',
	'wgAjaxWatch' => 'bool',
	'wgAllowUserCss' => 'bool',
	'wgAllowUserJs' => 'bool',
	'wgDefaultUserOptions' => 'array',
	'wgCapitalLinks' => 'bool',
	'wgDefaultLanguageVariant' => 'text',
	'wgDefaultRobotPolicy' => 'text',
	'wgExtraLanguageNames' => 'array',
	'wgExtraSubtitle' => 'text',
	'wgHideInterlanguageLinks' => 'bool',
	'wgLegalTitleChars' => 'text',
	'wgNoFollowLinks' => 'bool',
	'wgPageShowWatchingUsers' => 'bool',
	'wgRestrictionLevels' => 'array',
	'wgSiteNotice' => 'text',
	'wgSiteSupportPage' => 'text',
	'wgUrlProtocols' => 'array',
	'wgUseAjax' => 'bool',
	'wgUseSiteCss' => 'bool',
	'wgUseSiteJs' => 'bool',
	'wgContentNamespaces' => 'array',
	'wgExtraNamespaces' => 'array',
	'wgMetaNamespace' => 'text',
	'wgMetaNamespaceTalk' => 'text',
	'wgNamespaceAliases' => 'array',
	'wgNamespaceProtection' => 'array',
	'wgNamespaceRobotPolicies' => 'array',
	'wgNamespacesToBeSearchedDefault' => 'array',
	'wgNamespacesWithSubpages' => 'array',
	'wgNoFollowNsExceptions' => 'array',
	'wgNonincludableNamespaces' => 'array',
	'wgArticleRobotPolicies' => 'array',
# Skins
	'wgDefaultSkin' => 'text',
	'wgSkipSkin' => 'text',
	'wgSkipSkins' => 'array',
	'wgValidSkinNames' => 'array',
# Category
	'wgCategoryMagicGallery' => 'bool',
	'wgCategoryPagingLimit' => 'int',
	'wgUseCategoryBrowser' => 'bool',
# Cache
	'wgCachedMessageArrays' => 'text',
	'wgCacheEpoch' => 'text',
	'wgCachePages' => 'bool',
	'wgCheckSerialized' => 'bool',
	'wgEnableParserCache' => 'bool',
	'wgEnableSidebarCache' => 'bool',
	'wgFileCacheDirectory' => 'text',
	'wgForcedRawSMaxage' => 'int',
	'wgLocalMessageCache' => 'text',
	'wgLocalMessageCacheSerialized' => 'bool',
	'wgMainCacheType' => array( -1 => 'Anything', 0 => 'None',
	                            1 => 'DB', 2 => 'Memcached',
	                            3 => 'Accel', 4 => 'DBA' ),
	'wgMaxMsgCacheEntrySize' => 'int',
	'wgMessageCacheType' => array( -1 => 'Anything', 0 => 'None',
	                               1 => 'DB', 2 => 'Memcached',
	                               3 => 'Accel', 4 => 'DBA' ),
	'wgParserCacheType' => array( -1 => 'Anything', 0 => 'None',
	                              1 => 'DB', 2 => 'Memcached',
	                              3 => 'Accel', 4 => 'DBA' ),
	'wgQueryCacheLimit' => 'int',
	'wgRevisionCacheExpiry' => 'int',
	'wgThumbnailEpoch' => 'text',
	'wgTranscludeCacheExpiry' => 'int',
	'wgUseFileCache' => 'bool',
	'wgUseGzip' => 'bool',
	'wgSidebarCacheExpiry' => 'int',
	'wgLinkCacheMemcached' => 'bool',
	'wgMemCachedDebug' => 'bool',
	'wgMemCachedPersistent' => 'bool',
	'wgMemCachedServers' => 'array',
	'wgSessionsInMemcached' => 'bool',
	'wgUseWatchlistCache' => 'bool',
	'wgWLCacheTimeout' => 'int',
# Interwiki
	'wgEnableScaryTranscluding' => 'bool',
	'wgImportSources' => 'array',
	'wgInterwikiCache' => 'text',
	'wgInterwikiExpiry' => 'int',
	'wgInterwikiFallbackSite' => 'text',
	'wgInterwikiScopes' => 'int',
	'wgLocalInterwiki' => 'text',
# Access
	'wgAutopromote' => 'array',
	'wgAccountCreationThrottle' => 'int',
	'wgAddGroups' => 'array',
	'wgAllowPageInfo' => 'bool',
	'wgAutoblockExpiry' => 'int',
	'wgBlockAllowsUTEdit' => 'bool',
	'wgDeleteRevisionsLimit' => 'int',
	'wgDisabledActions' => 'array',
	'wgEmailConfirmToEdit' => 'bool',
	'wgEnableCascadingProtection' => 'bool',
	'wgEnableAPI' => 'bool',
	'wgEnableWriteAPI' => 'bool',
	'wgGroupPermissions' => 'array',
	'wgGroupsAddToSelf' => 'array',
	'wgGroupsRemoveFromSelf' => 'array',
	'wgImplicitGroups' => 'array',
	'wgPasswordSalt' => 'bool',
	'wgReadOnly' => 'text',
	'wgReadOnlyFile' => 'text',
	'wgRemoveGroups' => 'array',
	'wgSysopEmailBans' => 'bool',
	'wgSysopRangeBans' => 'bool',
	'wgSysopUserBans' => 'bool',
	'wgWhitelistRead' => 'array',
# Rate limits
	'wgRateLimitLog' => 'text',
	'wgRateLimits' => 'array',
	'wgRateLimitsExcludedGroups' => 'array',
# Proxies
	'wgBlockOpenProxies' => 'bool',
	'wgEnableSorbs' => 'bool',
	'wgProxyList' => 'array',
	'wgProxyMemcExpiry' => 'int',
	'wgProxyPorts' => 'array',
	'wgProxyScriptPath' => 'text',
	'wgProxyWhitelist' => 'array',
	'wgSecretKey' => 'text',
# Squid
	'wgInternalServer' => 'text',
	'wgMaxSquidPurgeTitles' => 'int',
	'wgSquidMaxage' => 'int',
	'wgSquidServers' => 'array',
	'wgSquidServersNoPurge' => 'array',
	'wgUseESI' => 'bool',
	'wgUseSquid' => 'bool',
# Cookies
	'wgCookieDomain' => 'text',
	'wgCookieExpiration' => 'int',
	'wgCookieHttpOnly' => 'bool',
	'wgCookiePath' => 'text',
	'wgCookieSecure' => 'bool',
	'wgDisableCookieCheck' => 'bool',
	'wgSessionName' => 'text',
# Reduction
	'wgDisableAnonTalk' => 'bool',
	'wgDisableCounters' => 'bool',
	'wgDisableQueryPages' => 'bool',
	'wgDisableQueryPageUpdate' => 'array',
	'wgDisableSearchContext' => 'bool',
	'wgDisableSearchUpdate' => 'bool',
	'wgDisableTextSearch' => 'bool',
	'wgMiserMode' => 'bool',
	'wgShowHostnames' => 'bool',
	'wgUseDumbLinkUpdate' => 'bool',
	'wgWantedPagesThreshold' => 'int',
# Uploads
	'wgAjaxLicensePreview' => 'bool',
	'wgAllowCopyUploads' => 'bool',
	'wgCheckFileExtensions' => 'bool',
	'wgEnableUploads' => 'bool',
	'wgFileBlacklist' => 'array',
	'wgFileExtensions' => 'array',
	'wgFileStore' => 'array',
	'wgLocalFileRepo' => 'array',
	'wgRemoteUploads' => 'bool',
	'wgStrictFileExtensions' => 'bool',
	'wgUploadSizeWarning' => 'int',
	'wgMaxUploadSize' => 'int',
	'wgHTTPTimeout' => 'int',
	'wgHTTPProxy' => 'text',
	'wgSaveDeletedFiles' => 'bool',

	'wgForeignFileRepos' => 'array',

	'wgLoadFileinfoExtension' => 'bool',
	'wgMimeDetectorCommand' => 'text',
	'wgMimeInfoFile' => 'text',
	'wgMimeTypeFile' => 'text',
	'wgVerifyMimeType' => 'bool',
	'wgMimeTypeBlacklist' => 'array',
# Images
	'wgAllowTitlesInSVG' => 'bool',
	'wgDjvuPostProcessor' => 'text',
	'wgDjvuRenderer' => 'text',
	'wgDjvuToXML' => 'text',
	'wgFileRedirects' => 'bool',
	'wgGenerateThumbnailOnParse' => 'bool',
	'wgIgnoreImageErrors' => 'bool',
	'wgImageLimits' => 'array',
	'wgImageMagickConvertCommand' => 'text',
	'wgMaxImageArea' => 'int',
	'wgMediaHandlers' => 'array',
	'wgSVGConverter' => 'text',
	'wgSVGConverterPath' => 'text',
	'wgSVGConverters' => 'array',
	'wgThumbnailScriptPath' => 'text',
	'wgThumbUpright' => 'text',
	'wgUseImageMagick' => 'bool',
	'wgShowEXIF' => 'bool',
	'wgUseImageResize' => 'bool',
	'wgThumbLimits' => 'array',
	'wgTrustedMediaFormats' => 'array',
	'wgSVGMaxSize' => 'int',

	'wgAntivirus' => 'text',
	'wgAntivirusRequired' => 'bool',
	'wgAntivirusSetup' => 'array',
# Parser
	'wgAllowDisplayTitle' => 'bool',
	'wgAllowExternalImages' => 'bool',
	'wgAllowExternalImagesFrom' => 'text',
	'wgExpensiveParserFunctionLimit' => 'int',
	'wgMaxPPExpandDepth' => 'int',
	'wgMaxPPNodeCount' => 'int',
	'wgParserConf' => 'array',
	'wgParserCacheExpireTime' => 'int',
#	'wgParserTestFiles' => 'array',
	'wgUseXMLparser' => 'bool',

	'wgRawHtml' => 'bool',
	'wgUserHtml' => 'bool',

	'wgTexvc' => 'text',
	'wgUseTeX' => 'bool',

	'wgAlwaysUseTidy' => 'bool',
	'wgDebugTidy' => 'bool',
	'wgTidyBin' => 'text',
	'wgTidyConf' => 'text',
	'wgTidyInternal' => 'bool',
	'wgTidyOpts' => 'text',
	'wgUseTidy' => 'bool',
	'wgValidateAllHtml' => 'bool',
# Special pages
	'wgAllowSpecialInclusion' => 'bool',
	'wgExportAllowHistory' => 'bool',
	'wgExportAllowListContributors' => 'bool',
	'wgExportMaxHistory' => 'int',
	'wgImportTargetNamespace' => 'text',
#	'wgLogActions' => 'array',
#	'wgLogHeaders' => 'array',
#	'wgLogNames' => 'array',
	'wgLogRestrictions' => 'array',
#	'wgLogTypes' => 'array',
	'wgMaxRedirectLinksRetrieved' => 'int',
	'wgUseNPPatrol' => 'bool',

	'wgAllowCategorizedRecentChanges' => 'bool',
	'wgPutIPinRC' => 'bool',
	'wgRCChangedSizeThreshold' => 'int',
	'wgRCMaxAge' => 'int',
	'wgRCShowChangedSize' => 'bool',
	'wgRCShowWatchingUsers' => 'bool',
	'wgUseRCPatrol' => 'bool',
	'wgRC2UDPAddress' => 'text',
	'wgRC2UDPPort' => 'int',
	'wgRC2UDPPrefix' => 'text',
# Users
	'wgAutoConfirmAge' => 'int',
	'wgAutoConfirmCount' => 'int',
	'wgAllowRealName' => 'bool',
	'wgMaxNameChars' => 'int',
	'wgMinimalPasswordLength' => 'int',
	'wgMaxSigChars' => 'int',
	'wgPasswordReminderResendTime' => 'int',
	'wgReservedUsernames' => 'array',
	'wgBrowserBlackList' => 'array',
# Feed
	'wgFeed' => 'bool',
	'wgFeedCacheTimeout' => 'int',
	'wgFeedDiffCutoff' => 'int',
	'wgFeedLimit' => 'int',
# Copyright
	'wgCheckCopyrightUpload' => 'bool',
	'wgCopyrightIcon' => 'text',
	'wgEnableCreativeCommonsRdf' => 'bool',
	'wgEnableDublinCoreRdf' => 'bool',
	'wgMaxCredits' => 'int',
	'wgRightsIcon' => 'text',
	'wgRightsPage' => 'text',
	'wgRightsText' => 'text',
	'wgRightsUrl' => 'bool',
	'wgShowCreditsIfMax' => 'bool',
	'wgUseCopyrightUpload' => 'bool',
# Jobs
	'wgJobRunRate' => 'int',
#	'wgJobClasses' => 'array',
	'wgUpdateRowsPerJob' => 'int',
# Extensions
	'wgAllowSlowParserFunctions' => 'bool',
#	'wgAPIModules' => 'array',
#	'wgAutoloadClasses' => 'array',
	'wgDisableInternalSearch' => 'bool',
#	'wgExtensionCredits' => 'array',
#	'wgExtensionFunctions' => 'array',
#	'wgExtensionMessagesFiles' => 'array',
	'wgExternalStores' => 'array',
#	'wgHooks' => 'array',
#	'wgPagePropLinkInvalidations' => 'array',
#	'wgParserOutputHooks' => 'array',
	'wgSearchForwardUrl' => 'text',
#	'wgSkinExtensionFunctions' => 'array',
# HTCP multicast purging
	'wgHTCPMulticastAddress' => 'text',
	'wgHTCPMulticastTTL' => 'int',
	'wgHTCPPort' => 'int',
# Miscellaneous settings
	'wgAntiLockFlags' => 'int',
	'wgBreakFrames' => 'bool',
	'wgClockSkewFudge' => 'int',
	'wgCommandLineDarkBg' => 'bool',
	'wgCompressRevisions' => 'bool',
	'wgCountCategorizedImagesAsUsed' => 'bool',
	'wgDisableHardRedirects' => 'bool',
	'wgDisableOutputCompression' => 'bool',
	'wgEnableMWSuggest' => 'bool',
	'wgExternalDiffEngine' => 'text',
	'wgExtraRandompageSQL' => 'text',
#	'wgFilterCallback' => 'text',
	'wgGoToEdit' => 'bool',
	'wgGrammarForms' => 'array',
	'wgHitcounterUpdateFreq' => 'int',
	'wgJsMimeType' => 'text',
	'wgLivePreview' => 'bool',
	'wgMaxArticleSize' => 'int',
	'wgMaxShellFileSize' => 'int',
	'wgMaxShellMemory' => 'int',
	'wgMaxTocLevel' => 'int',
	'wgMWSuggestTemplate' => 'text',
	'wgOpenSearchTemplate' => 'text',
	'wgRedirectSources' => 'array',
	'wgRestrictionTypes' => 'array',
	'wgShowIPinHeader' => 'bool',
	'wgSortSpecialPages' => 'bool',
	'wgSpamRegex' => 'text',
#	'wgStyleVersion' => 'int',
	'wgUpdateRowsPerQuery' => 'int',
	'wgUseCommaCount' => 'int',
	'wgUseETag' => 'bool',
	'wgUseExternalEditor' => 'bool',
);

/**
 * Settings that can be modified only by users with 'configure-all' right
 */
$restricted = array(
# General
	'wgAppleTouchIcon',
	'wgArticlePath',
	'wgDiff3',
	'wgFavicon',
	'wgLogo',
	'wgMathDirectory',
	'wgMathPath',
	'wgRedirectScript',
	'wgScriptExtension',
	'wgScriptPath',
	'wgStyleDirectory',
	'wgStylePath',
//	'wgStyleSheetPath',
	'wgTmpDirectory',
	'wgUsePathInfo',
//	'wgUploadDirectory',
	'wgUploadNavigationUrl',
//	'wgUploadPath',
	'wgVariantArticlePath',
# Db
	'wgAlternateMaster',
	'wgCheckDBSchema',
	'wgDBAvgStatusPoll',
	'wgDBClusterTimeout',
	'wgDBminWordLen',
	'wgDBmwschema',
	'wgDBmysql5',
	'wgDBprefix',
	'wgDBschema',
	'wgDBservers',
	'wgDBTableOptions',
	'wgDBtransactions',
	'wgDBts2schema',
	'wgDBtype',
	'wgDefaultExternalStore',
	'wgLocalDatabases',
	'wgMasterWaitTimeout',
	'wgSearchType',
	'wgSlaveLagCritical',
	'wgSlaveLagWarning',
	'wgExternalServers',
# Emal
	'wgSMTP',
# Debug
	'wgDebugLogFile',
	'wgDebugLogGroups',
	'wgUDPProfilerHost',
	'wgUDPProfilerPort',
# Cache
	'wgFileCacheDirectory',
	'wgLocalMessageCache',
	'wgMemCachedServers',
# Access
	'wgAddGroups',
	'wgGroupPermissions',
	'wgGroupsAddToSelf',
	'wgGroupsRemoveFromSelf',
	'wgRemoveGroups',
	'wgReadOnlyFile',
# Rate limits
	'wgRateLimitLog',
# Proxies
	'wgProxyScriptPath',
	'wgSecretKey',
# Squid
	'wgInternalServer',
	'wgSquidServers',
	'wgSquidServersNoPurge',
# Img
	'wgFileStore',
	'wgHTTPProxy',
	'wgLocalFileRepo',
	'wgThumbnailScriptPath',
# Parser
	'wgTidyBin',
	'wgTidyConf',
# Special pages
	'wgRC2UDPAddress',
	'wgRC2UDPPort',
# Extensions
	'wgDisableInternalSearch',
	'wgExternalStores',
# htcp
	'wgHTCPMulticastAddress',
	'wgHTCPPort',
# Misc
	'wgMWSuggestTemplate',
	'wgOpenSearchTemplate',
);

/**
 * As there can be a lot of array types, try to define their type
 *
 * Types used:
 * - simple: single dimension array with numeric key
 * - assoc: single dimension array with associative key => val
 * - ns-bool: single dimension array with namespaces numbers in the key and a
 *            boolean value
 * - ns-text: same as ns-bool but with a string in the value
 * - group-bool: two dimensions array with group name in first key, right name
 *               in the second and boolean value
 * - group-array: two dimensions array with group name in first key and then
 *                a 'simple' array
 * - array: other types of arrays not currenty supported
 */
$arrayDefs = array(
	'wgAlternateMaster' => 'assoc',
	'wgDBservers' => 'array',
	'wgDefaultExternalStore' => 'simple',
	'wgLocalDatabases' => 'simple',
	'wgLBFactoryConf' => 'array',
	'wgExternalServers' => 'array',
# Email
	'wgSMTP' => 'assoc',
	'wgUsersNotifedOnAllChanges' => 'simple',
	'wgUsersNotifiedOnAllChanges' => 'simple',
# Localization
	'wgForceUIMsgAsContentMsg' => 'simple',
	'wgXhtmlNamespaces' => 'assoc',
	'wgDebugLogGroups' => 'assoc',
# Site custom
#	'wgAjaxExportList' => 'simple',
	'wgDefaultUserOptions' => 'assoc',
	'wgExtraLanguageNames' => 'assoc',
	'wgRestrictionLevels' => 'simple',
	'wgUrlProtocols' => 'simple',
	'wgContentNamespaces' => 'ns-bool',
	'wgExtraNamespaces' => 'assoc',
	'wgNamespaceAliases' => 'assoc',
	'wgNamespaceProtection' => 'ns-array',
	'wgNamespaceRobotPolicies' => 'ns-text',
	'wgNamespacesToBeSearchedDefault' => 'ns-bool',
	'wgNamespacesWithSubpages' => 'ns-bool',
	'wgNoFollowNsExceptions' => 'ns-text',
	'wgNonincludableNamespaces' => 'ns-bool',
	'wgArticleRobotPolicies' => 'assoc',
# Skins
	'wgSkipSkins' => 'simple',
	'wgValidSkinNames' => 'assoc',
# Cache
	'wgMemCachedServers' => 'simple',
# Interwiki
	'wgImportSources' => 'simple',
# Access
	'wgAutopromote' => 'array',
	'wgAddGroups' => 'group-array',
	'wgDisabledActions' => 'simple',
	'wgGroupPermissions' => 'group-bool',
	'wgGroupsAddToSelf' => 'group-array',
	'wgGroupsRemoveFromSelf' => 'group-array',
	'wgImplicitGroups' => 'simple',
	'wgRemoveGroups' => 'group-array',
	'wgWhitelistRead' => 'simple',
# Rate limits
	'wgRateLimits' => 'array',
	'wgRateLimitsExcludedGroups' => 'simple',
# Proxies
	'wgProxyList' => 'simple',
	'wgProxyPorts' => 'simple',
	'wgProxyWhitelist' => 'simple',
# Squid
	'wgSquidServers' => 'simple',
	'wgSquidServersNoPurge' => 'simple',
# Reduction
	'wgDisableQueryPageUpdate' => 'simple',
# Uploads
	'wgFileBlacklist' => 'simple',
	'wgFileExtensions' => 'simple',
	'wgFileStore' => 'array',
	'wgLocalFileRepo' => 'assoc',
	'wgForeignFileRepos' => 'array',
	'wgMimeTypeBlacklist' => 'simple',
# Images
	'wgImageLimits' => 'array',
	'wgMediaHandlers' => 'assoc',
	'wgSVGConverters' => 'assoc',
	'wgThumbLimits' => 'array',
	'wgTrustedMediaFormats' => 'simple',
	'wgAntivirusSetup' => 'array',
# Parser
	'wgParserConf' => 'assoc',
#	'wgParserTestFiles' => 'simple',
# Users
	'wgReservedUsernames' => 'simple',
	'wgBrowserBlackList' => 'simple',
# Special pages
#	'wgLogActions' => 'assoc',
#	'wgLogHeaders' => 'assoc',
#	'wgLogNames' => 'assoc',
	'wgLogRestrictions' => 'assoc',
#	'wgLogTypes' => 'simple',
# Extensions
	'wgExternalStores' => 'array',
# Misc
	'wgGrammarForms' => 'array',
	'wgRedirectSources' => 'simple',
	'wgRestrictionTypes' => 'simple',
);

/**
 * Array of settings depending of the Core version
 */
$settingsVersion = array(
# 1.8.0
	'wgAjaxSearch' => array( array( '1.8alpha', '>=' ) ),
	'wgAllowCopyUploads' => array( array( '1.8alpha', '>=' ) ),
	'wgDBmwschema' => array( array( '1.8alpha', '>=' ) ),
	'wgDBts2schema' => array( array( '1.8alpha', '>=' ) ),
	'wgDjvuPostProcessor' => array( array( '1.8alpha', '>=' ) ),
	'wgDjvuRenderer' => array( array( '1.8alpha', '>=' ) ),
	'wgDjvuToXML' => array( array( '1.8alpha', '>=' ) ),
	'wgMaxShellFileSize' => array( array( '1.8alpha', '>=' ) ),
	'wgMaxUploadSize' => array( array( '1.8alpha', '>=' ) ),
	'wgRevisionCacheExpiry' => array( array( '1.8alpha', '>=' ) ),
	'wgUseETag' => array( array( '1.8alpha', '>=' ) ),
# 1.8.1
	'wgEnableAPI' => array( array( '1.8.1', '>=' ) ),
	'wgEnableWriteAPI' => array( array( '1.8.1', '>=' ) ),
	'wgShowExceptionDetails' => array( array( '1.8.1', '>=' ) ),
# 1.9
	'wgAjaxWatch' => array( array( '1.9alpha', '>=' ) ),
	'wgBreakFrames' => array( array( '1.9alpha', '>=' ) ),
	'wgDefaultLanguageVariant' => array( array( '1.9alpha', '>=' ) ),
	'wgDisableQueryPageUpdate' => array( array( '1.9alpha', '>=' ) ),
	'wgMaxMsgCacheEntrySize' => array( array( '1.9alpha', '>=' ) ),
#	'wgParserTestFiles' => array( array( '1.9alpha', '>=' ) ),
	'wgPasswordReminderResendTime' => array( array( '1.9alpha', '>=' ) ),
	'wgQueryCacheLimit' => array( array( '1.9alpha', '>=' ) ),
	'wgRCChangedSizeThreshold' => array( array( '1.9alpha', '>=' ) ),
	'wgRCShowChangedSize' => array( array( '1.9alpha', '>=' ) ),
	'wgStyleVersion' => array( array( '1.9alpha', '>=' ) ),
	'wgVariantArticlePath' => array( array( '1.9alpha', '>=' ) ),
	'wgXhtmlDefaultNamespace' => array( array( '1.9alpha', '>=' ) ),
	'wgXhtmlNamespaces' => array( array( '1.9alpha', '>=' ) ),
# 1.10
	'wgAutoConfirmCount' => array( array( '1.10alpha', '>=' ) ),
	'wgCommandLineDarkBg' => array( array( '1.10alpha', '>=' ) ),
	'wgDBTableOptions' => array( array( '1.10alpha', '>=' ) ),
	'wgDisableOutputCompression' => array( array( '1.10alpha', '>=' ) ),
	'wgEnableCascadingProtection' => array( array( '1.10alpha', '>=' ) ),
	'wgMediaHandlers' => array( array( '1.10alpha', '>=' ) ),
	'wgNamespaceAliases' => array( array( '1.10alpha', '>=' ) ),
	'wgNamespaceProtection' => array( array( '1.10alpha', '>=' ) ),
	'wgNonincludableNamespaces' => array( array( '1.10alpha', '>=' ) ),
# 1.11
	'wgAPIModules' => array( array( '1.11alpha', '>=' ) ),
	'wgAddGroups' => array( array( '1.11alpha', '>=' ) ),
	'wgAjaxLicensePreview' => array( array( '1.11alpha', '>=' ) ),
	'wgAjaxUploadDestCheck' => array( array( '1.11alpha', '>=' ) ),
	'wgArticleRobotPolicies' => array( array( '1.11alpha', '>=' ) ),
	'wgEnotifImpersonal' => array( array( '1.11alpha', '>=' ) ),
	'wgEnotifMaxRecips' => array( array( '1.11alpha', '>=' ) ),
	'wgEnotifUseJobQ' => array( array( '1.11alpha', '>=' ) ),
	'wgExtensionMessagesFiles' => array( array( '1.11alpha', '>=' ) ),
	'wgForeignFileRepos' => array( array( '1.11alpha', '>=' ) ),
	'wgJobClasses' => array( array( '1.11alpha', '>=' ) ),
	'wgLocalFileRepo' => array( array( '1.11alpha', '>=' ) ),
	'wgMaxSigChars' => array( array( '1.11alpha', '>=' ) ),
	'wgParserOutputHooks' => array( array( '1.11alpha', '>=' ) ),
	'wgRemoveGroups' => array( array( '1.11alpha', '>=' ) ),
	'wgScriptExtension' => array( array( '1.11alpha', '>=' ) ),
	'wgShowHostnames' => array( array( '1.11alpha', '>=' ) ),
	'wgSlaveLagCritical' => array( array( '1.11alpha', '>=' ) ),
	'wgSlaveLagWarning' => array( array( '1.11alpha', '>=' ) ),
	'wgSysopEmailBans' => array( array( '1.11alpha', '>=' ) ),
	'wgThumbUpright' => array( array( '1.11alpha', '>=' ) ),
# 1.12
	'wgAppleTouchIcon' => array( array( '1.12alpha', '>=' ) ),
	'wgAutopromote' => array( array( '1.12alpha', '>=' ) ),
	'wgImplicitGroups' => array( array( '1.12alpha', '>=' ) ),
	'wgCheckSerialized' => array( array( '1.12alpha', '>=' ) ),
	'wgDBAvgStatusPoll' => array( array( '1.12alpha', '>=' ) ),
	'wgDebugTidy' => array( array( '1.12alpha', '>=' ) ),
	'wgDefaultRobotPolicy' => array( array( '1.12alpha', '>=' ) ),
	'wgDeleteRevisionsLimit' => array( array( '1.12alpha', '>=' ) ),
	'wgExtraLanguageNames' => array( array( '1.12alpha', '>=' ) ),
	'wgGroupsAddToSelf' => array( array( '1.12alpha', '>=' ) ),
	'wgGroupsRemoveFromSelf' => array( array( '1.12alpha', '>=' ) ),
	'wgForcedRawSMaxage' => array( array( '1.12alpha', '>=' ) ),
	'wgMaxPPNodeCount' => array( array( '1.12alpha', '>=' ) ),
	'wgParserConf' => array( array( '1.12alpha', '>=' ) ),
	'wgSidebarCacheExpiry' => array( array( '1.12alpha', '>=' ) ),
	'wgStatsMethod' => array( array( '1.12alpha', '>=' ) ),
	'wgUseNPPatrol' => array( array( '1.12alpha', '>=' ) ),
	'wgUserEmailUseReplyTo' => array( array( '1.12alpha', '>=' ) ),
	'wgValidateAllHtml' => array( array( '1.12alpha', '>=' ) ),
# 1.13
	'wgFeed' => array( array( '1.13alpha', '>=' ) ),
	'wgPagePropLinkInvalidations' => array( array( '1.13alpha', '>=' ) ),
	'wgMaxRedirectLinksRetrieved' => array( array( '1.13alpha', '>=' ) ),
	'wgMaxPPExpandDepth' => array( array( '1.13alpha', '>=' ) ),
	'wgLBFactoryConf' => array( array( '1.13alpha', '>=' ) ),
	'wgExpensiveParserFunctionLimit' => array( array( '1.13alpha', '>=' ) ),
	'wgUsersNotifiedOnAllChanges' => array( array( '1.13alpha', '>=' ) ),
	'wgAllDBsAreLocalhost' => array( array( '1.13alpha', '>=' ) ),
	'wgCookieHttpOnly' => array( array( '1.13alpha', '>=' ) ),
	'wgLogRestrictions' => array( array( '1.13alpha', '>=' ) ),
	'wgEnableMWSuggest' => array( array( '1.13alpha', '>=' ) ),
	'wgMWSuggestTemplate' => array( array( '1.13alpha', '>=' ) ),
	'wgOpenSearchTemplate' => array( array( '1.13alpha', '>=' ) ),
## Obsolete
	'wgProfileSampleRate' => array( array( '1.8alpha', '<' ) ),
	'wgProfilerType' => array( array( '1.8alpha', '<' ) ),
	'wgProfiling' => array( array( '1.8alpha', '<' ) ),
	'wgUseXMLparser' => array( array( '1.8alpha', '<' ) ),
	'wgUseWatchlistCache' => array( array( '1.9alpha', '<' ) ),
	'wgWLCacheTimeout' => array( array( '1.9alpha', '<' ) ),
	'wgUseImageResize' => array( array( '1.10alpha', '<' ) ),
	'wgUserHtml' => array( array( '1.10alpha', '<' ) ),
	'wgSaveDeletedFiles' => array( array( '1.11alpha', '<' ) ),
	'wgAlternateMaster' => array( array( '1.13alpha', '<' ) ),
	'wgLinkCacheMemcached' => array( array( '1.13alpha', '<' ) ),
## Both
	'wgAlternateMaster' => array(
		array( '1.10alpha', '>=' ),
		array( '1.13alpha', '<' ),
	),
	'wgUsersNotifedOnAllChanges' => array(
		array( '1.10alpha', '>=' ),
		array( '1.13alpha', '<' ),
	),
	'wgFileRedirects' => array(
		array( '1.12alpha', '>=' ),
		array( '1.13alpha', '<' ),
	),
);
