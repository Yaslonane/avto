<?php

/**
 * Description of AdminPanelController
 *
 * @author andrey
 */
class AdminpanelController extends AdminBase{
    //put your code here
    
    public function actionIndex(){
        
        self::checkAdmin();
        
        require_once (ROOT . ADM_TMPL . 'index.php');
        
        return true;
        
    }
    
    public function actionServices(){
        
        self::checkAdmin();
        
        $servicesList = Services::getAllServicesAdmin();
        
        var_dump($servicesList);
        
        echo "Admin Services";
        return true;
        
    }
    
    public function actionUpdateservices($id){
        
        self::checkAdmin();
        
        $service = Services::getServiceById($id);
        
        var_dump($service);
        
        echo "Admin edit Services " . $id ;
        return true;
        
    }
    
    public function actionPostedit($id){
        
        self::checkAdmin();
        
        $post = Blogs::getOnePostByIdAdmin($id);
        
        var_dump($post);
        
        echo "Admin edit Post " . $id ;
        return true;
        
    }
    
    public function actionPosts(){
        
        self::checkAdmin();
        
        $posts = Blogs::getAllPostsAdmin();
        
        var_dump($posts);
        
        echo "Admin all posts ";
        return true;
        
    }
    
    public function actionCategoryedit($id){
        
        self::checkAdmin();
        
        echo "Admin edit category " . $id ;
        return true;
        
    }
    
    public function actionCategory(){
        
        self::checkAdmin();
        
        echo "Admin all categoryes ";
        return true;
        
    }
    
    public function actionGalleryedit($id){
        
        self::checkAdmin();
        
        echo "Admin edit Gallery " . $id ;
        return true;
        
    }
    
    public function actionGallery(){
        
        self::checkAdmin();
        
        echo "Admin all Galleryes ";
        return true;
        
    }
    
    public function actionUsersedit($id){
        
        self::checkAdmin();
        
        $user = User::getUserById($id);
        
        var_dump($user);
        
        echo "Admin edit Users " . $id ;
        return true;
        
    }
    
    public function actionUsers(){
        
        self::checkAdmin();
        
        $users = User::getAllUsers();
        
        var_dump($users);
        
        echo "Admin all Users ";
        return true;
        
    }
}
