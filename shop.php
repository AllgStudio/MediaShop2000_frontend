<?php 
    session_start();
    include "includes/utils.php";
    $i18n = include('i18n/lang.php');
    $lang = get_language();


    include "includes/db.php";

    echo create_page('template/index.html',[
        'lang' => $lang,
        'header_title' =>$i18n['title'][$lang],
        'header_description' => $i18n['description'][$lang],
        'header_keywords' => "Shop, media, games",
        'header_author' =>"Author",

        'skip_to_main' => $i18n['skip_to_main'][$lang],

        'page_header' => create_page_header(),
        'page_main' => render(file_get_contents('template/shop.html'), [
                            "hello" => "Hello World, Shop!",
                        ]),
        'page_footer' => create_page_footer(),
    ]);
?>