<?php
class Builder {
  public static function createFactory($type, $class_name) {
    if(empty($type))
    {
       return ERROR_INVALID_FACTORY_TYPE;
    }
    if(empty($class_name)) {
        return ERROR_INVALID_CLASSNAME;
    }
    $args = func_get_args();
    require_once APPPATH.'/'.$type.'/'.$class_name.'.php';
    return new $class_name($args);
  }
}