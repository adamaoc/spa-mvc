<?php

define("APISLUG", "http://flexhub.amandaholtzinger.com/?json=");

$webapi = APISLUG.'get_page&slug=website';

$webdata = getData($webapi);
define("SITENAME", $webdata['page']['custom_fields']['website_title'][0]);
define("SITEPHONE", $webdata['page']['custom_fields']['contact_phone_number'][0]);
define("SITETAGLINE", $webdata['page']['custom_fields']['tag_line'][0]);
define("LOCATION", $webdata['page']['custom_fields']['location'][0]);