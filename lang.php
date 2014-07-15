<?php
/* Setting variables */
$langs = array('en', 'de', 'ru', 'uk');
$cookie_name = "lang_cookie";
$cookie_domain = ".constantinegolub.com";
 
if (!empty($_GET['lang']) && in_array($_GET['lang'], $langs)) {
    /* Set language */
    $lang = $_GET['lang'];
    /* Set cookie */
    $set_cookie = true;
 
} else {
    /* Check if cookie exists */
    if ( isset($_COOKIE[$cookie_name]) AND !empty($_COOKIE[$cookie_name]) AND in_array($_COOKIE[$cookie_name], $langs) ) {
 
        /* Get cookie and set language*/
        $lang = $_COOKIE[$cookie_name];
 
    } else {
 
        /* Get browser language */
        if (!empty($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
          $browserlang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
          $li = 999;
          $lang = $langs[0];
          foreach ($langs as $l) {
            $x = strpos($browserlang, $l);
            if ($x !== false && $x<$li) {
              $li = $x;
              $lang = $l;
            }
          }
        } else {
          $lang = $langs[0];
        }
 
        /* Set cookie */
        $set_cookie = true;
 
    }
}
 
/* Debug language output */
//echo $lang;
 
/* Redirect */

$default = 'index.php';

if ($lang == 'uk' || $lang == 'ru') {
	
} else {
	header( 'Location: /' .$lang . '/' ) ;
	exit();
}
/* Finally set cookie */
if ($set_cookie) { setcookie("$cookie_name", $lang, time()+(60*60*24*365), "/", $cookie_domain); }
 
?>