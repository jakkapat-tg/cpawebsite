<?php
use AltoRouter as Router;
require __DIR__.'./cpawebsite/vendor/autoload.php';
$router = new Router();

// กำหนด route ในเว็บ
$router->map( "GET", "/", function() {
  require __DIR__ . "./cpawebsite/Pages/home.php";
} );

$router->map( "GET", "/about", function() {
  require __DIR__ . "./cpawebsite/Pages/about.php";
} );

$router->map( "GET", "/manager", function() {
  require __DIR__ . "./cpawebsite/Pages/manager.php";
} );

$router->map( "GET", "/event", function() {
  require __DIR__ . "./cpawebsite/Pages/event.php";
} );

$router->map( "GET", "/event-single/[i:id]", function( $id ) {
  $idevent = $id;
  require __DIR__ . "./cpawebsite/Pages/event-single.php";
} );

$router->map( "GET", "/news", function() {
  require __DIR__ . "./cpawebsite/Pages/news.php";
} );

$router->map( "GET", "/ita", function() {
  require __DIR__ . "./cpawebsite/Pages/ita.php";
} );

$router->map( "GET", "/about", function() {
  require __DIR__ . "./cpawebsite/Pages/about.php";
} );

$router->map( "GET", "/contact", function() {
  require __DIR__ . "./cpawebsite/Pages/contact.php";
} );

$router->map( "GET", "/cpa_phone", function() {
  require __DIR__ . "./cpawebsite/Pages/cpa_phone.php";
} );

$router->map( "GET|POST", "/complaints", function() {
  require __DIR__ . "./cpawebsite/Pages/complaints.php";
} );

$router->map( "GET|POST", "/fetch_cpa", function() {
  require __DIR__ . "./cpawebsite/Pages/fetch_cpa.php";
} );

$router->map( "GET", "/403", function() {
  require __DIR__ . "./cpawebsite/Pages/403.html";
} );



#############################
  // $router->map( "GET", "/new-note", function() {
  //   require __DIR__ . "./php-sample-router-master/src/Pages/new-note.php";
  // } );

  // $router->map( "POST", "/new-note", function() {
  //   require __DIR__ . "./php-sample-router-master/src/Pages/save-note.php";
  // } );

  // $router->map( "GET", "/note/[i:id]", function( $id ) {
  //   // ไฟล์ view-note.php จะเรียกใช้ $id ได้ทันที  เพราะอยู่ใน scope เดียวกัน
  //   require __DIR__ . "./php-sample-router-master/src/Pages/view-note.php";
  // } );
#

$match = $router->match();
if( is_array($match) && is_callable( $match['target'] ) ) {
  call_user_func_array( $match['target'], $match['params'] );
} else {
  //echo "ไม่พบหน้าที่ต้องการ";
  require __DIR__ . "./cpawebsite/Pages/404.php";
}
