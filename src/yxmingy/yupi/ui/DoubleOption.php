<?php
namespace yxmingy\yupi\ui;

class DoubleOption extends UIBase{
  
  public __construct(string $title)
  {
    parent::__construct("modal_form",$title);
    $this->data["button1"] = "是";
    $this->data["button2"] = "否";
  }
  public __construct(string $title,string $button1,string $button2)
  {
    parent::__construct("modal_form",$title);
    $this->data["button1"] = $button1;
    $this->data["button2"] = $button2;
  }
  public function setContent(string $text):void
  {
    $this->data["content"] = $text;
  }
  public function setButton1(string $text):void
  {
    $this->data["button1"] = $text;
  }
  public function setButton2(string $text):void
  {
    $this->data["button2"] = $text;
  }
}