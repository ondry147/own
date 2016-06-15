<?php
$time_start = microtime(true);

spl_autoload_register(function ($class){
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . $class . ".php";
    $helper = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'App' . DIRECTORY_SEPARATOR . 'Helpers' . DIRECTORY_SEPARATOR
        . $class . ".php";
    if(is_readable($file))
    {
        require $file;
    } elseif(is_readable($helper)) {
        require $helper;
    }
});

new Session();

try {
    Db::connect();
} catch(PDOException $e) {
    echo $e->getMessage();
}

$router = new \Core\Router();
$router->add("", ["controller" => "home", "action" => "index"]);
$router->add("{controller}/{action}");
$router->add("{controller}");
$router->add('{controller}/{action}/{id:\d+}');
$router->add('{controller}/{action}/{cat:\d+}/{id:\d+}');

$router->dispatch($_SERVER["QUERY_STRING"]);


//echo "<br /><hr /><br />query: " . $_SERVER["QUERY_STRING"];
echo "<br/><br />";

//var_dump($router->getParams());
echo '<center><br><span style="color:seashell">Total execution time in seconds: ' . (microtime(true) - $time_start.'</span></center>');
