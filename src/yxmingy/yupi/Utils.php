<?php
namespace yxmingy\yupi;

use pocketmine\plugin\PluginBase;

class Utils extends PluginBase{
	public static function buildId(string $data):int{
	  return intval(substr(md5($data)),0,7));
	}
	public function onEnable():void {
		$this->getLogger()->notice("YUPI is Enabled! Author: xMing.");
		$this->getServer()->getPluginManager()->registerEvents(new HandlerManager(), $this);
	}
	public function onDisable():void {
		$this->getLogger()->warning("YUPI is Turned Off!");
	}
}