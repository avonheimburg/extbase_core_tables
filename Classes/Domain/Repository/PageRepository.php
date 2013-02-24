<?php

namespace T3B\ExtbaseCoreTables\Domain\Repository;

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
class PageRepository extends BaseRepository
{
    /**
     * Get the current page
     * @return \T3B\ExtbaseCoreTables\Domain\Model\Page the current page
     */
    public function currentPage() {
        /**
         * @var $tsfe \TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController
         */
        $tsfe = $GLOBALS['TSFE'];
        $id = $tsfe->id;
        return $this->findByUid($id);
    }
}
