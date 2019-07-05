<?php

namespace srag\Notifications4Plugin\SrTile\Sender;

use srag\Notifications4Plugin\SrTile\Exception\Notifications4PluginException;
use srag\Notifications4Plugin\SrTile\Notification\Notification;

/**
 * Interface RepositoryInterface
 *
 * @package srag\Notifications4Plugin\SrTile\Sender
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
interface RepositoryInterface {

	/**
	 * @return FactoryInterface
	 */
	public function factory(): FactoryInterface;


	/**
	 * @param Sender       $sender   A concrete srNotificationSender object, e.g. srNotificationMailSender
	 * @param Notification $notification
	 * @param array        $placeholders
	 * @param string       $language Omit to choose the default language
	 *
	 * @throws Notifications4PluginException
	 */
	public function send(Sender $sender, Notification $notification, array $placeholders = [], string $language = "")/*: void*/ ;
}