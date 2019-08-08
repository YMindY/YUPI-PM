<?php
namespace yxmingy\yupi;
/* 把数据发给相应Handler */

use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\mcpe\protocol\ModalFormResponsePacket;

class HandlerManager implements Listener{
  private static $handlers = [];
  public static function addHandler(int $id,HandlerBase $handler):void
  {
    self::$handlers["$id"] = $handler;
  }

  public function onServerReceivePacket(DataPacketReceiveEvent $event):void
  {
    $player = $event->getPlayer();
  		if(!($event->getPacket() instanceof ModalFormResponsePacket)) return;
    $ui = $event->getPacket();
    $data = trim($ui->data);
    if(isset(self::$handlers[$ui->formId])){
      self::$handlers[$ui.formId]($data,$player);
      unset(self::$handlers[$ui.formId]);
    }
  }
}