<?php
namespace yxmingy\yupi;
/* 所有Handler之父 */

use pocketmine\Player;

abstract class HandlerBase{
  protected $title;
  public function __construct()
  {
    $this->title = null;
  }
  public function __construct(string $title)
  {
    $this->title = $title;
  }
  public function __construct(array $title)
  {
    $this->title = $title;
  }
  abstract public function handle(string $data,Player $player):void;
}
 