<?php
namespace yxmingy\yupi\ui;

class MultiOption extends UIBase{

  /*Map button
  [
    "text"=>(String)
    "image"=>
    [
      type=>{path/url}
      data=>(String)
    ]
  ]
  */
  private $buttons = [];
  
  public function __construct(string $title)
  {
    parent::_construct("form",$title);
    $this->data["content"] = "";
    $this->data["buttons"] = $this->buttons;
  }
  public function setContent(string $text):void
  {
    $this->data["content"] = $text;
  }
  public function addButton(string $text):void
  {
    $button = array();
    $button["text"] = $text;
    $this->buttons[] = ($button);
  }
  public function addButton(string $text,bool $image_local,string $image_data):void
  {
    $button = array();
    $image = array();
    $image["type"] = ($image_local ? "path" : "url");
    $image["data"] = $image_data;
    $button["text"] = $text;
    $button["image"] = $image;
    $this->buttons[] = ($button);
  }
}