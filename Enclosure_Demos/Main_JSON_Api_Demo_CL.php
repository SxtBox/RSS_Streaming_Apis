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

// HOSTED VERSION https://paidcodes.albdroid.al/RSS_Builder_Apis/JSON_Enclosure/

/*
 NOTE FOR ALL
 ALL SERVERS IPS ARE FILTERED THESE ARE ONLY DEMOS AND STREAMING IS NOT ALLOWED FOR XTREAM CODES PANELS OR ANY ANDROID APPS FOR YOUR CLIENTS,
 IF YOU ARE INTERESTED TO STREAMING YOU CAN BUY THEM AND PUT THEM ON YOUR SERVER!!!
*/

/*
 Generator @ Kodi dot AL Dev Tools
 Code For PHP 5/7
*/

error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");

$GET_URL = file_get_contents('https://paidcodes.albdroid.al/RSS_Builder_Apis/JSON_Enclosure?'.$_SERVER['QUERY_STRING']);
echo $GET_URL;
?>
