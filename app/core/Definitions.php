<?php

define("APISLUG", "http://flexhub.amandaholtzinger.com/?json=");

$webapi = APISLUG.'get_page&slug=website';

$webdata = getData($webapi);
define("SITENAME", $webdata['page']['custom_fields']['Title'][0]);
define("SITEPHONE", $webdata['page']['custom_fields']['phone'][0]);
define("SITETAGLINE", $webdata['page']['custom_fields']['tagline'][0]);