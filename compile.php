<?php

require_once 'settings.php';

$dir_name = '/docs';
$folder_in_server_root = str_replace('/compile.php', '', $_SERVER['PHP_SELF']);
$root_directory = $_SERVER['DOCUMENT_ROOT'].$folder_in_server_root;
$i = 0;
do {
    $i++;
    $target_dir = $root_directory.$dir_name.$i;
} while (file_exists($target_dir));
mkdir($target_dir);

foreach (['css', 'js', 'fonts', 'img', 'files'] as $folder) {
    mkdir($target_dir.'/'.$folder);
    cpy($root_directory.'/'.$folder , $target_dir.'/'.$folder);
}

foreach ($lang_url as $folder => $url) {
    if($folder != 'ru') {
        mkdir($target_dir.'/'.$folder);
    }
    $text = file_get_contents_curl('http://'.$_SERVER['SERVER_NAME'] .$folder_in_server_root.$url);
    $fp = fopen($target_dir.$url.'index.html', "w");
    fwrite($fp, minify_html($text));
    fclose($fp);
}

file_put_contents("$target_dir/CNAME", 'www.iluzhan.com');

system("rm -rf $root_directory/docs");
rename($target_dir, "$root_directory/docs");
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
        echo "copy $source to $dest";
    }

}

function minify_html($html){
    //$html = str_replace('.php', '.html', $html);
    return preg_replace('/\s+/', ' ', $html);
}

function file_get_contents_curl($url) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}
