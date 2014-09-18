<?php
/**
 * NewsBox extension -- displays news messages in the sidebar.
 *
 * @file
 * @ingroup Extensions
 * @version 2.1.4
 * @author Jack Phoenix <jack@shoutwiki.com>
 * @license http://en.wikipedia.org/wiki/Public_domain Public domain
 * @link https://www.mediawiki.org/wiki/Extensions:NewsBox Documentation
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die();
}

// Extension credits that will show up on Special:Version
$wgExtensionCredits['other'][] = array(
	'name' => 'NewsBox',
	'version' => '2.1.4',
	'author' => 'Jack Phoenix',
	'description' => 'Displays [[MediaWiki:Newsbox|news messages]] in the sidebar',
	'url' => 'https://www.mediawiki.org/wiki/Extension:NewsBox',
);

// Internationalization file and the main class
$wgMessagesDirs['NewsBox'] = __DIR__ . '/i18n';
$wgAutoloadClasses['NewsBox'] = __DIR__ . '/NewsBox.class.php';

// The hooked functions
$wgHooks['SkinBuildSidebar'][] = 'NewsBox::render';
$wgHooks['MonacoWidgets'][] = 'NewsBox::renderForMonaco';