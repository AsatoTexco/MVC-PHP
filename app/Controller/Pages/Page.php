<?php

namespace App\Controller\Pages;
use \App\Ultis\View;
class Page{

    // metodo responsavel por retornar o header
    private static function getHeader(){
        return View::render('pages/header');

    }

    // metodo responsavel por renderizar o footer
    private static function getFooter(){
        return View::render('pages/footer');

    }

    // metodo responsavel por retornar a page generica
    public static function getPage($title,$content){

        return View::render('pages/page',[
            'title'=>$title,
            'content'=>$content ,
            'header'=>Page::getHeader(),
            'footer'=>Page::getFooter()
        ]);

    }

}