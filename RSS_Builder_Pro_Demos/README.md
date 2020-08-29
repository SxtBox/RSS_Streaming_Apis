# RSS Streaming Apis
RSS Merger AIO
Merge Multiple RSS Links To Json, Smart TV, And Kodi Structure

This Structure Convert 95% OF RSS/ATOM/XML DATAS In Kodi And Smart TV Code

    *-------------------------------------------------------------------------------------------------------------------------*
    |                                                   ERROR RSS STRUCTURES                                                  |
    *-------------------------------------------------------------------------------------------------------------------------*
    | [Some RSS From podomatic.com => HAVE WRONG STRUCTURES                                                                   |
    | EXAMPLE:                                                                                                                |
    | Electronically Organized Noise Show=> http://craigharlock.podomatic.com/rss2.xml                                        |
    | Groove Cruise Radio => http://groovecruise.podomatic.com/rss2.xml                                                       |
    *-------------------------------------------------------------------------------------------------------------------------*

    *-------------------------------------------------------------------------------------------------------------------------*
    |                                                       GET DATA:                                                         |
    *-------------------------------------------------------------------------------------------------------------------------*
    | [Radio Record]                                                                                                          |
    | https://paidcodes.albdroid.al/RSS_Builder_Apis/PRO/M3U_Builder/?url=http://www.radiorecord.ru/rss.xml                   |
    |-------------------------------------------------------------------------------------------------------------------------|
    | [Protocol Radio]                                                                                                        |
    | https://paidcodes.albdroid.al/RSS_Builder_Apis/PRO/M3U_Builder/?url=http://podcasts.protocol-radio.com/PRRADIO.xml      |
    *-------------------------------------------------------------------------------------------------------------------------*
    *-------------------------------------------------------------------------------------------------------------------------*
    | RSS STRUCTURE REQUIRED                                                                                                  |
    |-------------------------------------------------------------------------------------------------------------------------|
    | <title>EXAMPLE TITLE</title>                                                                                            |
    | <pubDate>DATE BLA BLA BLA</pubDate>                                                                                     |
    | <enclosure url="https://stream_link.mp3" length="92899831" type="audio/mpeg"/>                                          |
    | <itunes:image href="https://image_link.jpg"/>                                                                           |
    *-------------------------------------------------------------------------------------------------------------------------*

    *----------------------------------------------------------------------*
    |              EXAMPLE RSS TABLES               |      Structure       |      
    |----------------------------------------------------------------------|
    | <item>                                        |                      |
    | <title>My Mix</title>                         | Auto Detect/ENABLED  |
    | <description></description>                   | Auto Detect/DISABLED |
    | <guid isPermaLink="true"></guid>              | Auto Detect/DISABLED |
    | <comments></comments>                         | Auto Detect/DISABLED |
    | <pubDate></pubDate>                           | Auto Detect/ENABLED  |
    | <dcterms:modified></dcterms:modified>         | Auto Detect/ENABLED  |
    | <dcterms:created></dcterms:created>           | Auto Detect/ENABLED  |
    | <link></link>                                 | Auto Detect/ENABLED  |
    | <dc:creator></dc:creator>                     | Auto Detect/ENABLED  |
    | <itunes:keywords></itunes:keywords>           | Auto Detect/DISABLED |
    | <enclosure url="https://stream_link.mp3"/>    | Auto Detect/ENABLED  |
    | <itunes:duration></itunes:duration>           | Auto Detect/DISABLED |
    | <itunes:image href="https://image_link.jpg"/> | Auto Detect/ENABLED  |
    | <itunes:explicit></itunes:explicit>           | Auto Detect/DISABLED |
    | <itunes:summary></itunes:summary>             | Auto Detect/DISABLED |
    | <itunes:subtitle></itunes:subtitle>           | Auto Detect/DISABLED |
    | </item>                                       |                      |
    *----------------------------------------------------------------------*
