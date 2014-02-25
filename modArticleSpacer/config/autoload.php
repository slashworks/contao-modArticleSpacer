<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package CaptainSpace
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Hooks
	'Slashworks\ModuleArticleSpacer' => 'system/modules/modArticleSpacer/hooks/ModuleArticleSpacer.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'mod_article_spacer' => 'system/modules/modArticleSpacer/templates/module',
));
