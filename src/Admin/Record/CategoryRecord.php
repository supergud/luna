<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Lyrasoft\Merlin\Admin\Record;

use Lyrasoft\Merlin\Admin\Table\Table;
use Windwalker\Event\Event;
use Windwalker\Record\NestedRecord;
use Windwalker\Record\Record;

/**
 * The CategoryRecord class.
 * 
 * @since  1.0
 */
class CategoryRecord extends NestedRecord
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected $table = Table::CATEGORIES;

	/**
	 * onAfterLoad
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterLoad(Event $event)
	{
		// Add your logic
	}

	/**
	 * Method to store a node in the database table.
	 *
	 * @param   boolean $updateNulls True to update null values as well.
	 *
	 * @return  boolean  True on success.
	 *
	 * @since   2.0
	 */
	public function store($updateNulls = false)
	{
		// Auto set location for batch copy
		$key = $this->getKeyName();

		if (!$this->$key && !$this->locationId)
		{
			$this->setLocation($this->parent_id, static::LOCATION_LAST_CHILD);
		}

		return parent::store($updateNulls);
	}

	/**
	 * onAfterStore
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterStore(Event $event)
	{
		$this->rebuildPath();
	}

	/**
	 * onAfterDelete
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterDelete(Event $event)
	{
		// Add your logic
	}
}
