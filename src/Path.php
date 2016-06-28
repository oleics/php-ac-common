<?php

namespace Ac\Common;

class Path {

  public static function find($filename, $cwd = null) {
    if($cwd === null) {
      $cwd = getcwd();
    } else {
      $cwd = realpath($cwd);
    }
    $cwd = explode(DIRECTORY_SEPARATOR, $cwd);
    while(count($cwd) > 0) {
      $p = implode(DIRECTORY_SEPARATOR, $cwd).DIRECTORY_SEPARATOR.$filename;
      if(file_exists($p)) {
        return $p;
      }
      array_pop($cwd);
    }
    return false;
  }

}
