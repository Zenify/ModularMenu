<?php

namespace Zenify\ModularMenu\Tests\DI\ModularMenuExtension\ValidationSource;

use Zenify\ModularMenu\Contract\Provider\MenuItemsProviderInterface;


class InvalidProvider implements MenuItemsProviderInterface
{

	/**
	 * {@inheritdoc}
	 */
	public function getPosition()
	{
	}


	/**
	 * {@inheritdoc}
	 */
	public function getItems()
	{
		return '...';
	}

}
