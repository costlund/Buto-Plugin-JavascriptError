function PluginJavascriptError(){
  window.onerror = function(msg, url, line, col, error){
     /**
      * col and error is new to HTML 5
      */
     alert("PluginJavascriptError says: (" + msg + ") on line (" + line + ") on position ("+col+") for url ("+url+")");
     /**
      * 
      */
     return true;
  };
}
var PluginJavascriptError = new PluginJavascriptError();
