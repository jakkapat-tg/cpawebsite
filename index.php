<?php


use AltoRouter as Router;

require_once  __DIR__ . '/cpawebsite/vendor/autoload.php';
$router = new Router();


$router->map("GET", "/about", function () {
  require "./cpawebsite/Pages/about.php";
});


$router->map("GET", "/", function () {
  require "./cpawebsite/Pages/home.php";
});

$router->map("GET", "/manager", function () {
  require   "./cpawebsite/Pages/manager.php";
});

$router->map("GET", "/event", function () {
  require   "./cpawebsite/Pages/event.php";
});

$router->map("GET", "/event-single/[i:id]", function ($id) {
  $idevent = $id;
  require   "./cpawebsite/Pages/event-single.php";
});

$router->map("GET", "/news", function () {
  require   "./cpawebsite/Pages/news.php";
});

$router->map("GET", "/ita", function () {
  require  "./cpawebsite/Pages/ita.php";
});

$router->map("GET", "/contact", function () {
  require   "./cpawebsite/Pages/contact.php";
});

$router->map("GET", "/cpa_phone", function () {
  require  "./cpawebsite/Pages/cpa_phone.php";
});

$router->map("GET|POST", "/complaints", function () {
  require "./cpawebsite/Pages/complaints.php";
});

$router->map("GET|POST", "/fetch_cpa", function () {
  require   "./cpawebsite/Pages/fetch_cpa.php";
});

$router->map("GET", "/medicinetables", function () {
  require   "./cpawebsite/Pages/medicinetables.php";
});

$router->map("GET|POST", "/service", function () {
  require   "./cpawebsite/Pages/service.php";
});

$router->map("GET", "/403", function () {
  require  "./cpawebsite/Pages/403.html";
});









$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
  call_user_func_array($match['target'], $match['params']);
} else {
  //echo "ไม่พบหน้าที่ต้องการ 404";
  require "./cpawebsite/Pages/404.php";
}
