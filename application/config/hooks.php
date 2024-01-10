<?php
defined('BASEPATH') or exit('No direct script access allowed');

$hook["post_controller_constructor"] = array(
    "class"    => "LanguageLoader",
    "function" => "lang_init",
    "filename" => "LanguageLoader.php",
    "filepath" => "hooks"
);
