<?php

/**
 * This file is part of Zenify.
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace Zenify\ModularMenu\Storage;

use Zenify\ModularMenu\Provider\MenuItemsProviderInterface;
use Zenify\ModularMenu\Structure\MenuItem;


class MenuItemStorage
{

	/**
	 * @var MenuItem[][]
	 */
	private $menuItems;


	public function addMenuItemsProvider(MenuItemsProviderInterface $menuItemsProvider)
	{
		$this->menuItems[$menuItemsProvider->getPosition()][] = $menuItemsProvider->getItems();
	}


	/**
	 * @param string $position
	 * @return MenuItem[]|bool
	 */
	public function getByPosition($position)
	{
		if (isset($this->menuItems[$position])) {
			return $this->menuItems[$position];
		}
		return FALSE;
	}

}