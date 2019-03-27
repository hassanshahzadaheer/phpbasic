<?php
class Request
{
    public static function uri()
    {

      $uri = (substr($_SERVER['REQUEST_URI'],10));
      $removeSlash = rtrim($uri, '/');
      return var_dump($removeSlash);

    }
}
