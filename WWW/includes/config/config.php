<?php
session_start();
set_include_path($_SERVER['DOCUMENT_ROOT']);
$CONFIG = simplexml_load_string(file_get_contents('includes/config/config.settings.php',true));
if($CONFIG->mode->production == 'FALSE'){
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
	$dbsettings=$CONFIG->databaseconfig->dev;
	$SM_debug_mode = true; 
	}else{
	error_reporting(0);
	ini_set('display_errors', 0);
	$dbsettings=$CONFIG->databaseconfig->production;
	$SM_debug_mode = false;	echo'###';
}

require 'includes/functions/functions.general.php';
require 'includes/classes/bd.class.php';
require "includes/classes/smarty/Smarty.class.php";
require 'includes/classes/email.class.php';
require 'includes/classes/controllers/main.controller.class.php';
require 'includes/classes/controllers/admin.controller.class.php';
require 'includes/classes/controllers/application.controller.class.php';



$DB = new DB($dbsettings);
$SM = new Smarty();
$SM->debugging = $SM_debug_mode;
$SM->template_dir = "templates"; 
$SM->setCaching(false);
$email = new email();

