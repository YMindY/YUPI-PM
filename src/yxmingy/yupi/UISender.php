<?php
namespace yxmingy\yupi;

use pocketmine\network\mcpe\protocol\ModalFormRequestPacket;

use pocketmine\Player;

class UISender {
    public static function sendUI(int $formid, array $formdata,Player $player):void
  {
    $ui = new ModalFormRequestPacket();
    $ui->formId = $formid;
    $ui->data = json_encode($formdata);
    $player->dataPacket($ui);
  }
}
