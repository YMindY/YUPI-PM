<?php
namespace yxmingy\yupi;

use pocketmine\plugin\PluginBase;

class Utils extends PluginBase{
	public static function buildId(string $data):int{
	  $progress = 1;
	  $id = 0;
	  $cdatas = str_split($data);
	  foreach($cdatas as $cdata){
	    $id += ((int)($cdata))*$progress;
	    $progress *= 10;
	  }
	  return $id;
	}
	public function onEnable():void {
		$this->getLogger()->notice("YUPI is Enabled! Author: xMing.");
		$this->getServer()->getPluginManager()->registerEvents(new HandlerManager(), $this);
	}
	public function onDisable():void {
		$this->getLogger()->warning("YUPI is Turned Off!");
	}
}