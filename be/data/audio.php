<?php
/* АЛЬБОМЫ

 * title - название
 * slug - для читаемого якоря например ci_chuesh
 * year - год издания
 * img - обложка альбома
 * soundcloud_div - player с сайта soundcloud (кнопка share -> вкладка embed -> скопировать код)
 * description - поле Авторы
 * tracks - перечень треков в правильном порядке
 */
$albums = [
    [
        "title" => "Толькi разам",
        "slug" => "tolki_razam",
        "year" => "2018",
        "img" => "/img/albums/tolki_razam.jpg",
        "soundcloud_div" => '<div id="tolki_razam" height="500" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/605519262&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true""></div>',
        "description" => "Галіны магутнага Дрэва Музыкі пераплятаюцца і цягнуцца да Святла ў самых невыказных спалучэннях.<br> Так і мы з вамі - засмучоныя, апантаныя, лагодныя, зачараваныя - кіруемся да Сутворчасці і Цудаў. Толькі ў гармоніі. Толькі разам.",
        "tracks" => ["Сустрэнь мяне", 'Рэсэт', 'Дотык', 'Лёсе', 'Замiлаванне', 'Сумасшедшая любовь', 'Не улетай', 'Сонца', 'Чай'],
    ],
    [
        "title" => "Reset",
        "slug" => "reset",
        "year" => "2017",
        "img" => "/img/albums/reset.jpg",
        "soundcloud_div" => '<div id="reset" height="600" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/331330747&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></div>',
        "description" => "Прадвеснік другой часткі трылогіі. Жыццё пачынаецца не аднойчы. Развітанне з жывымі бывае ячшэ больш складаным, чым з памерлымі. Драматычны вальс для аптымістаў.",
        "tracks" => ["Reset"],
    ],
/*    [
        "title" => "Татачка",
        "slug" => "tatachka",
        "year" => "2015",
        "img" => "/img/albums/tatachka.jpg",
        "soundcloud_div" => '<div id="tatachka" height="600" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/179766864&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Прадвеснік першай часткі трылогіі. Моц і пяшчота – тое, што натхняе жыццё працягвацца. Варта пачуць.",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],*/
    [
        "title" => "Як нiколi раней",
        "slug" => "yak_nikoli",
        "year" => "2017",
        "img" => "/img/albums/yak_nikoli.jpg",
        "soundcloud_div" => '<div id="yak_nikoli" height="600" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286555306&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></div>',
        "description" => "Наш падарунак слухачам, каб у прыцемку гарадзкіх будняў яны маглі лішні раз адчуць рамантыку і натхненьне.",
        "tracks" => ["Як нiколi раней"],
    ],
    [
        "title" => "Ці чуеш",
        "slug" => "ci_chuesh",
        "year" => "2015",
        "img" => "/img/albums/ci_chuesh.jpg",
        "soundcloud_div" => '<div id="ci_chuesh" height="450" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/179766864&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Як чуецца, так і пішацца. Як жывецца, так і граецца. Як марыцца, так і спяваецца. Што мы хацелі сказаць гэтым альбомам? Штось накшталт таго, што б сказалі вам травы ды дрэвы, птушкі ды ручаі, што стаяць, бягуць, растуць і гняздзяцца ў гэтай зямлі. Дзеці - бацькі - унукі - гэта не храналогія, гэта метафізічны стан кожнага з нас. Тут песні не пра каханне. Тут песні пра Любоў. Яны не даюць надзеі, яны мацуюць веру. Вось вам наш бесцялесны спадарожнік у вандроўцы праз будні і святы. ",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],
    [
        "title" => "Выявы",
        "slug" => "viavi",
        "year" => "2014",
        "img" => "/img/albums/viyavi.jpg",
        "soundcloud_div" => '<div id="viavi" height="350" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/47396066&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Дэбютны трыпціх гурта. Тры песні, тры малюнкі нашай рэчаіснасці ў розных ракурсах. Дыск утрымлівае жывы запіс у відэа- і аўдыё-фарматах.",
        "tracks" => ["Як мае быць", "Кактэбель", "Сустрэнь мяне (Джэм)"],
    ],

//  ШАБЛОН ДЛЯ ДОБАВЛЕНИЯ НОВОГО АЛЬБОМА
//    [
//        "title" => "",
//        "slug" => "",
//        "year" => "",
//        "img" => "",
//        "soundcloud_div" => "",
//        "description" => "",
//        "tracks" => ["", "", ""],
//    ],
];

//Первоночальный плеер soundcloud в разделе "Слушать"
$default_player = '<div id="default_player" height="850" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/55015942&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=false&amp;visual=false"></div>';
