<?php
namespace T3B\ExtbaseCoreTables\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Anno v. Heimburg <anno@vonheimburg.de>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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

/**
 *
 *
 * @package extbase_core_tables
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class SysLanguage extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $flag;

    /**
     * @var \Tx_StaticInfoTablesExtbase_Domain_Model_StaticLanguage
     */
    protected $staticLanguage;

    /**
     * @param string $flag
     */
    public function setFlag($flag)
    {
        $this->flag = $flag;
    }

    /**
     * @return string
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param \Tx_StaticInfoTablesExtbase_Domain_Model_StaticLanguage $language
     */
    public function setStaticLanguage($language)
    {
        $this->staticLanguage = $language;
    }

    /**
     * @return \Tx_StaticInfoTablesExtbase_Domain_Model_StaticLanguage
     */
    public function getStaticLanguage()
    {
        return $this->staticLanguage;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Check whether the sys language is currently active
     * @return bool
     */
    public function getIsActive()
    {
        /**
         * @var $tsfe \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController
         */
        $tsfe = $GLOBALS['TSFE'];

        return ($this->getUid() == $tsfe->sys_language_uid);
    }

}
?>