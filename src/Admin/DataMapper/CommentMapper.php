<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Lyrasoft\Luna\Admin\DataMapper;

use Lyrasoft\Luna\Table\LunaTable;
use Windwalker\Core\DataMapper\CoreDataMapper;
use Windwalker\Event\Event;

/**
 * The CommentMapper class.
 * 
 * @since  1.0
 */
class CommentMapper extends CoreDataMapper
{
	/**
	 * Property table.
	 *
	 * @var  string
	 */
	protected static $table = LunaTable::COMMENTS;

	/**
	 * onAfterFind
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterFind(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterCreate
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterCreate(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterUpdate
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterUpdate(Event $event)
	{
		// Add your logic
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

	/**
	 * onAfterFlush
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterFlush(Event $event)
	{
		// Add your logic
	}

	/**
	 * onAfterUpdateAll
	 *
	 * @param Event $event
	 *
	 * @return  void
	 */
	public function onAfterUpdateAll(Event $event)
	{
		// Add your logic
	}
}
