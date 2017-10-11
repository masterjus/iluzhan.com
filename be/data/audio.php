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
		"title" => "Ці чуеш",
        "slug" => "ci_chuesh",
		"year" => "2015",
		"img" => "/img/albums/1.jpg",
		"soundcloud_iframe" => "<iframe width=\"100%\" height=\"450\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/47396066&amp;color=%23ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>",
		"description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
		"tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],		
	],
	[
		"title" => "Выявы",
        "slug" => "",
		"year" => "2015",
		"img" => "/img/albums/2.jpg",
		"soundcloud_iframe" => "<iframe width=\"100%\" height=\"166\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/286555306&amp;color=%23ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>",
		"description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
		"tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],		
	],
	[
		"title" => "Reset Single",
        "slug" => "",
		"year" => "2015",
		"img" => "/img/albums/3.jpg",
		"soundcloud_iframe" => "<iframe width=\"100%\" height=\"450\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/160431181&amp;color=%23ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false\"></iframe>",
		"description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
		"tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],		
	],
	[
		"title" => "Live - Гомель",
        "slug" => "",
		"year" => "2015",
		"img" => "/img/albums/4.jpg",
		"soundcloud_iframe" => "<iframe width=\"100%\" height=\"300\" scrolling=\"no\" frameborder=\"no\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/106215600&amp;color=%23ff9900&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true\"></iframe>",
		"description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
		"tracks" => ["Верыш", "Iльняная", "Зямлiца", "Татачка", "Маценька", "Сцяжынка"],		
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
