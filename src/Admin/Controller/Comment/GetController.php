<?php
/**
 * Part of Admin project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Lyrasoft\Luna\Admin\Controller\Comment;

use Lyrasoft\Luna\Admin\Model\CommentModel;
use Lyrasoft\Luna\Admin\View\Comment\CommentHtmlView;
use Phoenix\Controller\Display\EditDisplayController;
use Windwalker\Core\Model\Model;

/**
 * The GetController class.
 * 
 * @since  1.0
 */
class GetController extends EditDisplayController
{
	/**
	 * Property name.
	 *
	 * @var  string
	 */
	protected $name = 'comment';

	/**
	 * Property itemName.
	 *
	 * @var  string
	 */
	protected $itemName = 'comment';

	/**
	 * Property listName.
	 *
	 * @var  string
	 */
	protected $listName = 'comments';

	/**
	 * Property model.
	 *
	 * @var  CommentModel
	 */
	protected $model;

	/**
	 * Property view.
	 *
	 * @var  CommentHtmlView
	 */
	protected $view;

	/**
	 * prepareExecute
	 *
	 * @return  void
	 */
	protected function prepareExecute()
	{
		parent::prepareExecute();
	}

	/**
	 * prepareExecute
	 *
	 * @param Model $model
	 *
	 * @return void
	 */
	protected function prepareUserState(Model $model)
	{
		parent::prepareUserState($model);
	}

	/**
	 * postExecute
	 *
	 * @param mixed $result
	 *
	 * @return  mixed
	 */
	protected function postExecute($result = null)
	{
		return parent::postExecute($result);
	}
}