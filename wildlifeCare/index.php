<?php
//front controller

require "Core/Route.php";
require 'Core/Controller.php';
require 'Core/Model.php';
require 'Core/view.php';
require 'Config/Database.php';
require 'Core/Database.php';

$route=new Route();
$route->add("",["controller"=>"home","action"=>"welcome"]);










$route->dispatch($_SERVER["QUERY_STRING"]);
