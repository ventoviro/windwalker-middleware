<?php
/**
 * Part of windwalker project. 
 *
 * @copyright  Copyright (C) 2014 - 2015 LYRASOFT. All rights reserved.
 * @license    GNU Lesser General Public License version 3 or later.
 */

namespace Windwalker\Middleware\Test\Stub;

use Windwalker\Middleware\AbstractMiddleware;

/**
 * The StubCaesarMiddleware class.
 * 
 * @since  2.0
 */
class StubCaesarMiddleware extends AbstractMiddleware
{
	/**
	 * Call next middleware.
	 *
	 * @param  array $data
	 *
	 * @return mixed
	 */
	public function execute($data = null)
	{
		$r = ">>> Caesar\n";

		$r .= $this->next->execute($data);

		$r .= "<<< Caesar\n";

		return $r;
	}
}
