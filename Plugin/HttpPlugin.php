<?php

namespace Rollbar\Magento2\Plugin;

class HttpPlugin
{
	public function aroundCatchException($subject, $callable, $bootstrap, $exception): bool
	{
		$callable($bootstrap, $exception);

		return \Rollbar\Rollbar::error($exception)->wasSuccessful();
	}
}
