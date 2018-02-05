<?php
/* АЛЬБОМЫ

 * title - название
 * slug - для читаемого якоря например ci_chuesh
 * year - год издания
 * img - обложка альбома
 * soundcloud_iframe - player с сайта soundcloud (кнопка share -> вкладка embed -> скопировать код)
 * description - поле Авторы
 * tracks - перечень треков в правильном порядке
 */
$albums = [
    [
        "title" => "Выявы",
        "slug" => "viavi",
        "year" => "2014",
        "img" => "/img/albums/viyavi.jpg",
        "soundcloud_iframe" => "<iframe width=\"100%\" height=\"350\" scrolling=\"no\" frameborder=\"no\" allow=\"autoplay\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/47396066&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true\"></iframe>",
        "description" => "Дэбютны трыпціх гурта. Тры песні, тры малюнкі нашай рэчаіснасці ў розных ракурсах. Дыск утрымлівае жывы запіс у відэа- і аўдыё-фарматах.",
        "tracks" => ["Як мае быць", "Кактэбель", "Сустрэнь мяне (Джэм)"],
    ],
/*    [
        "title" => "Татачка",
        "slug" => "tatachka",
        "year" => "2015",
        "img" => "/img/albums/tatachka.jpg",
        "soundcloud_iframe" => "<iframe width=\"100%\" height=\"450\" scrolling=\"no\" frameborder=\"no\" allow=\"autoplay\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/179766864&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true\"></iframe>",
        "description" => "Прадвеснік першай часткі трылогіі. Моц і пяшчота – тое, што натхняе жыццё працягвацца. Варта пачуць.",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],*/
    [
        "title" => "Ці чуеш",
        "slug" => "ci_chuesh",
        "year" => "2015",
        "img" => "/img/albums/ci_chuesh.jpg",
        "soundcloud_iframe" => "<iframe width=\"100%\" height=\"450\" scrolling=\"no\" frameborder=\"no\" allow=\"autoplay\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/179766864&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true\"></iframe>",
        "description" => "Як чуецца, так і пішацца. Як жывецца, так і граецца. Як марыцца, так і спяваецца. Што мы хацелі сказаць гэтым альбомам? Штось накшталт таго, што б сказалі вам травы ды дрэвы, птушкі ды ручаі, што стаяць, бягуць, растуць і гняздзяцца ў гэтай зямлі. Дзеці - бацькі - унукі - гэта не храналогія, гэта метафізічны стан кожнага з нас. Тут песні не пра каханне. Тут песні пра Любоў. Яны не даюць надзеі, яны мацуюць веру. Вось вам наш бесцялесны спадарожнік у вандроўцы праз будні і святы. ",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],
    [
        "title" => "Як нiколi раней",
        "slug" => "yak_nikoli",
        "year" => "2017",
        "img" => "/img/albums/yak_nikoli.jpg",
        "soundcloud_iframe" => "<iframe width=\"100%\" height=\"600\" scrolling=\"no\" frameborder=\"no\" allow=\"autoplay\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286555306&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true\"></iframe>",
        "description" => "Наш падарунак слухачам, каб у прыцемку гарадзкіх будняў яны маглі лішні раз адчуць рамантыку і натхненьне.",
        "tracks" => ["Як нiколi раней"],
    ],
    [
        "title" => "Reset",
        "slug" => "reset",
        "year" => "2017",
        "img" => "/img/albums/reset.jpg",
        "soundcloud_iframe" => "<iframe width=\"100%\" height=\"600\" scrolling=\"no\" frameborder=\"no\" allow=\"autoplay\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/331330747&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true\"></iframe>",
        "description" => "Прадвеснік другой часткі трылогіі. Жыццё пачынаецца не аднойчы. Развітанне з жывымі бывае ячшэ больш складаным, чым з памерлымі. Драматычны вальс для аптымістаў.",
        "tracks" => ["Reset"],
    ],


//  ШАБЛОН ДЛЯ ДОБАВЛЕНИЯ НОВОГО АЛЬБОМА
//    [
//        "title" => "",
//        "slug" => "",
//        "year" => "",
//        "img" => "",
//        "soundcloud_iframe" => "",
//        "description" => "",
//        "tracks" => ["", "", ""],
//    ],
];

//Первоночальный плеер soundcloud в разделе "Слушать"
$default_player = "<iframe width=\"100%\" height=\"850\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/55015942&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=false&amp;visual=false\"></iframe>";
