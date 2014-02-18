<?php
class Tools{

  public static function slugify($text)
  { 
    // replace non letter or digits by -
    $text = preg_replace('~[^\\pL\d]+~u', '-', $text);

    // trim
    $text = trim($text, '-');

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // lowercase
    $text = strtolower($text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    if (empty($text))
    {
      return 'n-a';
    }

    return $text;
  }

  public static function validEmail($email) 
  {   
      return preg_match('#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,6}$#', trim($email)); 
  }
}
?>