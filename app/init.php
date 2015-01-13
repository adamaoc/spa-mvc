<?php

define("APISLUG", "http://flexhub.amandaholtzinger.com/?json=");

$webapi = APISLUG.'get_page&slug=website';

$webdata = json_decode(file_get_contents($webapi));

define("SITENAME", $webdata->page->custom_fields->Title[0]);
define("SITEPHONE", $webdata->page->custom_fields->phone[0]);
define("SITETAGLINE", $webdata->page->custom_fields->tagline[0]);

require_once 'core/App.php';
require_once 'core/Controller.php';
require_once 'core/Functions.php';