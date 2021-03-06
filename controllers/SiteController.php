<?php

/* 
 *
 */

class SiteController{
    
    public static $title = "AVTOZONA";
        /*
         * 
         * вывод главной страницы
         *
         * 
         */
    public function actionIndex(){ 
        
        /*$categories = array(); //инициализируем переменную для вывода списка категорий
        $categories = Category::getCategoriesList(); // вызываем метод получения массива категорий из модели категории
        /* выводим дерево категорий
        $x = new Category(); // вызываем класс
        $a = $x->treeCategory(); // выбираем из базы список категорий и подкатегорий
        $categories2 = category::create_tree($a, 0); // вызываем функцию и строим дерево
         * 
         */
        
        /*$latestProduct = array();
        $latestProduct = Product::getLatestProducts();*/
        //var_dump(Services::getLimitServices(6));
        
        $inf = info::getInfo();
        
        $serv = Services::getLimitServices(6);
        
        $blg = Blogs::getLatestPosts();
        
        $brands = info::getBrands('user');
        
        require_once(ROOT . TMPL .'index.php');
        
        return true;
    }
    
    public function actionContact(){
        
        $userEmail = '';
        $userText = '';
        $result = false;
       
        if(isset($_POST['submit'])){
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
            
            $errors = false;
            
            if(!user::checkEmail($userEmail)){
                $errors[] = 'Not valid E-mail';
            }
            
            if($errors == false){
                $adminEmail = 'yaslonane@yandex.ru';
                $message = "Текст: {$userText}. От {$userEmail}";
                $subject = 'subject mail TEST';
                $result = mail($adminEmail, $subject, $message, "From: System message from zaa46.xyz <info@zaa46.xyz>"); /* {$userEmail} */
                $result = true;
            }
        }
        
        require (ROOT . TMPL . 'contact.php');
        
        return true;
    }
    
    public function actionAbout(){
        
        $inf = info::getInfo();
        
        //echo "<pre>";
        //var_dump($inf);
        //echo "</pre>";
        require (ROOT . TMPL . 'about.php');
        return true;
    }

        public function actionUploads(){

            if($_FILES['upload']){
            if (($_FILES['upload'] == "none") OR (empty($_FILES['upload']['name'])) ){
                $message = "Вы не выбрали файл";
            }
            else if ($_FILES['upload']["size"] == 0 OR $_FILES['upload']["size"] > 2050000)
            {
            $message = "Размер файла не соответствует нормам";
            }
            else if (($_FILES['upload']["type"] != "image/jpeg") AND ($_FILES['upload']["type"] != "image/jpeg") AND ($_FILES['upload']["type"] != "image/png"))
            {
            $message = "Допускается загрузка только картинок JPG и PNG.";
            }
            else if (!is_uploaded_file($_FILES['upload']["tmp_name"]))
            {
            $message = "Что-то пошло не так. Попытайтесь загрузить файл ещё раз.";
            }
            else{
            $name =rand(1, 1000).'-'.md5($_FILES['upload']['name']).'.'.self::getex($_FILES['upload']['name']);
            move_uploaded_file($_FILES['upload']['tmp_name'], "images/".$name);
            $full_path = DOMAIN . '/images/content/'.$name;
            $message = "Файл ".$_FILES['upload']['name']." загружен";
            $size=@getimagesize('images/content/'.$name);
            if($size[0]<50 OR $size[1]<50){
            unlink('images/content/'.$name);
            $message = "Файл не является допустимым изображением";
            $full_path="";
            }
            }
            $callback = $_REQUEST['CKEditorFuncNum'];
            echo '<script type="text/javascript">window.parent.CKEDITOR.tools.callFunction("'.$callback.'", "'.$full_path.'", "'.$message.'" );</script>';
            }

    }
    
    private static function getex($filename) {
        
        return end(explode(".", $filename));
            
    }
        /* 
         * конец вывода главной страницы 
         */
}
