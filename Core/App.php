<?php 

namespace Core;

class App 
{
  public static $container;

  public static function setContainer($container)
  {
    static::$container = $container;
  }

  public static function Container() {
    return static::$container;
  }

  public static function resolve($key)
  {
    return static::Container()->resolve($key);
  }

  public static function bind($key, $resolver) 
  {
    return static::Container()->bind($key, $resolver);
  }
}
