<?php
class PluginJavascriptError{
  public function widget_include($data){
    /**
     * 
     */
    wfPlugin::includeonce('wf/embed');
    wfPlugin::enable('wf/embed');
    /**
     * 
     */
    $widget = new PluginWfYml(__DIR__.'/widget/include.yml');
    wfDocument::renderElement($widget->get());
  }
}
