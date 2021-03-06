<?php
/**
 * Part of earth project.
 *
 * @copyright  Copyright (C) 2016 {ORGANIZATION}. All rights reserved.
 * @license    GNU General Public License version 2 or later.
 */

namespace Lyrasoft\Luna\Admin\View\Mail;

use Phoenix\View\AbstractPhoenixHtmView;
use Windwalker\Core\Renderer\RendererHelper;

/**
 * The MailHtmlView class.
 *
 * @since  1.0
 */
class MailHtmlView extends AbstractPhoenixHtmView
{
	/**
	 * Property renderer.
	 *
	 * @var  string
	 */
	protected $renderer = RendererHelper::EDGE;
}
