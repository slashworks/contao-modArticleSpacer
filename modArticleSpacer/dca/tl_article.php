<?php

/**
 * Contao Module modArticleSpacer
 * @copyright  Joe Ray Gregory 2014 | joe@slash-works.de
 * @link       https://github.com/slashworks/contao-modArticleSpacer
 * @author     Joe Ray Gregory <http://www.slash-works.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @package    modArticleSpacer
 */

$fields = array
(
    'addArticleSpace' => array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_article']['modArticleSpacer']['addArticleSpace'],
        'exclude'                 => true,
        'inputType'               => 'checkbox',
        'eval'                    => array('submitOnChange'=>true),
        'sql'                     => "char(1) NOT NULL default ''"
    ),

    'articleSpaceDirection' => array
    (
        'label'                   => &$GLOBALS['TL_LANG']['tl_article']['modArticleSpacer']['articleSpaceDirection'],
        'exclude'                 => true,
        'inputType'               => 'select',
        'options'                 => array('top', 'bottom', 'both'),
        'reference'               => &$GLOBALS['TL_LANG']['tl_article']['modArticleSpacer'],
        'sql'                     => "varchar(32) NOT NULL default ''"
    ),

);

$GLOBALS['TL_DCA']['tl_article']['palettes']['__selector__'][] = 'addArticleSpace';

$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] .= ';addArticleSpace';

$GLOBALS['TL_DCA']['tl_article']['subpalettes']['addArticleSpace'] = 'articleSpaceDirection';

$GLOBALS['TL_DCA']['tl_article']['fields'] = array_merge($GLOBALS['TL_DCA']['tl_article']['fields'], $fields);