<?php
class PluginJavascriptError{
  public function widget_include($data){
    $widget = new PluginWfYml(__DIR__.'/widget/include.yml');
    wfDocument::renderElement($widget->get());
  }
}
