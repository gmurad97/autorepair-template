<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route["default_controller"]      = "UserController/index";
$route["404_override"]            = "UserController/error";
$route["translate_uri_dashes"]    = FALSE;
$route["switch-lang/(:any)"]      = "LanguageSwitcher/SwitchLang/$1";

$route["home"]                    = "UserController";
$route["home"]                    = "UserController/index";
$route["about"]                   = "UserController/about";
$route["battery-repair"]          = "UserController/battery_repair";
$route["brake-repair"]            = "UserController/brake_repair";
$route["car-cleaning"]            = "UserController/car_cleaning";
$route["contact"]                 = "UserController/contact";
$route["cooling-system"]          = "UserController/cooling_system";
$route["engine-repair"]           = "UserController/engine_repair";
$route["exterior-revitalization"] = "UserController/exterior_revitalization";
$route["faq"]                     = "UserController/faq";
$route["services"]                = "UserController/services";
$route["steering-repair"]         = "UserController/steering_repair";
$route["tire-repair"]             = "UserController/tire_repair";
