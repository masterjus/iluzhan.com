<?php

require_once 'settings.php';

$dir_name = '/static_site_v';
$i = 0;
do {
    $i++;
    $target_dir = $_SERVER['DOCUMENT_ROOT'].$dir_name.$i;
} while (file_exists($target_dir));
mkdir($target_dir);

echo $target_dir;

foreach (['css', 'js', 'fonts', 'img', 'files'] as $folder) {
    mkdir($target_dir.'/'.$folder);
    cpy($_SERVER['DOCUMENT_ROOT'].'/'.$folder , $target_dir.'/'.$folder);
}

foreach ($lang_url as $folder => $url) {
    if($folder != 'ru') {
        mkdir($target_dir.'/'.$folder);
    }
    $text = file_get_contents('http://'.$_SERVER['SERVER_NAME'] . ':8080' .$url);
    $fp = fopen($target_dir.$url.'index.html', "w");
    fwrite($fp, minify_html($text));
    fclose($fp);
}

echo "<h1>HTML сайт создан в папке: ".$target_dir."</h1>";

function cpy($source, $dest){
    if(is_dir($source)) {
        $dir_handle=opendir($source);

        while($file=readdir($dir_handle)){

            if($file!="." && $file!=".."){
                if(is_dir($source."/".$file)){
                    if(!is_dir($dest."/".$file)){
                        mkdir($dest."/".$file);
                    }
                    cpy($source."/".$file, $dest."/".$file);
                } else {
                    copy($source."/".$file, $dest."/".$file);
                }
            }
        }
        closedir($dir_handle);
    } else {
        copy($source, $dest);
        echo 'copy';
    }

}

function minify_html($html){
    //$html = str_replace('.php', '.html', $html);
    return preg_replace('/\s+/', ' ', $html);
}