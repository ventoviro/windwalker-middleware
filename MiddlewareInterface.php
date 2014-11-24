<?php
/**
 * Part of Windwalker project. 
 *
 * @copyright  Copyright (C) 2008 - 2014 Asikart.com. All rights reserved.
 * @license    GNU Lesser General Public License version 2.1 or later.
 */

namespace Windwalker\Middleware;

/**
 * Middleware Interface
 *
 * @since 2.0
 */
interface MiddlewareInterface
{
	/**
	 * Call next middleware.
	 *
	 * @return  mixed
	 */
	public function call();

	/**
	 * Get next middleware.
	 *
	 * @return  mixed|MiddlewareInterface
	 */
	public function getNext();

	/**
	 * Set next middleware.
	 *
	 * @param   object|MiddlewareInterface $object The middleware object.
	 *
	 * @return  MiddlewareInterface  Return self to support chaining.
	 */
	public function setNext($object);
}
