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
        "soundcloud_div" => '<div id="tolki_razam" height="500" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/605519262&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Ветви мощного Дерева Музыки переплетаются и тянутся к Свету в самых несказанных сочетаниях.<br> Так и мы с вами - печальные, одержимые, кроткие, очарованные - стремимся к Сотворчеству и Чудесам. Только в гармонии. Только вместе.",
        "tracks" => ["Сустрэнь мяне", 'Рэсэт', 'Дотык', 'Лёсе', 'Замiлаванне', 'Сумасшедшая любовь', 'Не улетай', 'Сонца', 'Чай'],
    ],
    [
        "title" => "Reset",
        "slug" => "reset",
        "year" => "2017",
        "img" => "/img/albums/reset.jpg",
        "soundcloud_div" => '<div id="reset" height="600" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/331330747&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></div>',
        "description" => "Предвестник второй части трилогии. Жизнь начинается не единожды. Расставание с живыми бывает более сложным, чем с умершими. Драматический вальс для оптимистов.",
        "tracks" => ["Reset"],
    ],
/*    [
        "title" => "Татачка",
        "slug" => "tatachka",
        "year" => "2015",
        "img" => "/img/albums/tatachka.jpg",
        "soundcloud_div" => '<div id="tatachka" height="600" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/179766864&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Предвестник первой части трилогии. Сила и нежность – то, что вдохновляет жизнь продолжаться. Стоит услышать.",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],*/
    [
        "title" => "Як нiколi раней",
        "slug" => "yak_nikoli",
        "year" => "2017",
        "img" => "/img/albums/yak_nikoli.jpg",
        "soundcloud_div" => '<div id="yak_nikoli" height="600" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286555306&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true&amp;visual=true"></div>',
        "description" => "Наш подарок слушателям, - чтобы в сумраке городских будней они могли лишний раз почувствовать романтику и вдохновение.",
        "tracks" => ["Як нiколi раней"],
    ],
    [
        "title" => "Ці чуеш",
        "slug" => "ci_chuesh",
        "year" => "2015",
        "img" => "/img/albums/ci_chuesh.jpg",
        "soundcloud_div" => '<div id="ci_chuesh" height="450" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/179766864&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Как слышится, так и пишется. Как живётся, так и играется. Как мечтается, так и поётся. Что мы хотели сказать этим альбомом? Что-то вроде того, что сказали бы вам травы и деревья, птицы и ручьи, что стоят, бегут, растут и гнездятся в этой земле. Дети – родители – внуки – это не хронология, это метафизическое состояние каждого из нас. Тут песни не про влюблённость. Тут песни про Любовь. Они не дают надежды, они крепят веру. Вот вам наш бесплотный спутник в путешествии сквозь будни и праздники.",
        "tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],
    ],
    [
        "title" => "Выявы",
        "slug" => "viavi",
        "year" => "2014",
        "img" => "/img/albums/viyavi.jpg",
        "soundcloud_div" => '<div id="viavi" height="350" data-playlist="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/47396066&amp;color=%23ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;show_teaser=true"></div>',
        "description" => "Дебютный триптих группы. Три песни, три рисунка нашей реальности в разных ракурсах. Диск содержит живую запись в видео- и аудио-форматах.",
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
