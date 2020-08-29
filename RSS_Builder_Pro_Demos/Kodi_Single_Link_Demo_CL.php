<?php

/*
 ┌─────────────────────────────────────────────────────────────┐
 |  For More Modules Or Updates Stay Connected to Kodi dot AL  |
 └─────────────────────────────────────────────────────────────┘
 ┌───────────┬─────────────────────────────────────────────────┐
 │ Product   │ RSS Builder AIO                                 │
 │ Version   │ v1.4 RC4 PRO Multiple                           │
 │ Provider  │ https://paidcodes.albdroid.al                   │
 │ Support   │ JSON/Smart TV/Kodi                              │
 │ Sources   │ Multiple RSS or XML Data                        │
 │ Licence   │ MIT                                             │
 │ Author    │ Olsion Bakiaj                                   │
 │ Email     │ TRC4@USA.COM                                    │
 │ Author    │ Endrit Pano                                     │
 │ Email     │ INFO@ALBDROID.AL                                │
 │ Website   │ https://kodi.al                                 │
 │ Facebook  │ /albdroid.official/                             │
 │ Github    │ github.com/SxtBox/                              │
 │ Created   │ 29 August 2020                                  │
 │ Modified  │ 00:00:0000                                      │
 └─────────────────────────────────────────────────────────────┘
*/

// HOSTED VERSION https://paidcodes.albdroid.al/RSS_Builder_Apis/PRO/Kodi_Builder/

/*
 NOTE FOR ALL
 ALL SERVERS IPS ARE FILTERED THESE ARE ONLY DEMOS AND STREAMING IS NOT ALLOWED FOR XTREAM CODES PANELS OR ANY ANDROID APPS FOR YOUR CLIENTS,
 IF YOU ARE INTERESTED TO STREAMING YOU CAN BUY THEM AND PUT THEM ON YOUR SERVER!!!
*/

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

/*
 NOTE: TO PLAY THE STRUCTURE REQUIRED LIVESTRAMSPRO ADDON
 DOWNLOAD FROM REPO AND NOT FROM LOCAL DISK
 ADDON HOST: https://addons.kodi.al/
 FILENAME: LiveStreamsPro.zip
*/

error_reporting(0);
date_default_timezone_set("Europe/Tirane");

$API_HOST = "https://paidcodes.albdroid.al/RSS_Builder_Apis/PRO/Kodi_Builder/";
$PHP_API =  "";
$URL_EQUAL = "?url=";
$RSS_URL = "http://promodj.com/mixes/eurodance/rss.xml";
$RSS_Single_Builder = $API_HOST . $PHP_API . $URL_EQUAL . $RSS_URL;

// DON'T CHANGE HEADERS
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$Kodi_XML_Builder = file_get_contents($RSS_Single_Builder);
echo $Kodi_XML_Builder;
?>
