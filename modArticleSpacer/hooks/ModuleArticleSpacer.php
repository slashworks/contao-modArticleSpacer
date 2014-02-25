<?php

/**
 * Contao Module modArticleSpacer
 * @copyright  Joe Ray Gregory 2014 | joe@slash-works.de
 * @link       https://github.com/slashworks/contao-modArticleSpacer
 * @author     Joe Ray Gregory <http://www.slash-works.de>
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 * @package    modArticleSpacer
 */

namespace Slashworks;


use Contao\FrontendTemplate;

class ModuleArticleSpacer extends \Frontend {

    /**
     * buffer var to save if a spacer is needed
     * @var
     */

    private $hasSpacer;

    /**
     * buffer var for the spacer direction
     * @var
     */

    private $spacerDirection;

    /**
     * Check if the spacer is set
     * @param $tplObj
     */

    public function checkSpacer($tplObj)
    {
        if($tplObj->type == 'article' && $tplObj->addArticleSpace == 1) {

            $this->hasSpacer = true;
            $this->spacerDirection = $tplObj->articleSpaceDirection;

        }
    }

    /**
     * Reset the article template and buffer the original
     * @param $strBuffer
     * @param $strTemplate
     * @return string
     */

    public function setSpacer($strBuffer, $strTemplate)
    {
        if($this->hasSpacer)
        {

            /**
             * generate template
             */

            $tpl = new FrontendTemplate('mod_article_spacer');

            /**
             * add template vars
             */

            $tpl->ogArticle = $strBuffer;
            $tpl->spacerDirection = $this->spacerDirection;

            // generate template
            $strBuffer = $tpl->parse();

            // reset private var
            $this->hasSpacer = false;

        }

        return $strBuffer;

    }

} 