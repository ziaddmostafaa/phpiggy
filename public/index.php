<?php


// var_dump(file_exists(__DIR__ . "/../src/App/bootstrap.php"));
use Framework\App;
// $app  =  new App();
// var_dump($app);

include __DIR__ . "\..\src\App\bootstrap.php";
// var_dump(file_exists( "\..\src\App\bootstrap.php"));
// die();

$app->run();