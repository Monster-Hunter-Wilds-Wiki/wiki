<?php
# This file was automatically generated by the MediaWiki 1.42.3
# installer. If you make manual changes, please keep track in case you
# need to recreate them later.
#
# See includes/MainConfigSchema.php for all configurable settings
# and their default values, but don't forget to make changes in _this_
# file, not there.
#
# Further documentation for configuration settings may be found at:
# https://www.mediawiki.org/wiki/Manual:Configuration_settings

# Protect against web entry
if (!defined('MEDIAWIKI')) {
	exit;
}

# Environment variables
$env = null;
if (getenv('ENVIRONMENT') === 'production') {
	$env = parse_ini_file('../.mhwilds.env.prod');
} else {
	$env = parse_ini_file('.env');
}

if ($env === 'null') {
	print('Environment file is missing');
	exit;
}

# Define local env exceptions
if ($env['environment'] === 'develop') {
	$wgUsePathInfo = false;
	$wgShowExceptionDetails = true;
}

## Uncomment this to disable output compression
# $wgDisableOutputCompression = true;

$wgSitename = 'Monster Hunter Wilds';
$wgMetaNamespace = 'MyWiki';

## The URL base path to the directory containing the wiki;
## defaults for all runtime URL paths are based off of this.
## For more information on customizing the URLs
## (like /w/index.php/Page_title to /wiki/Page_title) please see:
## https://www.mediawiki.org/wiki/Manual:Short_URL
$wgScriptPath = $env['SCRIPT_PATH'];

## The protocol and server name to use in fully-qualified URLs
// $wgServer = 'http://localhost/mhwilds_wiki_sandbox';
// $wgServer = 'http://mhwilds.pierretusseau.com';
$wgServer = $env['SERVER'];

## The URL path to static resources (images, scripts, etc.)
$wgResourceBasePath = $wgScriptPath;

## The URL paths to the logo.  Make sure you change this from the default,
## or else you'll overwrite your logo when you upgrade!
$wgLogos = [
	'1x' => "$wgResourceBasePath/resources/assets/logo-mhw-wiki.svg",
	'icon' => "$wgResourceBasePath/resources/assets/logo-mhw-wiki.svg",
];
$wgFavicon = "$wgResourceBasePath/resources/assets/favicon.ico";

## UPO means: this is also a user preference option

$wgEnableEmail = true;
$wgEnableUserEmail = true; # UPO

$wgEmergencyContact = '';
$wgPasswordSender = '';

$wgEnotifUserTalk = false; # UPO
$wgEnotifWatchlist = false; # UPO
$wgEmailAuthentication = true;

## Database settings
$wgDBtype = 'mysql';
$wgDBserver = $env['DB_SERVER'];
$wgDBname = $env['DB_NAME'];
$wgDBuser = $env['DB_USER'];
$wgDBpassword = $env['DB_PASSWORD'];

# MySQL specific settings
$wgDBprefix = $env['DB_PREFIX'];
$wgDBssl = $env['DB_SSL'];

# MySQL table options to use during installation or update
$wgDBTableOptions = "ENGINE=InnoDB, DEFAULT CHARSET=binary";

# Shared database table
# This has no effect unless $wgSharedDB is also set.
$wgSharedTables[] = "actor";

## Shared memory settings
$wgMainCacheType = CACHE_NONE;
$wgMemCachedServers = [];

include 'config/uploads.php';

# InstantCommons allows wiki to use images from https://commons.wikimedia.org
$wgUseInstantCommons = false;

# Periodically send a pingback to https://www.mediawiki.org/ with basic data
# about this MediaWiki instance. The Wikimedia Foundation shares this data
# with MediaWiki developers to help guide future development efforts.
$wgPingback = true;

# Site language code, should be one of the list in ./includes/languages/data/Names.php
$wgLanguageCode = 'en';

# Time zone
$wgLocaltimezone = 'Europe/Paris';

## Set $wgCacheDirectory to a writable directory on the web server
## to make your wiki go slightly faster. The directory should not
## be publicly accessible from the web.
#$wgCacheDirectory = "$IP/cache";

$wgSecretKey = $env['SECRET_KEY'];

# Changing this will log out all existing sessions.
$wgAuthenticationTokenVersion = '1';

# Site upgrade key. Must be set to a string (default provided) to turn on the
# web installer while LocalSettings.php is in place
$wgUpgradeKey = $env['UPGRADE_KEY'];

# Path to the GNU diff3 utility. Used for conflict resolution.
$wgDiff3 = '/usr/bin/diff3';

# Configs
include 'config/licenses.php';
include 'config/skins.php';
include 'config/extensions.php';
