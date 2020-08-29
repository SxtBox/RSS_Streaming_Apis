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

//error_reporting(0);
set_time_limit(0);
date_default_timezone_set("Europe/Tirane");

$API_HOST = "https://paidcodes.albdroid.al/RSS_Builder_Apis/PRO/Kodi_Builder/";
$PHP_API =  "";
$URL_EQUAL = "?url=";
$Kodi_Multi_Builder_Data = $API_HOST . $PHP_API . $URL_EQUAL;

$albdroidlogo = "https://png.kodi.al/tv/albdroid/"; // black.png  smart_x1.png  smart_x2.png albdroid.png  smart_x254.png

$date = date("l, d F Y - H:i:s");
$viti = date("Y");

// JUST ADD LINKS AND TITLES HERE AND PLAY AS DIRECT LINK FROM YOUR SERVER IN LIVESTRAMSPRO ADDON
$Kodi_Multi_Links_Builder = [
// RSS LINK HERE                                  TITLES HERE
["http://promodj.com/mixes/deep_techno/rss.xml", "Deep Techno"],
["http://promodj.com/mixes/italo_disco/rss.xml", "Italo Disco"],
["http://promodj.com/mixes/eurodance/rss.xml", "Eurodance"],
["http://www.radiorecord.ru/rss.xml", "Radio Record"],
["http://mastersofhardcore.libsyn.com/rss", "Official Masters of Hardcore Podcast"],
];

header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
echo "<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"yes\"?>\n";
echo "<channel> <!-- APP Name RSS Builder AIO 1.4 RC4 PRO Multiple -->\n";
echo "<name>[COLOR lime][B]RSS Builder AIO 1.4 RC4 PRO Multiple at Albdroid TV[/B][/COLOR]</name>\n";
echo "<thumbnail>https://png.kodi.al/tv/albdroid/black.png</thumbnail>\n";
echo "<fanart>https://png.kodi.al/tv/albdroid/black.png</fanart>\n";
echo "<items_info> <!-- THIS IS OPTIONAL -->\n";
echo "<title>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]RSS Builder AIO 1.4 RC4 PRO Multiple[COLOR red])[/I][/B][/COLOR]</title>\n";
echo "<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]RSS Builder AIO 1.4 RC4 PRO Multiple[COLOR red])[/I][/B][/COLOR]</genre>\n";
echo "<description>[COLOR blue][B]Author:[/COLOR] [COLOR lime][B]Olsion Bakiaj[/B][/COLOR][COLOR red] &amp;[/COLOR][COLOR lime][B] Endrit Pano[/B][/COLOR]</description>\n";
echo "<thumbnail>https://png.kodi.al/tv/albdroid/black.png</thumbnail>\n";
echo "<fanart>https://png.kodi.al/tv/albdroid/black.png</fanart>\n";
echo "<date>[COLOR lime][B]{$date}[/B][/COLOR]</date>\n";
echo "<credits>[COLOR lime]TRC4[/B][/COLOR]</credits>\n";
echo "<year>[COLOR lime][B]{$viti}[/B][/COLOR]</year>\n";
echo "</items_info>\n\n";
foreach($Kodi_Multi_Links_Builder as list($Stream_URL, $Stream_Title)) {
echo "<item>\n";
echo "<title>[COLOR lime][B]".$Stream_Title."[/COLOR][/B]</title>\n";
echo "<externallink>".$Kodi_Multi_Builder_Data.$Stream_URL."</externallink>\n";
echo "<link>Streaming APIS</link>\n";
echo "<thumbnail>".$albdroidlogo."black.png</thumbnail>\n";
echo "<fanart>".$albdroidlogo."black.png</fanart>\n";
echo "<genre>[COLOR lime][B][I]Albdroid[/I][/B][/COLOR][COLOR lime] [B][I][COLOR red]([/COLOR]".$Stream_Title."[COLOR red])[/COLOR] [/I][/B][/COLOR]</genre>\n";
echo "<info>[COLOR lime][B]Website:[/B][/COLOR] [COLOR red][B]([/B][/COLOR][COLOR lime][B]Albdroid.AL[/B][/COLOR] [COLOR red][B]&amp;[/B][/COLOR] [COLOR lime][B]Kodi.AL[/B][/COLOR][COLOR red][B])[/B][/COLOR]</info>\n";
echo "<date>[COLOR lime][B]".$date."[/B][/COLOR]</date>\n";
echo "</item>\n\n";
}
echo "<SetViewMode>504</SetViewMode>\n\n";
echo "</channel>";
?>