<?php

session_start();


require_once 'config.php';

require_once 'helper/helper.php';


spl_autoload_register('classAutoLoader');

function classAutoLoader($classname)
{
	require_once 'model/' . $classname . '.php';
}
