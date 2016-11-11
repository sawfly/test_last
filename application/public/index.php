<?php
require_once ('./php/loader/Loader.php');
Loader::load('app.php');
Loader::load('url/iUrl.php');
Loader::load('url/Url.php');
Loader::load('robot/aRobot.php');
Loader::load('robot/aRobotForUrl.php');
Loader::load('robot/RobotForUrl.php');
Loader::load('robot/iRobot.php');
Loader::load('robot/Robot.php');

$result=[];
if(array_key_exists('url', $_POST)){
    $robot = new \App\Robot\Robot($_POST['url']);
    $result = $robot->check()->getResults();
    ksort($result);
}

require_once ('i.php');

