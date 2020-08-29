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

$API_HOST = "https://paidcodes.albdroid.al/RSS_Builder_Apis/JSON_Enclosure/";
$PHP_API =  "Smart_TV_Public_Multi.php";
$URL_EQUAL = "?url=";
$Smart_TV_Builder = $API_HOST . $PHP_API . $URL_EQUAL;

// JUST ADD LINKS HERE AND UPLOAD AS DIRECT LINK FROM YOUR SERVER IN SMART TV OR PLAY IN VLC
$Smart_TV_List = [
// RSS LINK HERE                                  TITLES HERE
// IN THE STRUCTURE ONLY LINKS NEEDED, TITLES CREATED AUTOMATICALLY FROM API, DECIDE IT AS A NOTE OR LEAVE BLANK AS {FROM "Deep Techno"] TO ""]}
["http://promodj.com/mixes/deep_techno/rss.xml", "Deep Techno"],
["http://promodj.com/mixes/italo_disco/rss.xml", "Italo Disco"],
["http://promodj.com/mixes/eurodance/rss.xml", "Eurodance"],
["http://www.radiorecord.ru/rss.xml", "Radio Record"],
];

// DON'T CHANGE HEADERS
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
echo "#EXTM3U Albdroid TV Streaming #RSS Builder AIO 1.4 RC4 PRO Multiple THIS IS DEMO PLAYLIST"."\n";
$Smart_Multi_Data = "";
foreach($Smart_TV_List as list($Stream_URL, $Stream_Title)) {
	$Smart_Multi_Data .= @file_get_contents($Smart_TV_Builder.$Stream_URL);
}
echo $Smart_Multi_Data;
?>