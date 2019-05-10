<?php

namespace srag\Notifications4Plugin\SrTile\Notification\Language;

use srag\DIC\SrTile\DICTrait;
use srag\Notifications4Plugin\SrTile\Utils\Notifications4PluginTrait;

/**
 * Class Factory
 *
 * @package srag\Notifications4Plugin\SrTile\Notification\Language
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Factory implements FactoryInterface {

	use DICTrait;
	use Notifications4PluginTrait;
	/**
	 * @var FactoryInterface[]
	 */
	protected static $instances = [];


	/**
	 * @param string $language_class
	 *
	 * @return FactoryInterface
	 */
	public static function getInstance(string $language_class): FactoryInterface {
		if (!isset(self::$instances[$language_class])) {
			self::$instances[$language_class] = new self($language_class);
		}

		return self::$instances[$language_class];
	}


	/**
	 * @var string|NotificationLanguage
	 */
	protected $language_class;


	/**
	 * Factory constructor
	 *
	 * @param string $language_class
	 */
	private function __construct(string $language_class) {
		$this->language_class = $language_class;
	}


	/**
	 * @inheritdoc
	 */
	public function newInstance(): NotificationLanguage {
		$language = new $this->language_class();

		return $language;
	}
}
