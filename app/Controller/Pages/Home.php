<?php

namespace App\Controller\Pages;
use \App\Ultis\View;

use \App\Model\Entity\Organization;

class Home extends Page{

    // metodo responsavel por retornar a home 
    public static function getHome(){

        $obOrganization = new Organization;

 

        $content =  View::render('pages/home',[
            'name'=>$obOrganization->name,
            'description'=>$obOrganization->description,
            'site'=>$obOrganization->site 
        ]);
        return parent::getPage('MVC',$content);
    }

}