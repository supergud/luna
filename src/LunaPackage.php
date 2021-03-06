<?php
/**
 * Part of phoenix project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Lyrasoft\Luna;

use Lyrasoft\Luna\Listener\ErrorListener;
use Lyrasoft\Luna\Helper\LunaHelper;
use Lyrasoft\Luna\Listener\EditorListener;
use Lyrasoft\Luna\Listener\LanguageListener;
use Lyrasoft\Luna\Listener\LunaListener;
use Lyrasoft\Luna\Module\ModuleHelper;
use Lyrasoft\Luna\Provider\LunaProvider;
use Phoenix\Language\TranslatorHelper;
use Windwalker\Core\Package\AbstractPackage;
use Windwalker\DI\Container;
use Windwalker\Event\Dispatcher;

define('LUNA_ROOT', dirname(__DIR__));
define('LUNA_SOURCE', LUNA_ROOT . '/src');
define('LUNA_SOURCE_ADMIN', LUNA_SOURCE . '/Admin');

/**
 * The LunaPackage class.
 *
 * @since  1.0
 */
class LunaPackage extends AbstractPackage
{
	/**
	 * WarderPackage constructor.
	 */
	public function __construct()
	{
		LunaHelper::setPackage($this);
	}

	/**
	 * initialise
	 *
	 * @throws  \LogicException
	 * @return  void
	 */
	public function boot()
	{
		parent::boot();

		TranslatorHelper::loadAll($this);

		ModuleHelper::addPath(__NAMESPACE__ . '\Module', $this->getDir() . '/Module');
	}

	/**
	 * isFrontend
	 *
	 * @param   string $name
	 *
	 * @return  boolean
	 */
	public function isFrontend($name = null)
	{
		$name = $name ? : $this->getCurrentPackage()->getName();

		return in_array($name, (array) $this->get('frontend.package', 'front'));
	}

	/**
	 * isFrontend
	 *
	 * @param   string $name
	 *
	 * @return  boolean
	 */
	public function isAdmin($name = null)
	{
		$name = $name ? : $this->getCurrentPackage()->getName();

		return in_array($name, (array) $this->get('admin.package', 'admin'));
	}

	/**
	 * isEnabled
	 *
	 * @param   string $name
	 *
	 * @return  boolean
	 */
	public function isEnabled($name = null)
	{
		return $this->isFrontend($name) || $this->isAdmin($name);
	}

	/**
	 * getCurrentPackage
	 *
	 * @return  AbstractPackage
	 */
	public function getCurrentPackage()
	{
		if (!$this->container->exists('current.package'))
		{
			throw new \LogicException('Please call this method after routing.');
		}

		return $this->container->get('current.package');
	}

	/**
	 * getLangPrefix
	 *
	 * @return  string
	 */
	public function getLangPrefix()
	{
		if ($this->isAdmin())
		{
			$langPrefix = $this->get('admin.language.prefix', 'luna.');
		}
		else
		{
			$langPrefix = $this->get('frontend.language.prefix', 'luna.');
		}

		return $langPrefix;
	}
}
