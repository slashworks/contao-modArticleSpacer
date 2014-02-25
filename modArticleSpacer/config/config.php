<?php

/**
 * Contao Module modArticleSpacer
 * @copyright  Joe Ray Gregory 2014 | joe@slash-works.de
 * @link       https://github.com/slashworks/contao-modArticleSpacer
 * @author     Joe Ray Gregory <http://www.slash-works.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @package    modArticleSpacer
 */

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\Slashworks\ModuleArticleSpacer', 'checkSpacer');
$GLOBALS['TL_HOOKS']['parseFrontendTemplate'][] = array('\Slashworks\ModuleArticleSpacer', 'setSpacer');