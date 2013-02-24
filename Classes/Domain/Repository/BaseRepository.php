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

/**
 * Abstract base repository, makes all repos ignore their storage pids
 *
 * @package extbase_core_tables
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
abstract class BaseRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject() {
        $querySettings = $this->createQuery()->getQuerySettings()->setRespectStoragePage(FALSE);
        $this->setDefaultQuerySettings($querySettings);
    }
}
