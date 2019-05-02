<?php
namespace yxmingy\yupi\ui;

class GarishForm extends UIBase{

  private $content = [];
  
  public function __construct(string $title)
  {
    parent::__construct("custom_form",$title);
    $this->data[] = "content";
  }
  public function addLabel(string $text)
  {
    $content = array();
    $content["type"] = "label";
    $content["text"] = $text;
    $this->addContent($content);
  }
  public function addToggle(string $text)
  {
    $content = array();
    $content["type"] = "toggle";
    $content["text"] = $text;
    $this->addContent($content);
  }
  public function addToggle(string $text,bool $_default)
  {
    $content = array();
    $content["type"] = "toggle";
    $content["text"] = $text;
    $content["default"] = $_default;
    $this->addContent($content);
  }
  public function addSlider(string $text,int $min,int $max,int $step)
  {
    $content = array();
    $content["type"] = "slider";
    $content["text"] = $text;
    $content["min"] = $min;
    $content["max"] = $max;
    $content["step"] = $step;
    $this->addContent($content);
  }
  public function addDropdown(string $text,array $options)
  {
    $content = array();
    $content["type"] = "dropdown";
    $content["text"] = $text;
    $content["options"] = $options;
    $content["default"] = null;
    $this->addContent($content);
  }
  public function addInput(string $text,string $placeholder)
  {
    $content = array();
    $content["type"] = "input";
    $content["text"] = $text;
    $content["placeholder"] = $placeholder;
    $content["default"] = null;
    $this->addContent($content);
  }
  public function addContent(array $content)
  {
    $this->content[] = $content;
  }
}
