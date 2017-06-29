<?php

/**
 * Description of AdminPanelController
 *
 * @author andrey
 */
class AdminpanelController extends AdminBase{
    //put your code here
    
    public function actionIndex(){
        
        if(!$_SESSION['user']){
            header("location: /login/");
        }
        
        //var_dump($_SESSION);
        
        
        
        require_once (ROOT . ADM_TMPL . 'index.php');
        
        return true;
        
    }
    
    public function actionServices(){
        
        echo "Admin Services";
        return true;
        
    }
    
    public function actionUpdateservices($id){
        
        echo "Admin edit Services " . $id ;
        return true;
        
    }
    
    public function actionPostedit($id){
        
        echo "Admin edit Post " . $id ;
        return true;
        
    }
    
    public function actionPosts(){
        
        echo "Admin all posts ";
        return true;
        
    }
    
    public function actionCategoryedit($id){
        
        echo "Admin edit category " . $id ;
        return true;
        
    }
    
    public function actionCategory(){
        
        echo "Admin all categoryes ";
        return true;
        
    }
    
    public function actionGalleryedit($id){
        
        echo "Admin edit Gallery " . $id ;
        return true;
        
    }
    
    public function actionGallery(){
        
        echo "Admin all Galleryes ";
        return true;
        
    }
    
    public function actionUsersedit($id){
        
        echo "Admin edit Users " . $id ;
        return true;
        
    }
    
    public function actionUsers(){
        
        echo "Admin all Users ";
        return true;
        
    }
}
