<?php 

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;


class About extends Page{
    
    /**
     * Método responsável por retornar o conteúdo (view) da nossa de SOBRE
     * @return string
     */
    public static function getAbout(){
        $obOrganization = new Organization;
        
        //view da home
        $content =  View::render('pages/about',[
            'name' => $obOrganization->name,                 
            'site' => $obOrganization->site,
            'description' => $obOrganization->description       
        ]);

        //retornar view da página
        return parent::getPage('SOBRE > WDEV', $content);
    }
}

?>