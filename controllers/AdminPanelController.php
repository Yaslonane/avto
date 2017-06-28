<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AdminPanelController
 *
 * @author andrey
 */
class AdminPanelController {
    //put your code here
    
    public function actionIndex() {
        
        if(!$_SESSION['user']){
            header("location: /login/");
        }
        
        var_dump($_SESSION);
        
        
        
        require_once (ROOT . ADM_TMPL . 'index.php');
        
        return true;
        
    }
}
