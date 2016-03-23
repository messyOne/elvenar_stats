<?php

namespace Common;

use Symfony\Component\Yaml\Yaml;

/**
 * @inheritdoc
 */
class Settings extends \Loo\Data\Settings
{
	/**
	 * @return mixed
	 */
	public static function getPassword() {
		return self::$store->get('password');
	}
}
