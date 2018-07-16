<?php

namespace Rollbar\Magento2\Plugin;

class HttpPlugin
{
	public function aroundCatchException($subject, $callable, $bootstrap, $exception)
	{
		$callable($bootstrap, $exception);

		\Rollbar\Rollbar::error($exception);
	}
}