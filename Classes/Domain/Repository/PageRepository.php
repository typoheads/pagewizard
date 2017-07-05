<?php
 /*****************************************************************************
 *  Copyright notice
 *
 *  ⓒ 2013 Michiel Roos <michiel@maxserv.nl>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is free
 *  software; you can redistribute it and/or modify it under the terms of the
 *  GNU General Public License as published by the Free Software Foundation;
 *  either version 2 of the License, or (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful, but
 *  WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY
 *  or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for
 *  more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ****************************************************************************/
/**
 * Created by PhpStorm.
 * Author: Michiel Roos <michiel@maxserv.nl>
 * Date: 08/11/13
 * Time: 11:48
 */
 
/**
 * Page repository
 */
class Tx_Pagewizard_Domain_Repository_PageRepository extends Tx_Extbase_Persistence_Repository {

	/**
	 * @var array
	 */
	protected $defaultOrderings = array(
		'sorting' => Tx_Extbase_Persistence_QueryInterface::ORDER_ASCENDING
	);
}

?>