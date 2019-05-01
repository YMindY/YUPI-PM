<?php
namespace yxmingy\yupi;

use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\event\server\DataPacketReceiveEvent;
use pocketmine\network\protocol\ModalFormResponsePacket;


abstract class ResponserBase implements Listener{
	
	abstract protected function response(int $id,string $index,Player $player):void;
	
  public function onServerReceivePacket(DataPacketReceiveEvent $event):void
  {
    $player = $event->getPlayer();
    if(!($event->getPacket() instanceof ModalFormResponsePacket)) return;
    $ui = $event->getPacket();
    $index = trim($ui->data);
    //if(index.equals("null")) return;
    $this->response($ui->formId,$index,$player);
  }
}