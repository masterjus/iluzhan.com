<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/settings.php';
require_once 'data/trans.php';
require_once 'data/about.php';
require_once 'data/audio.php';
require_once 'data/photo.php';
require_once 'data/video.php';
require_once 'data/events.php';
$current_lang = array_search(explode('?', $_SERVER['REQUEST_URI'])[0], $lang_url);

if (empty($events)) {
    unset($nav['events']);
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?=$meta['description']?>">
    <title><?=$meta['title']?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/img/favicons/manifest.json">
    <link rel="mask-icon" href="/img/favicons/safari-pinned-tab.svg" color="#2b5797">
    <link rel="shortcut icon" href="/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap Core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/css/custom.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-43268782-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-43268782-1');
    </script>
</head>
<body id="page-top" onload="showPage();">
<div class="preload"><div class="bg-logo"><div class="loader"></div></div></div>
    <!-- Intro Section -->
    <section id="intro" class="intro-section">
        <div class="bg-changeable-image text-center">
            <div class="bg-image"></div>
            <div class="link"><a href="#listen" class="page-scroll"><?=$trans['listen']?> <i class="icon-headphone"></i></a></div>
        </div>
    </section>

    <!-- Desktop Menu -->
    <div class="menu">
        <div class="menu-container">
            <div class="left">
                <a class="page-scroll" href="#page-top"><img alt="Iлюжан" src="/img/logo.png"></a>
                <?php foreach ($nav as $id => $title) { ?>
                    <a href="#<?=$id?>" class="page-scroll"><?=$title?></a>
                <?php } ?>
            </div>
            <div class="right">
                <?php foreach ($social_links as $id => $href) { ?>
                    <div class="social-btn"><a href="<?=$href?>" target="_blank"><i class="icon-<?=$id?>"></i></a></div>
                <?php } ?>
                <div id="lang" class="dropup">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$current_lang?> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <?php foreach ($langs as $id => $title) { if($current_lang != $id) { ?>
                            <li><a href="<?=$lang_url[$id]?>" class="page-scroll"><?=$title?></a></li>
                        <?php }} ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Button -->
    <div class="menu-btn hidden-lg" onclick="showMenu()">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
    </div>

    <!-- Modal Mobile Menu -->
    <div class="modal fade" id="mobileMenu" tabindex="-1" role="dialog">
        <div class="bg">
        <div class="modal-dialog modal-lg" role="document">
            <span class="custom-close" onclick="closeModal()"></span>
            <div class="content">
                <img alt="Iлюжан" src="/img/logo-blue.png">
                <div class="item"></div>
                <?php foreach ($nav as $id => $title) {  ?>
                    <div class="item"><a href="#<?=$id?>" onclick="closeModal()" class="page-scroll"><?=$title?></a></div>
                <?php } ?>
                <hr>
                <div class="sb">
                    <?php foreach ($social_links as $id => $href) { ?>
                        <div class="item social-btn"><a href="<?=$href?>" onclick="closeModal()"  target="_blank"><i class="icon-<?=$id?>"></i></a></div>
                    <?php } ?>
                </div>
                <hr>
                <div class="item">
                    <a role="button" data-toggle="collapse" href="#collapseLang" aria-expanded="false" aria-controls="collapseLang">
                        <?=$langs[$current_lang]?> <span class="caret down"></span>
                    </a>
                </div>
                <div class="collapse" id="collapseLang">
                    <?php foreach ($langs as $id => $title) { if($current_lang != $id) { ?>
                        <div class="item"><span class="glyphicon glyphicon-menu-right"></span> <a href="<?=$lang_url[$id]?>" class="page-scroll"><?=$title?></a></div>
                    <?php }} ?>
                </div>
            </div>
        </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="inverse"><?=$section['about']?></h1>
                </div>
                <div class="col-sm-6 text-right text">
                    <?=$about['left-text']?>
                </div>
                <div class="col-sm-6 text">
                    <?=$about['right-text']?>
                    <p class="read-more"><a href="#" data-toggle="modal" data-target="#fullAbout" class="hvr-forward"><?=$trans['more']?> <span class="arrow-right"></span></a></p>
                </div>
                <div class="col-sm-12">
                    <div class="slick-musicians">
                        <?php foreach ($about['musicians'] as $musician) { ?>
                            <div class="slide">
                                <div class="musician hvr-grow <?=isset($musician['class']) ? $musician['class'] : ''?>" style="background: url('<?=$musician['img']?>') 100% 100%  no-repeat; background-size: cover;">
                                    <h3 class="inverse"><?=$musician['name']?><br/><?=$musician['surname']?></h3>
                                    <hr>
                                    <p><?=$musician['position']?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="slick-arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fulltext About Modal -->
    <div class="modal fade" id="fullAbout" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <span class="custom-close" onclick="closeModal()"></span>
            <div class="content">
                <h3><?=$section['about']?></h3>
                <?=$about['full-text']?>
            </div>
        </div>
    </div>

    <div class="wss1"></div>

    <!-- Audio Section -->
    <section id="audio" class="audio-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><?=$section['audio']?></h1>
                </div>
                <div class="col-sm-12 albums aw">
                    <div class="slick-albums">
                        <?php foreach ($albums as $key => $album) { ?>
                            <div class="album" id="album-<?=$key?>" data-slug="<?=$album['slug']?>" onclick="openAlbumModal('<?=$key?>')">
                                <div class="disk"></div>
                                <img src="<?=$album['img']?>" alt="<?=$album['title']?>" class="img-responsive">
                                <p>
                                    <span class="title"><?=$album['title']?></span><br/>
                                    <span class="year"><?=$album['year']?></span>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="slick-arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Albums -->
    <div class="modal fade" id="albumCarousel" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="btns">
                <div class="menu-btn hidden-lg" onclick="showMenu()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <span class="custom-close" onclick="closeModal()"></span>
            </div>
            <div class="content">
                <div class="one-slick album-modal-slick aw">
                    <?php foreach ($albums as $id => $album) { ?>
                        <div>
                            <div class="row slide" id="albumf-<?=$id?>">
                                <div class="col-sm-6 col-sm-push-6 disk">
                                    <img src="<?=$album['img']?>" alt="<?=$album['title']?>">
                                    <div class="cd"></div>
                                </div>
                                <div class="col-sm-6 col-sm-pull-6 text">
                                    <h3><?=$album['title']?></h3>
                                    <strong class="year"><?=$album['year']?></strong>
                                    <hr>
                                    <ol>
                                        <?php foreach ($album['tracks'] as $num => $track) { ?>
                                            <li><?=$track?></li>
                                        <?php } ?>
                                    </ol>
                                    <strong><?=$trans['authors']?>:</strong>
                                    <p class="description">
                                        <?=$album['description']?>
                                    </p>
                                </div>
                            </div>
                            <button type="button" id="listen-btn-<?=$id?>" class="center-block custom-btn" onclick="openAlbumToListen('<?=$id?>');">
                                <?=$trans['listen']?> <span class="icon-headphone"></span>
                            </button>
                        </div>
                    <?php } ?>
                </div>
                <div class="album-slick-btns aw"></div>
            </div>
        </div>
    </div>

    <!-- Listen Section -->
    <section id="listen" class="listen-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><?=$section['listen']?></h1>
                    <br/>
                    <div class="soundcloud_iframe">
                        <?=$default_player?>
                    </div>
                    <div class="hidden">
                        <?php foreach ($albums as $id => $album) { ?>
                            <div id="soundcloud-<?=$id?>"><?=str_replace('src="', ' onload="lzld(this)" data-src="', $album['soundcloud_iframe'])?></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="wsb1"></div>

    <?php if (!empty($events)): ?>
    <!-- Events Section -->
    <section id="events" class="events-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="inverse"><?=$section['events']?></h1>
                </div>
                <div class="col-md-8 col-md-offset-2">
                    <table>
                        <?php foreach ($events as $event) { ?>
                            <tr>
                                <td class="text-center">
                                    <div class="item">
                                        <div class="month"><?=$event['month']?></div>
                                        <div class="day"><?=$event['day']?></div>
                                    </div>
                                </td>
                                <td class="text-left">
                                    <div class="item">
                                        <div class="title"><?=$event['title']?></div>
                                        <div class="time"><?=$event['time']?></div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Photo Section -->
    <section id="photo" class="photo-section">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="inverse"><?=$section['photo']?></h1>
                </div>
                <div class="col-sm-12" >
                    <div class="slick-photo">
                        <?php foreach ($photos as $key => $photo) { ?>
                            <div class="photo" onclick="openPhotoGallery('<?=$key?>')">
                                <img src="<?=$photo['img_sm']?>" alt="<?=$photo['title']?>" class="hvr-grow">
                            </div>
                        <?php } ?>
                    </div>
                    <div class="slick-arrows"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal PHOTOS -->
    <div class="modal fade" id="photosCarousel" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="btns">
                <div class="menu-btn hidden-lg" onclick="showMenu()">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                </div>
                <span class="custom-close" onclick="closeModal()"></span>
            </div>
            <div class="content">
                <div class="one-slick photo-modal-slick">
                    <?php foreach ($photos as $key => $photo) { ?>
                        <div class="slide">
                            <div class="slide-content" id="photo-<?=$key?>">
                                <h4 class="inverse"><?=$photo['title']?></h4>
                                <p><?=($key+1)?> / <?=sizeof($photos)?></p>
                                <img src="" data-lazy="<?=$photo['img']?>" alt="<?=$photo['title']?>">
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <div class="slick-arrows"></div>
            </div>
        </div>
        <div class="photo-slick-btns"></div>
    </div>

    <!-- Video Section -->
    <section id="video" class="video-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="inverse"><?=$section['video']?></h1>
                </div>
                <div class="col-sm-12">
                    <div class="slick-video">
                        <?php foreach ($videos as $video) { ?>
                            <div class="video hvr-grow">
                                <?=str_replace('src="', ' onload="lzld(this)" data-src="', $video['youtube_embed'])?>
                                <p>
                                    <span class="title"><?=$video['title']?></span><br/>
                                    <?=$video['subtitle']?>
                                </p>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="slick-arrows"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rider Section -->
    <section id="rider" class="rider-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><?=$section['rider']?></h1>
                </div>
                <div class="col-sm-4 col-md-3 col-lg-3 col-lg-offset-1">
                    <div class="center-block">
                        <div class="sqr">
                            <a href="<?=$rider_file?>" target="_blank">
                                <img alt="Iлюжан" src="/img/logo-sm.png">
                                <?=$section['rider']?>
                            </a>
                        </div>
                        <a href="<?=$rider_file?>" class="download hvr-icon-down" download="<?=$section['rider']?> Iлюжан">
                            <i class="icon-download "></i> <?=$trans['download']?>
                        </a>
                    </div>
                </div>
                <div class="col-sm-8 col-md-9 col-lg-7">
                    <p class="text-uppercase"><?=$trans['warning']?>:</p>
                    <p><?=$rider?></p>
                </div>
            </div>
        </div>
    </section>

<?php
/*
    <!-- Support Section -->
    <section id="support" class="support-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><?=$section['support']?></h1>
                    <iframe class="hidden-xs" src="https://money.yandex.ru/quickpay/shop-widget?writer=seller&targets=%D0%A0%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0%20I%D0%BB%D1%8E%D0%B6%D0%B0%D0%BD&targets-hint=&default-sum=<?=$yandex_money['sum']?>&button-text=11&payment-type-choice=on&hint=&successURL=&quickpay=shop&account=<?=$yandex_money['account']?>" width="450" height="204" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
                    <iframe class="visible-xs-block center-block" src="https://money.yandex.ru/quickpay/button-widget?targets=%D0%A0%D0%B0%D0%B7%D0%B2%D0%B8%D1%82%D0%B8%D0%B5%20%D0%BF%D1%80%D0%BE%D0%B5%D0%BA%D1%82%D0%B0%20I%D0%BB%D1%8E%D0%B6%D0%B0%D0%BD&default-sum=<?=$yandex_money['sum']?>&button-text=11&any-card-payment-type=on&button-size=m&button-color=orange&successURL=&quickpay=small&account=<?=$yandex_money['account']?>&" width="184" height="36" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
                </div>
            </div>
        </div>
    </section>
*/
?>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="#page-top" class="page-scroll">
                        <img alt="Iлюжан" src="/img/logo-footer.png">
                    </a>
                    <?php foreach ($nav as $id => $title) {  if( $id != 'support') { ?>
                        <div class="item"><a href="#<?=$id?>" class="page-scroll"><?=$title?></a></div>
                    <?php }} ?>
                    <div class="item"></div>
                    <div class="sb">
                        <?php foreach ($social_links as $id => $href) { ?>
                            <div class="item social-btn"><a href="<?=$href?>" target="_blank"><i class="icon-<?=$id?>"></i></a></div>
                        <?php } ?>
                        <div class="dropup item">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=mb_strtoupper($current_lang)?> <span class="caret"></span></a>
                            <ul class="dropdown-menu  dropdown-menu-right">
                                <?php foreach ($langs as $id => $title) { if($current_lang != $id) { ?>
                                    <li><a href="<?=$lang_url[$id]?>" class="page-scroll"><?=$title?></a></li>
                                <?php }} ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="/js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="/js/bootstrap.min.js"></script>
    <!-- Scrolling Nav JavaScript -->
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/waypoint.js"></script>
    <script src="/js/slick.min.js"></script>
    <script src="/js/custom.js"></script>

</body>
</html>
