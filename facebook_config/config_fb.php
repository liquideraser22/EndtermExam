<?php


require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}


$facebook = new \Facebook\Facebook([
  'app_id'      => '3202105943132907',
  'app_secret'     => '05cb0a190e4f9d2094b4b95a99a7174d',
  'default_graph_version'  => 'v2.10'
]);


?>


