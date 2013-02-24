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
class PageLanguageOverlay extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * @var SysLanguage
     */
    protected $sysLanguage;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $subtitle;

    /**
     * @var string
     */
    protected $navTitle;

    /**
     * @param string $navTitle
     */
    public function setNavTitle($navTitle)
    {
        $this->navTitle = $navTitle;
    }

    /**
     * @return string
     */
    public function getNavTitle()
    {
        return $this->navTitle;
    }

    /**
     * @param string $subtitle
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
    }

    /**
     * @return string
     */
    public function getSubtitle()
    {
        return $this->subtitle;
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
     * @param \T3B\ExtbaseCoreTables\Domain\Model\SysLanguage $sysLanguage
     */
    public function setSysLanguage($sysLanguage)
    {
        $this->sysLanguage = $sysLanguage;
    }

    /**
     * @return \T3B\ExtbaseCoreTables\Domain\Model\SysLanguage
     */
    public function getSysLanguage()
    {
        return $this->sysLanguage;
    }


}
?>