<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Simon Schmidt <sfs@marketing-factory.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
namespace Mfc\MfcSeotitle\User;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

/**
 * Contoller for imports
 *
 * @author Sebastian Fischer <sf@marketing-factory.de>
 */
class Title
{
    /**
     * @var array
     */
    protected $conf = array();

    /**
     * @var ContentObjectRenderer
     */
    public $cObj;

    /**
     * Render method that gets called by typoscript for adding the meta tag to <head>
     *
     * @param string $content
     * @param array $conf
     */
    public function render($content, $conf)
    {
        /** @var \TYPO3\CMS\Core\Page\PageRenderer $pageRenderer */
        $pageRenderer = GeneralUtility::makeInstance('TYPO3\CMS\Core\Page\PageRenderer');
        $pageRenderer->addMetaTag(
            '<title>' . $this->getPageTitle($content, $conf) . '</title>'
        );
    }

    /**
     * Generate pageTitle
     *
     * @param array $conf
     * @return string
     */
    public function getPageTitle($conf)
    {
        $tsfe = $this->getTypoScriptFrontendController();

        if (isset($tsfe->altPageTitle) && $tsfe->altPageTitle != '') {
            $title = $tsfe->page['tx_mfcseotitle_title']
                ? $tsfe->page['tx_mfcseotitle_title']
                : $tsfe->altPageTitle;
        } else {
            $title = $tsfe->page['tx_mfcseotitle_title']
                ? $tsfe->page['tx_mfcseotitle_title']
                : $tsfe->page['title'];
        }

        if (isset($conf['pageTitleStdWrap.'])) {
            $title = $this->cObj->stdWrap($title, $conf['pageTitleStdWrap.']);
        }

        return trim($title);
    }

    /**
     * @return TypoScriptFrontendController
     */
    public function getTypoScriptFrontendController()
    {
        return $GLOBALS['TSFE'];
    }

}
