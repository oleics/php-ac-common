<?php

namespace Ac\Common;

abstract class Common {

  // Removes duplets in indexed arrays
  public static function array_merge_recursive(array &$array1, array &$array2) {
    $merged = $array1;
    foreach($array2 as $key => &$value) {
      if(is_array($value) && isset($merged[$key]) && is_array($merged[$key])) {
        $merged[$key] = Common::array_merge_recursive($merged[$key], $value);
      } else if(is_numeric($key)) {
         if(!in_array($value, $merged)) {
           $merged[] = $value;
         }
      } else {
        $merged[$key] = $value;
      }
    }
    return $merged;
  }

  public static function is_assoc(array &$arr) {
    return array_keys($arr) !== range(0, count($arr) - 1);
  }

  // SomeString -> some-string
  // someOtherString -> some-other-string
  static public function toDash($str) {
    return strtolower(preg_replace('/([a-zA-Z])(?=[A-Z])/', '$1-', $str));
  }

  // some-string -> SomeString
  static public function toCamel($str) {
    return str_replace(' ', '', ucwords(str_replace('-', ' ', $str)));
  }

}
