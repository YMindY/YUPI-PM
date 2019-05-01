<?php
namespace yxmingy\yupi;

use pocketmine\Player;

abstract class GarishHandlerBase extends HandlerBase{
  public function handle(string $data,Player $player):void
  {
  		$adata = json_decode($data,true);
  		handle($adata,$player);
  }
  abstract public function handle(array $data,Player $player):void;
}