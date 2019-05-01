<?php
namespace yxmingy\yupi\ui;

use pocketmine\Player;
use yxmingy/yupi\HandlerManager;

abstract class UIBase {
  /*[
      "type"=>{form/modal/...}
      "title"=>(string)
      "content"=>(string/element)
    ]
  */
  protected $data = [];
  
  public __construct(string $type,string $title)
  {
    $this->data["type"] = $type;
    $this->data["title"] = $title;
  }
  
  public function send(Player $player):void
  {
    UISender::sendUI(
      Utils::buildId($this->data["title"]),
      $this->data,
      $player
    );
  }
  
  public function setHandler(HandlerBase $handler):void
  {
    $id = Utils::buildId($this->data["title"]);
    HandlerManager::addHandler($id,$handler);
  }
}